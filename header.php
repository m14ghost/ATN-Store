<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/ico" href="./images/vip.png" />
        <link rel="stylesheet" href="css/menu_style.css?v=<?php echo time();?>" type="text/css"/>
        <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>ATN Store Management System</title>
    </head>
    <body>
    <h1>ATN Store Management</h1>
    <?php
    require_once './functions.php';
    $userstr = '(Guest)';
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $userstr = "($user)";
        $loggedin = TRUE;
    } else {
        $loggedin = FALSE;
    }
    if ($loggedin) {
        include_once './menuadmin.php';
    } else {
        include_once './login.php';
    }
    ?>
</body>
</html>

