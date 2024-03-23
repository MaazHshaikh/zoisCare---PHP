<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "weassignment2";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }


    $role = '';
    $sql = '';
    $result = '';  
    $address = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $role = $_POST['role'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $specialization = $_POST['specialization'];
        $availability = $_POST['availability'];
    }
    if ($role == 'Admin'){
        $sql = "INSERT INTO `weassignment2`.`admin` (`name`, `address`, `phone`, `email`, `username`, `password`) VALUES ('$name', '$address', '$phone', '$email', '$username', '$password')";
        $result = mysqli_query($conn, $sql);
    }

    elseif ($role == 'Patient'){
        $sql = "INSERT INTO `weassignment2`.`patient` (`name`, `address`, `phone`, `email`, `username`, `password`) VALUES ('$name', '$address', '$phone', '$email', '$username', '$password')";
        $result = mysqli_query($conn, $sql);
    }

    elseif ($role == 'Doctor'){
        $sql = "INSERT INTO `weassignment2`.`doctor` (`name`, `address`, `phone`, `email`, `username`, `password`,  `specialization`, `availability`) VALUES ('$name', '$address', '$phone', '$email', '$username', '$password', '$specialization', '$availability')";
        $result = mysqli_query($conn, $sql);
    }
    if ($result) {
      header('Location: login.php');
      exit();
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
            <h1>Sign Up</h1>
          </a>

          <ul class="contact-list has-after">
            <li class="contact-item">

              <div>
                <form action="signup.php" method="post">
                <h2>
                  <label for="role">Role:</label>
                  <select class="role" name="role" id="role" required>
                    <option value="">Select a role</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Patient">Patient</option>
                    <option value="Admin">Admin</option>
                  </select>
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
                  <label for="phone" class="form-label">Phone</label>
                  <h3><input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone"></h3>
                </h2>
              </div>

            </li>

            <li class="contact-item">

              <div>
                <h2>
                  <label for="email" class="form-label">Email</label>
                  <h3><input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"></h3>
                </h2>

                <h2>
                  <label for="address" class="form-label">Address</label>
                  <h3><input type="text" class="form-control" id="address" name="address" placeholder="Enter your address"></h3>
                </h2>
                
                <h2>
                  <div id="specialization-field" style="display: none;">
                    <label for="specialization" class="form-label">Specialization</label>
                    <h5><input type="text" class="form-control" name="specialization" id="specialization" placeholder="Enter your specialization"></h5>
                  </div>
                </h2>

                <h2>
                  <div id="availability-field" style="display: none;">
                    <label for="availability" class="form-label">Availability</label>
                    <h5><input type="text" class="form-control" name="availability" id="availability" placeholder="Yes | No"></h5>
                  </div>
                </h2>

                <br>

                <h2>
                  <button type="submit" class="btn has-before title-md" name="button">Sign Up</button>
                  <p>Already have an account? <a href="login.php" style="color: hsl(182, 100%, 35%);">Login</a></p>
                </h2>
              </form>
              </div>

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
