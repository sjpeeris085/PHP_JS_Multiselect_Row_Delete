<?php
require_once("dbh.php");
$sql = "DELETE FROM gallek WHERE id='" . $_GET["id"] . "'";
mysqli_query($data,$sql);
header("Location:gk.php");
?>


