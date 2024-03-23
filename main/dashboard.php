<html>

<head>
  <title>Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css_dash\bootstrap.min.css"/>
  <link rel="stylesheet" href="css_dash\styles_dash.css"/>
  <script src="https://kit.fontawesome.com/7d5b622335.js" crossorigin="anonymous"></script>
  <script src="app_dash.js"></script>

</head>
 
<body>
  <header>
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top navbar-dark"><a class="navbar-brand" href=""><img src="css\favicon.svg" /><span>zoisCare.</span></a>
      <div class="navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link"><i class="las la-question-circle"></i></a></li>
          <li class="nav-item dropdown dropleft"><a class="nav-link notification-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-primary" style="float:right;margin-bottom:-10px;"></span><i class="las la-bell"></i></a>
            <div class="dropdown-menu notification-dropdown-menu shadow-lg" aria-labelledby="notification-dropdown">
              <div class="dropdown-title"><a href="">notifications<span class="ml-2 notifications-count">(3)</span></a><a class="float-right" href="">mark all as read</a></div>
              <div class="dropdown-body">
                <ul class="list-unstyled">
                  <li class="media"><a class="notification-card" href=""><img class="mr-3" src="css\inbox.svg" alt="..." />
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">collaboration tools available</h6>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p><small class="text-muted">21.03.2020, 13.02</small>
                      </div>
                    </a></li>
                  <li class="media"><a class="notification-card" href=""><img class="mr-3" src="css\inbox.svg" alt="..." />
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">use the new app launcher</h6>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p><small class="text-muted">21.03.2020, 13.02</small>
                      </div>
                    </a></li>
                  <li class="media"><a class="notification-card" href=""><img class="mr-3" src="css\inbox.svg" alt="..." />
                      <div class="media-body">
                        <h6 class="mt-0 mb-1">the new dashboard abailable</h6>
                        <p>Cras sit amet nibh libero, in gravida nulla.</p><small class="text-muted">21.03.2020, 13.02</small>
                      </div>
                    </a></li>
                </ul>
              </div>
              <div class="dropdown-footer text-center"><a href="notifications.html">view more</a></div>
            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link"><span class="vertical-divider"></span></div>
          </li>
    
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="side-nav">
      <ul class="list-group list-group-flush">
        <a class="list-group-item" href="dashboard.html" data-toggle="tooltip" data-placement="bottom" title="Dashboard">
          <i class="las la-shapes la-lw"></i>
          <span>dashboard</span>
        </a>
      </ul>
    </div>
    <div class="main-content">
      <div class="container-fluid">
        <div class="section">
          <div class="row">
            <div class="col-md-6">
              <h5 class="page-title"></h5>
            </div>
          </div>
        </div>
        <div class="section welcome-section">
          <div class="section-content">
            <div class="card-deck">
              <div class="card welcome-content-card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 welcome-text-wrapper align-self-center">
                      <h5>Hello, administrator</h5>
                      <p>Welcome to your dashboard</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section functionality-section">

          <div class="section-content">
          
          <div class="card-deck">
          
              <a class="card text-center" href="http://localhost/WE%20Assignment%20-%202/main/addCity.php">
                <div class="card-title">
                  <br><div class="icon-wrapper"><i class="fa-solid fa-city fa-xl"></i></div>
                </div>
                <div class="card-body">
                <br><p>add a city</p>
                </div>
              </a>
            
              <a class="card text-center" href="http://localhost/WE%20Assignment%20-%202/main/addDoc.php">
                <div class="card-title">
                  <br><div class="icon-wrapper"><i class="fa-solid fa-user-doctor fa-xl"></i></div>
                </div>
                <div class="card-body">
                <br><p>add a doctor</p>
                </div>
              </a>

              <a class="card text-center" href="http://localhost/WE%20Assignment%20-%202/main/editPatient.php">
                <div class="card-title">
                  <br><div class="icon-wrapper"><i class="fa-solid fa-bed-pulse fa-xl"></i></div>
                </div>
                <div class="card-body">
                <br><p>Edit Patient Details</p>
                </div>
              </a>

              <a class="card text-center" href="http://localhost/WE%20Assignment%20-%202/main/editDoc.php">
                <div class="card-title">
                <br><div class="icon-wrapper"><i class="fa-solid fa-hospital-user fa-xl"></i></div>
                </div>
                <div class="card-body">
                <br><p>Edit Doctor Details</p>
                </div>
              </a>

              <a class="card text-center" href="">
                <div class="card-title">
                  <div class="icon-wrapper"><i class="fa-regular fa-newspaper"></i></div>
                </div>
                <div class="card-body">
                <br><p>Web Info</p>
                </div>
              </a>

            </div>

            <div class="card-deck">

              <a class="card text-center" href="http://localhost/WE%20Assignment%20-%202/main/delCity.php">
                <div class="card-title">
                  <div class="icon-wrapper"><i class="fa-solid fa-building-circle-xmark fa-xl"></i></div>
                </div>
                <div class="card-body">
                <br><p>Delete City</p>
                </div>
              </a>

              <a class="card text-center" href="http://localhost/WE%20Assignment%20-%202/main/delDoc.php">
                <div class="card-title">
                  <div class="icon-wrapper"><i class="fa-solid fa-syringe fa-xl"></i></div>
                </div>
                <div class="card-body">
                <br><p>Delete Doctor</p>
                </div>
              </a>

              <a class="card text-center" href="http://localhost/WE%20Assignment%20-%202/main/delPat.php">
                <div class="card-title">
                  <div class="icon-wrapper"><i class="fa-solid fa-head-side-cough-slash fa-xl"></i></div>
                </div>
                <div class="card-body">
                <br><p>Delete Patients</p>
                </div>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
