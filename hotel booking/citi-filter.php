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

$searchExecuted = false; // Flag variable to track if any search was executed

if (isset($_POST['lowestPrice'])) {
    // Retrieve and sanitize the input values
    $city = $_GET['city']; // Retrieve the "city" value from the previous page
  
    $query = "SELECT * FROM room WHERE city = '$city' ORDER BY price ASC";
    $result = mysqli_query($con, $query);
  
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
              <a href="view-card.php?data='.$row['code'].'"><button class="play-button">Read More</button></a>
            </div>
          </div>
        </div>
        <div class="he"></div>';
      }
    } else {
      echo "<h1>Oops No data found..<h1>";
    }
  
    $searchExecuted = true;
  }

  if (isset($_POST['highestPrice'])) {
    // Retrieve and sanitize the input values
    $city = $_GET['city']; // Retrieve the "city" value from the previous page
  
    $query = "SELECT * FROM room WHERE city = '$city' ORDER BY price DESC";
    $result = mysqli_query($con, $query);
  
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
              <a href="view-card.php?data='.$row['code'].'"><button class="play-button">Read More</button></a>
            </div>
          </div>
        </div>
        <div class="he"></div>';
      }
    } else {
      echo "<h1>Oops No data found..<h1>";
    }
  
    $searchExecuted = true;
  }

  if (isset($_POST['submit'])) {
    // Retrieve and sanitize the input values
    $minPrice = mysqli_real_escape_string($con, $_POST['min_price']);
    $maxPrice = mysqli_real_escape_string($con, $_POST['max_price']);
    $city = $_GET['city']; // Retrieve the "city" value from the previous page
  
    $query = "SELECT * FROM room WHERE city = '$city' AND price BETWEEN $minPrice AND $maxPrice ORDER BY price ASC";
    $result = mysqli_query($con, $query);
  
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
              <a href="view-card.php?data='.$row['code'].'"><button class="play-button">Read More</button></a>
            </div>
          </div>
        </div>
        <div class="he"></div>';
      }
    } else {
      echo "<h1>Oops No data found..<h1>";
    }
  
    $searchExecuted = true;
  }
  
  

if (isset($_POST['Hotel'])) {
    $city = $_GET['city']; // Retrieve the "type" value from the previous page
  
    $query = "SELECT * FROM room WHERE type = 'Hotel' and city = '$city'";
    $result = mysqli_query($con, $query);
  
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '
          <div class="he"></div>
          <div class="product-card1"> 
            <div class="product-card">
              <div class="product-image">
                <img src="admin/room-data/' . $row['image'] . '" alt="product" height="300px">
              </div>
              <div class="product-details">
                <h3 class="product-name" style="margin-top:5px;font-family:arial;">' . $row['h_name'] . '<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
                <p style="font-family:arial;font-weight: bold;font-size:15px; color:grey">Location: ' . $row['s_address'] . ' <br><br> Price: ' . $row['price'] . ' / Month ||  City: ' . $row['city'] . ' || Type: ' . $row['type'] . ' <br><br>Ratting  ' . $row['star'] . ' </p>
                <a href="view-card.php?data=' . $row['code'] . '"><button class="play-button">Read More</button></a>
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
  
    $searchExecuted = true;
  }

  if (isset($_POST['Resort'])) {
    $city = $_GET['city']; // Retrieve the "type" value from the previous page
  
    $query = "SELECT * FROM room WHERE type = 'Resort' and city = '$city'";
    $result = mysqli_query($con, $query);
  
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '
          <div class="he"></div>
          <div class="product-card1"> 
            <div class="product-card">
              <div class="product-image">
                <img src="admin/room-data/' . $row['image'] . '" alt="product" height="300px">
              </div>
              <div class="product-details">
                <h3 class="product-name" style="margin-top:5px;font-family:arial;">' . $row['h_name'] . '<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
                <p style="font-family:arial;font-weight: bold;font-size:15px; color:grey">Location: ' . $row['s_address'] . ' <br><br> Price: ' . $row['price'] . ' / Month ||  City: ' . $row['city'] . ' || Type: ' . $row['type'] . ' <br><br>Ratting  ' . $row['star'] . ' </p>
                <a href="view-card.php?data=' . $row['code'] . '"><button class="play-button">Read More</button></a>
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
  
    $searchExecuted = true;
  }

  if (isset($_POST['Lodge'])) {
    $city = $_GET['city']; // Retrieve the "type" value from the previous page
  
    $query = "SELECT * FROM room WHERE type = 'Lodge' and city = '$city'";
    $result = mysqli_query($con, $query);
  
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '
          <div class="he"></div>
          <div class="product-card1"> 
            <div class="product-card">
              <div class="product-image">
                <img src="admin/room-data/' . $row['image'] . '" alt="product" height="300px">
              </div>
              <div class="product-details">
                <h3 class="product-name" style="margin-top:5px;font-family:arial;">' . $row['h_name'] . '<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
                <p style="font-family:arial;font-weight: bold;font-size:15px; color:grey">Location: ' . $row['s_address'] . ' <br><br> Price: ' . $row['price'] . ' / Month ||  City: ' . $row['city'] . ' || Type: ' . $row['type'] . ' <br><br>Ratting  ' . $row['star'] . ' </p>
                <a href="view-card.php?data=' . $row['code'] . '"><button class="play-button">Read More</button></a>
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
  
    $searchExecuted = true;
  }

  if (isset($_POST['Guest-house'])) {
    $city = $_GET['city']; // Retrieve the "type" value from the previous page
  
    $query = "SELECT * FROM room WHERE type = 'Guest house' and city = '$city'";
    $result = mysqli_query($con, $query);
  
    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo '
          <div class="he"></div>
          <div class="product-card1"> 
            <div class="product-card">
              <div class="product-image">
                <img src="admin/room-data/' . $row['image'] . '" alt="product" height="300px">
              </div>
              <div class="product-details">
                <h3 class="product-name" style="margin-top:5px;font-family:arial;">' . $row['h_name'] . '<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
                <p style="font-family:arial;font-weight: bold;font-size:15px; color:grey">Location: ' . $row['s_address'] . ' <br><br> Price: ' . $row['price'] . ' / Month ||  City: ' . $row['city'] . ' || Type: ' . $row['type'] . ' <br><br>Ratting  ' . $row['star'] . ' </p>
                <a href="view-card.php?data=' . $row['code'] . '"><button class="play-button">Read More</button></a>
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
  
    $searchExecuted = true;
  }

if (!$searchExecuted) {
  // Default code to execute if no search is executed

  if (isset($_GET['city'])) {
    $city = mysqli_real_escape_string($con, $_GET['city']);

    // Fetch all data of the specified type from the database
    $query = "SELECT * FROM room WHERE city = '$city'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="he"></div>
              <div class="product-card1"> 
                  <div class="product-card">
                      <div class="product-image">
                          <img src="admin/room-data/' . $row['image'] . '" alt="product" height="300px">
                      </div>
                      <div class="product-details">
                          <h3 class="product-name" style="margin-top:5px;font-family:arial;">' . $row['h_name'] . '<a href="..."><img src="images/home/heart.png" height="40px" style="float:right;"></a></h3>
                          <p style="font-weight: bold;font-size:15px; color:black; font-family:arial;">Location: ' . $row['s_address'] . ' <br><br> Price: ' . $row['price'] . ' / Month ||  City: ' . $row['city'] . ' || Type: ' . $row['type'] . ' <br><br>Ratting  ' . $row['star'] . ' </p>
                          <a href="view-card.php?data=' . $row['id'] . '"><button class="play-button">Read More</button></a>
                      </div>
                  </div>
               </div> <div class="he"></div>';
      }
    } else {
      echo "<h1>No data found for the specified type</h1>";
    }
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
    <br>
    <h3 style="text-align:center;">Filters</h3>
    <hr class="hr">
<br><br><br>
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
              <input type="submit" name="Hotel" value="Hotel" class="price-buttonss">
              </form>
              <br>
              <form method="POST">
              <input type="submit" name="Resort" value="Resort" class="price-buttonss">
              </form>
              </div>
              <br>
              <div class="form-row">
<form method="POST">
              <input type="submit" name="Lodge" value="Lodge" class="price-buttonss">
              </form>
              <br>
              <form method="POST">
              <input type="submit" name="Guest-house" value="Guest House" class="price-buttonss">
</form>
</div>
<br>
<hr class="hr">

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
</form>

  </div><br>
</div>

</div>

<script src="js/home.js"></script>

</body>
</html>
