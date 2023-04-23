<?php
$connect = mysqli_connect("localhost","root","","signup") or die("Connection Failed");
if(!empty($_POST['save']))
{
    $fullname = $_POST['fullname'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM signup where emailid = '$fullname' and password = '$pass'";
    $result = mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo "Login Successful";
		header ('Location: .\login-home.html');
		

    }else{
        echo "Login not succesful";
    }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form method = 'POST'>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Koderz Consultant</h1>
		<p>Login or create a new account to give your feedback to our company</p>
		
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="#">Creat Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type= "text" name = "fullname" placeholder="user_name">
			<br>
			<input type="password" name="pass" placeholder="password">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
			<p>forget password?</p>
		</div>

			<br>
			<input type="submit" name = "save" value="Login">
	</div>
	
</div>
</form>
<!-- partial -->
  
</body>
</html>