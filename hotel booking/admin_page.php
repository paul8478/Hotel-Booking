<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin.css">

</head>
<body class="bk">
   
<div class="container">

   <div class="content">
      <div class="bak1">
      <h1><center>CONTROL PANEL</center><span style="float:right;padding-right: 10px;">ADMIN: <?php echo $_SESSION['admin_name'] ?></span></h1>
      
      </div>
      
<div >
      <div class="back2">
      
      <a href="admin_logout.php"><button class="btn">Logout</button></a>
      </div>
      
      <br><br>
      <center>
       <h1 class="control-heading">ADMIN PANEL</h1><br><br>
      <a href="admin/room-data/curser_index.php"><button class="pad">All Data</button></a>&nbsp
      <a href="admin/admindt/admin_index.php"><button class="pad">Admin logins</button></a>
      
      
      <center>
</div>
</body>
</html>