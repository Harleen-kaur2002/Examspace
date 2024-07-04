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
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Courses</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
      <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>
<?php
include("connect_examspace.php");
$query= mysqli_query($con,"SELECT * FROM questions");
if(!$query)
{
    echo"not working";
}
?>



            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Question papers</h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <?php
                  
if(mysqli_num_rows($query) > 0)
{
  
 ?>
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Sr. No.
                        </th>
                        <th>
                         Question papers
                        </th>
                        <th>
                          Description
                        </th>  
                      </thead>
                      <?php
                    $i=1;
                    while($row=mysqli_fetch_array($query)){
                     // $imageURL = 'uploads/'.$row["file"];
                      ?>
                     <tr>                                                   
                      <td><?=$i?></td>
                      <td><a href="uploads/<?php echo $row["file"]?>"><?= $row["file"] ?></a></td>
                      <td><?=$row["description"];?></td>
                      <td><button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button></td>
                      <td><button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button></td>
                    </tr>
                  <?php 
                  $i++;           
                    }
                    ?>
                </table>
                    <?php
                  }
                else{
                      echo"no result found";
                  }
                  ?>
                  </div>
                </div>
              </div>
            </div>
         <?
     include_once('footer.php');
     ?>
</body>

</html>