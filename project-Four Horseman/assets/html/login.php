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


<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/project-Four Horseman/assets/css/login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="">
                <h1>Login</h1>
                <hr>
                <p>Siap Menemani Perjalanan Kamu</p>
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" placeholder="Password">
                <button>Login</button>
                <p>
                    <a href="#">Forgot Password?</a>
                    <a href="/project-Four Horseman/index.html">Home</a>
                    <br>
                    Belum registrasi?<a href="#">klik disini</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="/project-Four Horseman/assets/images/loginimg.jpg" alt="loginimg">
        </div>
    </div>
</body>
</html>