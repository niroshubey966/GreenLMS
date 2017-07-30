<html>
    <body>
<?php 
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'knmtuniversity');
$about=$_REQUEST["comps"];
$idea=$_REQUEST["idea"];
$sql="INSERT INTO com_ideas (about,idea) VALUES ('$about','$idea')";

mysqli_query($con,$sql);
        mysqli_close ($con);
        header ('Location: home.php');
        ?>



    </body>
</html>
