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


</head>
<body>
	<?php
include('user.php');
?>
<div class="main">
<div class="content">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="mt-5 mb-3 clearfix">
						<h2 class="text-start"><strong>මාතර - නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</strong></h2>
						<br>
						
						<a href="create.php" class="btn btn btn-primary pull-right"><i class="fa fa-print fa-lg"></i> Print </a>


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
						<caption>
							<p class="text-start"><strong>අමාත්‍යාංශය - </strong>ප්‍රධාන අමාත්‍යාංශය</P>
							<p class="text-start"><strong>ප්‍රතිපාදන ප්‍රභවය - </strong>උපමාන පාදක</P>
							<p class="text-start"><strong>අංශය - </strong>නිෂ්පාදන හා ඵලදායීතාවය වර්ධනය කිරීම</P>
							<p class="text-start"><strong>දිස්ත්‍රික්කය - </strong>මාතර</P>
						</caption>

						<?php
                    	// Include dbh file
                    	require_once "dbh.php";
                    
                   		// Attempt select query execution
                   		$sql = "SELECT * FROM mataran";
                    	if($result = mysqli_query($data, $sql))
						{
                        	if(mysqli_num_rows($result) > 0)
							{
                            	echo '<table class="table table-bordered table-striped table-hover" >';
									
									echo "<thead>";
										echo '<tr>';
											echo '<th rowspan="2"><center>#</center></th>';
											echo '<th rowspan="2"><center>ව්‍යාපෘතිය හඳුනා ගැනීමේ අංකය</center></th>';//a
											echo '<th rowspan="2"><center>ක්‍රියාකාරකම් අංකය</center></th>';//<!--b-->
											echo '<th rowspan="2"><center>ව්‍යාපෘතිය / ක්‍රියාකාරකම්</center></th>';//<!--c-->
											echo '<th rowspan="2"><center>ක්‍රියාත්මක ප්‍රා.ලේ. කොට්ඨාසය</center></th>';//<!--d-->
											echo '<th rowspan="2"><center>ඇස්තමේන්තු මුදල (රුපියල්)</center></th>';//<!--e-->
											echo '<th rowspan="2"><center>ටෙන්ඩර් මුදල (රුපියල්)</center></th>';//<!--f-->
            								echo '<th rowspan="2"><center>අනුමත මුදල (රුපියල්)</center></th>';//<!--g-->
											echo '<th colspan="6"><center>2019 මූල්‍ය ප්‍රගතිය</center></th>';
											echo '<th rowspan="2"><center>නිරීක්ෂණ ගැටලු හා වෙනත් කරුණු</center></th>';//<!--h-->
											echo '<th rowspan="2" colspan="1"><center>Action</center></th>';
										echo "</tr>";

										echo '<tr style="height:2px; width="10px"">';
											echo "<th>පෙර මාසය අගට සමුච්චිත වියදම (රුපියල්)</th>";//<!--i-->
											echo "<th>මෙම මාසය තුළ වියදම (රුපියල්)</th>";//<!--j-->
											echo "<th>මේ දක්වා සමුච්චිත වියදම (රුපියල්)</th>";//<!--k-->
											echo "<th>මෙම මාසය අගට අතැති බිල්පත් වටිනාකම (රුපියල්)</th>";//<!--l-->
											echo "<th>භෞතික ප්‍රගතිය %</th>";//<!--m-->
											echo "<th>ප්‍රතිලාභීන් සංඛ්‍යාව</th>";//<!--n-->
										echo "</tr>";
									echo "</thead>";

									echo "<tbody>";
    									while($row=mysqli_fetch_array($result)) 
										{
											echo "<tr>";
											
												echo"<td>";
													echo '<input type="checkbox" id="master">';
												echo "</td>";

												echo"<td>".$row['mn_a']."</td>";
												echo"<td>".$row['mn_b']."</td>";
												echo"<td>".$row['mn_c']."</td>";
												echo"<td>".$row['mn_d']."</td>";
												echo"<td>".$row['mn_e']."</td>";
												echo"<td>".$row['mn_f']."</td>";
												echo"<td>".$row['mn_g']."</td>";
												echo"<td>".$row['mn_h']."</td>";
												echo"<td>".$row['mn_i']."</td>";
												echo"<td>".$row['mn_j']."</td>";
												echo"<td>".$row['mn_k']."</td>";
												echo"<td>".$row['mn_l']."</td>";
												echo"<td>".$row['mn_m']."</td>";
												echo"<td>".$row['mn_n']."</td>";
                			
                								echo "<td>";
													echo '<a href="mn_read.php?id='.$row['id'].'" class="read"><i class="fas fa-eye fa-2x center"></i></a>';
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