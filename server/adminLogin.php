<?php

include 'connection.php';

$adEmail = $_POST['adminUserName'];
$adPassword = $_POST['adminPassword'];

    $sql = "SELECT password FROM admin WHERE email = '$adEmail' AND password = '$adPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['password'] == $adPassword) {
            session_start();
            $_SESSION['adEmail'] = $adEmail;
            header("Location: ../dashboard.php");
        } else {
            ?>
            <script>
                alert("Invalid Admin credentials");
                window.location.href = "../admin.php";
            </script>
            <?php
        }
    }else {
        ?>
        <script>
            alert("Invalid Admin credentials");
            window.location.href = "../admin.php";
        </script>
        <?php
    }
    
?>
