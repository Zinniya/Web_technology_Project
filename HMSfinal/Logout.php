<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="logout">
    <?php
    session_start();

    if (isset($_SESSION['email'])) {
        session_destroy();
        header("location:Login.php");
    } else {
        header("location:Login.php");
    }
    ?>
    </div>
</body>

</html>