


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

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>


</head>

<body id="top">

      <!--
        - #HERO
      -->

      <section class="section hero" style="padding-top: 60px;">
            <div class="container">

              <div class="hero-content">
               <a href="#" class="logo">
                <img src="css\logo2.svg" width="136" height="46" alt="zoisCare. home"><br>
              </a>
                <p class="hero-subtitle has-before" data-reveal="left">Welcome To zoisCare.</p>
              </div>

            </div>
          </section>
  <!--
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('css/footer-bg.png')">
    <div class="container">
      <div class="section footer-top" style="padding-top: 30px;">
        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <h1>View your appointments</h1>
          </a>

          <ul class="contact-list has-after">
            
            <li class="contact-item">
              <div>

              <form action="viewAppointments.php" method="post">
                <table style= "width: 100%; padding: 100px;">

                  <tr>
                    <th style="text-align: left;">Patient ID</th>
                  </tr>
                  
                  <?php

                    session_start();

                    $servername = "localhost:3306";
                    $username = "root";
                    $password = "";
                    $database = "zoisCare";

                    $conn = mysqli_connect($servername, $username, $password, $database);

                    if (!$conn){
                        die("Connection failed: ". mysqli_connect_error());
                    }

                    $userid = $_GET['userid'];

                    $sql = "SELECT patient_id FROM appointments WHERE doctor_id = '$userid'";
                    $result = mysqli_query($conn, $sql);
                    
                    if ($result) 
                    {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td style='padding: 10px;'>" . $row['patient_id'] . "</td>";
                          echo "</tr>";
                        }
                    }
                    else 
                    {
                        echo "Error: " . mysqli_error($conn);
                    }
                  ?>
                </table>
              </form>


              </div>
            </li>

            <li class="contact-item">
            <li class="contact-item">
              <div>

              <form action="viewAppointments.php" method="post">
                <table style= "width: 100%; padding: 100px;">

                  <tr>
                    <th style="text-align: left;">Patient Name</th>
                  </tr>
                  
                  <?php

                    $conn = mysqli_connect($servername, $username, $password, $database);

                    if (!$conn){
                        die("Connection failed: ". mysqli_connect_error());
                    }

                    $userid = $_GET['userid'];

                    $sql = "SELECT patient_name FROM appointments WHERE doctor_id = '$userid'";
                    $result = mysqli_query($conn, $sql);
                    
                    if ($result) 
                    {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td style='padding: 10px;'>" . $row['patient_name'] . "</td>";
                          echo "</tr>";
                        }
                    }
                    else 
                    {
                        echo "Error: " . mysqli_error($conn);
                    }
                  ?>
                </table>
              </form>


              </div>
            </li>
            </li>

          </ul>

        </div>

      <div class="footer-bottom">


        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
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
