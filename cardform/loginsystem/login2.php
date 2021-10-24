<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$conn=mysqli_connect("localhost","root","","card");

if (isset($_POST['submit'])) {
   # code...
   if ($conn) {
    # code...
echo "connetion sucessfull<br>";
}
else {
    
    echo "connetion faild";
}
   $username=$_POST['name'];
$pass=$_POST['Pass'];
session_start();
$_SESSION['name']=$username;
$sql="SELECT * FROM `loginsystem` WHERE `username` LIKE '$username' AND `pass` LIKE '$pass'";
$quary=mysqli_query($conn,$sql);
$num=mysqli_num_rows($quary);
if ($num==1) {
   # code...
   
   echo "login succesfull";
   header("location:welcome.php");
   header("location:./loginkebad/card.php");
 

}
else {
   
   echo "login faild";
}
}

?>
</body>
</html>