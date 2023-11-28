<?php
session_start();
include '/project-Four Horseman/assets/php/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM User WHERE username = '$username'";
  $result = $koneksi->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
      $_SESSION['user'] = $row['nama'];

      echo "Selamat Datang " . $_SESSION['user'] . "!<br>";
      echo "<a href='logout.php'>Logout</a>";
      exit;
    }
  }
  else{
      echo "Username atau password salah!";
  }
}

header('Location: login.php');

?>
