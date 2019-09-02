<?php
require_once './functions.php';
if (isset($_POST['iId'])) {
    $iId = $_POST['iId'];
    $query = "DELETE FROM Item WHERE iId = '$iId'";
    queryMysql($query);
    header("Location: loaditem.php");
    die("You've deleted the item '$iId' <a href='loaditem.php'>click here</a> to continue.");
}
?>

