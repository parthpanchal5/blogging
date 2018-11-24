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
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-sm-block  mt-5 pt-5">
      <div id="carouselExampleSlidesOnly" class="carousel slide shadow-lg animated fadeIn" data-ride="carousel">
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
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="card bg-white shadow p-1 mb-1 text-black mb-3 pt-3 mt-2 animated fadeIn" id="card-hover">
        <img class="card-img-top" alt="">
        <div class="card-body">
          <h4 class="card-title text-center">Sign up</h4><hr>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" id="signUpForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- <label for="firstname">Firstname</label> -->
                <input type="text" class="form-control input-rounded" name="firstname" placeholder="Firstname" autocomplete="off" autofocus data-toggle="tooltip" data-placement="top" title="Firstname">
              </div>
              <div class="form-group col-md-6">
                <!-- <label for="lastname">Lastname</label> -->
                <input type="text" class="form-control input-rounded" name="lastname" autocomplete="off" placeholder="Lastname" data-toggle="tooltip" data-placement="top" title="Lastname">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <!-- <label for="email">Email</label> -->
                <input type="text" placeholder="Email" name="email" class="form-control input-rounded " autocomplete="off" data-toggle="tooltip" data-placement="top" title="Email">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <!-- <label for="email">Username</label> -->
                <input type="text" name="username" placeholder="Username" class="form-control  input-rounded" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Username">
              </div>
            </div>
            
            <!-- <label for="Gender">Select Your Gender :</label> -->
            <div class="form-row">
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
              </div>
              <div class="form-group col-md-6">
              <input type="date" name="birthday" id="date" class="form-control input-rounded" data-toggle="tooltip" data-placement="top" title="Birthday" min="1997-05-06">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <!-- <label for="password">Password</label> -->
                <input type="password" name="password" placeholder="Password" class="form-control input-rounded" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Password">
              </div>
              <div class="form-group col-md-6">
                <!-- <label for="confirm_pass">Confirm Password</label> -->
                <input type="password" name="confirm_pass" placeholder="Confirm Password" class="form-control input-rounded" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Confirm your password">
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


