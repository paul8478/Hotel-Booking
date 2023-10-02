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
if(isset($_POST['submit'])) {
  $minPrice = mysqli_real_escape_string($con, $_POST['min_price']);
  $maxPrice = mysqli_real_escape_string($con, $_POST['max_price']);

  $query = "SELECT * FROM room WHERE price BETWEEN $minPrice AND $maxPrice";
  $result = mysqli_query($con, $query);

  if(mysqli_num_rows($result) > 0) {
                                
    while($row = mysqli_fetch_assoc($result)) {
      echo '<div class="he"></div>
      <div class="product-card1"> 
        <div class="product-card">
          <div class="product-image">
            <img src="admin/room-data/'.$row['image'].'" alt="product" height="300px">
          </div>
          <div class="product-details">
            <h3 class="product-name" style="margin-top:5px;font-family:arial;">'.$row['h_name'].'<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
            <p style="font-family:arial;font-weight: bold;font-size:15px; color:black">Location: '.$row['s_address'].' <br><br> Price: '.$row['price'].' Rupees || Type: '.$row['type'].' <br><br>Ratting  '.$row['star'].' </p>
            <a href="view-card.php?data='.$row['id'].'"><button class="play-button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="he"></div>';
    }
  } else {
    echo "<h1>Oops No data found..<h1>";
  }
}


?>
<!-------------bhk------------>
<?php 
if(isset($_POST['bhk'])) {

  $searchTerm = mysqli_real_escape_string($con, $_POST['BHK']);

  $query = "SELECT * FROM room WHERE bhk LIKE '%".$searchTerm."%'";
  $result = mysqli_query($con, $query);

  if(mysqli_num_rows($result) > 0) {
                                
    while($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="he"></div>
                                <div class="product-card1"> 
                                  <div class="product-card">
                                    <div class="product-image">
                                      <img src="admin/room-data/'.$row['image'].'" alt="product" height="300px">
                                    </div>
                                    <div class="product-details">
                                      <h3 class="product-name" style="margin-top:5px;font-family:arial;">'.$row['h_name'].'<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
                                      <p style="font-family:arial;font-weight: bold;font-size:15px; color:black">Location: '.$row['s_address'].' <br><br> Price: '.$row['price'].' Rupees || Type: '.$row['type'].' <br><br>Ratting  '.$row['star'].' </p>
                                      <a href="view-card.php?data='.$row['id'].'"><button class="play-button">Read More</button></a>
                                    </div>
                                  </div>
                                </div>
                                <div class="he"></div>';
    }
  } else {
    echo "<h1>Oops No data found..<h1>";
  }
}


mysqli_close($con);
?>

<!----------Panel All filters ----------->
<?php

$con = mysqli_connect("localhost", "root", "", "hotel-booking");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if (isset($_POST['lowestPrice'])) {

  $query = "SELECT * FROM room ORDER BY price ASC";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);
} elseif (isset($_POST['highestPrice'])) {

  $query = "SELECT * FROM room ORDER BY price DESC";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);
} elseif (isset($_POST['Lodge'])) {

  $query = "SELECT * FROM room WHERE type = 'Lodge'";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);
} elseif (isset($_POST['Guest house'])) {

  $query = "SELECT * FROM room WHERE type = 'Guest house'";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);
} elseif (isset($_POST['Hotel'])) {

  $query = "SELECT * FROM room WHERE type = 'Hotel'";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);

} elseif (isset($_POST['Resort'])) {

  $query = "SELECT * FROM room WHERE type = 'Resort'";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);

} elseif (isset($_POST['doubleroom'])) {

  $query = "SELECT * FROM room WHERE room = 'Double Room'";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);

} elseif (isset($_POST['deluxroom'])) {

  $query = "SELECT * FROM room WHERE room = 'Delux Room'";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);


} elseif (isset($_POST['payingGuest'])) {
 
  $query = "SELECT * FROM room WHERE type = 'Paying-guest'";
  $result = mysqli_query($con, $query);

  displaySearchResults($result);
}

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
            <p style="font-family:arial;font-weight: bold;font-size:15px; color:black">Location: '.$row['s_address'].' <br><br> Price: '.$row['price'].' Rupees || Type: '.$row['type'].' <br><br>Ratting  '.$row['star'].' </p>
            <a href="view-card.php?data='.$row['id'].'"><button class="play-button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="he"></div>';
    }
  } else {
    echo "<h1>Oops No data found..<h1>";
  }
}


mysqli_close($con);
?>








<!-------------- Location finding by Text---------------->

<?php

$con = mysqli_connect("localhost", "root", "", "hotel-booking");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['m-submit'])) {

  $searchTerm = mysqli_real_escape_string($con, $_POST['searchLocation']);


  $query = "SELECT * FROM room WHERE s_address LIKE '%".$searchTerm."%'";
  $result = mysqli_query($con, $query);

  if($result) {
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="he"></div>
      <div class="product-card1"> 
        <div class="product-card">
          <div class="product-image">
            <img src="admin/room-data/'.$row['image'].'" alt="product" height="300px">
          </div>
          <div class="product-details">
            <h3 class="product-name" style="margin-top:5px;font-family:arial;">'.$row['h_name'].'<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
            <p style="font-family:arial;font-weight: bold;font-size:15px; color:black">Location: '.$row['s_address'].' <br><br> Price: '.$row['price'].' Rupees || Type: '.$row['type'].' <br><br>Ratting  '.$row['star'].' </p>
            <a href="view-card.php?data='.$row['id'].'"><button class="play-button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="he"></div>';
      }
    } else {
      echo "<h1>Oops No data found..<h1>";
    }
  } else {
    echo "Error: " . mysqli_error($con);
  }
  mysqli_close($con);
}
?>


<!----------Location Choosing----------------->


<?php
$con = mysqli_connect("localhost", "root", "", "hotel-booking");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['c-submit'])) {
  $searchTerm = mysqli_real_escape_string($con, $_POST['location']);
  $query = "SELECT * FROM room WHERE s_address LIKE '%".$searchTerm."%'";
  $result = mysqli_query($con, $query);
  if($result) {
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="he"></div>
      <div class="product-card1"> 
        <div class="product-card">
          <div class="product-image">
            <img src="admin/room-data/'.$row['image'].'" alt="product" height="300px">
          </div>
          <div class="product-details">
            <h3 class="product-name" style="margin-top:5px;font-family:arial;">'.$row['h_name'].'<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
            <p style="font-family:arial;font-weight: bold;font-size:15px; color:black">Location: '.$row['s_address'].' <br><br> Price: '.$row['price'].' Rupees || Type: '.$row['type'].' <br><br>Ratting  '.$row['star'].' </p>
            <a href="view-card.php?data='.$row['id'].'"><button class="play-button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="he"></div>';
      }
    } else {
      echo "<h1>Oops No data found..<h1>";
    }
  } else {
    echo "Error: " . mysqli_error($con);
  }
  mysqli_close($con);
}
?>

<?php
$con = mysqli_connect("localhost", "root", "", "hotel-booking");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['city-submit'])) {
  $searchTerm = mysqli_real_escape_string($con, $_POST['location']);
  $query = "SELECT * FROM room WHERE city LIKE '%".$searchTerm."%'";
  $result = mysqli_query($con, $query);
  if($result) {
    if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="he"></div>
      <div class="product-card1"> 
        <div class="product-card">
          <div class="product-image">
            <img src="admin/room-data/'.$row['image'].'" alt="product" height="300px">
          </div>
          <div class="product-details">
            <h3 class="product-name" style="margin-top:5px;font-family:arial;">'.$row['h_name'].'<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
            <p style="font-family:arial;font-weight: bold;font-size:15px; color:black">Location: '.$row['s_address'].' <br><br> Price: '.$row['price'].' Rupees || Type: '.$row['type'].' <br><br>Ratting  '.$row['star'].' </p>
            <a href="view-card.php?data='.$row['id'].'"><button class="play-button">Read More</button></a>
          </div>
        </div>
      </div>
      <div class="he"></div>';
      }
    } else {
      echo "<h1>Oops No data found..<h1>";
    }
  } else {
    echo "Error: " . mysqli_error($con);
  }
  mysqli_close($con);
}
?>










</div>
  </article>
</section>

</div>

  <div class="side">
    
  <div class="fakeimg1 ad-size" class="">

    <h4 style="text-align:center;padding:10px;">Filters & sorting</h4>
    <center>
<div class="form-row">
  <form method="POST">
    <input type="submit" name="lowestPrice" value="Low - High" class="price-buttonss">
  </form>
  <form method="POST">
    <input type="submit" name="highestPrice" value="High - Low" class="price-buttonss">
  </form>
</div>
<br>
<div class="form-row">
<form method="POST">
              <input type="submit" name="Hotel" value="Hotels" class="price-buttonss">
              </form>
              <br>
              <form method="POST">
              <input type="submit" name="Resort" value="Resort" class="price-buttonss">
</form>
</div>
              <br>
              <div class="form-row">
<form method="POST">
              <input type="submit" name="Lodge" value="Lodges" class="price-buttonss">
              </form>
              <br>
              <form method="POST">
              <input type="submit" name="Guest house" value="Guest house" class="price-buttonss">
</form>
</div>
              <br>
              <hr class="hr">
              </center>
<h4 style="text-align:center;padding:10px;">Cities or Locations</h4>

<form method="POST" class="location-form">
  <select name="location" class="location-dropdown">
  <option value="Mumbai">Mumbai</option>
  <option value="Delhi">Delhi</option>
  <option value="Bangalore">Bangalore</option>
  <option value="Hyderabad">Hyderabad</option>
  <option value="Chennai">Chennai</option>
  <option value="Kolkata">Kolkata</option>
  <option value="Ahmedabad">Ahmedabad</option>
  <option value="Pune">Pune</option>
  <option value="Pune">Jaipur</option>
  <option value="Surat">Surat</option>
  <option value="Lucknow">Lucknow</option>
  <option value="Kanpur">Kanpur</option>
  <option value="Nagpur">Nagpur</option>
  <option value="Indore">Indore</option>
  <option value="Thane">Thane</option>
  <option value="Bhopal">Bhopal</option>
  <option value="Patna">Patna</option>
  <option value="Vadodara">Vadodara</option>
  <option value="Ghaziabad">Ghaziabad</option>
  <option value="Ludhiana">Ludhiana</option>
    <!-- Add more options as needed -->
  </select><br>
  <input type="submit" name="city-submit" value="Submit"><br>
</form>
              
           
<br>

  <form method="POST" class="location-form">
  <select name="location" class="location-dropdown">
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Assam">Assam</option>
  <option value="Bihar">Bihar</option>
  <option value="Chhattisgarh">Chhattisgarh</option>
  <option value="Goa">Goa</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Haryana">Haryana</option>
  <option value="Himachal Pradesh">Himachal Pradesh</option>
  <option value="Jharkhand">Jharkhand</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kerala">Kerala</option>
  <option value="Madhya Pradesh">Madhya Pradesh</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="Manipur">Manipur</option>
  <option value="Meghalaya">Meghalaya</option>
  <option value="Mizoram">Mizoram</option>
  <option value="Nagaland">Nagaland</option>
  <option value="Odisha">Odisha</option>
  <option value="Punjab">Punjab</option>
  <option value="Rajasthan">Rajasthan</option>
  <option value="Sikkim">Sikkim</option>
  <option value="Tamil Nadu">Tamil Nadu</option>
  <option value="Telangana">Telangana</option>
  <option value="Tripura">Tripura</option>
  <option value="Uttar Pradesh">Uttar Pradesh</option>
  <option value="Uttarakhand">Uttarakhand</option>
  <option value="West Bengal">West Bengal</option>
  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
  <option value="Chandigarh">Chandigarh</option>
  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
  <option value="Daman and Diu">Daman and Diu</option>
  <option value="Lakshadweep">Lakshadweep</option>
  <option value="Delhi">Delhi</option>
  <option value="Puducherry">Puducherry</option>
    <!-- Add more options as needed -->
  </select><br>
  <input type="submit" name="c-submit" value="Submit state">
</form>
<br>
<hr class="hr">
<h4 style="text-align:center;padding:10px;">Price Sorting</h4>

<form method="post" class="location-form">

  <div style="display:flex;">
  <input type="number" name="min_price" placeholder="Min price" class="lo" REQUIRED ><input type="number" name="max_price" placeholder="Max price" class="lo" REQUIRED>&nbsp
  </div><br>
  <input type="submit" name="submit" value="Search" class="sub-plc">

</form>
<br>

  </div><br>
</div>

</div>

<script src="js/home.js"></script>

</body>
</html>
