<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}




// $host = "localhost";
// $user = "root";
// $pass = "";
 $database = "description_db";
// $con = mysql_connect($host,$user,$pass)
//  or die('Could not connect: ' . mysql_error());
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

function update($id) {
    $sqls=" UPDATE Descriptions set content1='".$_POST['photo'.$id]['content1']."', content2='".$_POST['photo'.$id]['content2']."', content3='".$_POST['photo'.$id]['content3']."', content4='".$_POST['photo'.$id]['content4']."', content5='".$_POST['photo'.$id]['content5']."' where id = ".$id.";";
// 		global $sqls;
		mysql_query($sqls);
	}
	
if (isset($_POST['submit1'])) {
	update(1);
	$sql ="SELECT * FROM Descriptions";
    $result = mysql_query($sql);
	$rows[1] = mysql_fetch_assoc($result);
	
}

if (isset($_POST['submit2'])) {
	update(2);
	$sql ="SELECT * FROM Descriptions where id=2";
    $result = mysql_query($sql);
	$rows[2] = mysql_fetch_assoc($result);
}

if (isset($_POST['submit3'])) {
	update(3);
	$sql ="SELECT * FROM Descriptions";
    $result = mysql_query($sql);
	$rows[3] = mysql_fetch_assoc($result);
}



    //All the uploader function replace the existing file so that no more images will add into asserts and it's easier to manage the image files in assert.
//=====================================================================



//=====================================================================
// function houseDescriptionWriter($description_name, $content1, $content2, $content3, $content4, $link) {
// $myfile = fopen($description_name, "w") or die("Unable to open file!");
//     //This function handles opening and rewriting description#.html files in description folder.
//     $p="<p>";
//     $p_="</p>\n";
//     $h4 = "<h4>";
//     $h4_ = "</h4>\n";
//     fwrite($myfile, "<a href='".$link."'>\n".$h4.$content1.$h4_.$p.$content2.$p_.$p.$content3.$p_.$p.$content4.$p_."</a>");
//     fclose($myfile);
// }


function uploader($local_file_name, $file_type, $remote_file_name){
    //This function handles upload image to assert folder.
    
if ($_FILES[$file_type]["size"] < 10000000)
//This is a temporary number for image size. 
  {
  if ($_FILES[$file_type]["error"] > 0)
    {
    echo "Return Code: " . $_FILES[$file_type]["error"] . "<br />";
    }
  else
    {
    echo "<br>";
    if (0)
      {
      echo $_FILES[$file_type]["name"] . " already exists. ";
      }
    else
      {
      if (move_uploaded_file($local_file_name, $remote_file_name)){
            echo "<br>";
            echo $local_file_name."Uplaod imagesuccess!";
        }
      else
        {
        }
      }
    }
  }
else
  {
  echo "Invalid file";
  }
}
?>

<html>
<body>
<style>
div.photo{
    width:33%;
    float:left;

    
}
div img {
    width:90%;
    height:400px;
}

.description_block {
    text-align:center;
}
</style>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Image Uploader</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="logout.php?logout">Sign Out</a></li>
	</div>>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div id="photo1" class="photo col-lg-4">
    <form method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    
    <input type="file" class="form-control" name="file1" id="file1" /> 
    <br />
    Description:
    <br />
    <input type="text" class="form-control" name="photo1[content1]" value="<?php echo $rows[1]['content1']?>">
    <br />
    <input type="text" class="form-control" name="photo1[content2]" value="<?php echo $rows[1]['content2']?>">
    <br />
    <input type="text" class="form-control" name="photo1[content3]" value="<?php echo $rows[1]['content3']?>">
    <br />
    <input type="text" class="form-control" name="photo1[content4]" value="<?php echo $rows[1]['content4']?>">
    <br />
    Add a link:
    <br />
    <input type="text" class="form-control" placeholder="http://~" name="photo1[content5]" value="<?php echo $rows[1]['content5']?>">
    <br />
    <input type="submit" class="btn btn-success" name="submit1" value="Submit" />
    </form>
    <div class="description_block">
        <img src="assert/house1.jpg" class="img-rounded">
        <div id="description1" class="description_block"></div>
    </div>
</div>
<div id="photo2" class="photo col-lg-4" >
    <form method="post" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" class="form-control" name="file2" id="file2" /> 
        <br />
        Description:
        <br />
        <input type="text" class="form-control" name="photo2[content1]" value="<?php echo $rows[2]['content1']?>" required>
        <br />
        <input type="text" class="form-control" name="photo2[content2]" value="<?php echo $rows[2]['content2']?>">
        <br />
        <input type="text" class="form-control" name="photo2[content3]" value="<?php echo $rows[2]['content3']?>">
        <br />
        <input type="text" class="form-control" name="photo2[content4]" value="<?php echo $rows[2]['content4']?>">
        <br />
        Add a link:
        <br />
        <input type="text" class="form-control" placeholder="http://~" name="photo2[content5]" value="<?php echo $rows[2]['content5']?>">
        <br />
        <input type="submit" class="btn btn-success" name="submit2" value="Submit" />
    </form>
    <div class="description_block">
        <img src="assert/house2.jpg" class="img-rounded">
        <div id="description2"></div>
    </div>
</div>
<div id="photo3" class="photo col-lg-4">
    <form method="post" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" class="form-control" name="file3" id="file3" /> 
        <br />
        Description:
        <br />
        <input type="text" class="form-control" name="photo3[content1]" value="<?php echo $rows[3]['content1']?>">
        <br />
        <input type="text" class="form-control" name="photo3[content2]" value="<?php echo $rows[3]['content2']?>">
        <br />
        <input type="text" class="form-control" name="photo3[content3]" value="<?php echo $rows[3]['content3']?>">
        <br />
        <input type="text" class="form-control" name="photo3[content4]" value="<?php echo $rows[3]['content4']?>">
        <br />
        Add a link:
        <br />
        <input type="text" class="form-control" placeholder="http://~" name="photo3[content5]" value="<?php echo $rows[3]['content5']?>">
        <br />
        <input type="submit" class="btn btn-success" name="submit3" value="Submit" />
    </form>
    <div class="description_block">
        <img src="assert/house3.jpg" class="img-rounded">
        <div id="description3"></div>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>

</script>
<script>
$('#description1').load('description/description1.html');

$('#description2').load('description/description2.html');

$('#description3').load('description/description3.html');


</script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php
// if (empty($_POST['file1_content1'])==false) {
//     houseDescriptionWriter("description/description1.html", $_POST['file1_content1'], $_POST['file1_content2'], $_POST['file1_content3'], $_POST['file1_content4'], $_POST['file1_link'] );
//     }
// if (empty($_POST['file2_content1'])==false) {
//     houseDescriptionWriter("description/description2.html", $_POST['file2_content1'], $_POST['file2_content2'], $_POST['file2_content3'], $_POST['file2_content4'], $_POST['file2_link'] );
// }
// if (empty($_POST['file3_content1'])==false) {
//     houseDescriptionWriter("description/description3.html", $_POST['file3_content1'], $_POST['file3_content2'], $_POST['file3_content3'], $_POST['file3_content4'], $_POST['file3_link'] );
//     }

    uploader($_FILES["file1"]["tmp_name"],"file1","assert/house1.jpg");
    uploader($_FILES["file2"]["tmp_name"],"file2","assert/house2.jpg");
    uploader($_FILES["file3"]["tmp_name"],"file3","assert/house3.jpg");
?>