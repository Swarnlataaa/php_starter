<?php    
//count name of the students whos name starts with ma
#arrays in php
#multidimensional associative array in php
$vit=array(
    array("12bce8591"=>"Swarnlata","22bce8791"=>"sarika","22bce8675"=>"navin"),
    array("12bce8595" => "Swarna", "22bce87931" => "ika", "22bce0675" => "navinpapa"),
    array("12bce8561" => "Mapaya", "22bce8711" => "sar", "22bce6675" => "navinji"),

);
$count=0;
$found=false;
foreach($vit as $row){
    foreach($row as $key => $value)
    {
        if(strcmp(substr($value,0,2),"Ma")==0){
            $count++;
            $found=true;
        }
    }
}
if(!$found)
{
    echo "No such student in the university";

}else{
    echo "The total number of students with their name starting with Ma is". $count;
}


?>