<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maersk-Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="CSS/js/bootstrap.min.js"></script>
 
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
      <a class="navbar-brand" href="index.php"><img src="image/logo.svg" alt="MaerskLine logo" height="50px" width="150px" class="img-fluid"></a>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Sign Up</h2>
  <form class="form-horizontal" action="signup.php" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="U_name" placeholder="Enter Username"  required>
      </div>
    </div>
	 <div class="form-group">
	       <label class="control-label col-sm-2" for="select">User-Type:</label>
      <div class="col-sm-10">          
        <select class="form-control"   name="select1">
		<option>Admin</option>
        <option>Agent</option>
          </select>
      </div>
	  </div>
	<div id="pwd_Err"></div>
    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" " placeholder="Enter password" name="pwd" required>
      </div>
    </div>
	<div id="cpwd_Err"></div>
	 <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"   placeholder="Retype password" name="cpwd" required>
      </div>
    </div>
    
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="register">Register</button>
      </div>
    </div>
	
	<center><p>
	     Already have Account?<a href="login.php"> Sign in</a> </p> </center>
  </form>


</div>

<footer class="container">
 <center> <p>© MaerskLine-2019</p></center>
</footer>
</body>
</html>
  <?php
  require_once('connection.php');
  
  if(isset($_POST['register'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $U_name =$_POST['U_name'];
    $select1 =$_POST['select1'];
    $pwd = $_POST['pwd'];
	$cpwd = $_POST['cpwd'];
	
	if ($pwd == $cpwd){
		//create user$
		 // hash code to store
		$sql =  " INSERT  INTO user(Name,Email,Username,Usertype,Password) values ('$name' ,'$email','$U_name','$select1', '$pwd') ";
		mysqli_query($db, $sql);
		
		echo "<script>alert('You have been Registered Sucessfully')</script>";
		
		$_SESSION['Username']=$U_name;
		header("location: login.php"); // redirect to main page
	
	
	}
	else{
		echo "<script>alert('Password not Matched')</script>";
	}
  }
    ?>

