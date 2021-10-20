<?php
	include('dbh.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query = mysqli_query($data,"SELECT * from gallek where id='$id'");
        $row = mysqli_fetch_array($query);
    }
	

    if(isset($_POST['update_form'])) // when click on Update button
    {
        $row_id = $_POST['id'];
        $gka = $_POST['gka'];
        $gkb = $_POST['gkb'];
        $gkc = $_POST['gkc'];
        $gkd = $_POST['gkd'];
        $gke = $_POST['gke'];
        $gkf = $_POST['gkf'];
        $gkg = $_POST['gkg'];
        $gkh = $_POST['gkh'];
        $gki = $_POST['gki'];
        $gkj = $_POST['gkj'];
        $gkk = $_POST['gkk'];
        $gkl = $_POST['gkl'];
        $gkm = $_POST['gkm'];
        $gkn = $_POST['gkn'];
        
        $query = "UPDATE gallek set gk_a='$gka',
        gk_b='$gkb',
         gk_c='$gkc',
          gk_d='$gkd',
           gk_e='$gke',
            gk_f='$gkf',
             gk_g='$gkg',
              gk_h='$gkh',
               gk_i='$gki',
                gk_j='$gkj',
                 gk_k='$gkk',
                  gk_l='$gkl',
                   gk_m='$gkm',
                    gk_n='$gkn' WHERE id=$row_id ";
        $edit = mysqli_query($data, $query);
        
        if($edit)
        {
            mysqli_close($data); // Close connection
           // header("location:gk.php"); // redirects to all records page
           echo "<script> alert('Successfuly updated')</script>";
        }
        else
        {
            echo mysqli_error($data);
        }    	
    }
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
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="bootstrap-filestyle.min.js"> </script>

    <title>Document</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="path/to/bootstrap.css" type="text/css" />

    <style>
        .main {
            margin-left: 200px;
            /* Same as the width of the sidenav */
            font-size: 20px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        th {
            background-color: #98AFC7;
            max-width: 120px;
            max-height: 100px;
            font-size: 14px;
            font-weight: bold;
            word-break: break-word;
        }

        td {
            max-width: 120px;
            max-height: 100px;
            font-size: 14px;
            word-break: break-all;
        }


        .table-hover>tbody>tr:hover>td,
        .table-hover>tbody>tr:hover>th {
            background-color: #B7CEEC;
        }

        .center {
            text-align: center;
            width: 100%;
            color: #00008B;
        }

        .btn {
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

        .searchTerm:focus {
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
        .wrap {
            width: 30%;
            position: absolute;
            top: 12%;
            left: 60%;
            /* float: right; */
            transform: translate(-50%, -50%);
        }
    </style>

    <script>
        function confirmationDelete(anchor) {
            var conf = confirm('Are you sure want to delete this record?');
            if (conf)
                window.location = anchor.attr("href");
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
                        <div class="col-md-8">
                            <div class="mt-5 mb-3 clearfix">
                                <h2 class="text-start"><strong>ගාල්ල - කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</strong></h2>
                                <br>

                            </div>
                            <caption>
                                <p class="text-start"><strong>අමාත්‍යාංශය - </strong>ප්‍රධාන අමාත්‍යාංශය</P>
                                <p class="text-start"><strong>ප්‍රතිපාදන ප්‍රභවය - </strong>උපමාන පාදක</P>
                                <p class="text-start"><strong>අංශය - </strong>කෘෂිකාර්මික අංශය වැඩි දියුණු කිරීම</P>
                                <p class="text-start"><strong>දිස්ත්‍රික්කය - </strong>ගාල්ල</P>
                            </caption>

                        </div>
                        <div class="col-md-4">
                            <div class="mt-5 mb-3 clearfix">
                                <a href="gk.php" class="btn btn-success pull-right">
                                    <btn><i class="fa fa-plus-circle fa-lg"></i> Go back </btn>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                    <?php 
                      if(isset($_GET['id'])){
                          
                      ?>
                            <form method="POST" action="gk_edit.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <input type="text" value="<?php echo $row['id']; ?>" class="form-control"
                                            name="id" hidden>

                                        <label>ව්‍යාපෘතිය හඳුනා ගැනීමේ අංකය</label>
                                        <input type="text" value="<?php echo $row['gk_a']; ?>" class="form-control"
                                            name="gka" Required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>ක්‍රියාකාරකම් අංකය</label>
                                        <input type="text" value="<?php echo $row['gk_b']; ?>" class="form-control"
                                            name="gkb" Required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>ව්‍යාපෘතිය/ක්‍රියාකාරකම්</label>
                                        <input type="text" name="gkc" value="<?php echo $row['gk_c']; ?>"
                                            class="form-control" Required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>ක්‍රියාත්මක ප්‍රා.ලේ. කොට්ඨාසය</label>
                                        <input type="text" name="gkd" value="<?php echo $row['gk_d']; ?>"
                                            class="form-control" Required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>ඇස්තමේන්තු මුදල (රුපියල්)</label>
                                        <input type="text" name="gke" value="<?php echo $row['gk_e']; ?>"
                                            class="form-control" Required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>ටෙන්ඩර් මුදල (රුපියල්)</label>
                                        <input type="text" name="gkf" value="<?php echo $row['gk_f']; ?>"
                                            class="form-control" Required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>අනුමත මුදල (රුපියල්)</label>
                                        <input type="text" name="gkg" value="<?php echo $row['gk_g']; ?>"
                                            class="form-control" Required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>පෙර මාසය අගට සමුච්චිත වියදම (රුපියල්)</label>
                                        <input type="text" name="gkh" value="<?php echo $row['gk_h']; ?>"
                                            class="form-control" Required>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>මෙම මාසය තුළ වියදම (රුපියල්)</label>
                                        <input type="text" name="gki" value="<?php echo $row['gk_i']; ?>"
                                            class="form-control" Required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>මේ දක්වා සමුච්චිත වියදම (රුපියල්)</label>
                                        <input type="text" name="gkj" value="<?php echo $row['gk_j']; ?>"
                                            class="form-control" Required>
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>මෙම මාසය අගට අතැති බිල්පත් වටිනාකම (රුපියල්)</label>
                                        <input type="text" name="gkk" value="<?php echo $row['gk_k']; ?>"
                                            class="form-control" Required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>භෞතික ප්‍රගතිය %</label>
                                        <input type="text" name="gkl" value="<?php echo $row['gk_l']; ?>"
                                            class="form-control" Required>
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>ප්‍ර‍තිලාභීන් සංඛ්‍යාව</label>
                                        <input type="text" name="gkm" value="<?php echo $row['gk_m']; ?>"
                                            class="form-control" Required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>නිරීක්ෂණ ගැටලු හා වෙනත් කරුණු</label>
                                        <textarea class="form-control" value="<?php echo $row['gk_n']; ?>" name="gkn"
                                            id="gkn" rows="3"></textarea>
                                    </div>
                                </div>

                                <button type="submit" id="submit" name="update_form"
                                    class="btn btn-primary">Update</button>
                                <a href="gk.php">Back</a>
                            </form>

                            <?php 
                      }else{
                      echo  '<div class="col-md-4">
                        <div class="mt-5 mb-3 clearfix">
                            <a href="gk.php" class="btn btn-success pull-right">
                                <btn><i class="fa fa-plus-circle fa-lg"></i> Successfuly updated click here to Go back </btn>
                            </a>
                        </div>
                    </div>';
                      }
                          
                      ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="phpCRUD/sweetalert2.all.min.js"></script>
</body>


</html>

