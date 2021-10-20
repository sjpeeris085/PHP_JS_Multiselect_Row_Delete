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
  color: #3B2F2F;
}

.searchButton {
  width: 40px;
  height: 40px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #3B2F2F;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 12%;
  left: 60%;
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
						<h2 class="center"><strong>2020 සංවර්ධන සැලැස්ම</strong></h2>
                        <h2 class="center"><strong>උපමාන පාදක ප්‍රදාන</strong></h2>
                        <h2 class="center"><strong>2020.12.31 වන දිනට සාරාංශය</strong></h2>
						<br>


		</div>
						

						<?php
                    	// Include dbh file
                    	require_once "dbh.php";
                    
                   		// Attempt select query execution
                   		$sql = "SELECT * FROM gallek";
                    	if($result = mysqli_query($data, $sql))
						{
                        	if(mysqli_num_rows($result) > 0)
							{
                            	echo '<table class="table table-bordered table-striped table-hover" >';
									
									echo "<thead>";
										echo '<tr>';
											echo '<th><center>දිස්ත්‍රික්කය</center></th>';
											echo '<th><center>අංශය</center></th>';//a
											echo '<th><center>අනුමත ප්‍රතිපාදන රු.</center></th>';//<!--b-->
											echo '<th><center>වැඩ යෝජනා ගණන</center></th>';//<!--c-->
											echo '<th><center>එක් අංශයක් සඳහා වෙන් වූ මුළු මුදල (රු.)</center></th>';//<!--d-->
											echo '<th><center>මෙතෙක් මුළු වියදම (රු.)</center></th>';//<!--e-->
											echo '<th><center>වැඩ අවසන්</center></th>';//<!--f-->
            								echo '<th><center>50%ට වැඩි</center></th>';//<!--g-->
											echo '<th><center>50%ට අඩු</center></th>';
											echo '<th><center>වැඩ අවසන් නැති</center></th>';//<!--h-->
										echo "</tr>";
									echo "</thead>";



                                    echo "<tbody>";
                                        echo '<tr>';
                                            echo '<th rowspan="4"><center>ගාල්ල</center></th>';
                                            echo '<td><center>කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</center></th>';
                                            echo '<td rowspan="14"><center>2</center></th>';
                                            echo '<td rowspan="14"><center>3</center></th>';
                                            echo '<td><center>4</center></th>';
											echo '<td><center>5</center></th>';
											echo '<td><center>6</center></th>';
											echo '<td><center>7</center></th>';
											echo '<td><center>8</center></th>';
											echo '<td><center>9</center></th>';
										echo "</tr>";


											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";

											
											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";

											
											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";





										echo '<tr>';
											echo '<td colspan="2" rowspan="1"><center></center></th>';
											echo '<td colspan="6" rowspan="1"><center></center></th>';
										echo '</tr>';
										




										echo '<tr>';
                                            echo '<th rowspan="4"><center>මාතර</center></th>';
                                            echo '<td><center>කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</center></th>';
                                            echo '<td><center>4</center></th>';
											echo '<td><center>5</center></th>';
											echo '<td><center>6</center></th>';
											echo '<td><center>7</center></th>';
											echo '<td><center>8</center></th>';
											echo '<td><center>9</center></th>';
										echo "</tr>";


											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";

											
											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";

											
											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";







										echo '<tr>';
											echo '<td colspan="2" rowspan="1"><center></center></th>';
											echo '<td colspan="6" rowspan="1"><center></center></th>';
										echo '</tr>';







										echo '<tr>';
                                            echo '<th rowspan="4"><center>හම්බන්තොට</center></th>';
                                            echo '<td><center>කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</center></th>';
                                            echo '<td><center>4</center></th>';
											echo '<td><center>5</center></th>';
											echo '<td><center>6</center></th>';
											echo '<td><center>7</center></th>';
											echo '<td><center>8</center></th>';
											echo '<td><center>9</center></th>';
										echo "</tr>";


											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";

											
											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";

											
											echo '<tr>';
												echo '<td><center>1</center></th>';
												echo '<td><center>4</center></th>';
												echo '<td><center>5</center></th>';
												echo '<td><center>6</center></th>';
												echo '<td><center>7</center></th>';
												echo '<td><center>8</center></th>';
												echo '<td><center>9</center></th>';
											echo "</tr>";








										echo '<tr>';
											echo '<td colspan="4" rowspan="1"><center></center></th>';
											echo '<td><center></center></th>';
											echo '<td><center></center></th>';
											echo '<td><center></center></th>';
											echo '<td><center></center></th>';
											echo '<td><center></center></th>';
											echo '<td><center></center></th>';
										echo '</tr>';


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