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
      <a class="navbar-brand" href="#"><img src="image/logo.svg" alt="MaerskLine logo" height="50px" width="150px" class="img-fluid"></a>
    </div>
	<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-left">
      <li><a href="user.php"> Home</a></li>
      <li><a href="user.php"></span> Add Customer</a></li>
	  <li><a href="booking.php"></span> Create Booking</a></li>
	  <li><a href="viewcustomer.php"></span> View Booking</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">LOGOUT</a></li>
	  </ul>
	  </div>
  </div>
  </nav>
  
  <div class="wrapper">
    <form class="form-horizontal" action="booking.php" method="post"  >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Booking</h2>
                    </div>
                     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Cargo Desp:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="name" > 			
    </div>
   	     </div>
		
		 <div class="form-group">
	       <label class="control-label col-sm-2" for="select">Cargo:</label>
       <div class="col-sm-10">
	        <select class="form-control" name="cargo">
		 <?php
require_once('connection.php');
	  
$result= mysqli_query($db,"Select * FROM container ORDER BY Name");
while($row=mysqli_fetch_array($result))
{
	?>
	<option><?php echo $row["Name"];?></option>
	<?php
}
?>	</select>		
    </div>
	     </div>
		 
		  <div class="form-group">
		   <label class="control-label col-sm-2" for="name">Customer:</label>
      <div class="col-sm-10">
	       <select class="form-control" name="cus">
		 <?php
require_once('connection.php');
	  
$result= mysqli_query($db,"Select * FROM Customer ORDER BY Name");
while($row=mysqli_fetch_array($result))
{
	?>
	<option><?php echo $row["Name"];?></option>
	<?php
}
?>	</select>
    </div>
   	     </div>
		
		  <div class="form-group">
		   <label class="control-label col-sm-2" for="name">Shipping From:</label>
      <div class="col-sm-10">
	        <select class="form-control" name="from">
		 <?php
require_once('connection.php');
	  
$result= mysqli_query($db,"Select * FROM ships ORDER BY Departureloc");
while($row=mysqli_fetch_array($result))
{
	?>
	<option><?php echo $row["Departureloc"];?></option>
	<?php
}
?>	</select>		
    </div>
	
   	     </div>
		  <div class="form-group">
		  <label class="control-label col-sm-2" for="name">Shipping To:</label>
		 <div class="col-sm-10">
	        <select class="form-control" name="to">
		 <?php
require_once('connection.php');
	  
$result= mysqli_query($db,"Select * FROM ships ORDER BY Arivalloc");
while($row=mysqli_fetch_array($result))
{
	?>
	<option><?php echo $row["Arivalloc"];?></option>
	<?php
}
?>	</select>		
    </div>
    </div>  
<div class="form-group">
		  <label class="control-label col-sm-2" for="name">Departuretime:</label>
		 <div class="col-sm-10">
	        <select class="form-control" name="dtime">
		 <?php
require_once('connection.php');
	  
$result= mysqli_query($db,"Select * FROM ships ORDER BY Departuretime");
while($row=mysqli_fetch_array($result))
{
	?>
	<option><?php echo $row["Departuretime"];?></option>
	<?php
}
?>	</select>		
    </div>
    </div> 	
	<div class="form-group">
		  <label class="control-label col-sm-2" for="name">Arivaltime:</label>
		 <div class="col-sm-10">
	        <select class="form-control" name="atime">
		 <?php
require_once('connection.php');
	  
$result= mysqli_query($db,"Select * FROM ships ORDER BY Arivaltime");
while($row=mysqli_fetch_array($result))
{
	?>
	<option><?php echo $row["Arivaltime"];?></option>
	<?php
}
?>	</select>		
    </div>
    </div> 
		
		
		
		<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="save" >Create</button>
		 <a href="viewbook.php" class="btn btn-default">Show list</a>
      </div>
    </div>
                      
                       
                    
                </div>
            </div>        
        </div>
		</form>
		</div>
		 <footer class="container">
 <center> <p>© MaerskLine-2019</p></center>
</footer>
  
	</body>
	</html>
	<?php
  
  require_once('connection.php');

  if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$cargo = $_POST['cargo'];
		$cus = $_POST['cus'];
		$from = $_POST['from'];
		$to = $_POST['to'];
		$dtime = $_POST['dtime'];
		$atime = $_POST['atime'];
	

		mysqli_query($db, "INSERT INTO booking (Cargodesp,vessel,Customer,Dfrom,Dto,Dtime,Atime) VALUES ('$name','$cargo','$cus','$from', '$to','$dtime','$atime')"); 
		echo "<script>alert('Successfully Booked')</script>";
		
		
	}

?>