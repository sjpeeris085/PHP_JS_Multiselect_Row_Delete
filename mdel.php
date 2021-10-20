<?php
require_once("dbh.php");
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
mysqli_query($data,$sql);
header("Location:members.php");
?>