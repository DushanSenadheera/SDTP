<?php
        session_start();

        if (!isset($_SESSION['adEmail'])) {
            header("Location: ./admin.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/dashboard.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <nav>
        <section>
            <h2>Dashboard</h2>
        </section>
        <section>
            <h5>Admin</h5>
            <i class="fas fa-user-shield" id="admin-ico"></i>
        </section>
    </nav>
    <div class="adminContainer">
        <div class="navLinks">
            <ul>
            <li><i class="fas fa-th-large"></i> <a href="dashboard.php">Dashboard</a></li>
                <li><i class="fas fa-temperature-low"></i> <a href="createCpt.php">GTF Captains</a></li>
                <li><i class="fas fa-tint"></i> <a href="createStaff.php">Staff</a></li>
                <li><i class="fas fa-percentage"></i> <a href="article.php">Articles</a></li>
                <li><i class="fas fa-sign-out-alt"></i> <a href="./server/session.php">Logout</a></li>
            </ul>
        </div>
        <div class="navContent">
            <div class="overview"></div>
        </div>
    </div>
</body>
</html>