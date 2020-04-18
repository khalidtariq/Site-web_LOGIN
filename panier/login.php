<?php
   
   session_start();
    $db = mysqli_connect('localhost','root','','cart');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT cl_name FROM client WHERE cl_email = '$myusername' and cl_pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
   
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
       //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;
  
		  echo "<script>alert('You are now logged in')</script>";
			//header('location: index.php');
      echo "<script>window.open('index.php','_self')</script>";			
      }else {
		          echo "<script>alert('Your Login Name or Password is invalid')</script>";

         
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="styleMen.css" />
	<title>Registration system PHP and MySQL</title>
	  <style type = "text/css">
	  * { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 40%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}</style>
</head>
<body>

           <header id="bloc_page" >
                <div id="titre_principal">
                    <div id="logo">
                        <img src="images/zozor_logo.png" alt="Logo de Zozor" />
                        <h1>Zoropa</h1>    
                    </div>
               &nbsp;&nbsp; &nbsp;&nbsp;<br/><h1><b><i>Milleur Shopping</i></b></h1>

                </div>


			
            </header>  

<div class="header">
	<h1>LOGIN</h1>
</div>
<form method="post" action="">
	
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="username" value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">LOGIN</button>
	</div>

	<p>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="client_register.php" >Create your Account </a>
	</p>
</form>


 <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
