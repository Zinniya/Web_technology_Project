<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title>
</head>

<body>
    <?php
    session_start();

    include 'Header.php'; ?>
    <?php


    if (isset($_SESSION['email'])) {
        include 'patient_Top_Menu_Bar.php';

      
        include 'patient_Menu.php';
        echo "<br><br><br>";
       
        
        echo '<h2> PROFILE PICTURE</h2><br />';
      
        echo '<br><br>';
        echo '<input type="file" name="fileToUpload" id="fileToUpload">';
        echo '<span class="red"><p id="fileToUploadErr"></p></span><br><br>';
        echo '<input type="submit" value="Update" name="submit">';
        echo '</div>';
        echo '</div>';
    } else {
        $msg = "error";
        header("location:Login.php");
    }

    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 style="text-align: center;"></h1>
    <br><br>

    <?php include 'Footer.php'; ?>
</body>

</html>