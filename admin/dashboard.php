<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>

<h1><a href="index.php"><i class="fas fa-tachometer-alt"></i>  Dashboard</a> </h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-user"></i> Dashboard</li>
  </ol>
</nav>


  <div class="row student">
  <div class="col-sm-4">
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $tusers=mysqli_query($db_con,'SELECT * FROM `users`'); $tusers= mysqli_num_rows($tusers); echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Total Admin</div>
          </div>
        </div>
      </div>
      <div class="list-group-item-primary list-group-item list-group-item-action">
         <a href="index.php?page=all-users">
        <div class="row">
          <div class="col-sm-8">
            <p class="">All Admin</p>
          </div>
          <div class="col-sm-4">
           <i class="fa fa-arrow-right float-sm-right"></i>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
     <div class="card text-white bg-warning mb-3">
      <div class="card-header">
        <div class="row">
          <?php $usernameshow = $_SESSION['user_login']; $userspro = mysqli_query($db_con,"SELECT * FROM `users` WHERE `username`='$usernameshow';"); $userrow=mysqli_fetch_array($userspro); ?>
          <div class="col-sm-6">
            <img class="showimg" src="back1.png">
            <div style="font-size: 20px"><h4>Grade Level</h4></div>
          </div>
          <div class="col-sm-6">
            <div class="clearfix"></div>
            <div class="float-sm-right"></div>
          </div>
        </div>
      </div>
      <div class="list-group-item-primary list-group-item list-group-item-action">
        <a href="index.php?page=grade-level">
        <div class="row">
          <div class="col-sm-8">
            <p class="">Grade Level</p>
          </div>
          <div class="col-sm-4">
            <i class="fa fa-arrow-right float-sm-right"></i>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>  
</div>
