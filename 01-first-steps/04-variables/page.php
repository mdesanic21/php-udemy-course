<?php
    include 'variables.php';
    $title = "PHP is cool!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <?php 
        echo '<h1>' . $greeting . '</h1>';
    ?>
</body>
</html>