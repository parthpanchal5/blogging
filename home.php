<?php include 'inc/header.php';?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg gradient-5 shadow p-1 mb-1 navbar-default fixed-top">
  <div class="container">
    <a class="navbar-brand" href="home.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" style="border-radius: 20px;"><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
    <form class="form-inline mr-auto" method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <div class="form-group">
        <input type="text" class="form-control input-rounded" name="q" id="inputPassword2" placeholder="Search for people..." style="font-size: 15px;">
      </div>
      <button type="submit" class="btn btn-primary" id="userSearch"><i class="fa fa-search"></i></button>
    </form>
  </div>  
</nav>

<div class="container pt-5 mt-5">
  <div class="row">
    <div class="col-md-3 col-xl-3">
      <div class="card shadow">
        <div class="card-header bg-grey"><img class="img-thumbnail" src="img/userprofile/maleavatar.jpg" alt="maleavatar" style="height: 100px !important; width: 100px !important; border-radius: 65%; position: absolute; top: -10%; left: 50%;"> Parth P.</div><br>
        <div class="card-body">
          <h4 class="card-title"></h4>
          <p class="card-text">Body</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-6">
      <div class="card shadow">
      <div class="card-header bg-white" style="padding: 5px 0px 6px 10px !important;"><img src="img/userprofile/maleavatar.jpg" alt="maleavatar" height="50" class="mr-2">Parth Panchal</div><br>
      <img class="card-img-top" src="img/pic1.jpeg" alt="Card image cap">
        <div class="card-body">
          <i class="far fa-heart fa-2x" style="cursor: pointer;" id="like"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include 'inc/footer.php';?>


