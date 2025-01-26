<?php
if(isset($_POST["submit"]))
{
$conn=mysqli_connect('localhost','root','');
$select=mysqli_select_db($conn,'project_examspace');
if(!$select)
{
    echo "not connected to database";
}
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   //$repass=$_POST['re-password'];
    
    
    $sql="INSERT INTO `user` (`username`, `email`, `password`)VALUES ('$username', '$email', '$password')";

  if(!mysqli_query($conn,$sql))
  {
      echo "not inserted database";

  }
  else{
     header("location:login.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

  <?php
  include("header.php");
  ?>
   

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Register</h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
      </div>
    </div>
<form method="POST" onsubmit=" return validateForm()">
<div class="site-section">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-12 form-group">
                           <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control form-control-lg">
                            <span id = "name" style="color:red"></span>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email"name="email" id="email" class="form-control form-control-lg">
                            <span id = "mail" style="color:red"></span>
                        </div>
                        <div class="col-md-12 form-group" >
                            <label for="pword">Password</label>
                            <input type="password" name="password" id="pword" class="form-control form-control-lg">
                            <span id = "pass1" style="color:red"></span>
                        </div>
                        <div class="col-md-12 form-group" >
                            <label for="pword2">Confirm Password</label>
                            <input type="password"name="re-password" id="pword2" class="form-control form-control-lg">
                            <span id = "pass2" style="color:red"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit"name="submit" value="Register" class="btn btn-primary btn-lg px-5">
                        </div>
                    </div>
                </div>
            </div>
            

          
        </div>
    </div>
  </form>
  <script>
function validateForm() {
    //collect form data in JavaScript variables
    var name = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var pass1 = document.getElementById("pword").value;
	var pass2 = document.getElementById("pword2").value;
    
    //check empty first name field
    if(name == "") {
      document.getElementById("name").innerHTML = "**please enter your name";
      return false;
    }
    
    //character data validation
    if(!isNaN(name)){
      document.getElementById("name").innerHTML = "**Only characters are allowed";
      return false;
    }

   //email data validation
    if(email == ""){
      document.getElementById("mail").innerHTML = "**please enter your email id";
      return false;
    } 
  
  
    //check empty password field
    if(pass1 == "") {
      document.getElementById("pass1").innerHTML = "**please enter the password!";
      return false;
    }
  
    //check empty confirm password field
    if(pass2 == "") {
      document.getElementById("pass2").innerHTML = "**please enter the password!";
      return false;
    } 
   
    //minimum password length validation
    if(pass1.length < 4) {
      document.getElementById("pass1").innerHTML = "**Password length must be atleast 4 characters";
      return false;
    }

    //maximum length of password validation
    if(pass1.length > 15) {
      document.getElementById("pass1").innerHTML = "**Password length must not exceed 15 characters";
      return false;
    }
  
    if(pass1 != pass2) {
      document.getElementById("pass2").innerHTML = "**Passwords are not same";
      return false;
    } 
    else {
      location.replace("login.php")

     
    }
 }
</script>
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