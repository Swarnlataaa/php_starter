<?php
#php data objects
$dbHost = "localhost";
$dbName = "Swarnlata";
$dbUser = "root";
$dbPassword = "";
try {
    $dbConn = new PDO("mysql:host=$dbHost;dbName=$dbName", $dbUser, $dbPassword);
    echo "Sucessfully connected with database Swarnlata";
    $query=$dbConn->exec("insert into employee values('124','ram',2333,566);");//rteurns number of affected rows
    if($query){
        echo"Row updated sucessfully";
    }
} catch (Exception $e) {
    echo "Connection failed" . $e->getMessage();
}
//this command closes the connection
$dbConn = null;

?>