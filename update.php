<?php require ('db.php');?>
<?php require ('header.php');?>
<?php 

$sql = "SELECT * FROM `mamanikiti` WHERE `id`=".$_GET['id'];




$result = mysqli_query ($mysqli,$sql);
if (mysqli_errno($mysqli)) echo mysqli_error($mysqli);
$row = mysqli_fetch_assoc ($result);
?>
<form action="query.php" method="post">
     <input type="hidden" name="update">
     <input type="hidden" name="ID" value="<?=$_GET['id'];?>">

    <label for="first_name">введите фамилию</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name'];?>">

    <label for="IDname">введите имя</label>
    <input type="text" name="name" id="IDname" value="<?php echo $row['name'];?>">

    <label for="IDlast_name">введите отчество</label>
    <input type="text" name="last_name" id="IDlast_name" value="<?php echo $row['last_name'];?>">

    <label for="email">введите email</label>
    <input type="email" name="emal" id="email" value="<?php echo $row['email'];?>">

    <label for="telefon">введите  телефон</label>
    <input type="tel" name="telefon" id="telefon" value="<?php echo $row['phone'];?>">

    <label for="adres">введите адрес</label>
    <textarea name="adres" id="adres"></textarea>
    <button type="submit">отправить</button>
</form>
