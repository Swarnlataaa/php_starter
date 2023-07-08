<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "1234";
    $db = "swarna";
    $conn = new mysqli($dbhost, $dbuser, "", $db) or die(" connect failed: %s\n" . $conn->error);
    return $conn;
}
function CloseCon($conn)
{
    $conn->close();
}
$conn = OpenCon();
echo "connected sucessfully";
$sql = "delete from employee where eid=12347";
if($conn->query($sql)===TRUE){
    echo "Record deleted sucessfully";
} else{
    echo"Error deleting records" .$conn->error;
}
CloseCon($conn);




?>