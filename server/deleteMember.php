<?php

session_start();
$email = $_SESSION['email'];
include 'connection.php';

$sql = "DELETE FROM member WHERE email = '$email'";

if ($conn->query($sql) === TRUE) {
  session_unset();
  session_destroy();
  header("Location: ../index.php");
} else {
  echo "Error deleting record: " . $conn->error;
  header("Location: ../profile.php");
}

$conn->close();
