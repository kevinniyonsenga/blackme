
<?php
include("form.php");
if(isset($_GET['deleteid'])){
  $id=$_GET['deleteid'];
  
$sql="delete from form where id=$id";
$result=mysqli_query($con,$sql);
if($result){
	header('location:usercontrol.php');
}
else{
	die("connection error");
}

}
?>