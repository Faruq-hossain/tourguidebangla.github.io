<?php require('header.php') ?>

<!-- Parallax Effect -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#parallax-pagetitle').parallax("50%", -0.55);
    });
</script>

<section class="parallax-effect">
    <div id="parallax-pagetitle" style="background-image: url(images/parallax/parallax-01.jpg);">
        <div class="color-overlay">
            <!-- Page title -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Customer Dashboard</li>
                        </ol>
                        <h1>Customer Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">



        <!-- Contact form -->

        <section class="contact-details">
            <div class="col-md-3">
                <h2 class="lined-heading  mt65"></h2>
                <!-- Panel -->
                <div class="panel panel-default text-center">

                    <?php require('c-sidebar.php') ?>
                </div>

            </div>
        </section>


        <section id="contact-form" class="mt50">
            <div class="col-md-9">
                <h2>Welcome dashboard</h2>
            </div>
        </section>
    </div>
</div>

<?php require('../footer.php') ?>