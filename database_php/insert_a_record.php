<?php 
#inserting  a record in the table
function OpenCon(){
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
$conn=OpenCon();
echo "connected sucessfully";
$sql="INSERT INTO employee(eid,name,phone,salary) VALUES('123456','Mathew',55555,,10090)";

if($conn->query($sql)==TRUE){
    echo "New record created sucessfully";
}
else{
    echo"Error:" .$sql ."<br>" .$conn->error;
}
CloseCon($conn);


?>