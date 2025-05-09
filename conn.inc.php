<?php 
$host ='localhost';
$user = 'root';
$pass ='';
$db='d2211500240';
$conn=mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()){
    echo "Koneksi eror ". mysqli_connect_error();
    exit();
}

echo "koneksi berhasil";

?>