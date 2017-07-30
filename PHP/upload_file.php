
<?php
$mysql_host = 'local host';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'kmntuiversity';
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
$db=mysqli_select_db($conn,$mysql_db);
if(!$conn || !$db){
    die(mysqli_error($conn));
}


if ((($_FILES["file"]["type"] == "doc/docx")
|| ($_FILES["file"]["type"] == "excel/xlsx")
|| ($_FILES["file"]["type"] == "pdf/pdf")
|| ($_FILES["file"]["type"] == "presentation/ppt"))
&& ($_FILES["file"]["size"] < 20000))
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

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
//process input
  $Upload=$_POST['Upload'];
  $Type=$_POST['Type'];
  $Size=$_POST['Size'];
  $Temp_file=$_POST['Temp file'];
  

//making sql
  $sql="INSERT INTO upload(Upload,Type,Size,Temp file) VALUES('$Upload','$Type','$Size','$Temp_file')";

//connect the database
  $link=mysqli_connect('localhost','root','','upload');

//to complete
  $res=mysqli_query($link,$sql);


header("location:engineering.php");
?>