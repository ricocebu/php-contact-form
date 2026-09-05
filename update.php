<?php
  require_once 'config/database.php';
  
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $stmt = $conn->prepare("UPDATE contacts SET name=?, email=?, message=? WHERE id=?");
  $stmt->bind_param("sssi", $name, $email, $message, $id);
  $stmt->execute();
  
  echo "<script> alert('Contact updated.'); </script>";

  header("Refresh: .1, url = admin.php");
  exit;
?>