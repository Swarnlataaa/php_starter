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
$sql = "SELECT eid,name FROM employee where eid=123456";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "eid:" . $row["eid"] . "- Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}
CloseCon($conn);




?>