<?php
include('../config/constants.php');

if (isset($_GET['id']) and isset($_GET['image_name'])) {
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    if ($image_name != "") {
        $path = "../images/category/" . $image_name;
        $remove = unlink($path);

        if ($remove == false) {
            $_SESSION['remove'] = "<div class='error'>Failed to Remove Category Image</div>";
            header("location:" . SITEURL . 'admin/manage-category.php');
            die();
        }
    }
    $sql = "DELETE FROM tbl_category WHERE id=$id";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION['delete'] = "<div class='success'>Category deleted Successfully</div>";

        header('location:' . SITEURL . 'admin/manage-category.php');
    } else {
        // echo "Failed to Delete Admin";

        $_SESSION['delete'] = "<div class='success'>Failed to Delete Category Try Again</div>";
        header('location:' . SITEURL . 'admin/manage-category.php');
    }
} else {
    header('location:' . SITEURL . 'admin/manage-category.php');
}
