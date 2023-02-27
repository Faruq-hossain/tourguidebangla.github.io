<?php
include('../config/constants.php');

if (isset($_GET['id']) and isset($_GET['image_name'])) {
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    if ($image_name != "") {
        $path = "../images/food/" . $image_name;
        $remove = unlink($path);

        if ($remove == false) {
            $_SESSION['upload'] = "<div class='error'>Failed to Remove Category Image</div>";
            header("location:" . SITEURL . 'admin/manage-food.php');
            die();
        }
    }
    $sql = "DELETE FROM tbl_food WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION['delete'] = "<div class='success'>Food deleted Successfully</div>";

        header('location:' . SITEURL . 'admin/manage-food.php');
    } else {
        // echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='success'>Failed to Delete Food Try Again</div>";
        header('location:' . SITEURL . 'admin/manage-food.php');
    }
} else {
    $_SESSION['unauthorize'] = "<div class='success'>Unauthorizes Access</div>";
    header('location:' . SITEURL . 'admin/manage-food.php');
}
