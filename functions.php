<?php
//connect to database
$db = parse_url(getenv("DATABASE_URL"));
$connection = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
));


//this is used to execute all SQL queries
function queryMysql($query) {
    global $connection;
    $result = $connection->query($query);
    if (!$result) {
        die($connection->error);
    }
    return $result;
}

?>