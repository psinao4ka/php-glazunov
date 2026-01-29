<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
       <form action="" method="get">
        <label for="prime">никита</label>
        <input type="text" name="primer" id="gta">
      <button type="submit">тыкни мне</button>
       </form>
    </main>
</body>
</html>
<?php
if(isset($_GET['primer'])&& !empty($_GET['primer'])){
$primer= $_GET['primer'];
echo "<b>$primer</b>";
$arr=explode(' ', $primer);
var_dump($arr);
// echo "<b>$primer</b>";

}