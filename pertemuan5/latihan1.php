<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen array pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// keynya adalah index, yang dimulai dari 0


// $hari1 = "Senin";
// $hari2 = "Selasa";  cara ini merepotkan misal ada hari 10000

// membuat array
// cara baru
$bulan =["Januari", "Februari", "Maret"];
// $arr1 = [123, "Januari", false];

// //menampilkan array
// var_dump($bulan);
// echo "<br>";
// print_r($bulan);

// // menampilkan 1 elemen pada array
// echo "<br>";
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($bulan);
$bulan[] = "April";
echo "<br>";
var_dump($bulan);




?>