<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/register.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<?php include 'navbar.php' ?> 
<div class="bg">
            <div class="sign-in">
                <div class="sign-in-form">
                    <h1>Register</h1>
                    <form action="./server/register.php" method="POST">
                        <div class="name">
                            <input type="text" name="fname" id="fname" placeholder="First Name" required>
                            <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                        </div>
                        <small id="userName"></small>
                        <br>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <small id="userMail"></small>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <small id="psw"></small>
                        <br>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
                        <small id="confirmPsw"></small>
                        <br>
                        <input type="tel" name="mobile" id="mobile" placeholder="Mobile" required>
                        <small id="userMobile"></small>
                        <br>
                        <input type="submit" value="Register" class="sign-in-btn" onclick="return regValidate()">
                    </form>
                    <p>
                        Do you have an account?
                        <br>
                        <a href="signIn.php">Sign In</a> from here
                    </p>
                </div>
            </div>
        </div>
        <footer>
        <?php include 'footer.php' ?>
        </footer> 
        <script src="./scripts/validation.js"></script>
</body>
</html>