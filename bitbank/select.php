<?php
$conn = mysqli_connect("localhost","root","","bank");
$query="select * from user_register order by userid desc";

$result = mysqli_query($conn,$query);
echo '<table border=1>';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
echo '<th>Username</th>';
echo '<th>Password</th>';
echo '<th>Gender</th>';
echo '<th>Delete</th>';
echo '<th>Update</th>';
echo '</tr>';
while($row=mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td>'.$row['fname'].'</td>';
echo '<td>'.$row['lname'].'</td>';
echo '<td>'.$row['email'].'</td>';
echo '<td>'.$row['username'].'</td>';
echo '<td>'.$row['password'].'</td>';
echo '<td>'.$row['gender'].'</td>';
echo '<td>'.'<a href='.'delete.php?id='.$row['userid'].'>Delete</a>'.'</td>';
echo '<td><a href='.'update.php?id='.$row['userid'].'>update</a></td>';
echo '</tr>';
}
echo '</table>';

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
<form method="post">


<input type="submit" name="sub" />
</form>
<?php



?>

</body>
</html>