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
if (isset($_GET['никита'])){
// var_dump($_GET['никита']);

$ultrakill=explode(' ',$_GET['никита']);
UnFunc($ultrakill);

echo implode(' ', $ultrakill);

}
function UnFunc(&$ultrakill){
for ($i=0;$i<count($ultrakill);$i++){
    if(($i % 2)>0){
        $ultrakill [$i] = strtoupper($ultrakill[$i]);
    }
}

}