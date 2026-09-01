<?php
  
  require_once 'config/database.php';

  $sql_id = $_POST["id"]; 

  $stmt = $conn->prepare("DELETE FROM contacts WHERE id=?");
  $stmt->bind_param("i", $sql_id);

  if ($stmt->execute()) {
    echo "<script> alert('Data deleted successfully'); </script>";
  } else {
    echo "Error deleting record: " . $stmt->error;
  }

  header("Refresh: .5; url=admin.php");
  exit;

?>