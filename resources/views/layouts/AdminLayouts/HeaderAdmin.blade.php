<body>
  <div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('library/images/logo.svg') }}" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="search">
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="icon ion-md-notifications-outline mx-0"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="icon ion-md-information-circle-outline mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">Application Error</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">
                        Just now
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="icon ion-md-settings mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">Settings</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">
                        Private message
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="ion ion-md-contact mx-0"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal">New user registration</h6>
                      <p class="font-weight-light small-text mb-0 text-muted">
                        2 days ago
                      </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="ion ion-md-expand mx-0"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../images/faces/face4.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                      </h6>
                      <p class="font-weight-light small-text text-muted mb-0">
                        The meeting is cancelled
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../images/faces/face2.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                      </h6>
                      <p class="font-weight-light small-text text-muted mb-0">
                        New product launch
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <img src="../../images/faces/face3.jpg" alt="image" class="profile-pic">
                    </div>
                    <div class="preview-item-content flex-grow">
                      <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                      </h6>
                      <p class="font-weight-light small-text text-muted mb-0">
                        Upcoming board meeting
                      </p>
                    </div>
                  </a>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <span class="nav-profile-name">Derek Wallace</span>
                  <img src="../../images/faces/face28.png" alt="profile"/>
                  
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    <i class="icon ion-md-settings text-primary"></i>
                    Settings
                  </a>
                  <a href=" {{ URL::TO('/logout') }}" class="dropdown-item">
                    <i class="ion ion-md-log-out text-primary"></i>
                   Wyloguj
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="icon ion-md-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
          <ul class="nav page-navigation">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="ion ion ion-ios-archive menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/widgets/widgets.html">
                <i class="ion ion-md-desktop menu-icon"></i>
                <span class="menu-title">Widgets</span>
              </a>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link">
                <i class="ion ion-md-apps menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Basic Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/accordions.html">Accordion</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdown</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/tooltips.html">Tooltip</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <div class="row">
                      <div class="col-12">
                        <p class="category-heading">Advanced Elements</p>
                        <div class="submenu-item">
                          <div class="row">
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/context-menu.html">Context Menu</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/loaders.html">Loader</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/slider.html">Slider</a></li>
                              </ul>
                            </div>
                            <div class="col-md-6">
                              <ul>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/popups.html">Popup</a></li>
                                <li class="nav-item"><a class="nav-link" href="pages/ui-features/notifications.html">Notification</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-4">
                    <p class="category-heading">Icons</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/icons/flag-icons.html">Flag Icons</a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/icons/simple-line-icon.html">Simple Line Icons</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/icons/themify.html">Themify Icons</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="ion ion-md-document menu-icon"></i>
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text Editor</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code Editor</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link">
                <i class="ion ion-md-grid menu-icon"></i>
                <span class="menu-title">Data</span>
                <i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-6">
                    <p class="category-heading">Charts</p>
                    <div class="submenu-item">
                      <div class="row">
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html">Chart Js</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/google-charts.html">Google Chart</a></li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <ul>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/sparkline.html">Sparkline</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/c3.html">C3 Chart</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/chartist.html">Chartist</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Table</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html">Basic Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/tables/data-table.html">Data Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/tables/sortable-table.html">Sortable Table</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Maps</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item mega-menu">
              <a href="#" class="nav-link">
                <i class="ion ion-logo-codepen menu-icon"></i>
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i></a>
              <div class="submenu">
                <div class="col-group-wrapper row">
                  <div class="col-group col-md-3">
                    <p class="category-heading">User Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">Error Pages</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-400.html">400</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-500.html">500</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/error-505.html">505</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">E-commerce</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/invoice.html">Invoice</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/pricing-table.html">Pricing Table</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/orders.html">Orders</a></li>
                    </ul>
                  </div>
                  <div class="col-group col-md-3">
                    <p class="category-heading">General</p>
                    <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="pages/samples/search-results.html">Search Results</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/profile.html">Profile</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/timeline.html">Timeline</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/news-grid.html">News grid</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/portfolio.html">Portfolio</a></li>
                      <li class="nav-item"><a class="nav-link" href="pages/samples/faq.html">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="ion ion-md-images-filter menu-icon"></i>
                <span class="menu-title">Statystyki</span>
                <i class="menu-arrow"></i></a>
              <div class="submenu">
                <ul class="submenu-item">
                  <li class="nav-item"><a class="nav-link" href="pages/apps/email.html">Ogólne</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/calendar.html">Odwiedziny</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ URL::TO('admin/logowania') }}">Logowania</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Ranking Sklepów</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Duble Sklepów</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/apps/gallery.html">Paragony</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="pages/documentation/documentation.html" class="nav-link">
                <i class="ion ion-md-document menu-icon"></i>
                <span class="menu-title">Documentation</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>