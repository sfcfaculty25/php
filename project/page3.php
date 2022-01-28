<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  
if(isset($_POST['sub']))
{  
    $txt = $_POST['txt'];
    echo $txt;
}
?>

<form action="page3.php" method="post">
<input type="text" name="txt"/>
<input type="submit" name="sub" value="insert"/>
</form>

</body>
</html>