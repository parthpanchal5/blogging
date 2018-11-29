<?php include 'inc/header.php';?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg gradient-5 shadow p-1 mb-1 navbar-default fixed-top">
  <div class="container">
    <a class="navbar-brand" href="home.php">
      <img src="img/blog.png" class="d-inline-block align-top ml-3 rounded-circle" alt="logo" style="border-radius: 20px;"><span style="margin: 20px; font-weight: bolder; font-size: 25px;" class="text-white">Blogger</span>
    </a>
    <form class="form-inline mr-auto shadow small" method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <div class="form-group">
        <input type="text" class="form-control input-rounded" name="q" id="inputPassword2" placeholder="Search for people..." style="font-size: 15px;">
      </div>
      <button type="submit" class="btn btn-primary" id="userSearch"><i class="fa fa-search"></i></button>
    </form>
  </div>  
</nav>

<div class="container pt-5 mt-5">
  <div class="row">
    
  </div>
</div>
<?php include 'inc/footer.php';?>


