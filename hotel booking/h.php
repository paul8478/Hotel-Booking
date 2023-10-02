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
        <title>city</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/cat.css">
        <link rel="stylesheet" href="css/new2.css">
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
        
  
   
<div class="row">

<div class="main">

<!---------Search by price--------->
<section>
  <article>
  <div class="cont">


  <?php
// Establish a database connection
$con = mysqli_connect("localhost", "root", "", "hotel-booking");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Retrieve the type from the previous page (assuming it's passed as a GET parameter)
$type = $_GET['type'];

// Fetch data entries based on the provided type
$query = "SELECT * FROM room WHERE type = '$type' ORDER BY RAND() LIMIT 4";
$result = mysqli_query($con, $query);

displaySearchResults($result);

// Function to display search results
function displaySearchResults($result) {
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="he"></div>
      <div class="product-card1"> 
        <div class="product-card">
          <div class="product-image">
            <img src="admin/room-data/'.$row['image'].'" alt="product" height="300px">
          </div>
          <div class="product-details">
            <h3 class="product-name" style="margin-top:5px;font-family:arial;">'.$row['h_name'].'<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
            <p style="font-family:arial;font-weight: bold;font-size:15px; color:grey">Location: '.$row['s_address'].' <br><br> Price: '.$row['price'].' / Month ||  City: '.$row['city'].' || Type: '.$row['type'].' <br><br>Ratting  '.$row['star'].' </p>
            <a href="view-card.php?data='.$row['id'].'"><button class="play-button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="he"></div>';
    }
  } else {
    echo "<h1>No data found</h1>";
  }
}

// Close the connection
mysqli_close($con);
?>










</div>
  </article>
</section>

</div>

  <div class="side">
    
  <div class="fakeimg1 ad-size" class="">
    
  <?php
// Establish a database connection
$con = mysqli_connect("localhost", "root", "", "hotel-booking");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Retrieve the type from the previous page (assuming it's passed as a GET parameter)
$type = $_GET['type'];

// Fetch data entries based on the provided type
$query = "SELECT * FROM room WHERE type = '$type' ORDER BY RAND() LIMIT 2";
$result = mysqli_query($con, $query);

displaySearchResultsCustom($result); // Function name changed

// Function to display search results
function displaySearchResultsCustom($result) { // Function name changed
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="boxy">
      <img src="admin/room-data/'.$row['image'].'" alt="double Room" height="160px">
      <p><span class="sn" style="font-size:13px;"><i class="fa fa-map-marker"></i>'.$row['h_name'].'<span> <a href="view-card.php?data='.$row['id'].'"><button style="float:right;">Book Now</button></a></p>
  
    </div>';
    }
  } else {
    echo "<h1>No data found</h1>";
  }
}

// Close the connection
mysqli_close($con);
?>







</div>
</div>

<script src="js/home.js"></script>

</body>
</html>
