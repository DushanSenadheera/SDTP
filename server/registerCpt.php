<?php

include 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];

$sql = "INSERT INTO captain (fname, lname, email, password, mobile)
VALUES ('$fname', '$lname', '$email', '$password', '$mobile');";

if ($conn->multi_query($sql) === TRUE) {
  header("Location: ../createCpt.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>