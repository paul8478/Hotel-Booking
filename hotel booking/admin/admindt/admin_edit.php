<?php require_once("admin_config.php"); 
$id=$_GET['id']; 
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="univarsal.css">
<link rel="stylesheet" type="text/css" href="edit.css">

	<title>edit</title>
</head>
<body>
	<?php
		if(isset($_POST['update_submit']))
		{	
    $name=$_POST['name'];
    $email=$_POST['email'];
	$password = md5($_POST['password']);
 $user_type = $_POST['user_type'];

if(!isset($error))
{
	
		$res=mysqli_query($db,"SELECT* from user_form WHERE id=$id limit 1");
$result=mysqli_query($db,"UPDATE user_form SET name='$name', email='$email', password='$password', user_type='$user_type' WHERE id=$id"); 

	
if($result)
{
 header("location:admin_index.php?action=saved");
}
else 
{
	echo 'Something went wrong'; 
}
}
		}


if(isset($error)){ 

foreach ($error as $error) { 
	echo '<div class="message">'.$error.'</div><br>'; 	
}

}
$result=mysqli_query($db,"SELECT* from user_form WHERE id=$id limit 1");
if($row=mysqli_fetch_array($result)) 
{
	
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password']; 
	$user_type=$row['user_type'];
	echo '<div class="box"><span>ID :'.$row['id'].'</span><br>'; 
	echo '<span>NAME: '.$row['name'].'</span><br>';
	echo '<span>URL :'.$row['email'].'</span><br>';
	echo '<span>IMDB: '.$row['password'].'</span><br>';
	echo '<span>USER: '.$row['user_type'].'</span><br></div>';
	
}
	?> 

	<?php if(isset($update_sucess))
		{
		echo '<div class="success">Image Updated successfully</div>'; 
		} ?>
		<a href="curser_index.php"><button class="b-bk-btn"><span class="g-bk">⬅<span></button></a>
    <form class="form-container" action="" method="POST" enctype="multipart/form-data">
    <table border="0">
	<tr> 
    <td><label>Id:</label></td>
	<td><input type="id" name="id"></td>
	<tr>
	<tr>
    <td><label>Name</label></td>
	<td><input type="text" name="name"></td>
	</tr>
	<tr>
    <td><label>EMAIL</label></td>
	<td><input type="email" name="email"></td>
	</tr>
	<tr>
	<td><label>password</label></td>
	<td><input type="password" name="password"></td>
	</tr>
	<td><label for="status">Status:</label></td>
	<td>
    <select name="user_type">
    <option value="admin">admin</option>
	<option value="not-admin">not-admin</option>
    </select>
	</td>
	<tr>
		<td></td>
	<td><button name="update_submit" class="btn-primary">Update </button></td>
	</tr>
	</table>	
    </form>

</body>
</html>