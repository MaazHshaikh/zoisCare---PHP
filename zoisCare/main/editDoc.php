<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "weassignment2";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    $role = '';
    $sql = '';
    $name = '';
    $username = '';
    $password ='';
    $specialization = '';
    $availability = '';
    $docid = '';
    $address = '';
    $phone = '';
    $email = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      $phone = mysqli_real_escape_string($conn, $_POST['phone']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $docid = mysqli_real_escape_string($conn, $_POST['docid']);
      $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
      $availability = mysqli_real_escape_string($conn, $_POST['availability']);
    }
    
        $sql = "UPDATE `doctor` SET `name` = '$name', `address` = '$address', `phone` = '$phone', `email` = '$email', `username` = '$username', `password` = '$password', `doctor_id` = '$docid', `specialization` = '$specialization', `availability` = '$availability' WHERE `doctor`.`doctor_id` = '$docid'";
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
            <h1>All Doctor Details</h1>
          </a>

              <div>
                <br>
                
                <form action="editDoc.php" method="post">
                <table style= "width: 100%">

                  <tr>
                    <th style="text-align: left;">Doctor ID</th>
                    <th style="text-align: left;">Doctor Name</th>
                    <th style="text-align: left;">Address</th>
                    <th style="text-align: left;">Email</th>
                    <th style="text-align: left;">Phone</th>
                    <th style="text-align: left;">Specialization</th>
                    <th style="text-align: left;">Availability</th>

                  </tr>
                  
                  <?php
                    $sql = "SELECT * FROM doctor";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['doctor_id'] . "</td>";
                          echo "<td> Dr. " . $row['name'] . "</td>";
                          echo "<td>" . $row['address'] . "</td>";
                          echo "<td>" . $row['email'] . "</td>";
                          echo "<td>" . $row['phone'] . "</td>";
                          echo "<td>" . $row['username'] . "</td>";
                          echo "<td>" . $row['specialization'] . "</td>";
                          echo "<td>" . $row['availability'] . "</td>";
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
      <h1>Edit Doctor Details</h1>
    </a>
    
    <ul class="contact-list has-after">
  
    <li class="contact-item">
    <div>
      <form action="editDoc.php" method="post">
      <br>
      <h2>
        <label for="docid" class="form-label">Doctor ID</label>
        <h3><input type="text" class="form-control" id="docid" name="docid" placeholder="Doctor ID for update"></h3>
      </h2>
      <h2>
        <label for="name" class="form-label">Name</label>
        <h3><input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"></h3>
      </h2>
      <h2>
        <label for="username" class="form-label">Username</label>
        <h3><input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"></h3>
      </h2>
      <h2>
        <label for="password" class="form-label">Password</label>
        <h3><input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"></h3>
      </h2>
      
      <h2>
        <label for="email" class="form-label">Email</label>
        <h3><input type="text" class="form-control" id="email" name="email" placeholder="email"></h3>
      </h2>

    </div>
  </li>
  <li class="contact-item">
    <div>
      <h2>
        <label for="phone" class="form-label">Phone</label>
        <h3><input type="text" class="form-control" id="phone" name="phone" placeholder="phone"></h3>
      </h2>
      <h2>
        <label for="address" class="form-label">Address</label>
        <h3><input type="text" class="form-control" id="address" name="address" placeholder="Enter your address"></h3>
      </h2>
      <h2>
        <label for="specialization" class="form-label">Specialization</label>
        <h3><input type="text" class="form-control" name="specialization" id="specialization" placeholder="Enter your specialization"></h3>
      </h2>
      <h2>
          <label for="availability" class="form-label">Availability</label>
          <h3><input type="text" class="form-control" name="availability" id="availability" placeholder="Yes | No"></h3>
      </h2>
      <br>
      <h2>
        <button type="submit"  class="btn has-before title-md" name="button">Edit Doctor</button>
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
