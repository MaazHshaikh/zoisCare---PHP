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
    $userid = $_SESSION['userid'];
    
    $sql = "SELECT * FROM doctor WHERE doctor_id = '$userid'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) 
    {
      $row = mysqli_fetch_assoc($result);

      $name = $row['name'];
      $address = $row['address'];
      $phone = $row['phone'];
      $email = $row['email'];
      $username = $row['username'];
      $password = $row['password'];
      $specialization = $row['specialization'];
      $availability = $row['availability'];
    }
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
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">
    <script src="https://kit.fontawesome.com/4bc8597152.js" crossorigin="anonymous"></script>
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

  <header class="header" data-header><br><br>
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
      
      <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) 
        {
            echo '<form method= "POST"><button type="submit" class="btn has-before title-md" name="logout">Logout</button></form>';
            if (isset($_POST['logout'])){
              session_unset(); 
              session_destroy(); 
              header("Location: login.php");
          }
        } 
        else 
        {
          header("Location: login.php");
        }
      ?>

      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>

  <main>
    <article>

      <!--
        - #HERO
      -->

      <section class="section hero" style="background-image: url('css/hero-bg.png')" aria-label="home">
        <div class="container">

          <div class="hero-content">

              
            <h2 class="hero-subtitle has-before" data-reveal="left">
              Welcome 
            </h2>

            <?php
              echo '<h1 class="headline-lg hero-title" data-reveal="left"> Doctor. ' . $name . '</h1>';
            ?>
        
          </div>
        </div>
      </section>

      <!--
        - #LISTING
      -->

      <section class="section listing" aria-labelledby="listing-label">
        <div class="container">

          <ul class="grid-list">

            <li>
              <h2 class="headline-md" data-reveal="left">Details</h2>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <i class="fa-regular fa-id-badge fa-color fa-4x"></i>
                </div>

                <div>

                  <h4 class="headline-md card-title">Name</h4>
                  <?php
                    echo '<h3 class="headline-sm card-title">' . $name . '</h3>';
                  ?>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                <i class="fa-solid fa-map-location fa-color fa-4x"></i>
                </div>

                <div>
                  <h4 class="headline-md card-title">Address</h4>
                  <?php
                    echo '<h3 class="headline-sm card-title">' . $address . '</h3>';
                  ?>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <i class="fa-solid fa-phone fa-color fa-4x"></i>
                </div>

                <div>
                  <h4 class="headline-md card-title">Phone</h4>
                  <?php
                    echo '<h3 class="headline-sm card-title">' . $phone . '</h3>';
                  ?>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <i class="fa-solid fa-at fa-color fa-4x"></i>
                </div>

                <div>
                  <h4 class="headline-md card-title">Email</h4>
                  <?php
                    echo '<h3 class="headline-sm card-title">' . $email . '</h3>';
                  ?>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <i class="fa-solid fa-circle-user fa-color fa-4x"></i>
                </div>

                <div>
                  <h4 class="headline-md card-title">Username</h4>
                  <?php
                    echo '<h3 class="headline-sm card-title">' . $username . '</h3>';
                  ?>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <i class="fa-solid fa-signature fa-color fa-4x"></i>
                </div>

                <div>
                  <h4 class="headline-md card-title">Doctor ID</h4>
                  <?php
                    echo '<h3 class="headline-sm card-title">' . $userid . '</h3>';
                  ?>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <i class="fa-solid fa-wand-sparkles fa-color fa-4x"></i>
                </div>

                <div>
                  <h4 class="headline-md card-title">Specialization</h4>
                  <?php
                    echo '<h3 class="headline-sm card-title">' . $specialization . '</h3>';
                  ?>
                </div>

              </div>
            </li>

            <li>
              <div class="listing-card" data-reveal="bottom">

                <div class="card-icon">
                  <i class="fa-solid fa-clipboard-check fa-color fa-4x"></i>
                </div>

                <div>
                  <h4 class="headline-md card-title">Availability</h4>
                  <h4>
                    <form method="post" action="docProfile.php">
                      <input type="text" name="avail" id="avail" placeholder="Yes | No">
                      <input type="submit" value="Submit">
                      <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
                        {
                          $avail = $_POST['avail'];
                          $sql = "UPDATE `doctor` SET `availability` = '$avail' WHERE `doctor`.`doctor_id` = $userid";
                          $result = mysqli_query($conn, $sql);

                        }
                      ?>
                    </form>
                  </h4>
                </div>

              </div>
            </li>

            <li>
              <a href="cngDoc.php">
                <div class="listing-card" data-reveal="bottom">

                  <div class="card-icon">
                    <i class="fa-solid fa-clipboard-check fa-color fa-4x"></i>
                  </div>

                  
                  <div>
                    <h4 class="headline-md card-title">Add | Edit</h4>
                    <h4 class="headline-xs card-title">Any changes?</h4>;
                  </div>

                </div>
              </a>
            </li>
            <li>            
              <a href="viewAppointments.php?userid=<?php echo $userid; ?>">
              
                <div class="listing-card" data-reveal="bottom">

                  <div class="card-icon">
                    <i class="fa-solid fa-clipboard-check fa-color fa-4x"></i>
                  </div>

                  
                  <div>
                    <h4 class="headline-md card-title">View Appointments</h4>

                  </div>

                </div>
              </a>
            </li>


          </ul>

        </div>
      </section>
    </article>
  </main>

  <!--
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('css/footer-bg.png')">
    
  <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src="css\logo2.svg" width="136" height="46" loading="lazy" alt="zoisCare. home">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Main Email : <a href="zoiscorp@health.com.pk" class="contact-link">zoiscorp@health.com.pk</a>
                </p>

                <p>
                  Inquiries : <a href="mailto:Zois.careInfo@mail.com" class="contact-link">Zois.careInfo@mail.com</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Office Telephone : <a href="tel:0029129102320" class="contact-link">0029129102320</a>
                </p>

                <p>
                  Mobile : <a href="tel:000232439493" class="contact-link">000 2324 39493</a>
                </p>
              </div>

            </li>

          </ul>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="text copyright">
          &copy; zoisCare. 2023 | All Rights Reserved by Zois Corp.
        </p>

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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>
