<?php 
$vit=array(
    array("engineering"=>array("bce"=>"computer","bci"=>"information","bkt"=>"blockchain")),
    array("science"=>array("bsc"=>"maths","bcom"=>"accounts","msc"=>"chemistry"))
);

//printing all data in the array
foreach($vit as $row)
{
    foreach($row as $key =>$value){
        echo "the student for ".$key;
        foreach($value as $subkey=>$subvalue){
            echo $subkey.$subvalue;
        }
        echo"<br>";
    }
}

?>