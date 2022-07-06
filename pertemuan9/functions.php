<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "020627", "phpdasar");

function query($query) {
    global $conn; //artinya bukan pake $conn yang baru tp mengacu ke $conn yang atas
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
} 
?>