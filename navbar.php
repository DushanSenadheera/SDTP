<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/navbar.css">
</head>
<body>
    <?php
    
    session_start();
    if (isset($_SESSION['email'])) {
        ?>
        <nav>
            <a href="index.php"><h2 class="logo">LOGO</h2></a>
            <ul>
                <li><a href="index.php#header">Home</a></li>
                <li><a href="index.php#explore">Explore</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#contact">contact</a></li>
            </ul>
            <a href="profile.php"><p><?php echo$_SESSION['email']; ?></p></a>
        </nav>
        <?php
    }
    else {
        ?>
        <nav>
            <a href="index.php"><h2 class="logo">LOGO</h2></a>
            <ul>
                <li><a href="index.php#header">Home</a></li>
                <li><a href="index.php#explore">Explore</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#contact">contact</a></li>
            </ul>
            <a href="signIn.php"><button class="primary-btn">Sign In</button></a>
        </nav>
        <?php
    }

    ?>
</body>
</html>