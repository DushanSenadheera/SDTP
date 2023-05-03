<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<div class="bg">
            <div class="sign-in">
                <div class="sign-in-form">
                    <h1>Administration</h1>
                    <form action="adminLogin" method="POST">
                        <input type="text" name="adminUserName" placeholder="User Name" required>
                        <br>
                        <input type="password" name="adminPassword" placeholder="Password" required>
                        <br>
                        <input type="submit" value="Sign In" class="sign-in-btn">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>