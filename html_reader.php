<?php
// 


function houseDescriptionWriter($description_name, $description){
// echo file_get_contents('changeable_content.html');
$myfile = fopen($description_name, "w") or die("Unable to open file!");
$p = "<h1>";
$p_ = "</h1>";
$txt1 = "Johhhhn Doe";
// $txt2 = "Jane Doe<br>";
// $txt3 = "";
// $txt4 = "";
fwrite($myfile, $p.$description.$p_.$txt1.$txt1);
fclose($myfile);
echo file_get_contents('changeable_content.html');
}
