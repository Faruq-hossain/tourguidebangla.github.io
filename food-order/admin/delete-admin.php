<?php
include('../config/constants.php');

$id = $_GET['id'];

$sql = "DELETE FROM tbl_admin WHERE id=$id";

$res = mysqli_query($conn,$sql);

if($res==true)
{
    $_SESSION['delete'] = "<div class='success'>Admin deleted Successfuly</div>";

    header('location:'.SITEURL.'admin/manage-admin.php');
}
else{
    // echo "Failed to Delete Admin";

    $_SESSION['delete'] = "<div class='success'>Failed to Delete Admin Try Again</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');

}
?>