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

  	$query = "INSERT INTO `gradeeigth`(`name`, `roll`, `city`, `mother`, `father`, `bdate`, `photo`, `middle`, `lastname`, `gender`) VALUES ('$name', '$roll', '$address', '$mother', '$father', '$bdate','$photo','$middle','$lastname','$gender');";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Student Inserted!</p>';
  		move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
  	}else{
  		$datainsert['inserterror']= '<p style="color: red;">Student Not Inserted, please input right informations!</p>';
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Add Student<small class="text-warning"> Add New Student!</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="grade8.php">Grade 8 </a></li>
     <li class="breadcrumb-item active" aria-current="page">Add Student</li>
  </ol>
</nav>

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
	  	<div class="form-group text-center">
		    <input name="addstudent" value="Add Student" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>