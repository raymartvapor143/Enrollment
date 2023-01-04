<?php require_once 'db_con.php';
session_start();
if (!isset($_SESSION['user_login'])) {
  header('Location: login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" type="x-icon" href="back1.png">
  <link rel="stylesheet" media="print">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="JsJs.js"></script>
    
    
    <style>
      .logo
{
    height: 4rem;
    width: 4rem;
    border-radius: 50%;
    object-fit: cover;
    margin-top: -15%;
    margin-left: 34%;

 }
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/script.js"></script>
    <title>Admin Dashboard</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"> <img src="back1.png" class="logo"></a><p style="color: white; margin-left:1%; font-size: 22px; ">LUZ VILLAGE HIGH SCHOOL </p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse collapse justify-content-end" id="navbarSupportedContent">
    <?php $showuser = $_SESSION['user_login']; $haha = mysqli_query($db_con,"SELECT * FROM `users` WHERE `username`='$showuser';"); $showrow=mysqli_fetch_array($haha); ?>
    <ul class="nav navbar-nav ">
      <li class="nav-item"><a class="nav-link" href="index.php?page=user-profile"><i class="fa fa-user"></i> Welcome <?php echo $showrow['name']; ?>!</a></li>
      
      <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
    </ul>
  </div>
</nav>
<br>
    <div class="container">
        <div class="row" >
          <div class="col-md-3">
            <div class="list-group" >
              <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active">
               <i class="fas fa-tachometer-alt"></i> Dashboard
              </a>
              <a href="index.php?page=teachers1" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Teachers</a>
              
              
              
            </div>
          </div>
          <div class="col-md-9">
             <div class="content">
                 <?php 
                   if (isset($_GET['page'])) {
                    $page = $_GET['page'].'.php';
                    }else{
                      $page = 'dashboard.php';
                    }

                    if (file_exists($page)) {
                      require_once $page;
                    }else{
                      require_once '404.php';
                    }
                  ?>
             </div>
        </div>
        </div>  
    </div>
    <div class="clearfix"></div>
    
    <script type="text/javascript">
      jQuery('.toast').toast('show');
    </script>
  </body>
</html>