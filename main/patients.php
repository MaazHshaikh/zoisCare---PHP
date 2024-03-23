<html>

<head>
  <title>Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css_dash\bootstrap.min.css"/>
  <link rel="stylesheet" href="css_dash\styles_dash.css"/>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top"><a class="navbar-brand" href=""><img src="css\favicon.svg" /><span>zoisCare.</span></a>
      <div class="navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link"><i class="las la-question-circle"></i></a></li>
          <li class="nav-item dropdown dropleft"><a class="nav-link notification-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="badge badge-pill badge-primary"
                style="float:right;margin-bottom:-10px;"></span><i class="las la-bell"></i></a>
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
          <li class="nav-item"><a class="nav-link profile-dropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="rounded-circle" src="css\person.jpg" /><span class="d">jane
                doe</span></a>
            <div class="dropdown">
              <div class="dropdown-menu shadow-lg profile-dropdown-menu" aria-labelledby="profile-dropdown"><a class="dropdown-item" href="#"><i class="las la-user mr-2"></i>profile</a><a class="dropdown-item" href="#"><i
                    class="las la-cog mr-2"></i>settings</a></div>
            </div>
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
        <hr class="divider" />
      </ul>
    </div>
    <div class="main-content">
      <div class="container-fluid">
        <div class="section title-section">
          <h5 class="page-title"></h5>
        </div>
        <div class="section filters-section">
          <div class="dropdowns-wrapper">
            <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">filter</a>
              <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">age</a><a class="dropdown-item" href="#">diagnosis</a><a class="dropdown-item" href="#">triage</a></div>
            </div>
            <div class="dropdown"><a class="btn btn-dark-red-o dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">sort by</a>
              <div class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#">patient id</a><a class="dropdown-item" href="#">patient name</a><a class="dropdown-item" href="#">age</a><a class="dropdown-item"
                  href="#">date of birth</a><a class="dropdown-item" href="#">diagnosis</a><a class="dropdown-item" href="#">triage</a></div>
            </div>
          </div>
          <div class="switch-view-btns">
            <div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-darker-grey-o active"><input id="card-view-btn" type="radio" name="options" checked="" /><i class="las la-th-large"></i></label><label
                class="btn btn-darker-grey-o"><input id="table-view-btn" type="radio" name="options" /><i class="las la-list-ul"></i></label></div>
          </div>
          <div class="buttons-wrapper ml-auto"><button class="btn btn-dark-red-f-gr"><i class="las la-plus-circle"></i>add a new patient</button></div>
        </div>
        <div class="section patients-card-view">
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>urgent</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>non urgent</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>resuscitation</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>emergency</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>urgent</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>non urgent</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>resuscitation</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-header">
                  <div class="card-img-top"><img class="rounded-circle" src="css\people.svg" loading="lazy" /><a class="view-more" href="details.html">view profile</a></div>
                </div>
                <div class="card-body">
                  <div class="card-subsection-title">
                    <h5>john doe</h5>
                    <p class="text-muted">patient-id: 2189178</p>
                  </div>
                  <div class="card-subsection-body"><label class="text-muted">age</label>
                    <p>29</p><label class="text-muted">date of birth</label>
                    <p>21/12/1993</p><label class="text-muted">diagnosis</label>
                    <p>emergency</p>
                  </div>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="section patients-table-view no-display">
          <table class="table table-hover table-responsive-lg">
            <thead>
              <tr>
                <th>patient ID</th>
                <th>patient name</th>
                <th>age</th>
                <th>date of birth</th>
                <th>diagnosis</th>
                <th>triage</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-orange">urgent</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-green">non urgent</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-blue">resuscitation</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-pink">emergency</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-orange">urgent</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-green">non urgent</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-blue">resuscitation</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
              <tr>
                <td>2189178</td>
                <td><img class="rounded-circle" src="css\people.svg" loading="lazy" /><span class="ml-2">john doe</span></td>
                <td>29 yo</td>
                <td>21/03/1992</td>
                <td>cancer</td>
                <td><label class="label-pink">emergency</label></td>
                <td><a class="view-more btn btn-sm btn-dark-red-f" href="details.html">view profile</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal onboarding-modal" tabindex="=1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Welcome</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><i class="las la-times-circle"></i></button>
              </div>
              <div class="modal-body">
                <div class="carousel slide" id="carouselExampleCaptions" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active"><img class="d-block" src="css\undraw_dashboard_nklg.svg" alt="..." />
                      <div class="carousel-caption d-md-block">
                        <p>intuitive<a href="" data-dismiss="modal">dashboard<i class="las la-external-link-alt"></i></a></p>
                      </div>
                    </div>
                    <div class="carousel-item"><img class="d-block" src="css\undraw_medicine_b1ol.svg" alt="..." />
                      <div class="carousel-caption d-md-block">
                        <p>access to<a href="specialists.html">specialists<i class="las la-external-link-alt"></i></a></p>
                      </div>
                    </div>
                    <div class="carousel-item"><img class="d-block" src="css\undraw_receipt_ecdd.svg" alt="..." />
                      <div class="carousel-caption d-md-block">
                        <p>simple<a href="procurement.html">procurement<i class="las la-external-link-alt"></i></a>process</p>
                      </div>
                    </div>
                    <div class="carousel-item"><img class="d-block" src="css\undraw_new_notifications_fhvw.svg" alt="..." />
                      <div class="carousel-caption d-md-block">
                        <p>comprehensive<a href="notifications.html">notification<i class="las la-external-link-alt"></i></a>center</p>
                      </div>
                    </div>
                    <div class="carousel-item"><img class="d-block" src="css\undraw_Preferences_re_49in.svg" alt="..." />
                      <div class="carousel-caption d-md-block">
                        <p>minimalist<a href="settings.html">settings<i class="las la-external-link-alt"></i></a>center</p>
                      </div>
                    </div>
                  </div><a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"><i class="las la-chevron-circle-left"></i><span class="sr-only">Previous</span></a><a class="carousel-control-next"
                    href="#carouselExampleCaptions" role="button" data-slide="next"><i class="las la-chevron-circle-right"></i><span class="sr-only">Next</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="page-footer text-center">
          <div class="fixed-bottom shadow-sm"><a href="https://covid19.who.int" target="_blank"><img src="css\covid-19.svg" /><span>view COVID-19 info</span></a></div>
        </div>
      </footer>
    </div>
  </main>
</body>

</html>
