<?php
require_once("dbh.php");
$sql = "DELETE FROM gallen WHERE id='" . $_GET["id"] . "'";
mysqli_query($data,$sql);
header("Location:gn.php");
?>