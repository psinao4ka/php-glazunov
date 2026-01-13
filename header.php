       <?php
  session_start()
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>мама Никиты</title>
</head>
<body>
<header>
        <a href="content.php">посмотреть друзей</a>
        <a href="creater.php">добавить друга</a> 
        <a href="formareg.php">зарегистрироваться</a>
        <a href="singin.php">войти</a>
        <a href="minecraft.html">не входить пасхалко</a>
        <?php if(isset($_SESSION['role']) && $_SESSION['role']=='admin'):?>
        <a href="admin.php">бесплатная админка</a>
        <?php endif;?>
</header>
    
    <HEader>
<button class="btn btn-glitch  .btn-glitch::before ">никита</button>
    </HEader>
    <main>
        <div class="container">

       
          