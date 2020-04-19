<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  

  <div class="wrapper">
    <!-- Github Link -->
    <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
      <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
          </linearGradient>
        </defs>
        <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
      </svg>
      <i class="mdi mdi-github-circle"></i>
    </a>

            <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html" title="Sleek Dashboard">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name text-truncate">Sleek Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">                          
                            <li >
                              <a class="sidenav-item-link" href="index.html">
                                <span class="nav-text">Ecommerce</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="analytics.html">
                                <span class="nav-text">Analytics</span>
                                
                                <span class="badge badge-success">new</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                    
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Database Anggota</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">                          
                            <li >
                              <a class="sidenav-item-link" href="{{ route('himatika') }}">
                                <span class="nav-text">Himatika</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('himaka') }}">
                                <span class="nav-text">Himaka</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('hifi') }}">
                                <span class="nav-text">Hifi</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('himbio') }}">
                                <span class="nav-text">Himbio</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('himasta') }}">
                                <span class="nav-text">Himasta</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('pedra') }}">
                                <span class="nav-text">Pedra</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('himatif') }}">
                                <span class="nav-text">Himatif</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('hmte') }}">
                                <span class="nav-text">HMTE</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{ route('himaktu') }}">
                                <span class="nav-text">Himaktu</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                    
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Database Prestasi</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">                          
                            <li >
                              <a class="sidenav-item-link" href="index.html">
                                <span class="nav-text">Ecommerce</span>
                                
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="analytics.html">
                                <span class="nav-text">Analytics</span>
                                
                                <span class="badge badge-success">new</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                    
                  </li>           
                
              </ul>

            </div>

            <div class="sidebar-footer">
              <hr class="separator mb-0" />
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>


    <div class="page-wrapper">
                <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li class="right-sidebar-in">
                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                          <i class="ni ni-user-run"></i>
                          <span>{{ __('Logout') }}</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


      <div class="content-wrapper">
        <div class="content">							<div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header  justify-content-between">
											<h2>Header Dark </h2>
										</div>
										<div class="card-body">
											<blockquote class="blockquote">
												<p class="mb-0">Add class
													<code>header-dark</code> to
													<code>&lt;body id="body"&gt;</code> and remove class <code>header-light</code> if it was added before.</p>
											</blockquote>
											<pre class="mt-4"><code>&lt;body id="body" class="header-dark"&gt;</code></pre>
										</div>
									</div>
								</div>
							</div>
      </div>

        

        <div class="right-sidebar-2">
    <div class="right-sidebar-container-2">
      <div class="slim-scroll-right-sidebar-2">

      <div class="right-sidebar-2-header">
        <h2>Layout Settings</h2>
        <p>User Interface Settings</p>
        <div class="btn-close-right-sidebar-2">
          <i class="mdi mdi-window-close"></i>
        </div>
      </div>

      <div class="right-sidebar-2-body">
        <span class="right-sidebar-2-subtitle">Header Layout</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
        </div>

        <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
        <div class="no-col-space">
          <select class="right-sidebar-2-select" id="sidebar-option-select">
            <option value="sidebar-fixed">Fixed Default</option>
            <option value="sidebar-fixed-minified">Fixed Minified</option>
            <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
            <option value="sidebar-static">Static Default</option>
            <option value="sidebar-static-minified">Static Minified</option>
            <option value="sidebar-static-offcanvas">Static Offcanvas</option>
          </select>
        </div>

        <span class="right-sidebar-2-subtitle">Header Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
        </div>

        <span class="right-sidebar-2-subtitle">Navigation Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
        </div>

        <span class="right-sidebar-2-subtitle">Direction</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
        </div>

        <div class="d-flex justify-content-center" style="padding-top: 30px">
          <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
            Settings</div>
        </div>

      </div>

    </div>
  </div>

</div>

      </div>

                <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

    </div>
  </div>

  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jekyll-search.min.js') }}"></script>
  <script src="{{ asset('assets/js/sleek.bundle.js') }}"></script>
</body>

