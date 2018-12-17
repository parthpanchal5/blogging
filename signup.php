<?php 
  include 'config/conn.php';

  // Check for submit
  if(isset($_POST['signup'])){
    // init err vars
    $firstname_err = $lastname_err = $email_err = $username_err = $birthday_err = $phone_err = $password_err = $confirmpass_err = $global_err = '';

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);
    $userip = $_SERVER['REMOTE_ADDR'];

    // Check for empty vars
    if(empty($firstname) && empty($lastname) && empty($email) && empty($username) && empty($birthday) && empty($phone) && empty($password) && empty($confirmpass)){
      $global_err = '<div class="alert alert-danger alert-dismissible fade show animated shake" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong>All fields are required</strong>
                    </div>';
    }else{
      if(empty($firstname)){
        $firstname_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Firstname is required</strong>
                          </div>';
      }if(empty($lastname)){
        $lastname_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Lastname is required</strong>
                          </div>';
      }if(empty($email)){
        $email_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Email is required</strong>
                      </div>';
      }if(empty($username)){
        $username_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>Username is required</strong>
                        </div>';
      }if(empty($birthday)){
        $birthday_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Birthdate is required</strong>
                          </div>';
      }if(empty($phone)){
        $phone_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Phone no is required</strong>
                          </div>';
      }if(empty($password)){
        $password_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Password is required</strong>
                          </div>';
      }if(empty($confirmpass)){
        $confirmpass_err = '<div class="alert alert-danger alert-dismissible fade show animated fadeInDown" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>Please fill it</strong>
                            </div>';
      }
    }
  }


?>

<?php include 'inc/header.php';?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light gradient-5 shadow p-1 mb-1 fixed-top">
  <div class="container">
    <a class="navbar-brand" href="login.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" ><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
  </div>  
</nav>

<div class="container pt-5 mt-5 mb-4">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 d-none d-sm-block  mt-5 pt-5">
      <div id="carouselExampleSlidesOnly" class="carousel slide shadow-lg animated " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pic1.jpeg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pic2.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pic3.jpeg" alt="Third slide">
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/pic4.jpeg" alt="Fourth slide">
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
      <div class="card bg-white shadow p-1 mb-1 text-black mb-3 pt-3 mt-2 animated " id="card-hover">
        <div class="card-body">
          <h4 class="card-title text-center">Sign up</h4><?php echo $global_err; ?><hr>
          
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="signUpForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- <label for="firstname">Firstname</label> -->
                <input type="text" class="form-control input-rounded <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" name="firstname" placeholder="Firstname" id="firstname" autocomplete="off" autofocus data-toggle="tooltip" data-placement="top" title="Firstname" value="<?php echo $firstname; ?>">
                <span class="text-danger"><?php echo '<br>'.$firstname_err; ?></span>
              </div>
              <div class="form-group col-md-6">
                <!-- <label for="lastname">Lastname</label> -->
                <input type="text" class="form-control input-rounded <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" name="lastname" autocomplete="off" placeholder="Lastname" id="lastname" data-toggle="tooltip" data-placement="top" title="Lastname" value="<?php echo $lastname; ?>">
                <?php echo '<br>'.$lastname_err; ?>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <!-- <label for="email">Email</label> -->
                <input type="text" placeholder="Email" name="email" class="form-control input-rounded <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" autocomplete="off" id="email" data-toggle="tooltip" data-placement="top" title="Email" value="<?php echo $email; ?>">
                <?php echo '<br>'.$email_err; ?>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- <label for="email">Username</label> -->
                <input type="text" name="username" placeholder="Username" class="form-control input-rounded <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="username" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Username" value="<?php echo $username; ?>">
                <?php echo '<br>'.$username_err; ?>
              </div>
              <div class="form-group col-md-6">
                <input type="date" name="birthday" id="date" class="form-control input-rounded <?php echo (!empty($birthday_err)) ? 'is-invalid' : ''; ?>" id="birthday" data-toggle="tooltip" data-placement="top" title="Birthday" min="1997-05-06" value="<?php echo $birthday; ?>">
                <?php echo '<br>'.$birthday_err; ?>
              </div>
            </div>
            
            <!-- <label for="Gender">Select Your Gender :</label> -->
            <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" name="phone" id="phone" placeholder="Phone no" class="form-control input-rounded <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>" id="phone" data-toggle="tooltip" data-placement="top" title="Birthday" max="10" value="<?php echo $phone; ?>">
                <?php echo '<br>'.$phone_err; ?>
              </div>
              <div class="form-group col-md-3">
                <div class="custom-control custom-radio data-toggle="tooltip" data-placement="top" title="Select your gender">
                  <input type="radio" id="customRadio1" value="Male" name="gender" class="custom-control-input" checked="checked">
                  <label class="custom-control-label" for="customRadio1">Male</label>
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="custom-control custom-radio" data-toggle="tooltip" data-placement="top" title="Select your gender">
                  <input type="radio" id="customRadio2" value="Female" name="gender" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
                <?php echo '<br>'.$gender_err; ?>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- <label for="password">Password</label> -->
                <input type="password" name="password" placeholder="Password" class="form-control input-rounded <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="password" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Set a password" value="<?php echo $password; ?>">
                <small id="passwordHelpInline" class="text-muted ml-3">Must be 8-20 characters long.</small>

                <?php echo '<br>'.$password_err; ?>
              </div>
              <div class="form-group col-md-6">
                <!-- <label for="confirm_pass">Confirm Password</label> -->
                <input type="password" name="confirm_pass" placeholder="Confirm Password" class="form-control input-rounded <?php echo (!empty($confirmpass_err)) ? 'is-invalid' : ''; ?>" id="confirm_pass" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Confirm your password" value="<?php echo $confirmpass; ?>">
                <?php echo '<br>'.$confirmpass_err; ?>
              </div>
            </div>
            <input type="submit" value="Signup" name="signup" class="btn gradient-5 text-white btn-block rounded mb-4 btn-rounded mt-2">
          </form>
          <p class="text-secondary" style="font-size: 16px;">By signing up, you agree to our Terms, Data Policy and Cookies Policy.</p>
          <p class="mt-3">I'm already a Blogger? <a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>


