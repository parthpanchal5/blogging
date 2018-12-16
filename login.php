<?php
  include 'config/conn.php';

  // Check for submit
  if(isset($_POST['login'])){
    // init err vars
    $userinput_err = $password_err = $global_err = '';

    $userinput = mysqli_real_escape_string($conn, $_POST['userinput']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check for empty vars
    if(empty($userinput) && empty($password)){
      $global_err = '<div class="alert alert-danger alert-dismissible fade show animated tada" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>All fields are required</strong>
                    </div>';
    }
    else{
      if(empty($userinput)){
        $userinput_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Firstname is required</strong>
                          </div>';
      }if(empty($password)){
        $password_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Password is required</strong>
                          </div>';
      }
    }
  }
?>


<?php include 'inc/header.php';?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg gradient-5 shadow p-1 mb-1 navbar-default fixed-top">
  <div class="container">
    <a class="navbar-brand" href="login.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" style="border-radius: 20px;"><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
  </div>  
</nav>

  <div class="container pt-5 mt-5">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-sm-block">
        <h2 class="animated  text-center" id="moto">The Place Where People Comes to <span class="words p-3"></span></h2>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin-top: 8%;">
        <div class="card bg-white shadow p-1 mb-1 text-black mb-5 pt-2 animated " id="card-hover">
          <img class="card-img-top" alt="">
          <div class="card-body">
            <h4 class="card-title text-center">Login</h4><?php echo $global_err; ?><hr>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
              <div class="form-group">
                <!-- <label for="Username or Email">Username or email</label> -->
                <input type="text" class="form-control mt-3 mb-3 input-rounded <?php echo (!empty($userinput_err)) ? 'is-invalid' : ''; ?>" name="userinput" placeholder="Username or Email" autofocus data-toggle="tooltip" data-placement="top" title="Username or email" value="<?php echo $userinput; ?>">
                <?php echo $userinput_err; ?>
              </div>
              <div class="form-group">
                <!-- <label for="Password">Password</label> -->
                <input type="password" class="form-control mt-3 mb-3 input-rounded <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password" data-toggle="tooltip" data-placement="top" title="Password" value="<?php echo $password; ?>">
                <?php echo $password_err; ?>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox mr-sm-2">
                  <input type="checkbox" class="custom-control-input" name="remember_me" id="customControlAutosizing" >
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
              </div>
              <input type="submit" value="Login" name="login" class="btn gradient-5 text-white rounded mb-4 btn-block btn-rounded">
            </form>
            <a href="forgot.php">Forgot Password?</a>
            <p class="mt-3">New to Blogger? <a href="signup.php">Sign Up</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'inc/footer.php';?>


