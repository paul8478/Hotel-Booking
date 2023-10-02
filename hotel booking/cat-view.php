<?php
// Connect to the database
$con=mysqli_connect('localhost','root','','hotel-booking');
// Check connection
if(!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/cat.css">
        <link rel="stylesheet" href="css/new3.css">
        <link rel="stylesheet" href="css/search-php.css">
        <link rel="stylesheet" href="css/view.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

          </style>

      
        
        
</head>
<body>

<!---- navbar------>
<div class="nav-div">
            <p>&nbsp</p>
        <div class="navbarr">
          <div class="fiy">
          <a href="about.php"><b>About</b></a>
              <a href="cities.php"><b>Cities</b></a>            
              <a href="cat-view.php?type=flat"><b>Catalogs</b></a>
              <a href="search.php"><b>Search</b></a>             
              <a href="user_page.php"><b>Home</b></a>
              <a class="split"><img src="images/logo/logo.jpg" alt="logo" height="30vh"></a>  
              </div>         
              </div>
        </div>     
        





  <div class="contxx">
    <h2 style="text-align:center;font-family:system-ui;">Catalogs</h2><br>
  <div class="hk">

  <div class="boxy">
    <img src="https://c4.wallpaperflare.com/wallpaper/380/315/704/beach-hotel-room-wallpaper-preview.jpg" alt="Single Room" height="160px" width="50%">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Hotels<span> <a href="h.php?type=Hotel"><button style="float:right;">Book Now</button></a></p>
  </div>

  <div class="boxy">
    <img src="https://travel.usnews.com/dims4/USNEWS/5cd1744/2147483647/resize/800x600%5E%3E/crop/800x600/quality/85/?url=https%3A%2F%2Ftravel.usnews.com%2Fimages%2FOneOnly_Ocean_Club_Bahamas_usn_2.jpg" alt="Single Room" height="160px" width="200px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Resorts<span> <a href="h.php?type=Resort"><button style="float:right;">Book Now</button></a></p>
  </div>
  <div class="boxy">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/d8/1e/6f/big-sur-lodge.jpg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Lodges<span> <a href="h.php?type=Lodge"><button style="float:right;">Book Now</button></a></p>
  </div>
  <div class="boxy">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/10/95/fc/0c/jon-jen-guesthouse-conference.jpg" alt="Single Room" height="160px">
    <p><span class="sn"><i class="fa fa-map-marker"></i>Guest House<span> <a href="h.php?type=Guest house"><button style="float:right;">Book Now</button></a></p>
  </div>
  
  </div> 
  </div>
<br><br><br>
  <footer>
<div class="footer2">   
  <div class="footer-container">
    <div class="footer-left">
      <h3 style="font-weight: bold;">Contact Us</h3>
      
      <a style="color:black;">Phone: 123-456-7890</a><br>
      <a style="color:black;">Phone: 123-456-7890</a><br>
      <a style="color:black;">Email: info@yourcompany.com</a><br>
      <a style="color:black;">Email: info@yourcompany.com</a>
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
    <a href="#" style="color:black;">Privacy Policy</a> | <a href="#" style="color:black;">Terms of Use</a></p>
  </div>
</div>   
</footer>



<script src="js/home.js"></script>
</body>
</html>
