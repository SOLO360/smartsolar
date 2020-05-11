<?php
include('session.php');
include 'includes/conection.php';
$id = base64_decode($_GET['id']);

$sql = "SELECT * FROM staff WHERE id='$id'";

$rn = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($rn);

if (isset($_POST['update'])){
  //path to the img folder
  $path = "img/".basename($_FILES['image']['name']);


  //submited data of the form
  $user =$_POST['user'];
  $pass =md5($_POST['pass']);
  $addres =$_POST['address'];
  $img = $_FILES['image']['name'];

 $sql2 = "UPDATE staff SET  username = '$user', password = '$pass', address = '$addres', image = '$img' WHERE id = '$id'";
 $run = mysqli_query($conn, $sql2);
if($run){
  move_uploaded_file($_FILES['image']['tmp_name'],$path);
  echo "Update succesfully";
  header("refresh:2; url= admin.php");
  die();
}else {
  echo "failed to update the data";
}
}
 ?>
<html>
<head>
<title></title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
<label>Username</label>
<input type="text" name="user" value="<?php echo $row['username'];?>" autocomplete="off" >

<label>Password</label>
<input type="password " name="pass" value="<?php echo $row['password'];?>">

<label>address</label>
<input type="text "  name="address" value="<?php echo $row['address'];?>">

<span class="label label-default">Upload</span>
<input type="file" name="image">

<input type="submit" name="update" value="update">

</form>
</body>
</html>
