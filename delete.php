<?php require ('db.php');?>
<?php require ('header.php');?>
<?php
$sql = "SELECT * FROM `mamanikiti` WHERE `id`=".$_GET['id'];
$result = mysqli_query ($mysqli,$sql);
if (mysqli_errno($mysqli)) echo mysqli_error($mysqli);
$row = mysqli_fetch_assoc ($result);
?>