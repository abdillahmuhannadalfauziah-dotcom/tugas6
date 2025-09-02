<h3>Hitung Luas Persegi</h3>
<form method="GET">
    <input type="text" name="panjang" placeholder="panjang"><br>
    <input type="text" name="lebar" placeholder="lebar"><br>
    <input type="text" name="tinggi" placeholder="tinggi"><br>
    <button>Hitung</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $angka1 = $_GET['panjang'];
    $angka2 = $_GET['lebar'];
    $angka3 = $_GET['tinggi'];
    //perkalian
    $hasil = $angka1 * $angka2 * $angka3;
    echo "luas persegi adalah $hasil";

}
