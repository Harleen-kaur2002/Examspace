<?php
include('check_session.php');
?>

<?php
include("questions_header.php");
?>
 <div class="custom-breadcrumns border-bottom">
      <div class="container">
      <a href="index.php">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"><a href="courses.php">Courses</a></span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"><a href="BCA_sem_part.php">BCA Semesters</a></span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"><a href="BCA_5th_sem_sub.php">BCA 5th semester</a></span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"><a href="sem5_BCA_DDBMS_ques_assignment.php">DDBMS Question Assignments</a></span>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"><a href="sem5_BCA_DDBMS_questions.php">DDBMS Question </a></span>
      </div>
 </div>
    <?php
  include("connect_examspace.php");
  $query = mysqli_query($con, "SELECT * FROM `questions` WHERE class='BCA'AND  semester='5th'AND subject='DDBMS'");
  if (!$query) {
    echo "not working";
  }
  ?>
  
            <?php 
include('display_BCA1st_questions.php');

?>
</div>
        </div>
    </div> 
<!-- 
    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div> -->
      
      <?php
include("footer.php");
?>
    
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>   