<?php 
$vit=array("12bce8591"=>"Swarnlata","22bce8592"=>"girly","12bce8689"=>"chamath palipatiiya");
foreach($vit as $reg =>$name)
{
    if(strpos($reg,"bce"))//returns false if no match
{
  echo $reg.$name;
}
}


?>