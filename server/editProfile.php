<?php

include 'connection.php';

$email = $_SESSION['email'];
$title = $_SESSION['title'];

if ($title == 1) {

  $sql = "SELECT * FROM member WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $fname = $row['fname'];
      $lname = $row['lname'];
      $email = $row['email'];
      $phone = $row['mobile'];
    }
  } else {
?>

    <script>
      alert("Something went wrong");
      window.location.href = "../profile.php";
    </script>

  <?php
  }
  $conn->close();
} else if ($title == 2) {

  $sql = "SELECT * FROM captain WHERE email = '$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
      $fname = $row['fname'];
      $lname = $row['lname'];
      $email = $row['email'];
      $phone = $row['mobile'];
    }
  } else {
  ?>

    <script>
      alert("Something went wrong");
      window.location.href = "../profile.php";
    </script>

<?php
  }
  $conn->close();
}

?>