<?php
	include('dbh.php');
?>
<?php
    $ids = $_REQUEST["ids"];
 //   $emptyArray = []; 
 //   $emptyArray =  explode (",", $ids); 
 //   echo count($emptyArray);

        $query = "DELETE FROM gallek WHERE id IN ($ids)";
    
        $rs = mysqli_query($data, $query);
 
       if($rs) //check result set
        {
          echo "done";
        }else{
            echo "error";
        }
?>
