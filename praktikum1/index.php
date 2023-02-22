<?php 
//ini adalah komentar PHP
/*ini komentar PHP yang panjang*/
#ini sebuah komentar PHP

// echo "Hello World <br>";
// echo 'STTNF <br>';
// print_r("Bunga Mustika Ali <br>");
// var_dump('STT Nurul Fikri');

/*membuat variabel user sebuah wadah untuk menampung nilai*/
// $nama = "Bunga Mustika Ali";
// $umur =18;
// $berat = 60.5;
// $mahasiswa = true;

// echo "Hallo, Nama Saya $nama ";
// echo "umur saya $umur th ";
// echo "dan memiliki berat badan $berat kg";
/*membuat variabel sistem adl var yang sudah ada dan dibuat oleh komputer*/
// echo "Dokument root " . $_SERVER['DOCUMENT_ROOT']; //konket ( . ) untuk membuat penghubung antar variabel
// echo "<br>";
// echo "Nama File " . $_SERVER['PHP_SELF'];

/*membuat variabel konstanta var yang isinya tidak bisa di edit*/
// define('PHI', 3.14);
// $jari = 8;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas Lingkaran Dengan Jari-Jari $jari = $luas cm";
// echo "<br> Keliling lingkaran Dengan Jari-Jari $jari = $keliling";

//membuat array bisa membuat banyak variabel array numerik
$programs = ["PHP", "Javascript", "HTML", "CSS"];
//echo $programs [3];
echo "jumlah data sebanyak " .  count($programs); //menghitung banyak jumlah data untuk javascript dengan lenght


?>

