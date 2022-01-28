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
setcookie("fname","faraz",86400,'');   
echo $_COOKIE["fname"];
if(isset($_POST['login']))
{
    $username= $_POST['username'];
    $password = $_POST['password'];
    if($username == "faraz" && $password == "123")
    {
        $_SESSION["user"] = $username; 
        //redirect to next page
        header("Location:index.php");
    }
    else
    {
        echo 'invalid login';
    }
}

?>
    <form action="page4.php" method="post">
    <input type="text" name="username"/>
    <input type="password" name="password"/>
    <input type="submit" name="login" value="Login" />
    </form>

</body>
</html>