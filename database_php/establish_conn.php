<?php 
#php data objects
$dbHost="localhost";
$dbName="Swarnlata";
$dbUser="root";
$dbPassword="";
try{
    $dbConn=new PDO("mysql:host=$dbHost;dbName=$dbName",$dbUser,$dbPassword);
    Echo "Sucessfully connected with database Swarnlata";
}catch(Exception $e){
    Echo"Connection failed" .$e->getMessage();
}
//this command closes the connection
$dbConn=null;

?>