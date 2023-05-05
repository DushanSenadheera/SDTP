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
                <li><i class="fas fa-sign-out-alt"></i> <a href="index.php">Logout</a></li>
            </ul>
        </div>
        <div class="navContent">
            <div class="overview">
                <h3>Create Staff</h3>
                <form action="" method="post">
                    <section>
                        <input type="text" name="fname" placeholder="First Name">
                        <input type="text" name="lname" placeholder="Last Name">
                    </section>
                    <input type="email" name="email" placeholder="Email">
                    <br>
                    <input type="password" name="password" placeholder="Password">
                    <br>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password">
                    <br>
                    <input class="primary-btn" type="submit" name="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
</body>
</html>