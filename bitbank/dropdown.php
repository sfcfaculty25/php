<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="dropdown.php" method="post">
    <?php
include 'connection.php';

$query="select * from tbl_role";
$result = mysqli_query($conn,$query);
echo '<select name="abc">';
while($row=mysqli_fetch_array($result))
{
    echo '<option value='.$row['role_id'].'>'.$row['role_type'].'</option>';
}
echo '</select>';

if(isset($_POST['sub']))
{
    echo $_POST['abc'];
}

?>

<input type="submit" name="sub" value="get value"/>
</form>


</body>
</html>