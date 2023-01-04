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

  if (isset($_POST['addstudent'])) {
  	$name = $_POST['name'];
	  $middle = $_POST['middle'];
	  $lastname = $_POST['lastname'];
	  $gender = $_POST['gender'];
  	$roll = $_POST['roll'];
  	$address = $_POST['address'];
  	$mother = $_POST['mother'];
	  $father = $_POST['father'];
	  $bdate = $_POST['bdate'];
  	
  	$photo = explode('.', $_FILES['photo']['name']);
  	$photo = end($photo); 
  	$photo = $roll.date('Y-m-d-m-s').'.'.$photo;

  	$query = "INSERT INTO `gradeten`(`name`, `roll`, `city`, `mother`, `photo`, `middle`, `lastname`, `gender`, `bdate`, `father`) VALUES ('$name', '$roll', '$address', '$mother','$photo','$middle','$lastname','$gender','$bdate','$father');";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Student Inserted!</p>';
  		move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
  	}else{
  		$datainsert['inserterror']= '<p style="color: red;">Student Not Inserted, please input right informations!</p>';
  	}
  }
?>
<a href="grade-level.php" type="button" ><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg></a>
<!--- modal --->
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
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fas fa-user-plus"></i>  Add Student<small class="text-warning"> </small></h1>
</h1>
</div>
<div class="modal-body">
<div class="row">
	
<div class="col-sm-6">
		<?php if (isset($datainsert)) {?>
	<div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
	  <div class="toast-header">
	    <strong class="mr-auto">Student Insert Alert</strong>
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
		    <label for="roll">ID</label>
		    <input name="roll" type="text" value="<?= isset($roll)? $roll: '' ; ?>" class="form-control"  id="roll" required="">
	  	</div>

		<div class="form-group">
		    <label for="name">First Name</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?= isset($name)? $name: '' ; ?>" required="">
	  	</div>

		  <div class="form-group">
		    <label for="name">Middle Name</label>
		    <input name="middle" type="text" class="form-control" id="middle" value="<?= isset($middle)? $middle: '' ; ?>" required="">
	  	</div>

		  <div class="form-group">
		    <label for="name">Last Name</label>
		    <input name="lastname" type="text" class="form-control" id="lastname" value="<?= isset($lastname)? $lastname: '' ; ?>" required="">
	  	</div>
		  <p></p>
		  <h4 style="font-size: 15px;">GENDER</h4>
		  <div class="form-group">
          <label for="gender"></label>
                <select name="gender" id="gender">
                    <option  >MALE </option>
                    <option  >FEMALE</option>
                </select>
	  	</div>

		  <div class="form-group">
		    <label for="bdate">Birth Date</label>
		    <input name="bdate" type="date" class="form-control" id="bdate" value="<?= isset($bdate)? $bdate: '' ; ?>" required="">
	  	</div>

	  	
	  	<div class="form-group">
		    <label for="address">Student Address</label>
		    <input name="address" type="text" value="<?= isset($address)? $address: '' ; ?>" class="form-control" id="address" required="">
	  	</div>

	  	<div class="form-group">
		    <label for="mother">Mother's Name</label>
		    <input name="mother" type="text" class="form-control" id="mother" value="<?= isset($mother)? $mother: '' ; ?>" placeholder="Mother's name" required="">
	  	</div>

		  <div class="form-group">
		    <label for="father">Father's Name</label>
		    <input name="father" type="text" class="form-control" id="father" value="<?= isset($father)? $father: '' ; ?>" placeholder="father's name" required="">
	  	</div>
	  	
	  	<div class="form-group">
		    <label for="photo">Student Photo</label>
		    <input name="photo" type="file" class="form-control" id="photo" required="">
	  	</div>
	  	
	 
</div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input name="addstudent" value="Add Student" type="submit" class="btn btn-danger">
      </div>
      </form>
    </div>
  </div>
</div>




<h1 style="font-size: 50px;" class="text-primary"><i class="fas fa-users"></i>  Grade 10<small class="text-warning">Students List</small><button onclick="window.print();" class="btn" id="print-btn">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
            <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
            <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
          </svg>

    </button></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="grade10.php">Grade 10 </a></li>
     <li class="breadcrumb-item active" aria-current="page"> Section: NEWTON</li>
  </ol>
</nav>
<?php if(isset($_GET['delete']) || isset($_GET['edit'])) {?>
  <div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
    <div class="toast-header">
      <strong class="mr-auto">Student Insert Alert</strong>
      <small><?php echo date('d-M-Y'); ?></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      <?php 
        if (isset($_GET['delete'])) {
          if ($_GET['delete']=='success') {
            echo "<p style='color: green; font-weight: bold;'>Student Deleted Successfully!</p>";
          }  
        }
        if (isset($_GET['delete'])) {
          if ($_GET['delete']=='error') {
            echo "<p style='color: red'; font-weight: bold;>Student Not Deleted!</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='success') {
            echo "<p style='color: green; font-weight: bold; '>Student Edited Successfully!</p>";
          }  
        }
        if (isset($_GET['edit'])) {
          if ($_GET['edit']=='error') {
            echo "<p style='color: red; font-weight: bold;'>Student Not Edited!</p>";
          }  
        }
      ?>
    </div>
  </div>
    <?php } ?>
<table class="table  table-striped table-hover table-bordered" id="data" style="margin-left: -34.5%; ">
  <thead class="thead-dark">
    
    <tr>
    <th scope="col">No.</th>
      <th scope="col">LRN</th>
      
      <th scope="col">Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Address</th>
      <th scope="col">Mother's Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query=mysqli_query($db_con,'SELECT * FROM `gradeten` ORDER BY `gradeten`.`datetime` DESC;');
      $i=1;
      while ($result = mysqli_fetch_array($query)) { ?>
      <tr>
        <?php 
        echo '<td>'.$i.'</td>
        <td>'.$result['roll'].'</td>
        <td>'.ucwords($result['name']).'</td>
        <td>'.ucwords($result['middle']).'</td>
        <td>'.ucwords($result['lastname']).'</td>
        <td>'.ucwords($result['gender']).'</td>
        <td>'.ucwords($result['bdate']).'</td>
       <td>'.ucwords($result['city']).'</td>
       <td>'.$result['mother'].'</td>
       <td>'.ucwords($result['father']).'</td>
          <td><img src="images/'.$result['photo'].'" height="50px"></td>
          <td>
            <a class="btn btn-xs btn-warning" href="index.php?page=editstudent10&id='.base64_encode($result['id']).'&photo='.base64_encode($result['photo']).'">
              <i class="fa fa-edit"></i></a>

             &nbsp; <a class="btn btn-xs btn-danger" onclick="javascript:confirmationDelete($(this));return false;" href="index.php?page=delete10&id='.base64_encode($result['id']).'&photo='.base64_encode($result['photo']).'">
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