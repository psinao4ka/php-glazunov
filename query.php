<?php
session_start();
require_once ("db.php");
if (isset($_POST['creat'])){
    // var_dump ($_SESSION);
    $sql= "INSERT INTO `mamanikiti`(`first_name`, `name`, `last_name`, `phone`, `email`, `adres`, `user_ID`) 
    VALUES (
    '".$_POST['first_name']."',
    '".$_POST['name']."',
    '".$_POST['last_name']."',
    '".$_POST['telefon']."',
    '".$_POST['emal']."',
    '".$_POST['adres']."',
    '".$_SESSION['user_id']."'";
   $result = mysqli_query($mysqli,$sql);
   header("Location:http://localhost/praktika/content.php");
// var_dump($sql);
}
if (isset($_POST['update'])){

$sql = "UPDATE `mamanikiti` SET
         `first_name`='".$_POST['first_name']."',
         `name`='".$_POST['name']."',
         `phone`='".$_POST['telefon']."',
         `email`='".$_POST['emal']."',
         `adres`='".$_POST['adres']."' WHERE'id'=". $_POST['ID'];
         var_dump ($sql);
}
if (isset($_POST['delete'])){
$sql="DELETE FROM `mamanikiti` WHERE  'id'=". $_POST['ID'];
$result = mysqli_query($mysqli,$sql);
header("Location:http://localhost/praktika/content.php");
}
if(isset($_POST['registr'])){
    $sql="INSERT INTO `mamanikiti2`(`login`, `password`, `email`)
 VALUES ('".$_POST['email']."',
    PASSWORD('".$_POST['password']."'),
    '".$_POST['email']."')"; 
  $result = mysqli_query($mysqli,$sql);
  if (mysqli_errno($mysqli)) echo mysqli_error($mysqli);
  header("Location:http://localhost/praktika/singin.php");

  }  
if(isset($_POST['singin'])){
    $sql="SELECT * FROM `mamanikiti2` WHERE `email`='".$_POST['email']."' AND `password`=PASSWORD('".$_POST['password']."')";
//    var_dump($sql);
   $result = mysqli_query($mysqli,$sql);
    if (mysqli_errno($mysqli)) echo mysqli_error($mysqli) ;
    $row=mysqli_fetch_assoc($result);
    if($row>0){
        $_SESSION['user_id']= $row['ID'];
         $_SESSION['role']= $row['role'];
  header("Location:http://localhost/praktika/content.php");
}else
header("Location:http://localhost/praktika/singin.php");
  }  
  if(isset($_GET['role'])){
$sql= "UPDATE `mamanikiti2` SET `role`='reader' WHERE `ID`=".$_GET['role'];
$result = mysqli_query($mysqli,$sql);
  if (mysqli_errno($mysqli)) echo mysqli_error($mysqli);
  header("Location:http://localhost/praktika/admin.php");
  }


