<?php

$mainColor = '#FFF';
// if ($_SERVER['REQUSET_METHOD'] == 'POST') {

if(isset($_POST['choose'])) {
    $mainColor = $_POST['color'];
    setcookie('background', $mainColor, time() + 3600, '/');
}

if (isset($_COOKIE['background'])) {
    $body = $_COOKIE['background'];
} else {
    $body = $mainColor;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body style="background-color: <?php echo $body?>;">

    <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="color" name="color" value="<?= $body ?? $mainColor ?>">
        <input type="submit" value="choose" name="choose">
    </form>

</body>

</html>