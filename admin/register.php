<?php require_once 'db_con.php'; 
	session_start();
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpass = $_POST['cpass'];

		$photo = explode('.', $_FILES['photo']['name']);
		$photo= end($photo);
		$photo_name= $username.'.'.$photo;

		$message = array();
		if (empty($name)) {
			$message['name'] = "The Name Filed is Required";
		}
		if (empty($email)) {
			$message['email'] = "The Email Filed is Required";
		}
		if (empty($username)) {
			$message['username'] = "The UserName Filed is Required";
		}
		if (empty($password)) {
			$message['password'] = "The Password Filed is Required";
		}

		if (!empty($password)) {
			if ($cpass!==$password) {
				$message['notmatch']="confirm password not match!";
			}
		}

		if (count($message)==0) {
			$check_email= mysqli_query($db_con,"SELECT * FROM `users` WHERE `email`='$email';");

			if (mysqli_num_rows($check_email)==0) {
				$check_username= mysqli_query($db_con,"SELECT * FROM `users` WHERE `username`='$username';");
				if (mysqli_num_rows($check_username)==0) {
					if (strlen($username)>3) {
						if (strlen($password)>3) {
								$password = sha1(md5($password));
							$query = "INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$email', '$username', '$password','$photo_name','active');";
									$result = mysqli_query($db_con,$query);
								if ($result) {
									move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo_name);
									header('Location: register.php?insert=sucess');
								}else{
									header('Location: register.php?insert=error');
								}
                            }else{
                                $message1="This password more than 8 charset";
                            }
                        }else{
                            $message1= 'This username more than 8 charset';
                        }
                    }else{
                        $message1="This username already exists!";
                    }
                }else{
                    $message1= "This email already exists";
                }
			
		}
		
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/cdnjs.cloudflare.css">
    <title>SIGN UP</title>
	<style>
        @import url('https://fonts.googleapis.com/css2family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body
{
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background:  linear-gradient(130deg, rgb(201, 198, 197),rgb(206, 203, 203));
}
.box
{
    position: relative;
    width: 390px;
    height: 900px;
    background: wheat;
    border-radius: 9px;
    overflow: hidden;
    box-shadow: 1px 1px 20px 0;
    margin-left: 48%;
}
.im
{
    position: relative;
    margin-top: 22px;
    margin-left: 60px;
    width: 100%;
    height: 100vh;
    background: none;
    border-radius: 9px;
    overflow: hidden;
    cursor: pointer;
}
h3{
    position: relative;
    margin-top: 20px;
    margin-left: 59px;
    font-size: 13px;
}
.box::before
{
    content: '';
    position: absolute;
    top: -20%;
    left: -20%;
    width: 200px;
    height: 500px;
    background: linear-gradient(0deg, transparent, red, red);
    transform-origin: bottom right;
    animation: animate 10s linear infinite;
}
.box::after
{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 500px;
    background: linear-gradient(0deg, transparent, red, red);
    transform-origin: bottom right;
    animation: animate 10s linear infinite;
    animation-delay: -4s;
}
@keyframes animate
{
    0%

{
    tranform: rotate(0deg);
}
    100%
    {
        transform: rotate(360deg);
    }
}
.form
{
    position: absolute;
    inset: 2px;
    border-radius: 8px;
    background: wheat;
    z-index: 10;
    padding: 50px 40px;
    display: flex;
    flex-direction: column;
}
.form h2
{
    color: black;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
    margin-top: 1%;
}
.form h2 span
{
    width: 20%;
    height: 5%;
    border: 1px solid #fff;
    background-color: #d84960;
    border-radius: 5px;
    color: black;
}
.inputBox
{
    position: relative;
    width: 300px;
    margin-top: 35px;
}
.inputBox input
{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: black;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 10;
    caret-color: red;
}
.inputBox span
{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span
{
    color: black;
    transform: translateX(0px) translateY(-34px);
    font-size: 0.75em;
}

.inputBox i
{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: white;
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    outline: black;
    z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i
{
    height: 44px;
}

.btn
{
    border: none;
    outline: none;
    background: rgb(231, 117, 117);
    padding: 11px 20px;
    width: 100px;
    margin-top: 40px;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.4s ease;
	color: black;
}

.btn:hover
{
    background: crimson;
    color: white;
}

.btnn
{
    border: none;
    outline: none;
    background: rgb(231, 117, 117);
    padding: 11px 21px;
    width: 100px;
    margin-top: -70px;
    border-radius: 4px;
    font-weight: 4px;
    cursor: pointer;
    text-decoration: none;
    color: black;
    text-align: center;
    transition: 0.4s ease;
    margin-left: 65%;
}

.btnn:hover
{
    background: crimson;
    color: white;
	text-decoration: none;
}
.btn:active
{
    opacity: 0.8;
}
.btnn:active
{
    opacity: 0.8;
}
.select
{
    text-align: center;
   width: 25%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
    
}

.logo
{
    height: 6rem;
    width: 6rem;
    border-radius: 50%;
    object-fit: cover;
    margin-top: -15%;
    margin-left: 34%;

 }




.message
{
    border: none;
    outline: none;
    background: rgb(231, 117, 117);
    padding: 11px 21px;
    border-radius: 4px;
    font-weight: 4px;
    text-decoration: none;
    color: black;
    text-align: center;
    margin-top: 5px;
}
.message1
{
    border: none;
    outline: none;
    background: rgb(231, 117, 117);
    padding: 11px 21px;
    border-radius: 4px;
    font-weight: 4px;
    text-decoration: none;
    color: black;
    text-align: center;
    margin-top: 5px;
}
.logo2
{
    height: 7rem;
    width: 10rem;
    margin-top: -45%;
    margin-left: -40%;

 }
    </style>
  </head>
  <body>
  <div class="logo2">
    <a href="../index.php" style="cursor: pointer;"> <img src="../pics/deped.png" class="logo2" alt=""></a>
</div>
  <form method="POST" enctype="multipart/form-data">
  <div class="box">
        <div class="form">
        <img src="back1.png" class="logo" alt="">
            <h2> <span>ADMIN</span> SIGNUP</h2>
            <?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
<?php
   if(isset($message1)){
      foreach($message as $message1){
         echo '
         <div class="message1">
            <span>'.$message1.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
 
          	<?php 
          		if (isset($_GET['insert'])) {
          			if($_GET['insert']=='sucess'){ echo '<div role="alert" aria-live="assertive" aria-atomic="true" align="center" class="toast alert alert-success fade hide" data-delay="2000">Your Data Inserted!</div>';}
          		}
          	;?>
          
             	
				<div class="inputBox">
                <input type="text"  name="name" value="<?= isset($name)? $name:'' ?>" id="inputEmail3"  required="required">
                <span>FULL NAME</span>
                <i></i>
            	</div>

				<div class="inputBox">
                <input type="email"  name="email" value="<?= isset($email)? $email:'' ?>" id="inputEmail3" required="required"> 
                <span>EMAIL</span>
                <i></i>
            	</div> 
				    

				<div class="inputBox">
				<input type="text" name="username" value="<?= isset($username)? $username:'' ?>" id="inputPassword3" required >
				<span>USERNAME</span>
                <i></i>
				</div>

				<div class="inputBox">
				<input type="password" name="password"  id="inputPassword3" required>   
				<span>PASSWORD</span>
                <i></i>
				</div>

				<div class="inputBox">
				<input type="password" name="cpass"  id="inputPassword3" required > 	
				<span>CONFIRM PASSWORD</span>
                <i></i>
				</div>
			  				
				<div class="inputBox">
				
				<input type="file" id="photo" name="photo" id="inputPassword3" >
				<br>
				</div>

				<input type="submit" name="register" id="submit" value="SIGN UP" class="btn"><br>
           		<a href="loginform.php" type="button" class="btnn"> <b>LOG IN</b> </a>
				  </div>
				
            </div>
          </div>
    
    
  </form>
  </body>
</html>