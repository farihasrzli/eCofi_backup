<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eCourse File</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">    
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css"><link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">    
    <link rel="stylesheet" href="css/custom.css">    
    <link rel="shortcut icon" href="favicon.png">
  </head>

  <body>
    <header class="header">
      <!-- ==================== Navigation ==================== -->
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <a href="index.html" class="navbar-brand">eCourse File Management System</a>
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>

          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="a_homepage.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item"><a href="a_profile.php" class="nav-link ">Profile</a>
              </li>
              <li class="nav-item"><a href="a_data.php" class="nav-link ">Data</a>
              </li>
              <li class="nav-item"><a href="a_user.php" class="nav-link active">User</a>
              </li>
              <li class="nav-item"><a href="logout.php" class="nav-link ">Logout</a>
              </li>
            </ul>
          <div class="navbar-text"><input type="search" placeholder="What are you looking for?"><button type="submit" class="submit"><i class="icon-search"></i></button>
            </div>
          </div>
        </div>
      </nav>
    </header>
<!-- ==================== End of Navigation ==================== -->


<!-- ==================== Start of Main Contain ==================== -->



  
  <div class="container-fluid">
  
  <div class="row">
  <div class="col-lg-12">
      <button class="btn btn-success float-right btn-md" id="new_user"><i class="fa fa-plus"></i> New user</button>
  </div>
  </div>
  <br>
  <div class="row">
    <div class="card col-lg-12">
      <div class="card-body">
        <table class="table-striped table-bordered col-md-12">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Name</th>
          <th class="text-center">Username</th>
          <th class="text-center">Email Address</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include 'ecofidb.php';
          $user = $con->query("SELECT * FROM user ORDER BY u_name");
          $i = 1;
          while($row= $user->fetch_assoc()):
         ?>
         <tr>
          <td>
            <?php echo $i++ ?>
          </td>
          <td>
            <?php echo $row['u_name'] ?>
          </td>
          <td class="text-center">
            <?php echo $row['u_username'] ?>
          </td>
          <td class="text-center">
            <?php echo $row['user_email'] ?>
          </td>
          <td>
            <center>
                <div class="btn-group">
                  <button type="button" class="btn btn-success">Action</button>
                  <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item edit_user" href="javascript:void(0)" data-user_id = '<?php echo $row['user_id'] ?>'>Edit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item delete_user" href="javascript:void(0)" data-user_id = '<?php echo $row['user_id'] ?>'>Delete</a>
                  </div>
                </div>
                </center>
          </td>
         </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
      </div>
    </div>
  </div>

</div>
<script>
  
$('#new_user').click(function(){
  uni_modal('New User','a_manageuser.php')
})
$('.edit_user').click(function(){
  uni_modal('Edit User','a_manageuser.php?user_id='+$(this).attr('data-user_id'))
})

</script>




<!-- ==================== End of Main Contain ==================== -->



<!-- ==================== Page Footer ==================== -->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <h6 class="text-white">Faculty of Communication, Visual Arts & Computing</h6>
            </div>
            <div class="contact-details">
              <p>Jalan Timur Tambahan 5600 Bestari Jaya Selangor Darul Ehsan Malaysia</p>
              <p>Phone: (+60) 332 895 121 </p>
              <p>Email: <a href="mailto:info@company.com">fcvac.unisel.edu.my</a></p>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/fcvac_unisel/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="menus d-flex">
              <ul class="list-unstyled">
                <li> <a href="#">My Account</a></li>
                <li> <a href="#">Add Listing</a></li>
                <li> <a href="#">Pricing</a></li>
                <li> <a href="#">Privacy &amp; Policy</a></li>
              </ul>
              <ul class="list-unstyled">
                <li> <a href="#">Our Partners</a></li>
                <li> <a href="#">FAQ</a></li>
                <li> <a href="#">How It Works</a></li>
                <li> <a href="#">Contact</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2021. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-right">
              <p>Template By <a href="https://bootstrapious.com/p/bootstrap-carousel" class="text-white">Fariha</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ==================== JavaScript files ==================== -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
