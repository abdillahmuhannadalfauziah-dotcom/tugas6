<h3>Hitung Luas Lingkaran</h3>
<form method="get">
    <input type="text" name="jari" placeholder="Masukkan jari-jari"><br>
    <button>Hitung</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['jari'])) {
    $jari = $_GET['jari'];
    
    if (is_numeric($jari)) {
        $luas = 3.14 * $jari * $jari;
        echo "Luas lingkaran dengan jari-jari $jari adalah $luas";
    } else {
        echo "Input harus berupa angka!";
    }
}
?>
