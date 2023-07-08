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
$sql = "UPDATE  employee SET name='Chris' WHERE eid=12345";

if ($conn->query($sql) == TRUE) {
    echo "updated sucessfully";
} else {
    echo "Error: updating it" . $sql . "<br>" . $conn->error;
}
CloseCon($conn);




?>