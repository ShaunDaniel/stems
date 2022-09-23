<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

  <div class="container">
    <div class="row align-items-center position-relative">


      <div class="site-logo">
        <a href="homepage.php"><img src="assets/images/newcaps.png" alt="logo" class="logo" style="width:30vh;">
      </div>

      <div class="col-12">
        <nav class="site-navigation text-right ml-auto " role="navigation">

          <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
            <li><a href="#home-section" class="nav-link">Home</a></li>
            <li><a href="./attendance.php" class="nav-link">Attendance</a></li>
            <li><a href="./payments.php" class="nav-link">Payments</a></li>
            <li><a href="#blog-section" class="nav-link">Blog</a></li>
            <li class="has-children" style="<?php if (basename($_SERVER['PHP_SELF']) != "homepage_nomentor.php" && basename($_SERVER['PHP_SELF']) != "login.php" && basename($_SERVER['PHP_SELF']) != "register.php" && basename($_SERVER['PHP_SELF']) != "login_mentor.php" && basename($_SERVER['PHP_SELF']) != "register_mentor.php") {
                                              echo 'display:none;';
                                            } ?>">

              <a href="#about-section" class="nav-link"><?php if (basename($_SERVER['PHP_SELF']) == "login.php" || basename($_SERVER['PHP_SELF']) == "login_mentor.php") {
                                                          echo 'Register';
                                                        } elseif (basename($_SERVER['PHP_SELF']) == "homepage_nomentor.php" || basename($_SERVER['PHP_SELF']) == "register.php" || basename($_SERVER['PHP_SELF']) == "register_mentor.php") {
                                                          echo 'Login';
                                                        }
                                                        ?></a>
              <ul class="dropdown arrow-top" style="<?php if (basename($_SERVER['PHP_SELF']) != "homepage_nomentor.php" && basename($_SERVER['PHP_SELF']) != "login.php" && basename($_SERVER['PHP_SELF']) != "register.php" && basename($_SERVER['PHP_SELF']) != "login_mentor.php" && basename($_SERVER['PHP_SELF']) != "register_mentor.php") {
                                                      echo 'display:none;';
                                                    } ?>">
                <li><a href="<?php if (basename($_SERVER['PHP_SELF']) == "login.php" || basename($_SERVER['PHP_SELF']) == "login_mentor.php") {
                                echo './register.php';
                              } elseif (basename($_SERVER['PHP_SELF']) == "register.php" || basename($_SERVER['PHP_SELF']) == "register_mentor.php"|| basename($_SERVER['PHP_SELF']) == "homepage_nomentor.php") {
                                echo './login.php';
                              } ?>" class="nav-link">Volunteers</a></li>
                <li><a href="<?php if (basename($_SERVER['PHP_SELF']) == "login.php") {
                                echo './register_mentor.php';
                              }
                              ?>" style="<?php if (basename($_SERVER['PHP_SELF']) == "register.php" || basename($_SERVER['PHP_SELF']) == "register_mentor.php" || basename($_SERVER['PHP_SELF']) == "homepage_nomentor.php") {
              echo 'display:none;';
            }
            ?>" class="nav-link">Mentors</a></li>


              </ul>
            </li>

            <li class="has-children" style="<?php if (!isset($_SESSION['name'])) {
                                              echo 'display:none;';
                                            } else {
                                            } ?>">

              <a href="#about-section" class="nav-link" style="<?php if (!isset($_SESSION['name'])) {
                                                                  echo 'display:none;';
                                                                } else {
                                                                  echo 'display:block;';
                                                                } ?>"><?php echo $_SESSION['name']; ?></a>
              <ul class="dropdown arrow-top">
                <li><a href="#team-section" class="nav-link">Profile</a></li>
                <li class="has-children">
                  <a href="#">More Links</a>
                  <ul class="dropdown">
                    <li><a href="#">Option #1</a></li>
                    <li><a href="#">Option #2</a></li>
                    <li><a href="#">Option #3</a></li>
                  </ul>
                </li>
                <li><a href="./logout.php" class="nav-link">Logout</a></li>


              </ul>
            </li>
          </ul>

        </nav>

      </div>

      <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

    </div>
  </div>

</header>