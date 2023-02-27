<?php include('partials/menu.php'); ?>


<!-- main content -->
<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br>
        <!-- button to add admin -->
        <!-- <a href="" class="btn-primary">Add Admin</a>
        <br>
        <br> -->

        <?php

        $id = $_GET['id'];

        $sql = "SELECT * FROM tbl_admin WHERE id=$id";

        $res = mysqli_query($conn, $sql);

        if ($res == true) 
        {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);

                $full_name = $row['full_name'];
                $username = $row['username'];
            } 
            else {
                header('location:' . SITEURL . 'admin/manage-admin.php');
            }
        }

        ?>


        <br>
        <br>

        <form action="" method="POST">

            <table class="tbl-30">

                <tr>

                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" value="<?php echo $full_name; ?>"></td>

                </tr>

                <tr>

                    <td>User Name: </td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>


                <tr>

                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>

                </tr>
            </table>

        </form>


        <div class="clearfix"></div>
    </div>
</div>

<?php
if(isset($_POST['submit']))
{
    echo $id = $_POST['id'];
    echo $full_name = $_POST['full_name'];
    echo $username = $_POST['username'];

    $sql = "UPDATE tbl_admin SET full_name='$full_name',username='$username' WHERE id='$id'";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['update'] = "<div class='success'> Admin Update Successfully </div>";
        header("location:" . SITEURL . 'admin/manage-admin.php');
    }
    else{
        $_SESSION['update'] = "<div class='success'> Failed Admin Update </div>";
        header("location:" . SITEURL . 'admin/manage-admin.php');
    }


}
?>


<?php include('partials/footer.php'); ?>