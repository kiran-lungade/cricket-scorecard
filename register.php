<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Registration Page</title>
	<link rel="stylesheet" href="./Loginpage.css">

</head>
<body>

<header>
	<div class="menu">
		<div class="brand-name">
			<a href="index.html">
				</a>
		</div>
	</div>
</header>

<section>
	<Center>

     
	<h1>CricHero</h1>
     	<h2><center>User Registration Page</center></h1>
     	<hr>
	

     	<form name = "f2" method="post">
	<center>
				<input type="text" name="name" id="name" placeholder="Name" required />
				<br/><br/>

				<input type="number" name="mobile" id="mobile" placeholder="Mobile" required/>
				<br/><br/>

				<input type="text" name="username" id="username" placeholder="Username" required/>
				<br/><br/>

				<input type="password" name="password" id="password" placeholder="Password" required/>
				<br/><br/>

				<input type="password" name="re-password" id="re-password" placeholder="Confirm Password" required/>
				<br/><br/>

				<button type="submit" id="register-btn" onclick="validation()">Submit</button>
				<a href = "login.html"><button type="button" id="btn" />Login</button></a>
			</center>
			</form>
     </div>
	


	 <script>  
                function validation()  
                {  
                    var name=document.f2.name.value;  
                    var mobile=document.f2.mobile.value; 
					var username=document.f2.username.value;
					var password=document.f2.password.value;
					var repass=document.f2.re-password.value;
					 
                    if(name.length=="" && mobile.length=="" && username.length=="" && password.length=="" && repass.length=="" && password!=repass) {  
                        alert("Fields are empty or password doesnt match");  
                        return false;  
                    }  
                    else  
                    {  
                    }                             
                
            </script> 

    </div>
</section>

<?php
error_reporting(0);
// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "cricket");
 
// Check connection
if($conn === false){
	die("ERROR: Could not connect. "
		. mysqli_connect_error());
}
 
// Taking all 5 values from the form data(input)
$name =  $_REQUEST['name'];
$mobile = $_REQUEST['mobile'];
$username =  $_REQUEST['username'];
$password = $_REQUEST['password'];
$confirm_password = $_REQUEST['re-password'];
// Performing insert query execution
// here our table name is college

if($password==$confirm_password)
{
	$sql = "INSERT INTO registration VALUES ('$name',
	'$mobile','$username','$password')";

	if(mysqli_query($conn, $sql)){

	//echo nl2br("\n$first_name\n $last_name\n "
		//. "$gender\n $address\n $email");
	} 
	else
	{
		echo "ERROR: Hush! Sorry $sql. "
		. mysqli_error($conn);
	}
}
else
{
	echo '<script>alert("Password does not match")</script>';
}
 
// Close connection
mysqli_close($conn);
?>
	
</body>
</html>

