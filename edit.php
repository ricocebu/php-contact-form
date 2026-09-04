<?php
  require_once 'config/database.php';

  $id = $_GET["id"];

  $stmt = $conn->prepare("SELECT * FROM contacts WHERE id=?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  
  $result = $stmt->get_result();
  $contact = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Form</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <section class="form-container">

    <h1>Update Form</h1>

    <form action="update.php" method="POST" class="form">
      <input type="hidden" name="id" value="<?php echo $contact["id"];?>">
      <input type="text" name="name" value="<?php echo $contact["name"];?>">
      <input type="email" name="email" value="<?php echo $contact["email"];?>">
      <textarea name="message"><?php echo $contact["message"];?></textarea>
      <input type="submit" value="Update">
    </form>

  </section>
</body>
</html>