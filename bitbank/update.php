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
    echo 'The id is : '.$_GET['id'];

    $query_select="select * from user_register where userid=".$_GET['id'];

   $result =  mysqli_query($conn,$query_select);

  $row=mysqli_fetch_array($result);
  
  if(isset($_POST['update']))
  {
    $uid = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $email = $_POST['email'];
$password =  password_hash($_POST['password'],PASSWORD_DEFAULT);

    $query_update="update user_register set fname='$fname',lname='$lname',gender='$gender', username='$username',password='$password' where userid='$uid' ";

    $result=mysqli_query($conn,$query_update);

    if($result)
    {
      header("Location:select.php");
    }
    else{
      echo 'error';
    }
  }

?>

<form action="update.php" method="post">
<input type="hidden" name="uid" value="<?php echo $row['userid']  ?>" />
<label>First Name</label>
<input type="text" name="fname" value="<?php echo $row['fname']  ?>" />
<br/>
<label>Last Name</label>
<input type="text" name="lname" value="<?php echo $row['lname']  ?>" />
<br/>
<label>Email</label>
<input type="text" name="email" value="<?php echo $row['email']  ?>" />
<br/>
<label>Username</label>
<input type="text" name="username" value="<?php echo $row['username']  ?>" />
<br/>
<label>Gender</label>
<input type="text" name="gender" value="<?php echo $row['gender']  ?>" />
<br/>
<label>Password</label>
<input type="password" name="password" value="<?php echo $row['password']  ?>" />
<input type="submit" name="update" value="update" />

</form>

</body>
</html>