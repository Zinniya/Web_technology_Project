
<?php
function db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "patient_db";

    try {
        $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}
