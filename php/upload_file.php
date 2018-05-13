<?php
echo "Type: " . $_FILES["file"]["type"] . "<br />";
$allowedExts = array("jpg", "jpeg", "gif", "png", "txt");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "text/plain"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists($_SERVER[DOCUMENT_ROOT]."/brosheaproperties/upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      	if (move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER[DOCUMENT_ROOT]."/brosheaproperties/upload/" . $_FILES["file"]["name"])){
	      	echo "Stored in: " . "/brosheaproperties/upload/" . $_FILES["file"]["name"];
  		}
		else {echo "There was an error uploading the file.<br/>";		
		}
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
