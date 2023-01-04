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

<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }

  if (isset($_POST['addteacher'])) {
  	$name = $_POST['name'];
  	$role = $_POST['role'];
  	$photo = explode('.', $_FILES['photo']['name']);
  	$photo = end($photo); 
  	$photo = $role.date('Y-m-d-m-s').'.'.$photo;

  	$query = "INSERT INTO `teachers`(`name`, `role`, `photo`) VALUES ('$name', '$role','$photo');";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Teacher Inserted!</p>';
  		move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
  	}else{
  		$datainsert['inserterror']= '<p style="color: red;">Teacher Not Inserted, please input right informations!</p>';
  	}
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
</head>
<body>
<a href="dashboard.php" type="button" ><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg></a>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-left: 70%;">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fas fa-user-plus"></i>  Add Teacher<small class="text-warning"> </small></h1>
</h1>
        
      </div>
      <div class="modal-body">
        
      <div class="row">
	
  <div class="col-sm-6">
      <?php if (isset($datainsert)) {?>
    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
      <div class="toast-header">
        <strong class="mr-auto">Teacher Insert Alert</strong>
        <small><?php echo date('d-M-Y'); ?></small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">
        <?php 
          if (isset($datainsert['insertsucess'])) {
            echo $datainsert['insertsucess'];
          }
          if (isset($datainsert['inserterror'])) {
            echo $datainsert['inserterror'];
          }
        ?>
      </div>
    </div>
      <?php } ?>
    <form enctype="multipart/form-data" method="POST" action="">
  
  
      <div class="form-group">
          <label for="name">Full Name</label>
          <input name="name" type="text" class="form-control" id="name" value="<?= isset($name)? $name: '' ; ?>" required="">
        </div>
  
        <div class="form-group">
          <label for="name">Grade Level</label>
          <input name="role" type="text" class="form-control" id="role" value="<?= isset($role)? $role: '' ; ?>" required="">
        </div>
  
        <div class="form-group">
          <label for="photo">Teacher Photo</label>
          <input name="photo" type="file" class="form-control" id="photo" required="">
        </div>
        
  </div>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input name="addteacher" value="Add Teacher" type="submit" class="btn btn-danger">
      </div>
      </form>
    </div>
  </div>
</div>
<h1 style="font-size: 50px; " class="text-primary"><i class="fas fa-users"></i>  Teacher / <small class="text-warning">Teachers List</small>   <button onclick="window.print();" class="btn" id="print-btn">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
            <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
            <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
          </svg>
          
    </button></h1>
    
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="teachers1.php">Grade 7 </a></li>
     
  </ol>
</nav>
<?php if(isset($_GET['delete']) || isset($_GET['edit'])) {?>
  <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
    <div class="toast-header">
      <strong class="mr-auto">Teacher Insert Alert</strong>
      <small><?php echo date('d-M-Y'); ?></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <?php 
        if (isset($_GET['delete'])) {
          if ($_GET['delete']=='success') {
            echo "<p style='color: green; font-weight: bold;'>Teacher Deleted Successfully!</p>";
          }  
        }
        if (isset($_GET['delete'])) {
          if ($_GET['delete']=='error') {
            echo "<p style='color: red'; font-weight: bold;>Teacher Not Deleted!</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='success') {
            echo "<p style='color: green; font-weight: bold; '>Teacher Edited Successfully!</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='error') {
            echo "<p style='color: red; font-weight: bold;'>Teacher Not Edited!</p>";
          }  
        }
      ?>
    </div>
  </div>
    <?php } ?>
<table class="table  table-striped table-hover table-bordered" id="data" style="margin-left: -10%; ">
  <thead class="thead-dark" >
    
    <tr >
      <th scope="col">No.</th>
      <th scope="col">Full Name</th>
      <th scope="col">Grade Level</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
    <?php 
      $query=mysqli_query($db_con,'SELECT * FROM `teachers` ORDER BY `teachers`.`datetime` DESC;');
      $i=1;
      while ($result = mysqli_fetch_array($query)) { ?>
      <tr>
        <?php 
        echo '<td>'.$i.'</td>
           <td>'.ucwords($result['name']).'</td>
           <td>'.ucwords($result['role']).' </td>
          <td><img src="images/'.$result['photo'].'" height="50px">
          </td>
          <td>
            <a class="btn btn-xs btn-warning" href="index.php?page=editteacher&id='.base64_encode($result['id']).'&photo='.base64_encode($result['photo']).'">
              <i class="fa fa-edit"></i></a>

             &nbsp; <a class="btn btn-xs btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="index.php?page=deleteteacher&id='.base64_encode($result['id']).'&photo='.base64_encode($result['photo']).'">
             <i class="fas fa-trash-alt"></i></a></td>';?>
      </tr>  
     <?php $i++;} ?>
    
  </tbody>
</table>
<script type="text/javascript">
  function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}
</script>
</body>
</html>