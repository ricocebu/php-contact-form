<?php require_once 'config/database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <section class="form-container">

    <h1>Contact Form</h1>

    <form action="" method="POST" class="form">
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
      <label for="email">Email: </label>
      <input type="email" name="email" id="email">
      <label for="message">Message: </label>
      <textarea name="message" id="message" placeholder="Type your message here..." rows="5"></textarea>
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php
      
      if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {

          $stmt = $conn->prepare("INSERT INTO contacts(name, email, message) VALUES(?, ?, ?)");
          $stmt->bind_param("sss", $name, $email, $message);
          $stmt->execute();

          echo "Thank you! Your submission has been sent.";

          header("Refresh: 2.5");

          $stmt->close();
          $conn->close();
        } else {
          echo "Please make sure to input name, email, and message.";
        }


      }
    ?>

  </section>

</body>
</html>