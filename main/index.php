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

$sql = "SELECT * FROM patient WHERE patient_id = '$userid'";
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

            <?php
              echo '<h2 class="hero-subtitle has-before" data-reveal="left"> Welcome to zoisCare, ' . $name . '</h2>';
            ?>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Find Nearest <br>
              Doctor.
            </h1>
            <h1 class="headline-md hero-title" data-reveal="left" style="color:white; padding-top: 170px; padding-left:50px">
              Book Appointment
            </h1>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="css\hero-banner1.png" width="590" height="40" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!--
        - #SERVICE
      -->

      <section class="service" aria-label="service">
        <div class="container">
          <ul class="service-list">
            <?php

              $sql = "SELECT * FROM doctor";
              $result = mysqli_query($conn, $sql);
              
              $patient_sql = "SELECT name AS patient_name, patient_id AS patient_id FROM patient WHERE patient_id = '$userid'";
              $patient_result = mysqli_query($conn, $patient_sql);
              $patient_row = mysqli_fetch_assoc($patient_result);
              //$patient_name = $patient_row['patient_name'];
              
              if ($result) 
              {
                  while ($row = mysqli_fetch_assoc($result)) 
                  {
                    echo "<li>";
                    echo '<div class="service-card" data-reveal="bottom">';
                    echo '<div class="card-icon">
                            <img src="css\icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                          </div>';
                    echo '<h3 class="headline-sm card-title"> Dr. ' . $row['name'] . '</h3>';
                    echo '<h4 class="headline-xs card-title">' . $row['specialization'] . '</h4>';
                    echo '<h4 class="headline-xs card-title"> Availability: <br>' . $row['availability'] . '</h4>';

                    echo '<form action="bookAppointments.php" method="POST">
                          <input type="hidden" name="patient_id" value="' . $patient_row['patient_id'] . '">
                          <input type="hidden" name="patient_name" value="' . $patient_row['patient_name'] . '">
                          <input type="hidden" name="doctor_id" value="' . $row['doctor_id'] . '">
                          
                          <button type="submit" class="btn-circle" name="bookAppointment">
                             <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                          </button>
                          
                          </form>';
                    echo "</div>";
                    echo "</li>";
                  }
              } 
              else 
              {
                  echo "Error: " . mysqli_error($conn);
              }
            ?>
          </ul>

        </div>
      </section>





      <!--
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label" data-reveal="left">There are no minor illnesses</p>

            <h2 class="headline-md" data-reveal="left">Common Diseases</h2>

            <p class="section-text" data-reveal="left">
              Must visit your nearest doctor
            </p>

            <ul class="tab-list" data-reveal="left">

              <li>
                <button class="tab-btn active" id="fever-btn">Fever</button>
              </li>

              <li>
                <button class="tab-btn active" id="flu-btn">Cold & Flu</button>
              </li>

              <li>
                <button class="tab-btn active" id="headaches-btn">Headaches</button>
              </li>

            </ul>

            <p class="tab-text" data-reveal="left">
              A fever is generally defined as a body temperature above 100.4 degrees Fahrenheit (38 degrees Celsius). If you feel warm or have a temperature that is higher than normal for you, it may be an indication of a fever.
            </p>

            <p class="tab-text flu" data-reveal="left">
              The flu is a contagious respiratory illness caused by influenza viruses that infect the nose, throat, and sometimes the lungs. Symptoms include fever, cough, sore throat, body aches, and fatigue.
            </p>

            <p class="tab-text headaches" data-reveal="left">
              Headaches can be caused by a variety of factors, including stress, tension, dehydration, lack of sleep, or certain medical conditions. Symptoms may include pain or pressure in the head, neck, or shoulders, sensitivity to light or sound, and nausea.
            </p>

            <div class="wrapper">

              <ul class="about-list">

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Take plenty of Rest</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Stay Hydrated</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">OTP Medicine (Tylenol)</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Sponge Bath</span>
                </li>

              </ul>

            </div>

          </div>

          <figure class="about-banner" data-reveal="right">
            <img src="css\about-banner.png" width="554" height="678" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

        </div>
      </section>

      <!--
        - #BLOG
      -->

      <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
            News & Inventions
          </p>

          <h2 class="section-title headline-md text-center" data-reveal="bottom">Latest Articles</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">AI in Medical Diagnosis</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  Artificial Intelligence (AI) is being increasingly used in the medical field for predicting and diagnosing diseases. Researchers are developing AI models that can analyze medical images, genetic data, and electronic health records to predict diseases before they manifest clinically.
                </p>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">Universal Donor Blood: A Breakthrough in Blood Transfusion</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  Scientists have developed a new technique to convert type A blood into universal donor blood, which can be given to anyone without fear of rejection. This could revolutionize blood transfusion and save millions of lives each year.
                </p>


              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">First Malaria Vaccine Approved by WHO for African Countries</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  The World Health Organization has approved the use of the first-ever malaria vaccine, Mosquirix, in African countries as a pilot program. This is a significant breakthrough in the fight against malaria, which kills hundreds of thousands of people every year, mostly children in Africa.
                </p>


              </div>
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
                  Main Email : <a href="mailto:contact@website.com" class="contact-link">contact@&shy;website.com</a>
                </p>

                <p>
                  Inquiries : <a href="mailto:Info@mail.com" class="contact-link">Info@mail.com</a>
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
