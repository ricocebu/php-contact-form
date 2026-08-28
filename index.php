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

    <form action="" method="post" class="form">
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
      <label for="email">Email: </label>
      <input type="email" name="email" id="email">
      <label for="message">Message: </label>
      <textarea name="message" id="message" placeholder="Type your message here..." rows="5"></textarea>
      <input type="submit" value="Submit">
    </form>

    <?php

      if(isset($_POST["name"]) && isset($_POST["email"])) {
        echo "Name: " . $_POST["name"] . "<br>"
        . "Email: " . $_POST["email"] . "<br>"
        . "Message: " . $_POST["message"];
      }

    ?>

  </section>

</body>
</html>