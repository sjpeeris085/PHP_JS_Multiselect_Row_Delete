<?php
    if(isset($_POST['login_btn']))
    {
        $username_login = $_POST['username'];
        $pwd_login = $_POST['password'];
    }

    $query = "SELECT * FROM users where username='$username_login' AND pwd='$pwd_login'";
    $query_run = mysqli_query($dbconnection,$query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['uname'] = $username_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Username / Password is invalid';
        header('Location: login.php');
    }

?>