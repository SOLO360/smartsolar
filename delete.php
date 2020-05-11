<?php
include('session.php');
$id = base64_decode($_GET['id']);
include 'includes/conection.php';
$sql = "DELETE FROM staff WHERE id = '$id'";
$rn = mysqli_query($conn,$sql);
if ($rn) {
  header("location:admin.php");
}else {
  echo "failed to delete";
}
 ?>
