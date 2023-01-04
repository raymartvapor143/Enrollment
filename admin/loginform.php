<?php require_once 'db_con.php'; 
session_start();
if(isset($_SESSION['user_login'])){
	header('Location: index.php');
}
	if (isset($_POST['login'])) {
		$username= $_POST['username'];
		$password= $_POST['password'];


		$input_arr = array();

		if (empty($username)) {
			$input_arr['input_user_error']= "Username Is Required!";
		}

		if (empty($password)) {
			$input_arr['input_pass_error']= "Password Is Required!";
		}

		if(count($input_arr)==0){
			$query = "SELECT * FROM `users` WHERE `username` = '$username';";
			$result = mysqli_query($db_con, $query);
			if (mysqli_num_rows($result)==1) {
				$row = mysqli_fetch_assoc($result);
				if ($row['password']==sha1(md5($password))) {
					if ($row['status']=='active') {
						$_SESSION['user_login']=$username;
						header('Location: index.php');
					}else{
						$status_inactive = "Your Status is inactive, please contact with admin or support!";
					}
				}
                else{
                    $message[] = 'Incorrect Password!';
                 }
                 
              }else{
                 $message[] = 'Admin not found!';
              }
		}
		
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="x-icon" href="back1.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>
    <link rel="stylesheet" href="../css/cdnjs.cloudflare.css">
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
.logo
{
    height: 6rem;
    width: 6rem;
    border-radius: 50%;
    object-fit: cover;
    margin-top: -15%;
    margin-left: 34%;

 }
.box
{
    position: relative;
    width: 380px;
    height: 498px;
    background: wheat;
    border-radius: 9px;
    overflow: hidden;
    box-shadow: 1px 1px 20px 0;
    margin-left: 48%;
}
.box::before
{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, red, red);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
.box::after
{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent, red, red);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
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
    margin-top: 10px;
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
p
{
    justify-content: center;
    font-size: 0.75em;
    color: black;
    left: 20px;
}
.btn
{
    border: none;
    outline: none;
    background: rgb(231, 117, 117);
    padding: 11px 25px;
    width: 100px;
    margin-top: 50px;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.4s ease;
}

.btn:hover
{
    background: crimson;
    color: white;
    margin-top: 48px;
    height: 39.5px;
    width: 102px;
}

.btnn
{
    border: none;
    outline: none;
    background: rgb(231, 117, 117);
    padding: 11px 10px;
    width: 100px;
    margin-top: -56px;
    border-radius: 4px;
    font-weight: 550;
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
    height: 39.5px;
    width: 103.5px;
}
.btn:active
{
    opacity: 0.8;
}
.btnn:active
{
    opacity: 0.8;
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


<form method="POST" action="">

    <div class="box">
        <div class="form">
<img src="back1.png" class="logo" alt="">
            <h2>ADMIN LOG IN</h2>   
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
            
            
            <div class="inputBox">
            <input style="caret-color: red;" type="text" class="form-control" name="username" value="<?= isset($username)? $username: ''; ?>" required >
                <span>USER NAME</span>
                <i></i>
            </div>
            <div class="inputBox">
            <input style="caret-color: red;" type="password" name="password" class="form-control" id="inputPassword3" required>
                <span>PASSWORD</span>
                <i></i>
            </div>
            <br>
            <div class="inputcheck">
            <input type="checkbox" name="" style="height: 20px; width: 20px;" onclick="myFunction()">    
            <p style="margin-left: 9%; margin-top: -7%; font-size: 15px;">Show Password</p>
            </div>
            <input type="submit" name="login" value="LOG IN" class="btn"><br>
            <a href="register.php" type="button" class="btnn">SIGN UP</a>

        </div>
    
    </div>
    <script type="text/javascript">
        function myFunction() {
            var inputPassword3 = document.getElementById('inputPassword3')
            if (inputPassword3.type=='password') {
                inputPassword3.type='text';
            }
            else{
                inputPassword3.type='password';
            }
        }
    </script>
</form>
</body>
</html>





