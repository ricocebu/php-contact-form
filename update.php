<?php
  
  require_once 'config/database.php';

  $sql_id = $_POST["id"]; 
  $stmt = $conn->prepare("SELECT name, email, message FROM contacts WHERE id=?");
  $stmt->bind_param("i", $sql_id);


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
<section class="admin-container">

    <h1>Update</h1>

    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>

      <?php 
        if ($stmt->execute()) { ?>
      <tr>
        <td><?php echo htmlspecialchars($_POST["name"]); ?></td>
        <td><?php echo htmlspecialchars($_POST["email"]); ?></td>
        <td><?php echo htmlspecialchars($_POST["message"]); ?></td>
      </tr>
      
      <?php
        } ?>
    </table>

  </section>
</body>
</html>