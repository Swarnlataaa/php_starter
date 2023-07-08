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
$conn=OPenCon();
echo "Connected sucessfully";
echo $conn->host_info; echo "<br>";
echo $conn->protocol_version;
echo "<br>";
echo $conn->server_info;
echo "<br>";
echo $conn->server_version;
echo "<br>";
echo $conn->client_info;
echo "<br>";
echo $conn->client_version;
echo "<br>";

CloseCon($conn);

?>