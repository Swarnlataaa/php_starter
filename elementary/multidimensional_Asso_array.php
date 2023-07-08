<?php  
$vit=array(
    array("12bce8582"=>"swarna","12bve8934"=>"shyam"),
    array("12bce5582" => "swarnalata", "12bde8934" => "shivam"),
    array("12bce6582"=>"suvarna","12bve9934"=>"sham")
);
foreach($vit as $row)
{
 foreach($row as $reg=>$name){
    echo $reg.$name;
 }
 echo"<br>";
}

?>