<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script> alert ('Username atau Email Sudah di Gunakan'); </script>";
    } else {
        if ($password == $confirmpassword) {
            // Explicitly specify columns excluding the auto-incremented primary key
            $query = "INSERT INTO tb_user (username, email, password) VALUES ('$username', '$email', '$password')";
            
            // Use prepared statements to prevent SQL injection
            $stmt = mysqli_prepare($conn, $query);

            // Check if the statement was prepared successfully
            if ($stmt) {
                // Execute the statement
                mysqli_stmt_execute($stmt);
                
                echo "<script> alert ('Registrasi Sukses'); </script>";
            } else {
                echo "<script> alert ('Error in prepared statement'); </script>";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "<script> alert ('Password Tidak Cocok'); </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required value=""><br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required value=""><br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required value=""><br>
        <label for="confirmpassword">Confirmasi Password :</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value=""><br>
        <button type="submit" name="submit">Registrasi</button>
    </form>
    <br>
    <a href="login.php">Login</a>
</body>
</html>
