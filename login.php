<?php
  session_start();
  require_once 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <section class="login-container">

    <h1>Administrator Login</h1>

    <form action="" method="POST" class="form ">
      <label for="username">Username: </label>
      <input type="text" name="username">
      <label for="password">Password: </label>
      <input type="password" name="password">
      <input type="submit" name="submit" value="Login">
    </form>

    <?php

      if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row && password_verify($password, $row["password"])) {

          $_SESSION['logged_in'] = true;
          header("Location: admin.php");
          exit;

        } else {
          echo "Invalid username or password";
        }

      } 
    ?>

  </section>
</body>
</html>