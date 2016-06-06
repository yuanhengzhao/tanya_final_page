<html>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "description_db";
$con = mysql_connect($host,$user,$pass)
 or die('Could not connect: ' . mysql_error());
if ( mysql_select_db($database) )
{
    $sql ="SELECT * FROM Descriptions";
    $result = mysql_query($sql);
	$rows[]=array();
    while($row=mysql_fetch_array($result)){
        $rows[]=$row;
    }
}
else {
    echo "fails";
mysql_query("CREATE DATABASE Descriptions",$con) or die('Could not connect:' . mysql_error());
}


?>
<div id="gallery">
	<article id="photo1" class= "picture">
		<div class="description" id="description1">
		<a href='<?php echo $rows[1]['content5'];?>'>
        <h4><?php echo $rows[1]['content1'];?></h4>
        <p><?php echo $rows[1]['content2'];?></p>
        <p><?php echo $rows[1]['content3'];?></p>
        <p><?php echo $rows[1]['content4'];?></p>
        </a>	
		</div>
		<img class="three-image" src="assert/house1.jpg">
		
	</article> 
	<article id="photo2" class= "picture"> 
		<div class="description" id="description2">
        <a href='<?php echo $rows[2]['content5'];?>'>
        <h4><?php echo $rows[2]['content1'];?></h4>
        <p><?php echo $rows[2]['content2'];?></p>
        <p><?php echo $rows[2]['content3'];?></p>
        <p><?php echo $rows[2]['content4'];?></p>
        </a>
		</div>
		<img class="three-image" src="assert/house2.jpg">
		
	</article> 
	
	<article id="photo3" class= "picture">
		<div class="description" id="description3">
        <a href='<?php echo $rows[3]['content5'];?>'>
        <h4><?php echo $rows[3]['content1'];?></h4>
        <p><?php echo $rows[3]['content2'];?></p>
        <p><?php echo $rows[3]['content3'];?></p>
        <p><?php echo $rows[3]['content4'];?></p>
        </a>
		</div> 
		<img class="three-image" src="assert/house3.jpg">
	</article>
</div>

 </html>