<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<?php include 'navbar.php' ?> 
<div class="bg">
            <div class="sign-in">
                <div class="sign-in-form">
                    <h1>Profile</h1>
                    <form>
                        <div class="name">
                            <input type="text" name="fname" value="" placeholder="First Name" disabled>
                            <input type="text" name="lname" value="" placeholder="Last Name" disabled>
                        </div>
                        <br>
                        <input type="email" name="email" value="" placeholder="Email" disabled>
                        <br>
                        <input type="tel" name="mobile" value="" placeholder="Mobile" disabled>
                    </form>
                    <section>
                        <a href="editProfile.php"><input type="submit" value="Profile Settings" class="sign-in-btn"></a>
                        <br> 
                        <form action="deleteAccount" method="POST">
                            <input type="submit" value="Delete Account" class="del-acc-btn">
                        </form> 
                    </section>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?> 
</body>
</html>