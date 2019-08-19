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
      <li><a href="Createvessel.php"> Home</a></li>
      <li><a href="Createvessel.php"></span> Create Vessel</a></li>
	  <li><a href="Shipschedule.php"></span> Shipping Schedule</a></li>
	  <li><a href="viewbooking.php"></span> View Booking</a></li>
	  <li><a href="viewcustomer.php"></span> View Customer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">LOGOUT</a></li>
	  </ul>
	  </div>
  </div>
  </nav>
   <div class="container" action="viewbooking.php" >
  <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                         <h2>Booking</h2>
 
                     </div>
                    <?php
                    // Include config file
                     require_once ('connection.php');
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM booking";
                    if($result = mysqli_query($db, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
									 echo "<th>ID</th>";
                                        echo "<th>Cargo Desp</th>";
                                        echo "<th>Cargo</th>";
										 echo "<th>Customer</th>";
										 echo "<th>Departure</th>";
                                        echo "<th>Arival</th>";
										echo "<th>DepartureTime</th>";
										 echo "<th>ArivalTime</th>";
                                      
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['Cargodesp'] . "</td>";
										 echo "<td>" . $row['vessel'] . "</td>";
										  echo "<td>" . $row['customer'] . "</td>";
										   echo "<td>" . $row['Dfrom'] . "</td>";
										    echo "<td>" . $row['Dto'] . "</td>";
										  echo "<td>" . $row['Dtime'] . "</td>";
										   echo "<td>" . $row['Atime'] . "</td>";
                                       
									   echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                    }
 
                                        ?>
</div>
</div>
</div>
  
  
  <footer class="container">
 <center> <p>Developed and Designed by Prashrin Khwaunju</p></center>
</footer>
</body>
</html>