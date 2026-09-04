<?php
  
  require_once 'config/database.php';

  $sql = "SELECT id, name, email, message, created_at FROM contacts";
  $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <section class="admin-container">

    <h1>Contacts</h1>

    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
        <th>Action</th>
      </tr>

      <?php 
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) { ?>
      
      <tr>
        <td><?php echo htmlspecialchars($row["id"]); ?></td>
        <td><?php echo htmlspecialchars($row["name"]); ?></td>
        <td><?php echo htmlspecialchars($row["email"]); ?></td>
        <td><?php echo htmlspecialchars($row["message"]); ?></td>
        <td><?php echo htmlspecialchars($row["created_at"]); ?></td>
        <td>
          <form action="edit.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="hidden" name="name" value="<?php echo $row["name"]; ?>">
            <input type="hidden" name="email" value="<?php echo $row["email"]; ?>">
            <input type="hidden" name="message" value="<?php echo $row["message"]; ?>">
            <input type="submit" value="Edit">
          </form>
          <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="submit" value="Delete">
          </form>
        </td>
      </tr>
      
        <?php        }
        } ?>
    </table>

  </section>



</body>
</html>