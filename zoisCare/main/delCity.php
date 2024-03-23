<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "weassignment2";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $cityid = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $cityid = $_POST['cityid'];
    }
    
        $sql = "DELETE FROM `cities` WHERE `cities`.`city_id` = '$cityid'";
        $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--
    - primary meta tags
  -->
  <title>zoisCare - home</title>
  <meta name="title" content="zoisCare - home">
  <meta name="description" content="This is a madical html template made by Zois Corp.">

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="styles.css">
  <script src="app.js" defer></script>

  <!--
    - preload images
  -->
  <link rel="preload" as="image" href="css\hero-banner.png">
  <link rel="preload" as="image" href="css\hero-bg.png">

</head>

<body id="top">

  <!--
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>
  <!--
    - #HEADER
  -->
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="css\logo2.svg" width="136" height="46" alt="zoisCare. home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="css\logo2.svg" width="136" height="46" alt="zoisCare. home">
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Home</a>
          </li>


        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <a href="#" class="btn has-before title-md">Make Appointment</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

      <!--
        - #HERO
      -->

      <section class="section hero">
        <div class="container">

          <div class="hero-content">
            <p class="hero-subtitle has-before" data-reveal="left">Welcome To zoisCare.</p>
          </div>

        </div>
      </section>
  <!--
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('css/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">
        
        <div class="footer-brand" data-reveal="bottom">

        

          <a href="#" class="logo">
            <h1>All Cities Details</h1>
          </a>

              <div>
                <br>
                
                <form action="delCity.php" method="post">
                <table style= "width: 100%">

                  <tr>
                    <th style="text-align: left;">City ID</th>
                    <th style="text-align: left;">City Name</th>
                  </tr>
                  
                  <?php
                    $sql = "SELECT * FROM cities";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['city_id'] . "</td>";
                          echo "<td>" . $row['city_name'] . "</td>";
                          echo "</tr>";
                        }
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                  ?>
                </table>
              </form>
              </div>
            </div>

    </div>
    <div class="container">
<div class="section footer-top">
<div class="footer-brand" data-reveal="bottom">

<a href="#" class="logo">
  <h1>Delete City</h1>
</a>
<ul class="contact-list has-after">
  
  <li class="contact-item">
    <div>
      <form action="delCity.php" method="post">
          <br>
          <h2>
            <label for="cityid" class="form-label">City ID</label>
            <h3><input type="text" class="form-control" id="cityid" name="cityid" placeholder="City ID to delete"></h3>
          </h2>
        </div>
      </li>
      <li class="contact-item">
        <div>
          <br>
          <h2>
            <button type="submit"  class="btn has-before title-md" name="button">Delete City</button>
          </h2>
    </form>
    </div>
  </li>
</ul>
</div>

</div>
  </footer>





  <!--
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>


  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
