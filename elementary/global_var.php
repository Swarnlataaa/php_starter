<?php 
$x=10;
$y=20;
function display()
{
    global $x,$y;
    echo$x.$y;
}
display();
?>