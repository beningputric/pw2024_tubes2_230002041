<?php 
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "pw2024_tubes_230002041";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Gagal terkoneksi");
}