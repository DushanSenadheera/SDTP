<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/changePassword.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<?php include 'navbar.php' ?> 
<div class="bg">
            <div class="sign-in">
                <div class="sign-in-form">
                    <h1>Change Password</h1>
                    <form action="passwordUpdate" method="POST">
                        <input type="password" name="oldPassword" placeholder="Old Password" required>
                        <br>
                        <input type="password" name="newPassword" placeholder="New Password" required>
                        <br>
                        <input type="password" name="confirmNewPassword" placeholder="Confirm New Password" required>
                        <br>
                        <input type="submit" value="Update Password" class="sign-in-btn">
                    </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?> 
</body>
</html>