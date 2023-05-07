<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/editProfile.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<?php include 'navbar.php' ?> 
<div class="bg">
            <div class="sign-in">
                <div class="sign-in-form">
                    <h1>Edit Profile</h1>
                    <form action="updateProfile" method="POST">
                        <div class="name">
                            <input type="text" name="fname" value="" placeholder="First Name" disabled>
                            <input type="text" name="lname" value="" placeholder="Last Name" disabled>
                        </div>
                        <br>
                        <input type="email" name="email" value="" placeholder="Email" disabled>
                        <br>
                        <input type="tel" name="mobile" value="" placeholder="Mobile">
                    <section>
                            <input type="submit" value="Update Profile" class="sign-in-btn">
                        <a href="changePassword.php"><input type="button" value="Change Password" class="del-acc-btn"></a>
                    </section>
                        </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?> 
</body>
</html>