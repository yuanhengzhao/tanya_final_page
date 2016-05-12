<html>
<body>
<style>
div.photo{
    width:30%;
    float:left;
}
div img {
    width:80%;
    height:300px;
}
</style>
<div id="photo1" class="photo">
    <form method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    
    <input type="file" name="file1" id="file1" /> 
    <br />
    Description would be:
    <br />
    <input type="text" name="file1_content1" value="<?php ?>">
    <br />
    <input type="text" name="file1_content2" value="">
    <br />
    <input type="text" name="file1_content3" value="">
    <br />
    <input type="text" name="file1_content4" value="">
    <br />
    Add a link:
    <br />
    <input type="text" name="file1_link" value="">
    <br />
    <input type="submit" name="submit" value="Submit" />
    </form>
    <div>
        <img src="assert/house1.jpg">
        <div id="description1"></div>
    </div>
</div>
<div id="photo2" class="photo">
    <form method="post" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file2" id="file2" /> 
        <br />
        Description would be:
        <br />
        <input type="text" name="file2_content1" value="">
        <br />
        <input type="text" name="file2_content2" value="">
        <br />
        <input type="text" name="file2_content3" value="">
        <br />
        <input type="text" name="file2_content4" value="">
        <br />
        Add a link:
        <br />
        <input type="text" name="file2_link" value="">
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <div>
        <img src="assert/house2.jpg">
        <div id="description2"></div>
    </div>
</div>
<div id="photo3" class="photo">
    <form method="post"enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file3" id="file3" /> 
        <br />
        Description would be:
        <br />
        <input type="text" name="file3_content1" value="">
        <br />
        <input type="text" name="file3_content2" value="">
        <br />
        <input type="text" name="file3_content3" value="">
        <br />
        <input type="text" name="file3_content4" value="">
        <br />
        Add a link:
        <br />
        <input type="text" name="file3_link" value="">
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <div>
        <img src="assert/house3.jpg">
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
function houseDescriptionWriter($description_name, $content1, $content2, $content3, $content4, $link) {
// echo file_get_contents('changeable_content.html');
$myfile = fopen($description_name, "w") or die("Unable to open file!");

$p="<p>";
$p_="</p>\n";
$h4 = "<h4>";
$h4_ = "</h4>\n";
fwrite($myfile, "<a href='".$link."'>\n".$h4.$content1.$h4_.$p.$content2.$p_.$p.$content3.$p_.$p.$content4.$p_."</a>");
fclose($myfile);
// echo file_get_contents('changeable_content.html');
}


function uploader($local_file_name, $file_type, $remote_file_name){
    
if ($_FILES[$file_type]["size"] < 10000000)
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
      echo $_FILES[$file_type]["tmp_name"];
    //   echo "upload/" . $_FILES["file"]["name"];
    // $local_file_name = $_FILES["file"]["tmp_name"];
    // $remote_file_name = "include_test1.jpg";
      //uploader($_FILES["file"]["tmp_name"], "../include_test1.jpg" );
      if (move_uploaded_file($local_file_name, $remote_file_name)){
           echo "success";
          // echo "success";
        }
      else
        {
            // echo "fail!"; 
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
</div>
</body>
</html>
