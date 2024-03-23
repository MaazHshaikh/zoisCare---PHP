<?php
session_start();

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "weassignment2";

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

$patient_name = $_POST['patient_name'];
$doctor_id = $_POST['doctor_id'];

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

          <section class="section hero" style="padding-top: 60px;">
            <div class="container">

              <div class="hero-content">
               <a href="#" class="logo">
                <img src="css\logo2.svg" width="136" height="46" alt="zoisCare. home"><br>
              </a>
                <p class="hero-subtitle has-before" data-reveal="left">Welcome To zoisCare.</p>
                <h1 class="headline-lg hero-title" data-reveal="left">
                <?php 
                    $sql = "INSERT INTO appointments (patient_id, patient_name, doctor_id) 
                                 VALUES ('$userid', '$patient_name', '$doctor_id')";

                                // Execute the statement
                                if (mysqli_query($conn, $sql)) 
                                {
                                    echo "Appointment booked successfully.";
                                } 
                                else 
                                {
                                    echo "Error: " . mysqli_error($conn);
                                }
                ?>
                </h1>
              </div>
              

            </div>
          </section>
      <!--
        - #FOOTER
      -->

      <footer class="footer" style="background-image: url('css/footer-bg.png')">
        <div class="container">
          <div class="section footer-top" >

            

          <div class="footer-bottom">


           

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
