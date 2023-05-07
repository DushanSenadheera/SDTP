<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/signIn.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<?php include 'navbar.php' ?> 
<div class="bg">
            <div class="sign-in">
                <div class="sign-in-form">
                    <h1>Sign In</h1>
                    <form action="signIn" method="POST">
                        <input type="text" name="email" placeholder="Email" required>
                        <br>
                        <input type="password" name="password" placeholder="Password" required>
                        <br>
                        Sign In as
                        <select name="title" id="title">
                            <option value="GTF Member">GTF Member</option>
                            <option value="GTF Captain">GTF Captain</option>
                        </select>
                        <br>
                        <input type="submit" value="Sign In" class="sign-in-btn">
                    </form>
                    <p>
                        Don't you have an account?
                        <br>
                        <a href="register.php">Register</a> from here
                    </p>
                </div>
            </div>
        </div>
        <footer>
        <?php include 'footer.php' ?> 
        </footer>
</body>
</html>