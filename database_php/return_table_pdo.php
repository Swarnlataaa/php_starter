<?php
#php data objects
$dbHost = "localhost";
$dbName = "Swarnlata";
$dbUser = "root";
$dbPassword = "";
try {
    $dbConn = new PDO("mysql:host=$dbHost;dbName=$dbName", $dbUser, $dbPassword);
    $query = $dbConn->query("select * from employee;"); //returns numbers of affected rows
    foreach($query as $row){
        echo $row['eid'];
        echo $row['name'];
        echo $row['phone'];
        echo $row['salary'];
        echo "<br>";
    }
} catch (Exception $e) {
    echo "Connection failed" . $e->getMessage();
}
//this command closes the connection
$dbConn = null;

?>