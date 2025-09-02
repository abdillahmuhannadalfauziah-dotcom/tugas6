<h3>Hitung Luas Lingkaran</h3>
<form method="POST">
    <input type="text" name="jari" placeholder="Masukkan jari-jari"><br>
    <button>Hitung</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['jari'])) {
    $jari = $_POST['jari'];
    
    if (is_numeric($jari)) {
        $luas = 3.14 * $jari * $jari;
        echo "Luas lingkaran dengan jari-jari $jari adalah $luas";
    } else {
        echo "Input harus berupa angka!";
    }
}
?>
