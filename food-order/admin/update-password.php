<?php include('partials/menu.php'); ?>


<!-- main content -->
<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br>
        <!-- button to add admin -->
        <!-- <a href="" class="btn-primary">Add Admin</a>
        <br>
        <br> -->

        <?php

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }




        ?>


        <br>
        <br>

        <form action="" method="POST">

            <table class="tbl-30">

                <tr>

                    <td>Current Password: </td>
                    <td><input type="password" name="current_password" placeholder="Current password"></td>

                </tr>

                <tr>

                    <td>New Password</td>
                    <td><input type="password" name="current_password" placeholder="New password"></td>
                </tr>

                <tr>

                    <td>Confirm Password</td>
                    <td><input type="password" name="Confirm_password" placeholder="Confirm password"></td>
                </tr>


                <tr>

                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                    </td>

                </tr>
            </table>

        </form>


        <div class="clearfix"></div>
    </div>
</div>

<?php
if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
    $current_password = md5($_POST['current_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);


    $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='current_password'";

    $res = mysqli_query($conn, $sql);

    if ($res == true) {

        $count = mysqli_num_rows($res);

        if ($count == 1) {
            if ($new_password == $confirm_password) {

                $sql2 = "UPDATE tbl_admin SET password='$new_password' WHERE id=$id";

                $res2 = mysqli_query($conn, $sql2);

                if ($res2 == true) {
                    $_SESSION['change-pwd'] = "<div class='succcess'> Password Changed Successfully </div>";
                    header("location:" . SITEURL . 'admin/manage-admin.php');
                } else {
                    $_SESSION['change-pwd'] = "<div class='error'> Failes to Password Changed </div>";
                    header("location:" . SITEURL . 'admin/manage-admin.php');
                }
            } else {
                $_SESSION['pwd-not-match'] = "<div class='error'> Password did not match </div>";
                header("location:" . SITEURL . 'admin/manage-admin.php');
            }
            // $_SESSION['update'] = "<div class='success'> Admin Update Successfully </div>";
            // header("location:" . SITEURL . 'admin/manage-admin.php');
        } else {
            $_SESSION['user-not-found'] = "<div class='error'> User not found </div>";
            header("location:" . SITEURL . 'admin/manage-admin.php');
        }
    }
}
?>


<?php include('partials/footer.php'); ?>