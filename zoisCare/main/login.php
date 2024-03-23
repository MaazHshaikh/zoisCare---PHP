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

        $role = '';
        $sql = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $role = $_POST['role'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($role === "doctor" || $role === "Doctor") 
            {
              $sql = "SELECT * FROM doctor WHERE username = '$username' AND password = '$password'";
              $primary_key = "doctor_id";
            } 
            elseif ($role === "patient" || $role === "Patient")
            {
              $sql = "SELECT * FROM patient WHERE username = '$username' AND password = '$password'";
              $primary_key = "patient_id";
            }
            elseif ($role === "admin" || $role === "Admin")
            {
              $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
              $primary_key = "admin_id";
            }
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) === 1)
            {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['loggedin'] = true;
                $_SESSION['role'] = $role;
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $row[$primary_key];

                if ($role === "doctor" || $role === "Doctor") {
                    header("Location: docProfile.php"); // redirect to admin page
                }
                elseif ($role === "patient" || $role === "Patient") 
                {
                  header("Location: index.php"); // redirect to admin page
                }
                else
                {
                    header("Location: dashboard.php"); // default redirect
                }
                exit();
            }
            else 
            {
              echo "Login failed. Please check your username and password.";
            }
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

    </head>

    <body id="top">

          <section class="section hero" style="padding-top: 60px;">
            <div class="container">

              <div class="hero-content">
               <a href="#" class="logo">
                <img src="css\logo2.svg" width="136" height="46" alt="zoisCare - home"><br>
              </a>
                <p class="hero-subtitle has-before" data-reveal="left">Welcome To zoisCare</p>
              </div>

            </div>
          </section>
      <!--
        - #FOOTER
      -->

      <footer class="footer" style="background-image: url('css/footer-bg.png')">
        <div class="container">
          <div class="section footer-top" >
            <div class="footer-brand" data-reveal="bottom">

              <a href="#" class="logo">
                <h1>Sign in</h1>
              </a>

              <ul class="contact-list has-after">
                <li class="contact-item">

                  <div class="item-icon">
                    <ion-icon name="mail-open-outline"></ion-icon>
                  </div>

                  <div>

                    <form method="post">

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
                      <label for="username" class="form-label">Username</label>
                      <h3><input type="text" class="form-control" id="username" name="username"  placeholder="Enter your username"></h3>
                    </h2>

                    <h2>
                      <label for="password" class="form-label">Password</label>
                      <h3><input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"></h3>
                    </h2>

                  

                  </div>

                </li>

                <li class="contact-item">
                  <div>
                    <h2>
                      <button type="submit"  class="btn has-before title-md sibtn" name="button">Sign In</button>

                      <p>Don't have an account? <a href="signup.php" style="color: hsl(182, 100%, 35%); text-decoration: none;" onmouseover="this.style.color='hsl(182, 100%, 50%)'" onmouseout="this.style.color='hsl(182, 100%, 35%)'">Sign up</a></p>

                    </h2>
                  </div>
                </li>
                </form>
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
