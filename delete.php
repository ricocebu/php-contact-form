<?php
  
  require_once 'config/database.php';
  require_once 'admin.php';

  $sql_id = $_POST["id"];

  $sql = "DELETE FROM contacts WHERE id=$sql_id";
  $result = $conn->query($sql);

  if (mysqli_query($conn, $sql)) {
    $message = "Data deleted successfully";
    echo "<script> alert('$message'); </script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  // header("Location: http://localhost/php-contact-form/admin.php");
  // exit;

  header("Refresh: .5; url=admin.php");
  // exit;

?>