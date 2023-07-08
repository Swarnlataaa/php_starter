<?php
$vit = array(3, 5, 6, 4, 2);
ksort($vit);
foreach($vit as $x=>$value)
{
    echo $x.$value;
}
?>