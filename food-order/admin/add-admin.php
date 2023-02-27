<?php include('partials/menu.php'); ?>


<!-- main content -->
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <!-- button to add admin -->
        <!-- <a href="" class="btn-primary">Add Admin</a>
        <br>
        <br> -->

        <?php 
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
        <br>
        <br>

        <form action="" method="POST">

            <table class="tbl-30">

                <tr>

                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>

                </tr>

                <tr>

                    <td>User Name: </td>
                    <td><input type="text" name="username" placeholder="Enter Your User Name"></td>
                </tr>

                <tr>

                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter Your Passeord"></td>

                </tr>

                <tr>

                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>

                </tr>
            </table>

        </form>


        <div class="clearfix"></div>
    </div>
</div>


<?php include('partials/footer.php'); ?>


<?php
// procvess the value from and save it in Database
// check wheather the submit button it clicked or not

if (isset($_POST['submit'])) {
    //button clicked
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO tbl_admin SET full_name='$full_name',username='$username',password='$password'";

    $res = mysqli_query($conn, $sql);
    //or die(mysqli_error())

    if ($res == TRUE) {
        $_SESSION['add'] = "Admin Added Successfully";
        header("location:" . SITEURL . 'admin/manage-admin.php');
    } else {
        $_SESSION['add'] = "Failed Added ";
        header("location:" . SITEURL . 'admin/add-admin.php');
    }
}

?>