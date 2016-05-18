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
    <input type="text" class="form-control" name="file1_content1" value="" required>
    <br />
    <input type="text" class="form-control" name="file1_content2" value="">
    <br />
    <input type="text" class="form-control" name="file1_content3" value="">
    <br />
    <input type="text" class="form-control" name="file1_content4" value="">
    <br />
    Add a link:
    <br />
    <input type="text" class="form-control" placeholder="http://~" name="file1_link" value="">
    <br />
    <input type="submit" class="btn btn-success" name="submit" value="Submit" />
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
        <input type="text" class="form-control" name="file2_content1" value="" required>
        <br />
        <input type="text" class="form-control" name="file2_content2" value="">
        <br />
        <input type="text" class="form-control" name="file2_content3" value="">
        <br />
        <input type="text" class="form-control" name="file2_content4" value="">
        <br />
        Add a link:
        <br />
        <input type="text" class="form-control" placeholder="http://~" name="file2_link" value="">
        <br />
        <input type="submit" class="btn btn-success" name="submit" value="Submit" />
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
        <input type="text" class="form-control" name="file3_content1" value="" required>
        <br />
        <input type="text" class="form-control" name="file3_content2" value="">
        <br />
        <input type="text" class="form-control" name="file3_content3" value="">
        <br />
        <input type="text" class="form-control" name="file3_content4" value="">
        <br />
        Add a link:
        <br />
        <input type="text" class="form-control" placeholder="http://~" name="file3_link" value="">
        <br />
        <input type="submit" class="btn btn-success" placeholder="http://~" name="submit" value="Submit" />
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
if (empty($_POST['file1_content1'])==false) {
    houseDescriptionWriter("description/description1.html", $_POST['file1_content1'], $_POST['file1_content2'], $_POST['file1_content3'], $_POST['file1_content4'], $_POST['file1_link'] );
    }
if (empty($_POST['file2_content1'])==false) {
    houseDescriptionWriter("description/description2.html", $_POST['file2_content1'], $_POST['file2_content2'], $_POST['file2_content3'], $_POST['file2_content4'], $_POST['file2_link'] );
}
if (empty($_POST['file3_content1'])==false) {
    houseDescriptionWriter("description/description3.html", $_POST['file3_content1'], $_POST['file3_content2'], $_POST['file3_content3'], $_POST['file3_content4'], $_POST['file3_link'] );
    }

    uploader($_FILES["file1"]["tmp_name"],"file1","assert/house1.jpg");
    uploader($_FILES["file2"]["tmp_name"],"file2","assert/house2.jpg");
    uploader($_FILES["file3"]["tmp_name"],"file3","assert/house3.jpg");
    //All the uploader function replace the existing file so that no more images will add into asserts and it's easier to manage the image files in assert.
    
function houseDescriptionWriter($description_name, $content1, $content2, $content3, $content4, $link) {
$myfile = fopen($description_name, "w") or die("Unable to open file!");
    //This function handles opening and rewriting description#.html files in description folder.
    $p="<p>";
    $p_="</p>\n";
    $h4 = "<h4>";
    $h4_ = "</h4>\n";
    fwrite($myfile, "<a href='".$link."'>\n".$h4.$content1.$h4_.$p.$content2.$p_.$p.$content3.$p_.$p.$content4.$p_."</a>");
    fclose($myfile);
}


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