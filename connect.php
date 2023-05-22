<!--สร้างตัวเชื่อมกับฐานข้อมูล และเชื่อมตัวแปรกับฐานข้อมูล-->
<?php

$servername="localhost";
$username="root12534";
$password="123456789qQ_1";
$db="demo";
$conn = mysqli_connect($servername,$username,$password,$db);
mysqli_set_charset($conn,"utf8");
if(!$conn){
    die("ไม่สามารถเชื่ิมต่อได้".mysqli_connect_error());
    }else{
        echo"";
        }
?>
<!DOCTYPE html>
<html lang="th">
<head>
</head>
<body>
   </body>
</html>