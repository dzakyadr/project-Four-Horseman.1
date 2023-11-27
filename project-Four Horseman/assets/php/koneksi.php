<?php
$namaServer = "localhost"; // isikan sesuai nama server Anda, default localhost atau 127.0.0.1
$namaPengguna = "root"; //isikan sesuai nama pengguna Basisdata Anda, default root
$password = ""; //isikan sesuai password Anda, XAMPP default kosong, MAMP default root
//Membuat koneksi
$koneksi = new mysqli($namaServer, $namaPengguna, $password);
//memeriksa apakah koneksi sukses dilakukan
if ($koneksi->connect_error) {
	die("Koneksi gagal : " . $koneksi->connect_error. "<br>");
}
echo "Koneksi sukses. <br >";
?>