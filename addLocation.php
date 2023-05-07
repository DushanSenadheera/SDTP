<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/addLocation.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="add-location-form">
        <form action="" method="post">
            <div class="map">
                <p>map here</p>
            </div>
            <br>
            <input type="file">
            <br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Add cleanup Location">
        </form>
    </div>
    <footer>
    <?php include 'footer.php'; ?>
    </footer>
</body>

</html>