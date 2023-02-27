<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Hospital</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Website</th>
                            <th>Map</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $q = $pdo->prepare("SELECT * FROM emergency ORDER BY id ASC");
                        $q->execute();
                        $res = $q->fetchAll();
                        foreach ($res as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>

                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['website']; ?></td>
                                <td><?php echo $row['map']; ?></td>
                                <td>
                                    <a href="hospital_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-warning">Edit</a>
                                    <a href="hospital_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php require_once('footer.php'); ?>