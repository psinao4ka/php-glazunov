<?php  require_once ("header.php");?>
<?php  require_once ("db.php");?>
<?php
    $sql='SELECT * FROM `mamanikiti2`';
    $result = mysqli_query($mysqli,$sql);
?>
            <table>
    <thead>
        <tr>
            <th>id</th>
            <th>login</th>
            <th>email</th>
            <th>role</th>
            <th>присвоить роль читателя</th`>
        
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)):?>
            <tr>
                <th><?php echo $row ['ID'];?></th>
                <th><?php echo $row ['login'];?></th>
                <th><?php echo $row ['email'];?></th>
                <th><?php echo $row ['role'];?></th>
                <th><a href="query.php?role=<?=$row['ID'];?>">замечательно</a></th>
                
                
               
            </tr>
        <?php endwhile;?>
    </thead>
</table>


<?php  require_once ("footer.html");?>