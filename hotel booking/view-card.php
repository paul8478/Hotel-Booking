<?php
// MySQLi connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel-booking";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/card-view.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


  <link rel="stylesheet" href="css/sal2.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1365780276549125"
     crossorigin="anonymous"></script>

    <title>room</title>

</head>
<body>

<div class="navbarr">       
<a class="split"><img src="images/logo/logo.jpg" alt="logo" height="30vh"></a> 
<a href="about.php"><b>About</b></a>
              <a href="cities.php"><b>Cities</b></a>            
              <a href="cat-view.php?type=flat"><b>Catalogs</b></a>
              <a href="search.php"><b>Search</b></a>             
              <a href="user_page.php"><b>Home</b></a>
</div>
<br><br><br>

<?php
// Query the database
$data = $_GET['data'];
$sql = "SELECT * FROM room WHERE id=$data";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="section">
      <div class="item">
        <!-- Content for the first section -->
        <div class="container">
        <img id="myImg" src="admin/room-data/'.$row['image'].'" alt="Snow" style="width:100%;height:200px;max-width:300px;padding:5px;">

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <span class="close">&times;</span>
          <img class="modal-content" id="img01" width="600px;">
          <div id="caption"></div>
        </div>
        <img id="myImg2" src="admin/room-data/'.$row['image_2'].'" alt="Snow" style="width:100%;height:200px;max-width:300px;padding:5px;">

      <!-- The Modal -->
      <div id="myModal2" class="modal">
        <span class="closee">&times;</span>
        <img class="modal-content" id="img02" width="600px;">
        <div id="caption"></div>
      </div>
      <img id="myImg3" src="admin/room-data/'.$row['image_3'].'" alt="Snow" style="width:100%;height:200px;max-width:300px;padding:5px;">

      <!-- The Modal -->
      <div id="myModal3" class="modal">
        <span class="closee3">&times;</span>
        <img class="modal-content" id="img03" width="600px;">
        <div id="caption"></div>
      </div>
      <img id="myImg4" src="admin/room-data/'.$row['image_4'].'" alt="Snow" style="width:100%;height:200px;max-width:300px;padding:5px;">

      <!-- The Modal -->
      <div id="myModal4" class="modal">
        <span class="closee4">&times;</span>
        <img class="modal-content" id="img04" width="600px;">
        <div id="caption"></div>
      </div>
  
   
  
    
 
  
    
  </div>';
      echo '  </div>
      <div class="item23">
        <!-- Content for the second section -->
           <div class="hx">
              <div class="lou">
                <div class="cuk">
                <dt style="color:#0062cc">'.$row['h_name'].'</dt>
                <dt style="font-size:12px;color:green;">✅ <span style="font-size:15px;">Double bed</span> </dt>
                <dt style="font-size:12px;color:green;">✅ Free Cancellation till 24 hrs before check in</dt>
                <dt style="font-size:12px;color:green;">✅ Room With Free Cancellation</dt>
                </div>
                <div class="vl"></div>


                <div class="cuk2">
                <dt>Per Night</dt>
                <dt style="color:#0062cc">₹  '.$row['price'].'</dt>
                <dt>+ ₹ 480 taxes & fees</dt>
                </div>
              </div>
              <hr class="hr">

              <div class="fv">
                <div class="j">
                <a style="font-weight:bold;color:#0062cc;">View other rooms</a>
                </div>
                <div class="k">
                <button class="s"><center>BOOK THIS NOW</center></button>
                </div>
              </div>
            </div>
            <br>
        <div class="hx2">
        <div class="t">
        <iframe src="'.$row['geo_location'].'" width="100%" height="100%" style="border:none;border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
<br>
        <div class="u">
        <h2 style="font-weight:bold;font-size:4em;padding-left:15px;color:green;color:white;">4.5</h2>
        
        <a style="font-weight:bold;font-size:1em;padding:15px;color:white;">Very Good</a><br>
        <a style="font-weight:bold;font-size:1em;padding:15px;color:white;">Based on 4657 Ratting</a>
        
        </div>
        
        </div>
        
        
     
      </div>
    </div>';
        echo '  <div class="vi-b1-2">
        <h2 style="font-variant: all-petite-caps;color:#0062cc;">'.$row['h_name'].'<span style="font-size:25px;"> '.$row['star'].'</span></h2>
        <p style="font-weight:bold;"><i class="fa fa-map-marker"></i> '.$row['s_address'].' - '.$row['city'].' | '.$row['l_address'].' | '.$row['ph_no'].' | '.$row['mail'].'</p>
        <div class="containerx">
      
            <div class="item2">
          <img src="images/home/fd.png">
            </div>
          </div>
          </div>
        
        
        
          <div class="containerl">
            <div class="text">
              <h2 style="font-variant: all-petite-caps;">ABOUT '.$row['h_name'].'</h2>
              <p style="text-align: justify;width:850px;">
              '.$row['details'].'</p>
              <img src="images/index/h.png">
            </div>';
        echo '<p class="text-jus"></p>';
    }
} else {
    echo "<p>Error: " . mysqli_error($con) . "</p>";
}

// Close the connection
mysqli_close($con);
?>







    
    <div class="pictures">
      <div class="picture" style="padding:40px;">
      <h2 style="font-variant: all-petite-caps;text-align:center;">RULES & REGULATION</h2>
      <center><h5>Property Rules</h5></center>
      <ul>
      <li style="font-size:12px;font-family:system-ui;">● Passport, Aadhar and Govt. ID are accepted as ID proof(s)</li>
      <li style="font-size:12px;font-family:system-ui;">● Pets are not allowed.</li>
      <li style="font-size:12px;font-family:system-ui;">● Allows private parties or events</li>
      <li style="font-size:12px;font-family:system-ui;">● Smoking within the premises is not allowed</li>
      </ul>  
      <center><h5>ID Proof Related</h5></center>
      <ul>
      <li style="font-size:12px;font-family:system-ui;">● Passport, Aadhar, Driving License and Govt. ID are accepted as ID proof(s)</li>
      <li style="font-size:12px;font-family:system-ui;">● Local ids are allowed</li>
      <center><h5>Guest Profile</h5></center>
      <ul>
        <li style="font-size:12px;font-family:system-ui;">● Unmarried couples allowed</li>
        <li style="font-size:12px;font-family:system-ui;">● Guests below 18 years of age are allowed</li>
      </ul>
     
      </ul>  
      </div>
    </div>
  </div>
 


<div class="row-container">
  <div class="left-box">
    <center>
    <!-- Content of the left box -->
    <h2 style="font-variant: all-petite-caps;color: rgb(82, 80, 80);">USER REVIEWS</h2>

    <div class="chat-container">
  <img src="images/home/man.png" alt="Avatar" style="width:40px;">
  <p style="text-align:justify;font-size:15px;"><a style="font-weight:bold;">Improvement needed</a><br><span style="color:#0062cc;font-weight:bold;">by Ramakant Murlidhar Chavan . Couple Traveller . Apr 17, 2023</span>
<br>
Washroom, toilet was very neat & clean & there is no single word to complaint. Even room was also neat & clean. Only one complaint on first day room ac was not working. Even after complaining, it was not rectified & we couldn't sleep through out night. Next day same was narrated to reception & they have exchanged my room after confirmation that ac was not working. Changed room was nice & we could enjoy the facility for next two days. So in all out of 3 days we could enjoy 2 days out of 3 days stay</p>
    </div>

    <div class="chat-container">
  <img src="images/home/man.png" alt="Avatar" style="width:40px;">
  <p style="text-align:justify;"><a style="font-weight:bold;">Best hotel </a><br><span style="color:#0062cc;font-weight:bold;"> by Manoj Kusher . Couple Traveller . Mar 10, 2022</span>
<br>
The hotel provided a lot of security and best service in tough goan social life. Food was really awsumm. Chef is best. People(staffs) were very polite and welcoming. And yes amenities were perfect and they were alot. Gymming area, play area, laptop desk with charger. Play area for kids. Car bike parking area. Lot of amenities were taken care of. Thank you ginger for making our stay sweet and happy.</p>
    </div>

    <div class="chat-container">
  <img src="images/home/man.png" alt="Avatar" style="width:40px;">
  <p style="text-align:justify;"><a style="font-weight:bold;">Decent budget hotel in a good location</a><br><span style="color:#0062cc;font-weight:bold;">by Kaira Anand Srinivas . Couple Traveller . May 16, 2023</span>
<br>
We liked the location of the hotel. They have a really good travel desk who will rent you activa’s for local sight seeing. The room was small but clean and the bathrooms were clean as well. The buffet spread is not large. However, the buffet is quite reasonable given the size. They have a gym, kids room and parking available inside the premises. Kind and helpful staff.</p>
    </div>

    <div class="chat-container">
  <img src="images/home/man.png" alt="Avatar" style="width:40px;">
  <p style="text-align:justify;"><a style="font-weight:bold;">The location is very good</a><br><span style="color:#0062cc;font-weight:bold;">by Rekha Sharma . Couple Traveller . Jan 19, 2023</span>
<br>
The hotel lobby was very spacious and has means of entertainment like tvs, games etc. We stayed there for almost 4 hours after checking out comfortably. The menu has limited options but the buffet breakfast is awesome. The room was small and average only. The receptionist named sonali helped us in delay checking out due to some engagements.</p>
    </div>
</center>
  </div>
</div>
<h4 style="font-variant: all-petite-caps;color: rgb(82, 80, 80);text-align:center;"><u>some Similar results</u></h4>

<div class="bg11" style="padding:50px;">
          
        <div class="boxy">
    <img src="images/main/single-room.jpg" alt="Single Room">
    <p><span class="sn" style="font-family:system-ui;"><i class="fa fa-map-marker"></i>Kolkata<span> <a href="room.php?type=Rent-house"><button style="float:right;">Book Now</button></a></p>

  </div>
  
  <div class="boxy">
    <img src="images/main/double-room.jpg" alt="Single Room">
    <p><span class="sn" style="font-family:system-ui;"><i class="fa fa-map-marker"></i>Goa<span> <a href="room.php?type=flat"><button style="float:right;">Book Now</button></a></p>
  </div>
  
  <div class="boxy">
    <img src="images/main/deluxe-room.jpg" alt="double Room">
    <p><span class="sn" style="font-family:system-ui;"><i class="fa fa-map-marker"></i>Karnataka<span> <a href="room.php?type=Paying-guest"><button style="float:right;">Book Now</button></a></p>

  </div>

  <div class="boxy">
    <img src="images/main/deluxe-room.jpg" alt="double Room">
    <p><span class="sn" style="font-family:system-ui;"><i class="fa fa-map-marker"></i>New Delhi<span> <a href="room.php?type=Paying-guest"><button style="float:right;">Book Now</button></a></p>

  </div>
        </div>



<footer>
<div class="footer2">   
  <div class="footer-container">
    <div class="footer-left">
      <h3 style="font-weight: bold;">Contact Us</h3>
      
      <a>Phone: 123-456-7890</a><br>
      <a>Phone: 123-456-7890</a><br>
      <a>Email: info@yourcompany.com</a><br>
      <a>Email: info@yourcompany.com</a>
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
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}





var modal = document.getElementById("myModal2");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg2");
var modalImg = document.getElementById("img02");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closee")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}





var modal = document.getElementById("myModal3");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg3");
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closee3")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


var modal = document.getElementById("myModal4");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg4");
var modalImg = document.getElementById("img04");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closee4")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>