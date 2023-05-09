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
                <h3>Create GTF Captain</h3>
                <form action="./server/registerCpt.php" method="post">
                    <section>
                        <input type="text" name="fname" id="fname" placeholder="First Name">
                        <input type="text" name="lname" id="lname" placeholder="Last Name">
                    </section>
                    <small id="userName"></small>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <small id="userMail"></small>
                    <br>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <small id="psw"></small>
                    <br>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                    <small id="confirmPsw"></small>
                    <br>
                    <input type="tel" name="mobile" id="mobile" placeholder="Mobile">
                    <small id="userMobile"></small>
                    <br>
                    <input class="primary-btn" type="submit" name="submit" onclick="return regCptVal()" value="Register">
                </form>
            </div>
        </div>
    </div>
    <script src="./scripts/validation.js"></script>
</body>
</html>