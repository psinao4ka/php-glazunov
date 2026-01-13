<?php  require_once ("header.php");?>
<form action="query.php" method="post">
     <input type="hidden" name="singin" id="first_name">
<label for="first_name"></label>

   
    
    <label for="email">введите email</label>
    <input type="email" name="email" id="email">
    <label for="password">пароль</label>
    <input type="password" name="password" id="password">
    <button type="submit">отправить</button>
</form>

<?php  require_once ("footer.html");?>