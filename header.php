<html>
  
  <body>

<div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
          <div class="col-lg-3 text-right">

            <?php
          if (!(isset($_SESSION['login1']) && $_SESSION['login1'] != '')) {

            ?>

            <a href="login.php" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
            <a href="register.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
            <?php
          }
else{
  ?>
  <a href="logout.php" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> logout</a>
  <?php
}
?>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php" class="d-block">
              <img src="images/ExamLogo.png" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="index.php" class="nav-link text-left">Home</a>
                </li>
                <li>
                <!-- <li class="has-children"> -->
                  <a href="about.php" class="nav-link text-left">About Us</a>
                  <!-- <ul class="dropdown">
                    <li><a href="teachers.php">Our Teachers</a></li>
                    <li><a href="about.php">Our School</a></li>
                  </ul> -->
                </li>
               
                <li class="has-children">
                  <a href="courses.php" class="nav-link text-left">Courses</a>
                  <ul class="dropdown">
                    <li><a href="BCA_sem_part.php">BCA</a></li>
                    <li><a href="#">BSC IT</a></li>
                    <li><a href="#">MCA</a></li>
                  </ul>
                </li>
                <li>
                    <a href="contact.php" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <!-- <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div> -->
         
        </div>
      </div>

    </header>
    </body>
</html>