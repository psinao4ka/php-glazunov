<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>hytale</title>
</head>
<body>
    <form action="" method="get">
                <input type="text" name="никита" id="">
                <button type="submit">кликнуть</button>

    </form>
    
</body>
</html>
<?php
 $XVI=" Иван Васильевич"; 
 $XVIII=" Пётр Алексеевич"; 
 $XIX=" Николай Павлович";
 
if (isset($_GET['никита'])) {
$vek=$_GET['никита'];
 echo 'в '. $vek .' царствовал '. $$vek ; 
}