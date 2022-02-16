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
if(isset($_POST['sub']))
{
$imgname = $_FILES['img_upload']['name'];
$imgsize = $_FILES['img_upload']['size'];
$imgtype = $_FILES['img_upload']['type'];
$img_temp = $_FILES['img_upload']['tmp_name'];
    if($imgtype=="image/png"||$imgtype=="image/jpeg"||$imgtype=="image/jpg")
    {
        $query="insert into img values(null,'$imgname','$imgsize','$imgtype',null,null) ";
        move_uploaded_file($img_temp,'img/'.$imgname);
        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo 'inserted';
        }
        else
        {
            echo 'error';
        }
    }
    else
    {
        echo 'invalid';
    }
}

$q_select ="select * from img";
$res = mysqli_query($conn,$q_select);
echo '<table border=1>';
echo '<tr>';
echo '<th>image name</th>';
echo '<th>file name</th>';
echo '<th>Type</th>';
echo '</tr>';
while($row=mysqli_fetch_array($res))
{
    echo '<tr>';
    echo '<td>'.'<img src="img/'.$row['img_name'].'" width="100" height="100" />' .'</td>';
    echo '<td>'.$row['img_name'].'</td>';
    echo '<td>'.$row['img_extension'].'</td>';
    echo '</tr>';
}
echo '</table>';
// if(isset($_POST['updated']))
// {
//     $dt = date("Y-m-d H:i:s");;
//     $q="update img set updated_at='$dt' where img_id=4 ";
//     $result = mysqli_query($conn,$q);
//     if($result)
//     {
//         echo 'inserted';
//     }
//     else
//     {
//         echo 'error';
//     }
// }


?>

<form action="img.php" enctype="multipart/form-data" method="post">
<input type="file" name="img_upload"/>
<input type="submit" name="sub"/>
<input type="submit" name="updated" value="update"/>
</form>

</body>
</html>