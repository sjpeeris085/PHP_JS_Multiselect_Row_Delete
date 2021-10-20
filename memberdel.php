<?
if(isset($_POST['chk_id']))
{
    $arr = $_POST['chk_id'];
    foreach ($arr as $id) {
        @mysqli_query($con,"DELETE FROM users WHERE id = " . $id);
    }
    $msg = "Deleted Successfully!";
    header("Location: members.php?msg=$msg");
}
?>