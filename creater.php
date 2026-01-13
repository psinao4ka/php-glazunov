<?php  require_once ("header.php");?>
<form action="query.php" method="post">
     <input type="hidden" name="creat" id="first_name">
<label for="first_name">введите фамилию</label>

    <input type="text" name="first_name" id="first_name">
    <label for="IDname">введите имя</label>
    <input type="text" name="name" id="IDname">
    <label for="IDlast_name">введите отчество</label>
    <input type="text" name="last_name" id="IDlast_name">
    <label for="email">введите email</label>
    <input type="email" name="emal" id="email">
    <label for="telefon">введите  телефон</label>
    <input type="tel" name="telefon" id="telefon">
    <label for="adres">введите адрес</label>
    <textarea name="adres" id="adres"></textarea>
    <button type="submit">отправить</button>
</form>

<?php  require_once ("footer.html");?>