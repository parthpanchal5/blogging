<?php
  include 'config/conn.php';

  // Check for submit
  if(isset($_POST['reset'])){
    // init err vars
    $email_err = $newpassword_err = $cpass_err = $global_err = '';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $newpassword = mysqli_real_escape_string($conn, $_POST['password']);    
    $cpass = mysqli_real_escape_string($conn, $_POST['c_pass']);



    // Check for empty vars
    if(empty($email) && empty($newpassword) && empty($cpass)){
      $global_err = '<div class="alert alert-danger alert-dismissible fade show animated shake" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>All fields are required</strong>
                    </div>';
    }else{
      if(empty($email)){
        $email_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeIn" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Email is required</strong>
                          </div>';
      }if(empty($newpassword)){
        $newpassword_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeIn" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Password is required</strong>
                          </div>';
      }if(empty($cpass)){
        $cpass_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeIn" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Something is missing.</strong>
                          </div>';
      }
    }
  }
?>
<?php include 'inc/header.php';?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg gradient-4 shadow p-1 mb-1 navbar-default fixed-top">
  <div class="container">
    <a class="navbar-brand" href="login.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" style="border-radius: 20px;"><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
  </div>  
</nav>


<div class="block"></div>
<div class="container pt-5">
  <div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" style="margin-top: 15%;">
      <div class="card bg-white shadow p-1 text-black mt-5 p-1 animated " id="card-hover">
        <div class="card-body">
          <h4 class="card-title text-center">Password Recovery</h4><?php echo $global_err; ?><hr>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="form-group">
              <!-- <label for="Email">Email</label> -->
              <input type="text" class="form-control input-rounded mt-3 mb-3" autocomplete="off" name="email" placeholder="Registered Email" autofocus data-toggle="tooltip" data-placement="top" title="Enter your registered email" value="<?php echo $email; ?>">
              <?php echo $email_err; ?>
            </div>
            <div class="form-group">
              <!-- <label for="Password">New Password</label> -->
              <input type="password" class="form-control input-rounded mt-3 mb-3" placeholder="New Password" name="password" data-toggle="tooltip" data-placement="top" title="Set new password" value="<?php echo $newpassword; ?>">
              <?php echo $newpassword_err; ?>
            </div>
            <div class="form-group">
              <!-- <label for="Confirm Password">Confirm New Password</label> -->
              <input type="password" class="form-control input-rounded mt-3 mb-3" placeholder="Confirm New Password" name="c_pass" data-toggle="tooltip" data-placement="top" title="Confirm your new password" value="<?php echo $cpass; ?>">
              <?php echo $cpass_err; ?>
            </div>
            <input type="submit" value="Reset Password" name="reset" class="btn gradient-4 text-white rounded mb-4 btn-block btn-rounded mt-4">
          </form>
          <p><a href="login.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back to Login</a></p>
        </div>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
    </div>
  </div>
</div>

<?php include 'inc/footer.php';?>


