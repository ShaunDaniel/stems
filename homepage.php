<?php session_start();

require_once('include/navbar.php');
if ($_SESSION['login'] != "true") {
  header('Location:./homepage_nologin.php');
  exit();
}
else {
  if ($_SESSION['utype'] == 'mentor') {
    header('Location:./mentor_homepage.php');
    exit();
  } 
  elseif($_SESSION['utype'] == 'confirm_due') {
    header('Location:./homepage_nomentor.php');
    exit();
  }
  else{
    
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/footerstyle.css">


  <title>CAPS</title>
</head>

<body>

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  <div class="alert alert-success" style="text-align:center;" role="alert">
    Welcome <?php echo $_SESSION['name'];?>! You are now logged in to volunteer portal.
</div>
  <div class="hero" style="background-image: url('images/hero_1.jpg');"></div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/main.js"></script>
  <?php require_once('./include/footer.php');?>
</body>

</html>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="./assets/css/css/ionicons.min.css">
<link rel="stylesheet" href="./assets/css/footstyle.css">