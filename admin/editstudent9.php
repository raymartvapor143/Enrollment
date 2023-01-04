<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
    
    $id = base64_decode($_GET['id']);
    $oldPhoto = base64_decode($_GET['photo']);

  if (isset($_POST['updatestudent'])) {
  	$name = $_POST['name'];
	  $middle = $_POST['middle'];
	  $lastname = $_POST['lastname'];
	  $gender = $_POST['gender'];
  	$roll = $_POST['roll'];
  	$address = $_POST['address'];
  	$mother = $_POST['mother'];
	  $father = $_POST['father'];
  	$bdate = $_POST['bdate'];
  	
  	
  	
  	if (!empty($_FILES['photo']['name'])) {
  		 $photo = $_FILES['photo']['name'];
	  	 $photo = explode('.', $photo);
		 $photo = end($photo); 
		 $photo = $roll.date('Y-m-d-m-s').'.'.$photo;
  	}else{
  		$photo = $oldPhoto;
  	}
  	

  	$query = "UPDATE `gradenine` SET `name`='$name',`roll`='$roll',`city`='$address',`mother`='$mother',`father`='$father',`bdate`='$bdate',`photo`='$photo',`middle`='$middle',`lastname`='$lastname',`gender`='$gender' WHERE `id`= $id";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Student Updated!</p>';
		if (!empty($_FILES['photo']['name'])) {
			move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo);
			unlink('images/'.$oldPhoto);
		}	
  		header('Location: index.php?page=grade9');
  	}else{
  		header('Location: index.php?page=grade9&edit=error');
  	}
  }
?>
<h1 class="text-primary">
<a href="grade9.php" type="button" ><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg></a>
	<br>
<i class="fas fa-user-plus"></i>  Edit Student Informations!<small class="text-warning"> Edit Student!</small></h1>


	<?php
		if (isset($id)) {
			$query = "SELECT `id`, `name`, `roll`, `city`, `mother`, `father`, `bdate`, `photo`, `middle`, `lastname`, `gender`, `datetime` FROM `gradenine` WHERE `id`=$id";
			$result = mysqli_query($db_con,$query);
			$row = mysqli_fetch_array($result);
		}
	 ?>
<div class="row">
<div class="col-sm-6">
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="roll">ID</label>
		    <input name="roll" type="text" class="form-control" id="roll" value="<?php echo $row['roll']; ?>" >
	  	</div>
	
	<div class="form-group">
		    <label for="name">First Name</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" >
	  	</div>
	  	
		  <div class="form-group">
		    <label for="name">Middle Name</label>
		    <input name="middle" type="text" class="form-control" id="middle" value="<?php echo $row['middle']; ?>" >
	  	</div>

		  <div class="form-group">
		    <label for="name">Last Name</label>
		    <input name="lastname" type="text" class="form-control" id="lastname" value="<?php echo $row['lastname']; ?>" >
	  	</div>
		  <p></p>
		  <h4 style="font-size: 15px;">GENDER</h4>
		  <div class="form-group">
          <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option  >MALE </option>
                    <option  >FEMALE</option>
                </select>
	  	</div>

		  <div class="form-group">
		    <label for="bdate">Birth Date</label>
		    <input name="bdate" type="date" class="form-control" id="bdate" value="<?php echo $row['bdate']; ?>" >
	  	</div>

	  	<div class="form-group">
		    <label for="address">Student Address</label>
		    <input name="address" type="text" class="form-control" id="address" value="<?php echo $row['city']; ?>" >
	  	</div>
	  	<div class="form-group">
		    <label for="mother">Mother's Name</label>
		    <input name="mother" type="text" class="form-control" id="mother" value="<?php echo $row['mother']; ?>" placeholder="Mother's name" >
	  	</div>

		  <div class="form-group">
		    <label for="father">father's Name</label>
		    <input name="father" type="text" class="form-control" id="father" value="<?php echo $row['father']; ?>" placeholder="Father's name" >
	  	</div>
	  	<div class="form-group">
		    <label for="photo">Student Photo</label>
		    <input name="photo" type="file" class="form-control" id="photo">
	  	</div>
	  	<div class="form-group text-center">
		    <input name="updatestudent" value="Edit Student" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>