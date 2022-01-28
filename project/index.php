<?php
session_start();
?>
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
$res=0;
if(isset($_POST['sub']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $res = $num1 + $num2;
}

?>
<form action="index.php" method="post">
    <h1>Welcome user <?php echo $_SESSION["user"]  ?>  </h1>
<input type="number" name="num1"/>
<input type="number" name="num2"/>
<input type="submit" name="sub" value="+"/>
<input type="text" value="<?php echo $res  ?>" disabled/>
</form>








</body>
</html>