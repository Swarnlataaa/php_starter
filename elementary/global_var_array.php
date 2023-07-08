<?php  
$x=10;
$y=20;
function display()
{
    echo $GLOBALS['x'];
    echo $GLOBALS['y'];
}
display();


?>