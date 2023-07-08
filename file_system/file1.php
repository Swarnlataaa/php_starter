<?php 
$myfile=fopen("swarna.txt","r") or die(" can't open the file ");
if(file_exists("swarna.txt"))
{
    echo "File already exists"."<br>";
}
if(is_readable("sawrna.txt")){
    echo"file is readable "."<br>";
}
echo basename("C:\xampp\htdocs\iwp\swarna.txt"."<br>");
echo dirname("C:\xampp\htdocs\iwp\swarna.txt");echo"<br>";
echo fgetc($myfile);echo "<br>";
echo fgets($myfile);echo "<br>";
echo filesize("swarna.txt");echo"<br>";
echo filetype("swarna.txt");echo "<br>";
copy("swarna.txt","swarnacopy.txt");

echo $text;echo "<br>";
fseek ($myfile,4);
echo fgets($myfile);



?>