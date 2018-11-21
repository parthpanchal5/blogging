<?php include 'inc/header.php';?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg gradient-4 shadow p-1 mb-1 navbar-default fixed-top animated slideInDown">
  <div class="container">
    <a class="navbar-brand" href="login.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" style="border-radius: 20px;"><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
  </div>  
</nav>
<div class="block d-none d-sm-block"></div>
<div class="container pt-5">
  <div class="row">
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <div class="card bg-white shadow p-1 text-black mb-3  mt-5 pt-2 animated zoomInUp" id="card-hover">
        <img class="card-img-top" alt="">
        <div class="card-body">
          <h4 class="card-title text-center">Password Recovery</h4><hr>
          <form action="#" method="POST">
            <div class="form-group">
              <!-- <label for="Email">Email</label> -->
              <input type="text" class="form-control input-rounded" autocomplete="off" placeholder="Registered Email" autofocus>
            </div>
            <div class="form-group">
              <!-- <label for="Password">New Password</label> -->
              <input type="password" class="form-control input-rounded" placeholder="New Password">
            </div>
            <div class="form-group">
              <!-- <label for="Confirm Password">Confirm New Password</label> -->
              <input type="password" class="form-control input-rounded" placeholder="Confirm New Password">
            </div>
            <input type="submit" value="Reset Password" class="btn gradient-4 text-white rounded mb-4 btn-block btn-rounded mt-4">
          </form>
          <p><a href="login.php">Back to Login</a></p>
        </div>
      </div>
      <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3"></div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>


