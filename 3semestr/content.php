<?php  require_once ("header.php");?>
<?php  require_once ("db.php");?>
<?php
    $sql='SELECT * FROM mamanikiti';
    $result = mysqli_query($mysqli,$sql);
?>
            <table>
    <thead>
        <tr>
            <th>фамилия</th>
            <th>имя</th>
            <th>отчество</th>
            <th>номер телефона</th>
            <th>почта</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)):?>
            <tr>
                <th><a href="card.php?id=<?=$row['ID'];?>"><?php echo $row ['first_name'];?></a></th>
                <th><?php echo $row ['name'];?></th>
                <th><?php echo $row ['last_name'];?></th>
                <th><?php echo $row ['phone'];?></th>
                <th><?php echo $row ['email'];?></th>
            </tr>
        <?php endwhile;?>
    </thead>
</table>


<?php  require_once ("footer.html");?>