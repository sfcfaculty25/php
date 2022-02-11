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

include 'connection.php';
$query="delete from user_register where userid=".$_GET['id'];
$result = mysqli_query($conn,$query);

if($result)
{
    header("Location:select.php");
}

?>
</body>
</html>