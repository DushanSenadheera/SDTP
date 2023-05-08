<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="stylesheet" href="./styles/footer.css">
</head>

<body>
    <?php include 'navbar.php' ?>
    <?php include './server/editProfile.php' ?>
    <div class="bg">
        <div class="sign-in">
            <div class="sign-in-form">
                <h1>Profile</h1>
                <form>
                    <div class="name">
                        <input type="text" name="fname" value="<?php echo $fname ?>" placeholder="First Name" disabled>
                        <input type="text" name="lname" value="<?php echo $lname ?>" placeholder="Last Name" disabled>
                    </div>
                    <br>
                    <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email" disabled>
                    <br>
                    <input type="tel" name="mobile" value="<?php echo $phone ?>" placeholder="Mobile" disabled>
                </form>
                <section>
                    <?php

                    if ($_SESSION['title'] == 2) {
                    ?>
                        <a href="verifyLocation.php"><input type="submit" value="Verify Location" class="sign-in-btn"></a>
                        <br>
                        <a href="editProfile.php"><input type="submit" value="Profile Settings" class="sign-in-btn"></a>
                        <br>

                        <input type="submit" value="Delete Account" class="del-acc-btn">

                    <?php
                    } else {
                    ?>
                        <a href="editProfile.php"><input type="submit" value="Profile Settings" class="sign-in-btn"></a>
                        <br>
                        <form action="./server/deleteMember.php" method="post">
                        <input type="submit" value="Delete Account" onclick="return memberAccDel()" class="del-acc-btn">
                        </form>

                    <?php
                    }

                    ?>

                </section>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>

    <script src="./scripts/validation.js" ></script>
</body>

</html>