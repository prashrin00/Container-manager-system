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
	
    <div class="navbar-collapse collapse">
    <ul id="navbaractiveid" class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </div>
  </nav>
<div class="container">
  <h2>Login Form</h2>
  <form class="form-horizontal" action="login.php" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="usr">Username:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="U_name" placeholder="Enter Username" id="usernames" required>		
    </div>
	</div>
    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pas" placeholder="Enter password" name="pwd" required>
      </div>
	     </div>
		     <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
		   
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="login">Login</button>
	      <a href="signup.php" class="btn btn-default">SignUp</a>
      </div>
    </div>
	
  </form>
</div>
<footer class="container">
 <center> <p>Developed and Designed by Prashrin Khwaunju</p></center>
</footer>
</body>
</html>
<?php
require_once('connection.php');

if(isset($_POST['login'])){
    
    $U_name = $_POST['U_name'];
    $pwd = $_POST['pwd'];

	
$query = mysqli_query($db, "SELECT * FROM user WHERE Username='$U_name' AND Password='$pwd' ");
	if (mysqli_num_rows($query) == 0) 
	{
		echo "<script>alert('Incorrect user or password!!!');</script>";
	}else{
		$row = mysqli_fetch_assoc($query);
		$_SESSION['Username']	= $row['Username'];
		$_SESSION['Usertype']  = $row['Usertype'];
		
		if($row['Usertype'] == "Admin")
		{	
			echo "<script>alert('Welcome To Administrator!')</script>";
			header('location: Createvessel.php');
		}
		else if($row['Usertype'] =="Agent")
		{
			echo "<script>alert('Welcome To Agent !')</script>";
			header('location: user.php');
		}
			}
			
}
  
?>


