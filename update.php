<?php

  require_once 'config/database.php';

  $sql_id = $_POST["id"];

  $stmt = $conn->prepare("UPDATE contacts SET name = ?, email = ?, message = ? WHERE id = ?");
  $stmt->bind_param("i", $sql_id);

  if ($stmt->execute()) {
    require_once 'index.php';
  }


?>