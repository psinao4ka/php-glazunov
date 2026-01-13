<?php require ('db.php');?>
<?php require ('header.php');?>
<?php
$sql = "SELECT * FROM `mamanikiti` WHERE `id`=".$_GET['id'];
$result = mysqli_query ($mysqli,$sql);
if (mysqli_errno($mysqli)) echo mysqli_error($mysqli);
$row = mysqli_fetch_assoc ($result);
?>

<style>
body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background-color: #00eeffff;
    padding: 20px;
    margin: 0;
}

.form-box {
    max-width: 550px;
    margin: 0 auto;
    background: white;
    padding: 28px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
}

.field-row {
    display: flex;
    align-items: center;
    margin-bottom: 16px;
}

.field-label {
    width: 110px;
    text-align: right;
    font-weight: 500;
    padding-right: 16px;
    color: #444;
}

.field-value {
    flex: 1;
    padding: 10px 14px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 15px;
    background-color: #f9f9f9;
    color: #333;
    min-height: 38px;
    display: flex;
    align-items: center;
}

.back-btn {
    display: block;
    margin-left: 126px;
    margin-top: 12px;
    padding: 11px 26px;
    background-color: #34363869;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 15px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s, transform 0.15s;
    text-decoration: none;
    text-align: center;
    width: fit-content;
}

.back-btn:hover {
    background-color: hsla(172, 100%, 50%, 1.00);
    transform: translateY(-1px);
}

.back-btn:active {
    transform: translateY(0);
}

.card-title {
    text-align: center;
    color: #44433dff;
    margin-bottom: 24px;
    font-size: 24px;
    font-weight: 600;
}
</style>

<div class="form-box">
    <div class="card-title">Карточка друга</div>
    
    <div class="field-row">
        <div class="field-label">Фамилия:</div>
        <div class="field-value"><?= htmlspecialchars($row['first_name'] ?? '') ?></div>
    </div>
    
    <div class="field-row">
        <div class="field-label">Имя:</div>
        <div class="field-value"><?= htmlspecialchars($row['name'] ?? '') ?></div>
    </div>
    
    <div class="field-row">
        <div class="field-label">Отчество:</div>
        <div class="field-value"><?= htmlspecialchars($row['last_name'] ?? '') ?></div>
    </div>
    
    <div class="field-row">
        <div class="field-label">Телефон:</div>
        <div class="field-value"><?= htmlspecialchars($row['phone'] ?? '') ?></div>
    </div>
    
    <div class="field-row">
        <div class="field-label">E-mail:</div>
        <div class="field-value"><?= htmlspecialchars($row['mail'] ?? '') ?></div>
    </div>
    
    <div class="field-row">
        <div class="field-label">Адрес:</div>
        <div class="field-value"><?= htmlspecialchars($row['adres'] ?? '') ?></div>
    </div>
    <a href="update.php?id=<?=$row['ID'];?>" class="back-btn" type="submit">добавить друга</a> 
     <a href="delete.php?id=<?=$row['ID'];?>" class="back-btn" type="submit">удалить друга</a>
    <div class="field-row">
     

        <form action="" method="post">
            <div class="field-row">
                <label class="field-label" for="idcomment">Оставьте коментарий</label>
                <textarea class="field-value" style="width: 396px" name="idComment" id="idComment"></textarea>
            </div>
            <button class="back-btn" type="submit">Отравить</button>
        </form>
    </div>
    <a href="javascript:history.back()" class="back-btn">← Назад</a>
</div>

<?php require ('footer.html');?>