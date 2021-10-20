<?php
    $dbconnection="localhost";
    $dbuser="root";
    $dbpwd="";
    $database="spdadb";

    $data=mysqli_connect($dbconnection,$dbuser,$dbpwd,$database);

    if($conn=new mysqli($dbconnection,$dbuser,$dbpwd,$database)){

    }
    else{
        echo 'Error database connection';
        exit;
    }

?>