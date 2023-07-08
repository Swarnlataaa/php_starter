<?php 
$vit=array(
    array("12bce7684","swarnlata","787429"),
    array("12bce7284", "chandan", "787479"),
    array("12bce7484", "suchitra", "787491"),
    array("12bce7184", "sunita", "787492"),
    array("12bce7084", "suvarna", "787479")
);
$bcecount=0;
$bcicount=0;
foreach($vit as $row){
    foreach($vit as $value){
        if(strpos($value,"bce"))
        {
            $bcecount++;
        }
        if(strpos($value,"bci")){
            $bcicount++;
        }
    }
}
echo "The bce student count is" .$bcecount;
echo "The bci student count is" . $bcicount;


?>