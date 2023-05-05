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
                    <form action="register" method="POST">
                        <div class="name">
                            <input type="text" name="fname" placeholder="First Name" required>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                        <br>
                        <input type="email" name="email" placeholder="Email" required>
                        <br>
                        <input type="password" name="password" placeholder="Password" required>
                        <br>
                        <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                        <br>
                        <input type="tel" name="mobile" placeholder="Mobile" required>
                        <br>
                        <input type="submit" value="Register" class="sign-in-btn">
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
</body>
</html>