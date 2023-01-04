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
          <img src="back1.png" class="logo" alt="">
          </div>
          <div class="col-sm-8">
          <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $stu=mysqli_query($db_con,'SELECT * FROM `gradeseven`'); $stu= mysqli_num_rows($stu); echo $stu; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Grade 7 / QUISUMBING</div>
          </div>
        </div>
      </div>
      <div class="list-group-item-primary list-group-item list-group-item-action">
         <a href="grade7.php">
        <div class="row">
          <div class="col-sm-8">
            <p class="">Grade 7</p>
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
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
          <img src="back1.png" class="logo" alt="">
          </div>
          <div class="col-sm-8">
          <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $stu=mysqli_query($db_con,'SELECT * FROM `gradeeigth`'); $stu= mysqli_num_rows($stu); echo $stu; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Grade 8 / CARSON</div>
          </div>
        </div>
      </div>
      <div class="list-group-item-primary list-group-item list-group-item-action">
         <a href="grade8.php">
        <div class="row">
          <div class="col-sm-8">
            <p class="">Grade 8</p>
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
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
          <img src="back1.png" class="logo" alt="">
          </div>
          <div class="col-sm-8">
          <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $stu=mysqli_query($db_con,'SELECT * FROM `gradenine`'); $stu= mysqli_num_rows($stu); echo $stu; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Grade 9 / WERNER</div>
          </div>
        </div>
      </div>
      <div class="list-group-item-primary list-group-item list-group-item-action">
         <a href="grade9.php">
        <div class="row">
          <div class="col-sm-8">
            <p class="">Grade 9</p>
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
     <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
          <img src="back1.png" class="logo" alt="">
          </div>
          <div class="col-sm-8">
          <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $stu=mysqli_query($db_con,'SELECT * FROM `gradeten`'); $stu= mysqli_num_rows($stu); echo $stu; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Grade 10 / NEWTON</div>
          </div>
        </div>
      </div>
      <div class="list-group-item-primary list-group-item list-group-item-action">
         <a href="grade10.php">
        <div class="row">
          <div class="col-sm-8">
            <p class="">Grade 10</p>
          </div>
          <div class="col-sm-4">
           <i class="fa fa-arrow-right float-sm-right"></i>
          </div>
        </div>
        </a>
      </div>
    </div>
  </div>