<?php require_once("admin_config.php"); 
$id=$_GET['id'];

$result=mysqli_query($db,"DELETE from user_form WHERE id=$id") ; 
if($result)
{
	 header("location:admin_index.php?action=deleted");
}
?>