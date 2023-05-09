<?php

include 'connection.php';

$sql = "SELECT * FROM article ORDER BY articleID DESC LIMIT 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $title = $row['title'];
        $content = $row['content'];
        $articleImg = $row['articleImg'];
?>
        <div class="post">
            <img src="<?php echo "uploads/".$articleImg ?>" alt="">
            <h4 class="sub-heading"><?php echo $title ?></h4>
            <p><?php echo $content ?></p>
        </div>
    <?php
    }
} else {
    ?>
    <script>
        alert("Something went wrong");
        window.location.href = "../index.php";
    </script>
<?php
}

$conn->close();

?>