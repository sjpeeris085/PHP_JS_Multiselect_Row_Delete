<?php
	include('dbh.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

	<script src="jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap.min.css" />
	<script src="bootstrap.min.js"></script>
	<link rel="stylesheet" href="jquery.dataTables.min.css"></style>
	<script type="text/javascript" src="jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="bootstrap-filestyle.min.js"> </script>

    <title>Document</title>	
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="path/to/bootstrap.css" type="text/css" />
   
	<style>
		.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

		th
		{
			background-color: #98AFC7;
  			max-width: 120px;
  			max-height: 100px;
  			font-size: 14px;
			font-weight: bold;
			word-break: break-word;
		}

		td 
		{
  			max-width: 120px;
  			max-height: 100px;
  			font-size: 14px;
  			word-break: break-all;
		}


		.table-hover > tbody > tr:hover > td,
		.table-hover > tbody > tr:hover > th 
		{
    		background-color: #B7CEEC;
		}

		.center {
                text-align: center;
                width: 100%;
				color: #00008B;
            }

		.btn
		{
			padding: 10px 20px;
			margin: 0 5px;
			border-radius: 50px;
			font-size: 14px;
		}

		.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 40px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 40px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 18%;
  left: 65%;
  /* float: right; */
  transform: translate(-50%, -50%);
}


	</style>

<script>
	function confirmationDelete(anchor)
	{
  		var conf = confirm('Are you sure want to delete this record?');
   		if(conf)
     	window.location=anchor.attr("href");
	}
</script>

<script>
	$(document).ready(function(){
  	$("tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>


</head>
<body>
	<?php
include('dashboard.php');
?>
<div class="main">
<div class="content">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mt-5 mb-3 clearfix">
						<h2 class="text-start"><strong>Members</strong></h2>
						<p>
						<a href="madd.php" class="btn btn-success pull-right"><btn><i class="fa fa-plus-circle fa-lg"></i> Add a New Member </btn></a>	
						<!-- <input type="button" value="Delete" onclick="deleteRow('dataTable')" class="btn btn btn-danger pull-right" i class="fas fa-minus-circle fa-lg"/><i class="fas fa-minus-circle fa-lg"></i> -->
						<a href="memberdel.php" class="btn btn btn-danger pull-right delete_all"><i class="fas fa-minus-circle fa-lg"></i> Delete </a>

						<!-- <input type="text" id="search" placeholder="Search..." /> -->
						<div class="wrap">
   							<div class="search">
     							<input type="text" class="searchTerm" placeholder="Search">
      							<button type="submit" class="searchButton">
        							<i class="fa fa-search"></i>
     							</button>
   							</div>
						</div>

					</div>
						

						<?php
                    	// Include dbh file
                    	require_once "dbh.php";
                    
                   		// Attempt select query execution
                   		$sql = "SELECT * FROM users";
                    	if($result = mysqli_query($data, $sql))
						{
                        	if(mysqli_num_rows($result) > 0)
							{
                            	echo '<table class="table table-bordered table-striped table-hover" >';
									
									echo "<thead>";
										echo '<tr>';
											echo '<th rowspan="1"><center>#</center></th>';
											echo '<th rowspan="1"><center>Name</center></th>';
											echo '<th rowspan="1"><center>Type</center></th>';
											echo '<th rowspan="1"><center>User Name</center></th>';
											echo '<th rowspan="1"><center>Password</center></th>';
											echo '<th colspan="3"><center>Action</center></th>';
										echo "</tr>";
									echo "</thead>";

									echo '<tbody>';
    									while($row=mysqli_fetch_array($result)) 
										{
											echo "<tr>";
											echo "<center>";
												echo"<td>";
													echo '<input name="chk_id[]" type="checkbox" id="master" >';
												echo "</td>";
											echo "</center>";

               									echo"<td>".$row['name']."</td>";
												echo"<td>".$row['type']."</td>";
												echo"<td>".$row['username']."</td>";
												echo"<td>".$row['pwd']."</td>";

				
                			
                								echo "<td>";
													echo '<a href="mview.php?id='.$row['id'].'" class="read"><i class="fas fa-eye fa-2x center"></i></a>';
													echo "<br>";
													echo '<a href="medit.php?id='.$row['id'].'" class="edit"><i class="fas fa-pen fa-2x center"></i></a>';
                    								echo "<br>";
													echo "<a onclick='javascript:confirmationDelete($(this));return false;' href='mdel.php?id=".$row['id']."'><i class='fas fa-trash fa-2x center'></i></a>";
													echo "<br>";
												echo "</td>";
											echo "</tr>";
										}
            			
            
        							echo "</tbody>";
								echo "</table>";

								mysqli_free_result($result);
                        	} 
							else
							{
                            	echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                       		}
                    	} 
						else
						{
                        	echo "Oops! Something went wrong. Please try again later.";
                    	}
 
                    	// Close connection
                   		mysqli_close($data);
                    	?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


				
</body>




</html>