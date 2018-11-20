<?php include 'inc/header.php';?>

<nav class="navbar navbar-expand-lg navbar-light gradient-5 shadow p-1 mb-1">
  <div class="container">
    <a class="navbar-brand" href="login.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" ><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
  </div>  
</nav>

<div class="container pt-5">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-sm-block  mt-5 pt-5">
      <div id="carouselExampleSlidesOnly" class="carousel slide shadow-lg animated fadeIn" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pic1.jpeg" alt="First slide">
          </div>
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/pic2.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pic3.jpeg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/pic4.jpeg" alt="Fourth slide">
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="card bg-white shadow p-1 mb-1 text-black mb-5 animated fadeIn" id="card-hover">
        <img class="card-img-top" alt="">
        <div class="card-body">
          <h4 class="card-title text-center">Sign up</h4><hr>
          <form action="#" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control input-rounded" placeholder="Firstname" autocomplete="off" autofocus>
              </div>
              <div class="form-group col-md-6">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control input-rounded" autocomplete="off" placeholder="Lastname">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" class="form-control input-rounded" autocomplete="off">
              </div>
            </div>
            <label for="Gender">Select Your Gender :</label>
            <div class="form-row">
              <div class="form-group col-md-6">
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" value="Male" name="gender" class="custom-control-input" checked="checked">
                  <label class="custom-control-label" for="customRadio1">Male</label>
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio2" value="Female" name="gender" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio2">Female</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control input-rounded" autocomplete="off">
              </div>
              <div class="form-group col-md-6">
                <label for="confirm_pass">Confirm Password</label>
                <input type="password" name="confirm_pass" placeholder="Confirm Password" class="form-control input-rounded" autocomplete="off">
              </div>
            </div>
            <input type="submit" value="Signup" class="btn gradient-5 text-white rounded mb-4 btn-block btn-rounded pl-4 pr-4 mt-2">
          </form>
          <p class="mt-3">Already Have an account? <a href="login.php">Login</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>

