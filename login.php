<?php include 'inc/header.php';?>

<nav class="navbar navbar-expand-lg gradient-5 shadow p-1 mb-1 navbar-default navbar-fixed-top">
  <div class="container">
    <a class="navbar-brand" href="login.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" style="border-radius: 20px;"><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
  </div>  
</nav>

<div class="container pt-5">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-sm-block">
      <h2 class="animated fadeIn text-center" id="moto">The Place Where People Comes to <span class="words p-3"></span></h2>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="card bg-white shadow p-1 mb-1 text-black mb-5 animated fadeIn" id="card-hover">
        <img class="card-img-top" alt="">
        <div class="card-body">
          <h4 class="card-title text-center">Login</h4><hr>
          <form action="#" method="POST">
            <div class="form-group">
              <label for="Username or Email">Username or email</label>
              <input type="text" class="form-control input-rounded" placeholder="Username or Email" autofocus>
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control input-rounded" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox mr-sm-2">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing" checked>
                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
              </div>
            </div>
            <input type="submit" value="Login" class="btn gradient-5 text-white rounded mb-4 btn-block btn-rounded pl-4 pr-4">
          </form>
          <a href="forgot.php">Forgot Password?</a>
          <p class="mt-3">Don't have an account? <a href="signup.php">Sign Up</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>


