<?php

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
      require_once 'config/database.php';
      $username = $_POST["username"];
      $password = $_POST["password"];

      $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username=?");
      $stmt->bind_param("s", $username);
      $stmt->execute();
      $result = $stmt->get_result();
      $row = $result->fetch_assoc();

      if (isset($_POST["submit"])) {

        $hash = $row["password"];
        $verify_password = password_verify($password, $hash);

        if ($username == $row["username"] && $verify_password) {
          session_start();
          $_SESSION['logged in'] = true;

          header("Location: admin.php");
        } else {
          echo "Invalid username or password";
        }

      } 
    ?>

  </section>
</body>
</html>