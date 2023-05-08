<?php

include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];
$title = $_POST['title'];

if ($title == 1) {
    $sql = "SELECT password FROM member WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['password'] == $password) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['title'] = $title;
            header("Location: ../index.php");
        } else {
            ?>
            <script>
                alert("Invalid email or password");
                window.location.href = "../signIn.php";
            </script>
            <?php
        }
    }
    else {
        ?>
        <script>
            alert("Invalid email or password");
            window.location.href = "../signIn.php";
        </script>
        <?php
    }
}
else if ($title == 2) {
    $sql = "SELECT password FROM captain WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['password'] == $password) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['title'] = $title;
            header("Location: ../index.php");
        } else {
            ?>
            <script>
                alert("Invalid email or password");
                window.location.href = "../signIn.php";
            </script>
            <?php
        }
    }
    else {
        ?>
        <script>
            alert("Invalid email or password");
            window.location.href = "../signIn.php";
        </script>
        <?php
    }
}
else {
    ?>
    <script>
        alert("Invalid email or password");
        window.location.href = "../signIn.php";
    </script>
    <?php
}

$conn->close();

?>