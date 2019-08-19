<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maersk-Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="CSS/js/bootstrap.min.js"></script>
  <style type="text/css">
     table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
      <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
 
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
	  <li><a href="viewbook.php"></span> View Booking</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">LOGOUT</a></li>
	  </ul>
	  </div>
  </div>
  </nav>
  <div class="container" action="viewbook.php" >
  <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                         <h2>Update Booking</h2>
 
  <a href="booking.php" class="btn btn-success pull-left">Add New </a>
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
                                        echo "<th>Action</th>";
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
                                       
											echo "<td>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                              echo "<a href='deleteship.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>|Delete</a>";
                                        echo "</td>";
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
