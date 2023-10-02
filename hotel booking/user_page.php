
<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/homess.css">
        <link rel="stylesheet" href="css/movie-info.css">  
        <link rel="stylesheet" href="css/card99.css">  
        <link rel="stylesheet" href="css/mix.css">
        <link rel="stylesheet" href="css/new.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/slick.css" />
        <link rel="stylesheet" href="css/slick-theme.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/ncard.css" />


        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      
    </head>
    <body style="background-color:white;"> 
    <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="bo  gradient-border" >
                          
              <div class="log-out"><center><img src="images/home/man.png" width="60px"></center><p style="font-weight: bold;"><?php echo $fetch_info['name'] ?></p><a href="logout-user.php"> <button class="log-out-bt">Logout</button></div></a>      
           </div>
           <center><br>
           <hr class="hr">
           <a href="h.php?type=Resort" style="padding-top:8px;font-size:16px;font-family:lato;">Resorts</a>
           <a href="h.php?type=Hotel" style="padding-top:8px;font-size:16px;font-family:lato;">Hotels</a>
           <a href="h.php?type=Lodge" style="padding-top:8px;font-size:16px;font-family:lato;">Lodges</a>
           <a href="h.php?type=Guest house" style="padding-top:8px;font-size:16px;font-family:lato;">Guest House</a>
<br><br>
            <a href="account.php" style="padding-top:12px;font-size:16px;font-family:lato;">Faq</a>
            <a href="wishlist.html" style="padding-top:8px;font-size:16px;font-family:lato;">Privacy Policy </a>
            <a href="wishlist.html" style="padding-top:8px;font-size:16px;font-family:lato;">Terms of Use</a>
</center>
        </div>
        
        <!---- navbar------>
        <div class="nav-div">
            <p>&nbsp</p>
        <div class="navbarr">
          <div class="fiy">
          <a class="more" onclick="openNav()"><img src="images/home/menu.png" heigth="15px" width="26px"></a>            
              <a href=""></a>
              <a href="about.php"><b>About</b></a>
              <a href="cities.php"><b>Cities</b></a>            
              <a href="cat-view.php?type=flat"><b>Catalogs</b></a>
              <a href="search.php"><b>Search</b></a>             
              <a href="user_page.php"><b>Home</b></a>
              <a class="split"><img src="images/logo/logo.jpg" alt="logo" height="30vh"></a>  
              </div>         
              </div>
        </div>
        <!--- navbar end--->
        <div class="backup">
          
        </div>
        
        <div class="bg1-1">
         <div class="bg1">
         <div class="block-container">
           <div class="block1">
            <h1 class="txt1 nz">WELCOME TO &nbsp <span class="vf">TravelNest<span></h1>
            <h5 style="color:white;width:60%;text-align:center;margin: auto;">Travel far, travel wide, find a place where you can reside. Discover the magic of a perfect stay, book your hotel and let your worries fade away.</h5>
            <br><br>
           
           </div>
         <!-- Add the second block here -->
          
         </div>
          </div>
        </div> 

        <h1 class="ofr">CHOOSE YOUR CITY</h1>
        <p class="ofrp">Plan & book your new destination for you adventure<p>

        <div class="bg11">
          
        <div class="boxy">
    <img src="images/main/kolkata.jpg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Kolkata<span> <a href="citi-filter.php?city=Kolkata"><button style="float:right;">Book Now</button></a></p>

  </div>
  
  <div class="boxy">
    <img src="images/main/delhi.jpg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Delhi<span> <a href="citi-filter.php?city=Delhi"><button style="float:right;">Book Now</button></a></p>
  </div>
  
  <div class="boxy">
    <img src="images/main/bangalore.jpg" alt="double Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Bangalore<span> <a href="citi-filter.php?city=Bangalore"><button style="float:right;">Book Now</button></a></p>

  </div>

  <div class="boxy">
    <img src="images/main/pune.jpeg" alt="double Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Pune<span> <a href="citi-filter.php?city=Pune"><button style="float:right;">Book Now</button></a></p>

  </div>
        </div>
        <br>
        <center><div><img src="images/home/down.png" width="3%"></div></center>
        <br>
        <!--- background 1--->
<div class="back3">
<div class="rw">
<div class="col">
    <h4 class="zen">Find Your resorts for you vacation</h4>
    <p class="font-1">We help you discover the perfect resorts for your upcoming vacation. Whether you're planning a relaxing beach getaway, an adventurous mountain retreat, or an indulgent spa experience, our website is your one-stop destination to find the ideal resort that suits your preferences.
<br><br>
We understand that everyone has unique vacation preferences, and that's why we provide detailed resort descriptions, high-quality images, and customer ratings to help you make an informed decision. Our user-friendly interface allows you to compare different resorts side by side, enabling you to find the one that aligns perfectly with your vacation vision.
</p>
<a href="about.php"><button class="button-abc">Read more</button></a>
  </div>
  <div class="col">
    <div class="pic-bag">
      <br>
      <center><iframe width="95%" height="300px" src="https://www.youtube.com/embed/dTdPKzZRSZ4?showinfo=0" class="ifm"></iframe></center>

      </iframe></center>
    </div>  

  </div>
  <br>
  
  </div><br><br>
  </div>
  
  </div>

</div>
<hr class="hr">
        <!--- card start---> 
<div class="back2">



<br>
  <!--------------- HOTEL HOUSE ---------------->

  <center><span class="sino">HOTELS ROOMS</span></center>
  <table>
  <tr>
  <td width="0">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 0");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i> Location : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 0");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>



<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 1");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 1");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>
			
        
        
<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 2");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 2");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>

        
<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 3");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Hotel' ORDER BY id DESC LIMIT 1 OFFSET 3");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>
			</tr>
	</table>



  <!--------------- FLAT ---------------->
<br>
  <center><a href="cities.php"><span class="sino">Some places for making trips</span></a><center><br>
  <div class="n-dicc-main">
    <div class="n-dicc">
    <div class="boxy">
    <img src="images/main/mumbai.jpg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Mumbai<span> <a href="citi-filter.php?city=Mumbai"><button style="float:right;">View Now</button></a></p>

  </div>
  
  <div class="boxy">
    <img src="images/main/delhi.jpg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Delhi<span> <a href="citi-filter.php?city=Delhi"><button style="float:right;">View Now</button></a></p>
  </div>
  
  <div class="boxy">
    <img src="images/main/bangalore.jpg" alt="double Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Bangalore<span> <a href="citi-filter.php?city=Bangalore"><button style="float:right;">View Now</button></a></p>

  </div>

  <div class="boxy">
    <img src="images/main/hydrabad.jpg" alt="double Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Hyderabad<span> <a href="citi-filter.php?city=Hyderabad"><button style="float:right;">View Now</button></a></p>

  </div>
  <div class="boxy">
    <img src="images/main/chennai.jpeg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Chennai<span> <a href="citi-filter.php?city=Chennai"><button style="float:right;">View Now</button></a></p>

  </div>
  
  <div class="boxy">
    <img src="images/main/Ludhiana.jpeg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Ludhiana<span> <a href="citi-filter.php?city=Ludhiana"><button style="float:right;">View Now</button></a></p>
  </div>
  
  <div class="boxy">
    <img src="images/main/patna.jpeg" alt="double Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Patna<span> <a href="citi-filter.php?city=Patna"><button style="float:right;">View Now</button></a></p>

  </div>

  <div class="boxy">
    <img src="images/main/surat.jpeg" alt="double Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Surat<span> <a href="citi-filter.php?city=Surat"><button style="float:right;">View Now</button></a></p>

  </div>

    </div>
            </div>  
 <br>

 <div class="n-dicc-main-x">
      <div class="n-dicc-y">
      <p id="demo" style="font-size:2rem; font-weight:bold;font-family:lato;color:red;"></p>
<li class="bx">Up to 30% Off</li>
<li class="bx">on Booking</li>
<button class="h-butt">Book online now</button>
      </div>

</div>
  <hr class="hr"><br>
  <div class="w3-content" style="max-width:1100px;">

<!-- Good offers -->
<div class="w3-container w3-margin-top">
<center><a href="room.php?type=flat"><span class="sino">Visit some beautiful places Around India</span></a><center><br>
</div>
<div class="w3-row-padding w3-text-white w3-large">
  <div class="w3-half w3-margin-bottom">
    <div class="w3-display-container">
      <img src="https://hippie-inheels.com/wp-content/uploads/2018/03/taj-mahal-places-to-visit-in-india-1024x678.jpg" alt="Cinque Terre" style="width:100%;height:395px;">
      <span class="w3-display-bottomleft w3-padding">Agra</span>
    </div>
  </div>
  <div class="w3-half">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="https://www.holidify.com/images/tooltipImages/UDAIPUR.jpg" alt="New York" style="width:100%;height:190px;">
          <span class="w3-display-bottomleft w3-padding">Ahmedabad</span>
        </div>
      </div>
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="https://static-blog.treebo.com/blog/wp-content/uploads/2018/06/Khajuraho.jpg" alt="San Francisco" style="width:100%;height:190px;">
          <span class="w3-display-bottomleft w3-padding">Madhya Predesh</span>
        </div>
      </div>
    </div>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2015/07/Nohkalikai-Falls-Cherrapunji.jpg" alt="Pisa" style="width:100%;height:190px;">
          <span class="w3-display-bottomleft w3-padding">Shillong</span>
        </div>
      </div>
      <div class="w3-half w3-margin-bottom">
        <div class="w3-display-container">
          <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/01/Gulmarg.jpg" alt="Paris" style="width:100%;height:190px;">
          <span class="w3-display-bottomleft w3-padding">Sikkim</span>
        </div>
      </div>
    </div>
  </div>
</div>
  <br>
  </div>
  
  </div><br>
      <!------------------Luxurious resort------------------>

<div class="back-4">
<center><span class="sino">Luxuary Resorts</span></center>

<table>
  <tr>
  <td width="0">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 0");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i> Location : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 0");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>



<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 1");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 1");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>
			
        
        
<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 2");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 2");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>

        
<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 3");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Resort' ORDER BY id DESC LIMIT 1 OFFSET 3");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>
			</tr>
	</table>
<br>

    <!------------------Luxurious Guest Houses------------------>
    <center><span class="sino">Luxurious Guest Houses</span></center>
<br>
<table>
  <tr>
  <td width="0">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 0");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i> Location : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 0");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 0");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>



<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 1");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 1");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 1");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>
			
        
        
<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 2");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 2");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 2");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>

        
<td width="250px">
    <div class="img-news"><?php
        $con = mysqli_connect('localhost','root','','hotel-booking');
        if(isset($_POST))
        {
            $res=mysqli_query($con,"SELECT image FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 3");
            while($row=mysqli_fetch_array($res))
            {
                echo '<img src="admin/room-data/'.$row['image'].'" width="250px" height="190px">';
                ?><?php
            } 
        }
    ?></div>
    <div class="f-card-det">
        <li style="text-align: center;"> <span class="f-card-name"><?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT h_name FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['h_name'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a"><i class="fa fa-map-marker"></i>Address : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT s_address FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['s_address'].'';
                    ?><?php
                } 
            }
        ?></span></li>
        <li style="text-align: center;">  <span class="f-card-a">Price : <?php
            $con = mysqli_connect('localhost','root','','hotel-booking');
            if(isset($_POST))
            {
                $res=mysqli_query($con,"SELECT price FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 3");
                while($row=mysqli_fetch_array($res))
                {
                    echo ''.$row['price'].'';
                    ?><?php
                } 
            }
        ?></span> </li>
        
        <li style="text-align: center;">
            <span style="margin:auto;">
            <?php
                $con = mysqli_connect('localhost','root','','hotel-booking');
                if(isset($_POST))
                {
                    $res=mysqli_query($con,"SELECT id FROM room WHERE type = 'Lodge' ORDER BY id DESC LIMIT 1 OFFSET 3");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo '<a href="view-card.php?data='.$row['id'].'"><button class="f-card-button">
                        More
                        </button></a>';
                        ?><?php
                    } 
                }
            ?>
            </span>
        </li>
    </div>
</td>
			</tr>
	</table>
<br>
 



</div>
<div class="apple">
<div class="w3-container" id="contact">
<center><span class="sino">Get in touch</span></center>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Chicago, US
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +00 151515
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: mail@mail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div> 
<br><br> 
<footer>
<div class="footer2">   
  <div class="footer-container">
    <div class="footer-left">
      <h3 style="font-weight: bold;">Contact Us</h3>
      
      <p>Phone: 123-456-7890</p>
      <p>Phone: 123-456-7890</p>
      <p>Email: info@yourcompany.com</p>
      <p>Email: info@yourcompany.com</p>
    </div>
    <div class="footer-center">
    <h3 style="font-weight: bold;">Location</h3>
      <p>1600 Amphitheatre Parkway Mountain View, CA 94043 United States of America</p>
      </form>
    </div>
    <div class="footer-right">
      <h3 class="sm" style="font-weight: bold;">Social media</h3>
      <ul class="s">
        <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-twitter"></a></li>
        <li><a href="#" class="fa fa-linkedin"></a></li>
        <li><a href="#" class="fa fa-youtube"></a></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>Copyright © 2023 Your Company.
    <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
  </div>
</div>   
</footer>


<!-- Footer End -->
    
          <!--- card end--->  
   
        <script src="js/home.js"></script>
        <!-- js files  -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick-animation.min.js"></script>
        <script src="js/main.js"></script>
        <script>
          function myFunction() {
  alert("Your reservation has ben sumitted sucessfully");
          }
        </script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("July 13, 2023 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

        <script src="js/app.js"></script>
        <script src="js/data.js"></script>
        <!-- js files ends  -->
              
    </body>
</html>
