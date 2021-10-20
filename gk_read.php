<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "dbh.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM gallek WHERE id = ?";
    
    if($stmt = mysqli_prepare($data, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $gka = $row["gk_a"];
                $gkb = $row["gk_b"];
                $gkc = $row["gk_c"];
                $gkd = $row["gk_d"];
                $gke = $row["gk_e"];
                $gkf = $row["gk_f"];
                $gkg = $row["gk_g"];
                $gkh = $row["gk_h"];
                $gki = $row["gk_i"];
                $gkj = $row["gk_j"];
                $gkk = $row["gk_k"];
                $gkl = $row["gk_l"];
                $gkm = $row["gk_m"];
                $gkn = $row["gk_n"];
               

												
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($data);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }

        p{
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>ව්‍යාපෘතිය හඳුනා ගැනීමේ අංකය</label>
                        <p><b><?php echo $row["gk_a"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ක්‍රියාකාරකම් අංකය</label>
                        <p><b><?php echo $row["gk_b"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ව්‍යාපෘතිය/ක්‍රියාකාරකම්</label>
                        <p><b><?php echo $row["gk_c"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ක්‍රියාත්මක ප්‍රා.ලේ. කොට්ඨාසය</label>
                        <p><b><?php echo $row["gk_d"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ඇස්තමේන්තු මුදල (රුපියල්)</label>
                        <p><b><?php echo $row["gk_e"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ටෙන්ඩර් මුදල (රුපියල්)</label>
                        <p><b><?php echo $row["gk_f"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>අනුමත මුදල (රුපියල්)</label>
                        <p><b><?php echo $row["gk_g"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>2019 මූල්‍ය ප්‍රගතිය</label>
                    </div>
                    <div class="form-group">
                        <label>පෙර මාසය අගට සමුච්චිත වියදම (රුපියල්)</label>
                        <p><b><?php echo $row["gk_h"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>මෙම මාසය තුළ වියදම (රුපියල්)</label>
                        <p><b><?php echo $row["gk_i"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>මේ දක්වා සමුච්චිත වියදම (රුපියල්)</label>
                        <p><b><?php echo $row["gk_j"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>මෙම මාසය අගට අතැති බිල්පත් වටිනාකම (රුපියල්)</label>
                        <p><b><?php echo $row["gk_k"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>භෞතික ප්‍රගතිය %</label>
                        <p><b><?php echo $row["gk_l"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ප්‍ර‍තිලාභීන් සංඛ්‍යාව</label>
                        <p><b><?php echo $row["gk_m"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>නිරීක්ෂණ ගැටලු හා වෙනත් කරුණු</label>
                        <p><b><?php echo $row["gk_n"]; ?></b></p>
                    </div>
                    <p><a href="gk.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
