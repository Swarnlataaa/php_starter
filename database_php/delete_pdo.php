<?php
#php data objects
$dbHost = "localhost";
$dbName = "Swarnlata";
$dbUser = "root";
$dbPassword = "";
try {
    $dbConn = new PDO("mysql:host=$dbHost;dbName=$dbName", $dbUser, $dbPassword);
    $query =$dbConn->exec("Update employee set name='tom' where eid='123';");//returns numbers of affected rows
    if($query){
        echo"Row updated sucessfully";
    }
} catch (Exception $e) {
    echo "Connection failed" . $e->getMessage();
}
//this command closes the connection
$dbConn = null;

?>