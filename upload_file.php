<?php
// include 'uploader.php';


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
            echo "fail!"; 
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