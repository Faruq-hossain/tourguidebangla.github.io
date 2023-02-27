<?php require_once('header.php'); ?>

<?php
if (isset($_POST['form_book'])) {

    $q = $pdo->prepare("SELECT * 
                  FROM room t1
                  JOIN room_type t2
                  ON t1.room_type_id = t2.room_type_id
                  WHERE t1.room_id=?");
    $q->execute([$_POST['room_id']]);
    $res = $q->fetchAll();
    foreach ($res as $row) {
        $room_total = $row['room_total'];
        $room_type_name = $row['room_type_name'];
        $room_price = $row['room_price'];
        $room_name = $row['room_name'];
    }

    $valid = 1;
    if ($_POST['checkin'] == '' || $_POST['checkout'] == '' || $_POST['qty'] == '') {
        $valid = 0;
        $error_message .= 'You must have to fill up all the fields.';
    } else {
        if (strtotime($_POST['checkin']) >= strtotime($_POST['checkout'])) {
            $valid = 0;
            $error_message .= 'Checkin date must be previous date of checkout date';
        } else {
            $err = 0;
            $q = $pdo->prepare("SELECT * FROM payment_detail WHERE room_id=?");
            $q->execute([$_POST['room_id']]);
            $res = $q->fetchAll();
            foreach ($res as $row) {
                if ((strtotime($_POST['checkin']) >= $row['checkin_date_value']) && (strtotime($_POST['checkin']) <= $row['checkout_date_value'])) {
                    $err += $row['qty'];
                } elseif ((strtotime($_POST['checkout']) >= $row['checkin_date_value']) && (strtotime($_POST['checkout']) <= $row['checkout_date_value'])) {
                    $err += $row['qty'];
                }
            }
            if ($err >= $room_total) {
                $valid = 0;
                $error_message .= 'No such room available on that date';
            } else {
                if ($_POST['qty'] > $room_total) {
                    $valid = 0;
                    $error_message .= 'Number of rooms exceed the total room limit. You can book only ' . $room_total . ' rooms';
                }
            }
        }
    }

    if ($valid == 1) {

        if (isset($_SESSION['cart_room_id'])) {

            $arr_room_id = array();
            $i = 0;
            foreach ($_SESSION['cart_room_id'] as $val) {
                $i++;
                $arr_room_id[$i] = $val;
            }

            $arr_qty = array();
            $i = 0;
            foreach ($_SESSION['cart_qty'] as $val) {
                $i++;
                $arr_qty[$i] = $val;
            }

            $arr_room_name = array();
            $i = 0;
            foreach ($_SESSION['cart_room_name'] as $val) {
                $i++;
                $arr_room_name[$i] = $val;
            }

            $arr_room_price = array();
            $i = 0;
            foreach ($_SESSION['cart_room_price'] as $val) {
                $i++;
                $arr_room_price[$i] = $val;
            }

            $arr_room_type_name = array();
            $i = 0;
            foreach ($_SESSION['cart_room_type_name'] as $val) {
                $i++;
                $arr_room_type_name[$i] = $val;
            }

            $arr_checkin_date = array();
            $i = 0;
            foreach ($_SESSION['cart_checkin_date'] as $val) {
                $i++;
                $arr_checkin_date[$i] = $val;
            }

            $arr_checkin_date_value = array();
            $i = 0;
            foreach ($_SESSION['cart_checkin_date_value'] as $val) {
                $i++;
                $arr_checkin_date_value[$i] = $val;
            }

            $arr_checkout_date = array();
            $i = 0;
            foreach ($_SESSION['cart_checkout_date'] as $val) {
                $i++;
                $arr_checkout_date[$i] = $val;
            }

            $arr_checkout_date_value = array();
            $i = 0;
            foreach ($_SESSION['cart_checkout_date_value'] as $val) {
                $i++;
                $arr_checkout_date_value[$i] = $val;
            }

            if (in_array($_POST['room_id'], $arr_room_id)) {
                $valid = 0;
                $error_message .= 'This room is already added to the cart';
            } else {
                $new_key = $i + 1;
                $_SESSION['cart_room_id'][$new_key] = $_POST['room_id'];
                $_SESSION['cart_qty'][$new_key] = $_POST['qty'];
                $_SESSION['cart_room_name'][$new_key] = $room_name;
                $_SESSION['cart_room_price'][$new_key] = $room_price;
                $_SESSION['cart_room_type_name'][$new_key] = $room_type_name;
                $_SESSION['cart_checkin_date'][$new_key] = $_POST['checkin'];
                $_SESSION['cart_checkin_date_value'][$new_key] = strtotime($_POST['checkin']);
                $_SESSION['cart_checkout_date'][$new_key] = $_POST['checkout'];
                $_SESSION['cart_checkout_date_value'][$new_key] = strtotime($_POST['checkout']);
            }
        } else {
            $_SESSION['cart_room_id'][1] = $_POST['room_id'];
            $_SESSION['cart_qty'][1] = $_POST['qty'];
            $_SESSION['cart_room_name'][1] = $room_name;
            $_SESSION['cart_room_price'][1] = $room_price;
            $_SESSION['cart_room_type_name'][1] = $room_type_name;
            $_SESSION['cart_checkin_date'][1] = $_POST['checkin'];
            $_SESSION['cart_checkin_date_value'][1] = strtotime($_POST['checkin']);
            $_SESSION['cart_checkout_date'][1] = $_POST['checkout'];
            $_SESSION['cart_checkout_date_value'][1] = strtotime($_POST['checkout']);
        }

        header('location: cart.php');
        exit;
    }
}
?>

<?php
if (isset($_POST['form_book'])) {

    $q = $pdo->prepare("SELECT * 
                  FROM tour t1
                  JOIN tour_type t2
                  ON t1.room_type_id = t2.room_type_id
                  WHERE t1.room_id=?");
    $q->execute([$_POST['room_id']]);
    $res = $q->fetchAll();
    foreach ($res as $row) {
        $room_total = $row['room_total'];
        $room_type_name = $row['room_type_name'];
        $room_price = $row['room_price'];
        $room_name = $row['room_name'];
    }

    $valid = 1;
    if ($_POST['checkin'] == '' || $_POST['checkout'] == '' || $_POST['qty'] == '') {
        $valid = 0;
        $error_message .= 'You must have to fill up all the fields.';
    } else {
        if (strtotime($_POST['checkin']) >= strtotime($_POST['checkout'])) {
            $valid = 0;
            $error_message .= 'Checkin date must be previous date of checkout date';
        } else {
            $err = 0;
            $q = $pdo->prepare("SELECT * FROM payment_detail WHERE room_id=?");
            $q->execute([$_POST['room_id']]);
            $res = $q->fetchAll();
            foreach ($res as $row) {
                if ((strtotime($_POST['checkin']) >= $row['checkin_date_value']) && (strtotime($_POST['checkin']) <= $row['checkout_date_value'])) {
                    $err += $row['qty'];
                } elseif ((strtotime($_POST['checkout']) >= $row['checkin_date_value']) && (strtotime($_POST['checkout']) <= $row['checkout_date_value'])) {
                    $err += $row['qty'];
                }
            }
            if ($err >= $room_total) {
                $valid = 0;
                $error_message .= 'No such tour available on that date';
            } else {
                if ($_POST['qty'] > $room_total) {
                    $valid = 0;
                    $error_message .= 'Number of tours exceed the total room limit. You can book only ' . $room_total . ' rooms';
                }
            }
        }
    }

    if ($valid == 1) {

        if (isset($_SESSION['cart_room_id'])) {

            $arr_room_id = array();
            $i = 0;
            foreach ($_SESSION['cart_room_id'] as $val) {
                $i++;
                $arr_room_id[$i] = $val;
            }

            $arr_qty = array();
            $i = 0;
            foreach ($_SESSION['cart_qty'] as $val) {
                $i++;
                $arr_qty[$i] = $val;
            }

            $arr_room_name = array();
            $i = 0;
            foreach ($_SESSION['cart_room_name'] as $val) {
                $i++;
                $arr_room_name[$i] = $val;
            }

            $arr_room_price = array();
            $i = 0;
            foreach ($_SESSION['cart_room_price'] as $val) {
                $i++;
                $arr_room_price[$i] = $val;
            }

            $arr_room_type_name = array();
            $i = 0;
            foreach ($_SESSION['cart_room_type_name'] as $val) {
                $i++;
                $arr_room_type_name[$i] = $val;
            }

            $arr_checkin_date = array();
            $i = 0;
            foreach ($_SESSION['cart_checkin_date'] as $val) {
                $i++;
                $arr_checkin_date[$i] = $val;
            }

            $arr_checkin_date_value = array();
            $i = 0;
            foreach ($_SESSION['cart_checkin_date_value'] as $val) {
                $i++;
                $arr_checkin_date_value[$i] = $val;
            }

            $arr_checkout_date = array();
            $i = 0;
            foreach ($_SESSION['cart_checkout_date'] as $val) {
                $i++;
                $arr_checkout_date[$i] = $val;
            }

            $arr_checkout_date_value = array();
            $i = 0;
            foreach ($_SESSION['cart_checkout_date_value'] as $val) {
                $i++;
                $arr_checkout_date_value[$i] = $val;
            }

            if (in_array($_POST['room_id'], $arr_room_id)) {
                $valid = 0;
                $error_message .= 'This room is already added to the cart';
            } else {
                $new_key = $i + 1;
                $_SESSION['cart_room_id'][$new_key] = $_POST['room_id'];
                $_SESSION['cart_qty'][$new_key] = $_POST['qty'];
                $_SESSION['cart_room_name'][$new_key] = $room_name;
                $_SESSION['cart_room_price'][$new_key] = $room_price;
                $_SESSION['cart_room_type_name'][$new_key] = $room_type_name;
                $_SESSION['cart_checkin_date'][$new_key] = $_POST['checkin'];
                $_SESSION['cart_checkin_date_value'][$new_key] = strtotime($_POST['checkin']);
                $_SESSION['cart_checkout_date'][$new_key] = $_POST['checkout'];
                $_SESSION['cart_checkout_date_value'][$new_key] = strtotime($_POST['checkout']);
            }
        } else {
            $_SESSION['cart_room_id'][1] = $_POST['room_id'];
            $_SESSION['cart_qty'][1] = $_POST['qty'];
            $_SESSION['cart_room_name'][1] = $room_name;
            $_SESSION['cart_room_price'][1] = $room_price;
            $_SESSION['cart_room_type_name'][1] = $room_type_name;
            $_SESSION['cart_checkin_date'][1] = $_POST['checkin'];
            $_SESSION['cart_checkin_date_value'][1] = strtotime($_POST['checkin']);
            $_SESSION['cart_checkout_date'][1] = $_POST['checkout'];
            $_SESSION['cart_checkout_date_value'][1] = strtotime($_POST['checkout']);
        }

        header('location: cart.php');
        exit;
    }
}
?>

<?php
if ($error_message) {
?><script>
        alert('<?php echo $error_message; ?>');
    </script><?php
            }

            if ($success_message) {
                ?><script>
        alert('<?php echo $success_message; ?>');
    </script><?php
            }
                ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Findtel</title>
    <!-- favicon  -->
    <link rel="shortcut icon" href="./asset/image/icon/favicon.png" type="image/x-icon">
    <!-- connect stylesheet  -->
    <link rel="stylesheet" href="./asset/css/themify-icons.css">
    <!-- <link rel="stylesheet" href="./asset/css/bootstrap.min.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="./asset/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/header.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/css/custom.css">
    <link rel="stylesheet" href="./asset/css/responsive.css">
    <link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet" />
    <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style type="text/css">
        .spen-slide .slick-prev:before {
            color: #847474;
        }

        .slick-prev:before {
            color: black;
        }

        .slick-next::before {
            color: #ED7D2B;
        }




        /* profile */



        .card_profile_img {
            width: 120px;
            height: 120px;
            background-color: #868d9b;
            background: url("asset/image/content/Saint_martin 1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border: 2px solid #ffffff;
            border-radius: 120px;
            margin: 0 auto;
            margin-top: -60px;

        }

        .card_background_img {
            width: 100%;
            height: 180px;
            background-color: #e1e7ed;
            background: url("asset/image/content/Saint_martin 1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }



        .user_details h3 {
            margin-top: 10px;
            text-align: center;
            font-weight: bold;
        }

        /* .card_count {
            padding: 30px;
            border-top: 1px solid #dde1e7;
        }

        .count {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 28px;
        } */

        /* price far */




        .price-table {
            -webkit-transition: 0.3s ease;
        }

        .lis-brd-light {
            border-color: #dadada !important;
        }

        .lis-rounded-top {
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
        }

        .lis-bg-light {
            background-color: #f7f7f7;
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important;
        }

        .lis-latter-spacing-2 {
            letter-spacing: 2px;
        }

        .text-uppercase {
            text-transform: uppercase !important;
        }

        .lis-font-weight-500 {
            font-weight: 500;
        }

        .display-4 {
            font-size: 3.5rem;
        }

        .price-table sup {
            top: -1.5em;
        }

        .price-table sup,
        .price-table small {
            font-size: 1.25rem;
        }

        .price-table small {
            font-size: 1.25rem;
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important;
        }

        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
        }

        .lis-brd-light {
            border-color: #dadada !important;
        }

        .bg-white {
            background-color: #fff !important;
        }

        .py-5 {
            padding-bottom: 3rem !important;
        }

        .lis-line-height-3 {
            line-height: 3 !important;
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .lis-line-height-3 {
            line-height: 3 !important;
        }

        .btn-primary-outline {
            background-color: transparent;
            color: #ff214f !important;
            border-color: #ff214f;
        }

        .btn {
            color: #fff;
            padding: .5rem 1.3rem;
            font-size: 1rem;
            word-wrap: break-word;
        }

        .lis-rounded-circle-50 {
            border-radius: 50px;
        }

        .pl-2,
        .px-2 {
            padding-right: .5rem !important;
        }

        .btn-primary-outline:hover,
        .btn-primary-outline:focus {
            background-color: #ff214f;
            border-color: #ff214f;
            color: #fff !important;
        }

        .lis-bg-primary {
            background-color: #ff214f;
        }

        .btn-primary {
            background-color: #ff214f;
            border-color: #ff214f;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #ff214f;
            border-color: #ff214f;
        }

        .price-table.active {
            transform: scale(1.045);
            -webkit-transform: scale(1.045);
        }

        .price-table {
            -webkit-transition: 0.3s ease;
        }

        .lis-rounded-bottom {
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }
    </style>
</head>

<body>


    <!-- main body start  -->
    <!-- header section start  -->

    <!-- Profile Start -->
    <div class="container">
        <div class="card_background_img"></div>
        <div class="card_profile_img"></div>
        <div class="user_details">
            <h3>Malek Samsundin</h3>
        </div>
    </div>

    <div class="tab-content clearfix container">
        <div class="tab-pane active" id="11a">
            <div class="result">
                <div class="row">

                    <div class="col-lg-8 details">
                        <h5 class="fw-bold">
                            Cos's Bazar - Saint Martin's Island
                        </h5><br>

                        <a class="btn btn-danger me-2 ms-3" style="width: 104.31px;height: 36.6px;background: #ED7D2B;border-radius: 13.7248px;">
                            4.9
                        </a>

                        <b style="font-weight: 600;font-size: 16.4698px;line-height: 25px;">
                            very good
                        </b><span style="font-weight: 400;font-size:14px;line-height: 20px;color: #000000;">(24 Reviews)</span><br><br>


                        <h4 class="fw-bold">
                            <h1 style="font-size: 20px;color:black;font-weight:bold;">Experience</h1><br>
                            <p style="font-weight: normal;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, reiciendis!</p>
                            <a style="font-weight: normal;" href="">See More</a><br>
                        </h4><br>

                        <h5 class="fw-bold">
                            <h1 style="font-size: 20px;color:black;font-weight:bold;">Language : English </h1>
                        </h5><br>
                        <h5 class="fw-bold">
                            <h1 style="font-size: 20px;color:black;font-weight:bold;">Currencies: <a style="font-weight: normal;font-size:15px;">United States dollar (USD), Euro (EUR), Bangladeshi tak</a> </h1> <br>
                        </h5>
                    </div>
                    <div class="col-lg-4 pc">
                        <div class="price" style="background: #E5E5E5;padding-top:50px;padding-bottom:50px;padding-left:50px;padding-right:50px;">
                            <h5 class="fw-bold" style="color: #000000;font-weight:bold;font-size:20px;margin-bottom:5px;">
                                Location
                            </h5>
                            <p>Dhaka, Bangladesh</p>

                            <h5 class="fw-bold" style="color: #000000;font-weight:bold;font-size:20px;margin-bottom:5px;">
                                Phone Number
                            </h5>
                            <p>+88 01717614654</p>

                            <h5 class="fw-bold" style="color: #000000;font-weight:bold;font-size:20px;margin-bottom:5px;">
                                Website
                            </h5>
                            <p>TourWithMalek.com</p>

                            <h5 class="fw-bold" style="color: #000000;font-weight:bold;font-size:20px;margin-bottom:5px;">
                                Email
                            </h5>
                            <p>malek_tour_guide@gmail.com</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Profile end -->

    <!-- Price Start -->
    <section class=" container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h3 class="fw-bolder mb-5">
                            Our Packages
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5  mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;margin-top:20px;">
                    <div class="price-table">
                        <div class="price-header  lis-rounded-top py-4 border border-bottom-0 lis-brd-light">
                            <h5 class="text-bold lis-latter-spacing-2" style="font-weight:bold;margin-top:40px;">Silver Package Price</h5>
                            <h1 class="display-4 lis-font-weight-500" style="font-weight:bold"> $185 </h1>
                            <p class="mb-0">+ (6% vat)</p>
                        </div>
                        <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                            <ul class="list-unstyled lis-line-height-3" style="text-align: center;">
                                <li>2 Nights and 2 Days</li>
                                <li>Non AC: Bus / ship / boat journeys</li>
                                <li>Breakfast: Paratha, Vegetable.</li>
                                <li>Featured In Search Results</li>
                                <li>Lunch/Dinner: Plain Rice, Fish,<br>
                                    Vorta/ Vegetable, Dal, Salad.</li>
                            </ul>
                            <a href="#" class="btn  btn-md lis-rounded-circle-50" data-abc="true" style="background-color: #ED7D2B;color:white;">Purchase Package</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="price-table active">
                        <div class="price-header lis-bg-primary py-4 text-white lis-rounded-top" style="background-color:#ED7D2B;font-weight:bold;">
                            <h5 class="text-uppercase lis-latter-spacing-2 text-white">Most Popular</h5>
                        </div>

                        <div class="border border-top-0 lis-brd-light  py-5 lis-rounded-bottom" style="background-color:#D6D6D6;">
                            <h5 class="text-bold lis-latter-spacing-2" style="font-weight:bold">Gold Package Price</h5>
                            <h1 class="display-4 lis-font-weight-500" style="font-weight:bold;"> $185 </h1>
                            <p class="mb-0">+ (6% vat)</p><br>
                            <ul class="list-unstyled lis-line-height-3">
                                <li>3 Nights and 4 Days</li>
                                <li>AC: Bus / ship / boat journeys</li>
                                <li>2 nights at Saint Martin</li>
                                <li>Breakfast: Vuna khichuri, Egg & Tea.</li>
                                <li>Lunch/Dinner: Plain Rice, Fish, Vorta/ Vegetable, Dal, Salad.</li>
                            </ul>
                            <a href="#" class="btn  btn-md lis-rounded-circle-50" data-abc="true" style="background-color: #ED7D2B;color:white;">Purchase Package</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5  mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;margin-top:20px;">
                    <div class="price-table">
                        <div class="price-header  lis-rounded-top py-4 border border-bottom-0 lis-brd-light">
                            <h5 class="text-bold lis-latter-spacing-2" style="font-weight:bold;margin-top:40px;">Premium Package Price</h5>
                            <h1 class="display-4 lis-font-weight-500" style="font-weight:bold"> $185 </h1>
                            <p class="mb-0">+ (6% vat)</p>
                        </div>
                        <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                            <ul class="list-unstyled lis-line-height-3" style="text-align: center;">
                                <li>2 Nights and 2 Days</li>
                                <li>Non AC: Bus / ship / boat journeys</li>
                                <li>Breakfast: Paratha, Vegetable.</li>
                                <li>Featured In Search Results</li>
                                <li>Lunch/Dinner: Plain Rice, Fish,<br>
                                    Vorta/ Vegetable, Dal, Salad.</li>
                            </ul>
                            <a href="#" class="btn  btn-md lis-rounded-circle-50" data-abc="true" style="background-color: #ED7D2B;color:white;">Purchase Package</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Price end -->




    <!-- looking start  -->
    <section class="container looking">
        <h2 class="lined-heading" style="font-size: 25px;font-weight:bold;"><span>Looking for some place for <br> your top trip?</span></h2>

        <!-- <div class="row p-3 mb-3">
            <div class="col-lg-4" style="border-right: 2px solid #ED7D2B;text-align:center;">
                <div class="looking-vector">
                    <h3 class="fw-bold">
                        Looking for some place for your next trip?
                    </h3>
                    <div class="looking-vector-image">
                        <img src="./asset/image/content/vector7.png">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fw-normal">
                <p>
                    Start planning the trip of your dreams with the help of 100+ hotels, tour, host, transport on
                    findtel official.
                </p>
            </div>
        </div> -->

        <div id="exTab1">
            <ul class="nav nav-pills search_tab">
                <li class="active" style="background-color:FF3300">
                    <a href="#11a" data-toggle="tab">Top Destination</a>
                </li>
                <li>
                    <a href="#22a" data-toggle="tab">Top Hotels</a>
                </li>
                <li>
                    <a href="#33a" data-toggle="tab">Top Guides</a>
                </li>
            </ul>


            <div class="tab-content clearfix container">

                <!-- tours -->
                <div class="tab-pane" id="11a">
                    <div class="container">
                        <!-- Tours -->
                        <section class="rooms mt50">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="lined-heading" style="font-size: 25px;font-weight:bold;"><span>Guests Favorite Tours</span></h2>
                                    </div>


                                    <?php
                                    $q = $pdo->prepare("SELECT * FROM tour WHERE room_show_on_home=? ORDER BY room_id ASC");
                                    $q->execute(['Yes']);
                                    $res = $q->fetchAll();
                                    foreach ($res as $row) {
                                    ?>
                                        <div class="col-sm-4">
                                            <div class="room-thumb"> <img src="touruploads/<?php echo $row['room_featured_photo']; ?>" alt="room 1" class="img-responsive" />
                                                <div class="mask">
                                                    <div class="main">
                                                        <h5><?php echo $row['room_name']; ?></h5>
                                                        <div class="price">$ <?php echo $row['room_price']; ?><span><?php echo $row['room_day']; ?></span></div>
                                                    </div>
                                                    <div class="content">
                                                        <p><?php echo $row['room_short_description']; ?></p>
                                                        <div class="row">
                                                            <?php
                                                            $r = $pdo->prepare("SELECT * 
                              FROM tour_tour_feature t1
                              JOIN tour_feature t2
                              ON t1.room_feature_id = t2.room_feature_id
                              WHERE t1.room_id=? 
                              ORDER BY t1.room_id ASC");
                                                            $r->execute([$row['room_id']]);
                                                            $tot = $r->rowCount();
                                                            if ($tot % 2 == 0) {
                                                                $left = $tot / 2;
                                                                $right = $left;
                                                            } else {
                                                                $left = ceil($tot / 2);
                                                                $right = $left - 1;
                                                            }

                                                            $left_arr_name = array();
                                                            $left_arr_icon = array();
                                                            $right_arr_name = array();
                                                            $right_arr_icon = array();

                                                            $i = 0;
                                                            $res1 = $r->fetchAll();
                                                            foreach ($res1 as $row1) {
                                                                $i++;
                                                                if ($i <= $left) {
                                                                    $left_arr_name[] = $row1['room_feature_name'];
                                                                    $left_arr_icon[] = $row1['room_feature_icon'];
                                                                } else {
                                                                    $right_arr_name[] = $row1['room_feature_name'];
                                                                    $right_arr_icon[] = $row1['room_feature_icon'];
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-xs-6">
                                                                <ul class="list-unstyled">
                                                                    <?php
                                                                    for ($i = 0; $i < count($left_arr_name); $i++) {
                                                                    ?><li><i class="<?php echo $left_arr_icon[$i]; ?>"></i> <?php echo $left_arr_name[$i]; ?></li><?php
                                                                                                                                                                }
                                                                                                                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <ul class="list-unstyled">
                                                                    <?php
                                                                    for ($i = 0; $i < count($right_arr_name); $i++) {
                                                                    ?><li><i class="<?php echo $right_arr_icon[$i]; ?>"></i> <?php echo $right_arr_name[$i]; ?></li><?php
                                                                                                                                                                }
                                                                                                                                                                    ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="../tourhotel../tour../tour.php?id=<?php echo $row['room_id']; ?>" class="btn btn-primary btn-block">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                        </section>
                        <!-- <section class="customer-logos slider">
                            
                            <div class="slide col-12">
                                <img src="./asset/image/content/top1.png">
                                <div class="row caption">
                                    <div class="col-sm-8">
                                        <b>Saintmartin, Chittagoan</b>
                                    </div>
                                    <div class="col-sm-4" style="font-size: 7px;">
                                        <i class="fas fa-star-half-alt text-danger"></i>
                                        5 Star
                                    </div>

                                    <div class="col-sm-4 pt-1">
                                        7,123 hotels
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        51 transports
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        Special Sult
                                    </div>
                                </div>
                            </div>

                            <div class="slide col-12">
                                <img src="./asset/image/content/top2.png">
                                <div class="row caption">
                                    <div class="col-sm-8">
                                        <b>Saintmartin, Chittagoan</b>
                                    </div>
                                    <div class="col-sm-4" style="font-size: 7px;">
                                        <i class="fas fa-star-half-alt text-danger"></i>
                                        5 Star
                                    </div>

                                    <div class="col-sm-4 pt-1">
                                        7,123 hotels
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        51 transports
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        Special Sult
                                    </div>
                                </div>
                            </div>

                            <div class="slide col-12">
                                <img src="./asset/image/content/top3.png">
                                <div class="row caption">
                                    <div class="col-sm-8">
                                        <b>Saintmartin, Chittagoan</b>
                                    </div>
                                    <div class="col-sm-4" style="font-size: 7px;">
                                        <i class="fas fa-star-half-alt text-danger"></i>
                                        5 Star
                                    </div>

                                    <div class="col-sm-4 pt-1">
                                        7,123 hotels
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        51 transports
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        Special Sult
                                    </div>
                                </div>
                            </div>

                            <div class="slide col-12">
                                <img src="./asset/image/content/top4.png">
                                <div class="row caption">
                                    <div class="col-sm-8">
                                        <b>Saintmartin, Chittagoan</b>
                                    </div>
                                    <div class="col-sm-4" style="font-size: 7px;">
                                        <i class="fas fa-star-half-alt text-danger"></i>
                                        5 Star
                                    </div>

                                    <div class="col-sm-4 pt-1">
                                        7,123 hotels
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        51 transports
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        Special Sult
                                    </div>
                                </div>
                            </div>

                            <div class="slide col-12">
                                <img src="./asset/image/content/top1.png">
                                <div class="row caption">
                                    <div class="col-sm-8">
                                        <b>Saintmartin, Chittagoan</b>
                                    </div>
                                    <div class="col-sm-4" style="font-size: 7px;">
                                        <i class="fas fa-star-half-alt text-danger"></i>
                                        5 Star
                                    </div>

                                    <div class="col-sm-4 pt-1">
                                        7,123 hotels
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        51 transports
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        Special Sult
                                    </div>
                                </div>
                            </div>

                            <div class="slide col-12">
                                <img src="./asset/image/content/top2.png">
                                <div class="row caption">
                                    <div class="col-sm-8">
                                        <b>Saintmartin, Chittagoan</b>
                                    </div>
                                    <div class="col-sm-4" style="font-size: 7px;">
                                        <i class="fas fa-star-half-alt text-danger"></i>
                                        5 Star
                                    </div>

                                    <div class="col-sm-4 pt-1">
                                        7,123 hotels
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        51 transports
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        Special Sult
                                    </div>
                                </div>
                            </div>

                            <div class="slide col-12">
                                <img src="./asset/image/content/top3.png">
                                <div class="row caption">
                                    <div class="col-sm-8">
                                        <b>Saintmartin, Chittagoan</b>
                                    </div>
                                    <div class="col-sm-4" style="font-size: 7px;">
                                        <i class="fas fa-star-half-alt text-danger"></i>
                                        5 Star
                                    </div>

                                    <div class="col-sm-4 pt-1">
                                        7,123 hotels
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        51 transports
                                    </div>
                                    <div class="col-sm-4 pt-1">
                                        Special Sult
                                    </div>
                                </div>
                            </div>

                        </section> -->
                    </div>
                </div>

                <!-- guide -->
                <div class="  tab-pane" id="33a">

                    <div class="tab-content clearfix container">
                        <div class="tab-pane active" id="33a">
                            <div class="result" style="background: #f5f5f5; border: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-lg-3 p-4 ">
                                        <img src="images/guide/g1.jpg" style="box-shadow: 0px 4px 4px rgba(118, 118, 118, 0.25);border-radius: 16px; padding: 0;height:250px;margin-left:20px;" />
                                        <a href="guideProfile.php" class="btn btn-danger me-2 ms-3" style="background: #FF3300;border-radius: 13.7248px;margin-top:20px;padding-right:60px;padding-left:60px;text-align:center;margin-left:20px;">
                                            See Profile
                                        </a>

                                    </div>

                                    <div class="col-lg-6 details">


                                        <a class="btn btn-danger me-2 ms-3" style="width: 104.31px;height: 36.6px;background: #FF3300;border-radius: 13.7248px;margin-left:20px;margin-top:20px;">
                                            4.9
                                        </a>

                                        <b style="font-weight: 600;font-size: 16.4698px;line-height: 25px;">
                                            very good
                                        </b><span style="font-weight: 400;font-size:14px;line-height: 20px;color: #000000;">(24 Reviews)</span>
                                        <hr>

                                        <p style="margin-top:20px;margin-left:20px;"><small style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #484848;"><i class="bi bi-geo-alt"></i>
                                                Bus, AC Bus/ Micro( Cox-Tek-Cox)
                                                Ship Ticket-KEARI Cruise (Pearl Lounge)
                                                Local Van(St. Martin)
                                            </small></p>
                                        <hr>

                                        <p style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #484848;margin-top:20px;margin-left:20px;"><i class="bi bi-star-fill"></i> Twin share accommodation AC-Cox’s BazarNon AC- ST. Martin
                                            Breakfast, Lunch, Dinner (1 special lunch in Keari Cruise and Dine)</p>
                                        <hr>

                                        <p style="margin-top:20px;margin-left:20px;"><i class="bi bi-align-start"></i><b style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #000000;"> Best Popular Choice</b></p>

                                    </div>
                                    <div class="col-lg-3 pc ">
                                        <div class="price" style="background: #e6e6e6;margin-top:45px; border-radius: 25px;text-align:center;">
                                            <b style=" font-style: normal;font-weight: 700;font-size: 43.9194px;line-height: 66px;color: #555555;">
                                                $285
                                            </b>
                                            <span style="font-style: normal;font-weight: 400;font-size: 16.4698px;line-height: 25px;width: 85.09px;height: 24.7px;color: #4D4D4D;">
                                                +(6% vat)
                                            </span>
                                            <br>
                                            <small style="font-weight: 500;font-size: 12.8098px;line-height: 19px;color: #7B7B7B;padding-top: 5px;">
                                                Get the top rated hotels on the best price comparing to any other websites
                                            </small>
                                            <br>
                                            <a href="#" class="btn btn-danger mt-2" style="background: #FF3300;border-radius: 13.7248px;">
                                                Purchase Package
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

                    <div class="tab-content clearfix container">
                        <div class="tab-pane active" id="33a">
                            <div class="result" style="background: #f5f5f5; border: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-lg-3 p-4 ">
                                        <img src="images/guide/g2.jpeg" style="box-shadow: 0px 4px 4px rgba(118, 118, 118, 0.25);border-radius: 16px; padding: 0;height:250px;margin-left:20px;" />
                                        <a href="guideProfile.php" class="btn btn-danger me-2 ms-3" style="background: #FF3300;border-radius: 13.7248px;margin-top:20px;padding-right:60px;padding-left:60px;text-align:center;margin-left:20px;">
                                            See Profile
                                        </a>

                                    </div>

                                    <div class="col-lg-6 details">


                                        <a class="btn btn-danger me-2 ms-3" style="width: 104.31px;height: 36.6px;background: #FF3300;border-radius: 13.7248px;margin-left:20px;margin-top:20px;">
                                            4.9
                                        </a>

                                        <b style="font-weight: 600;font-size: 16.4698px;line-height: 25px;">
                                            very good
                                        </b><span style="font-weight: 400;font-size:14px;line-height: 20px;color: #000000;">(24 Reviews)</span>
                                        <hr>

                                        <p style="margin-top:20px;margin-left:20px;"><small style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #484848;"><i class="bi bi-geo-alt"></i>
                                                Bus, AC Bus/ Micro( Cox-Tek-Cox)
                                                Ship Ticket-KEARI Cruise (Pearl Lounge)
                                                Local Van(St. Martin)
                                            </small></p>
                                        <hr>

                                        <p style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #484848;margin-top:20px;margin-left:20px;"><i class="bi bi-star-fill"></i> Twin share accommodation AC-Cox’s BazarNon AC- ST. Martin
                                            Breakfast, Lunch, Dinner (1 special lunch in Keari Cruise and Dine)</p>
                                        <hr>

                                        <p style="margin-top:20px;margin-left:20px;"><i class="bi bi-align-start"></i><b style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #000000;"> Best Popular Choice</b></p>

                                    </div>
                                    <div class="col-lg-3 pc ">
                                        <div class="price" style="background: #e6e6e6;margin-top:45px; border-radius: 25px;text-align:center;">
                                            <b style=" font-style: normal;font-weight: 700;font-size: 43.9194px;line-height: 66px;color: #555555;">
                                                $285
                                            </b>
                                            <span style="font-style: normal;font-weight: 400;font-size: 16.4698px;line-height: 25px;width: 85.09px;height: 24.7px;color: #4D4D4D;">
                                                +(6% vat)
                                            </span>
                                            <br>
                                            <small style="font-weight: 500;font-size: 12.8098px;line-height: 19px;color: #7B7B7B;padding-top: 5px;">
                                                Get the top rated hotels on the best price comparing to any other websites
                                            </small>
                                            <br>
                                            <a href="#" class="btn btn-danger mt-2" style="background: #FF3300;border-radius: 13.7248px;">
                                                Purchase Package
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>

                    <div class="tab-content clearfix container">
                        <div class="tab-pane active" id="33a">
                            <div class="result" style="background: #f5f5f5; border: 1px solid #CCCCCC;">
                                <div class="row">
                                    <div class="col-lg-3 p-4 ">
                                        <img src="images/guide/g3.jpeg" style="box-shadow: 0px 4px 4px rgba(118, 118, 118, 0.25);border-radius: 16px; padding: 0;height:250px;margin-left:20px;" />
                                        <a href="guideProfile.php" class="btn btn-danger me-2 ms-3" style="background: #FF3300;border-radius: 13.7248px;margin-top:20px;padding-right:60px;padding-left:60px;text-align:center;margin-left:20px;">
                                            See Profile
                                        </a>

                                    </div>

                                    <div class="col-lg-6 details">


                                        <a class="btn btn-danger me-2 ms-3" style="width: 104.31px;height: 36.6px;background: #FF3300;border-radius: 13.7248px;margin-left:20px;margin-top:20px;">
                                            4.9
                                        </a>

                                        <b style="font-weight: 600;font-size: 16.4698px;line-height: 25px;">
                                            very good
                                        </b><span style="font-weight: 400;font-size:14px;line-height: 20px;color: #000000;">(24 Reviews)</span>
                                        <hr>

                                        <p style="margin-top:20px;margin-left:20px;"><small style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #484848;"><i class="bi bi-geo-alt"></i>
                                                Bus, AC Bus/ Micro( Cox-Tek-Cox)
                                                Ship Ticket-KEARI Cruise (Pearl Lounge)
                                                Local Van(St. Martin)
                                            </small></p>
                                        <hr>

                                        <p style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #484848;margin-top:20px;margin-left:20px;"><i class="bi bi-star-fill"></i> Twin share accommodation AC-Cox’s BazarNon AC- ST. Martin
                                            Breakfast, Lunch, Dinner (1 special lunch in Keari Cruise and Dine)</p>
                                        <hr>

                                        <p style="margin-top:20px;margin-left:20px;"><i class="bi bi-align-start"></i><b style="font-weight: 500;font-size: 16.4698px;line-height: 25px;color: #000000;"> Best Popular Choice</b></p>

                                    </div>
                                    <div class="col-lg-3 pc ">
                                        <div class="price" style="background: #e6e6e6;margin-top:45px; border-radius: 25px;text-align:center;">
                                            <b style=" font-style: normal;font-weight: 700;font-size: 43.9194px;line-height: 66px;color: #555555;">
                                                $285
                                            </b>
                                            <span style="font-style: normal;font-weight: 400;font-size: 16.4698px;line-height: 25px;width: 85.09px;height: 24.7px;color: #4D4D4D;">
                                                +(6% vat)
                                            </span>
                                            <br>
                                            <small style="font-weight: 500;font-size: 12.8098px;line-height: 19px;color: #7B7B7B;padding-top: 5px;">
                                                Get the top rated hotels on the best price comparing to any other websites
                                            </small>
                                            <br>
                                            <a href="#" class="btn btn-danger mt-2" style="background: #FF3300;border-radius: 13.7248px;">
                                                Purchase Package
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><br>



                    <div class="col-md-12 text-center">
                        <button style="background-color:#FF3300;color:white;padding-left:50px;padding-right:50px;margin-top:20px;" type="button" class="btn ">See More</button>
                    </div><br>

                </div>

                <!-- rooms -->
                <div class="tab-pane active" id="22a">
                    <div class="container">


                        <section class="rooms mt50">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="lined-heading" style="font-size: 25px;font-weight:bold;"><span>Guests Favorite Hotel Rooms</span></h2>
                                    </div>


                                    <?php
                                    $q = $pdo->prepare("SELECT * FROM room WHERE room_show_on_home=? ORDER BY room_id ASC");
                                    $q->execute(['Yes']);
                                    $res = $q->fetchAll();
                                    foreach ($res as $row) {
                                    ?>
                                        <div class="col-sm-4">
                                            <div class="room-thumb"> <img src="uploads/<?php echo $row['room_featured_photo']; ?>" alt="room 1" class="img-responsive" />
                                                <div class="mask">
                                                    <div class="main">
                                                        <h5><?php echo $row['room_name']; ?></h5>
                                                        <div class="price">$ <?php echo $row['room_price']; ?><span>a night</span></div>
                                                    </div>
                                                    <div class="content">
                                                        <p><?php echo $row['room_short_description']; ?></p>
                                                        <div class="row">
                                                            <?php
                                                            $r = $pdo->prepare("SELECT * 
                                                                    FROM room_room_feature t1
                                                                    JOIN room_feature t2
                                                                    ON t1.room_feature_id = t2.room_feature_id
                                                                    WHERE t1.room_id=? 
                                                                    ORDER BY t1.room_id ASC");
                                                            $r->execute([$row['room_id']]);
                                                            $tot = $r->rowCount();
                                                            if ($tot % 2 == 0) {
                                                                $left = $tot / 2;
                                                                $right = $left;
                                                            } else {
                                                                $left = ceil($tot / 2);
                                                                $right = $left - 1;
                                                            }

                                                            $left_arr_name = array();
                                                            $left_arr_icon = array();
                                                            $right_arr_name = array();
                                                            $right_arr_icon = array();

                                                            $i = 0;
                                                            $res1 = $r->fetchAll();
                                                            foreach ($res1 as $row1) {
                                                                $i++;
                                                                if ($i <= $left) {
                                                                    $left_arr_name[] = $row1['room_feature_name'];
                                                                    $left_arr_icon[] = $row1['room_feature_icon'];
                                                                } else {
                                                                    $right_arr_name[] = $row1['room_feature_name'];
                                                                    $right_arr_icon[] = $row1['room_feature_icon'];
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-xs-6">
                                                                <ul class="list-unstyled">
                                                                    <?php
                                                                    for ($i = 0; $i < count($left_arr_name); $i++) {
                                                                    ?><li><i class="<?php echo $left_arr_icon[$i]; ?>"></i> <?php echo $left_arr_name[$i]; ?></li><?php
                                                                                                                                                                }
                                                                                                                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <ul class="list-unstyled">
                                                                    <?php
                                                                    for ($i = 0; $i < count($right_arr_name); $i++) {
                                                                    ?><li><i class="<?php echo $right_arr_icon[$i]; ?>"></i> <?php echo $right_arr_name[$i]; ?></li><?php
                                                                                                                                                                }
                                                                                                                                                                    ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <a href="room.php?id=<?php echo $row['room_id']; ?>" class="btn btn-primary btn-block">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                        </section>

                        <!-- 
                        <section class="customer-logos slider">


                            <?php
                            $q = $pdo->prepare("SELECT * FROM room WHERE room_show_on_home=? ORDER BY room_id ASC");
                            $q->execute(['Yes']);
                            $res = $q->fetchAll();
                            foreach ($res as $row) {
                            ?>


                                <div class="slide col-12">
                                    <a href="./hotelDetails.php?id=' . $id . ' && details_only=1" class="text-decoration-none text-dark">
                                    <img src="uploads/<?php echo $row['room_featured_photo']; ?>" alt="room 1" class="img-responsive" />
                                        <div class="row caption">
                                            <div class="col-sm-8">
                                                <b>
                                                <div class="main">
                                                        <h5><?php echo $row['room_name']; ?></h5>
                                                        <div class="price">$ <?php echo $row['room_price']; ?><span>a night</span></div>
                                                    </div>
                                                </b>
                                            </div>
                                            <div class="col-sm-4" style="font-size: 7px;">
                                                <i class="fas fa-star-half-alt text-danger"></i>
                                                <div class="row">
                                                            <?php
                                                            $r = $pdo->prepare("SELECT * 
                                                                    FROM room_room_feature t1
                                                                    JOIN room_feature t2
                                                                    ON t1.room_feature_id = t2.room_feature_id
                                                                    WHERE t1.room_id=? 
                                                                    ORDER BY t1.room_id ASC");
                                                            $r->execute([$row['room_id']]);
                                                            $tot = $r->rowCount();
                                                            if ($tot % 2 == 0) {
                                                                $left = $tot / 2;
                                                                $right = $left;
                                                            } else {
                                                                $left = ceil($tot / 2);
                                                                $right = $left - 1;
                                                            }

                                                            $left_arr_name = array();
                                                            $left_arr_icon = array();
                                                            $right_arr_name = array();
                                                            $right_arr_icon = array();

                                                            $i = 0;
                                                            $res1 = $r->fetchAll();
                                                            foreach ($res1 as $row1) {
                                                                $i++;
                                                                if ($i <= $left) {
                                                                    $left_arr_name[] = $row1['room_feature_name'];
                                                                    $left_arr_icon[] = $row1['room_feature_icon'];
                                                                } else {
                                                                    $right_arr_name[] = $row1['room_feature_name'];
                                                                    $right_arr_icon[] = $row1['room_feature_icon'];
                                                                }
                                                            }
                                                            ?>
                                                            <div class="col-xs-6">
                                                                <ul class="list-unstyled">
                                                                    <?php
                                                                    for ($i = 0; $i < count($left_arr_name); $i++) {
                                                                    ?><li><i class="<?php echo $left_arr_icon[$i]; ?>"></i> <?php echo $left_arr_name[$i]; ?></li><?php
                                                                                                                                                                }
                                                                                                                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <ul class="list-unstyled">
                                                                    <?php
                                                                    for ($i = 0; $i < count($right_arr_name); $i++) {
                                                                    ?><li><i class="<?php echo $right_arr_icon[$i]; ?>"></i> <?php echo $right_arr_name[$i]; ?></li><?php
                                                                                                                                                                }
                                                                                                                                                                    ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                            </div>

                                            <a href="room.php?id=<?php echo $row['room_id']; ?>" class="btn btn-primary btn-block">Read More</a>

                                        </div>
                                    </a>
                                </div>

                            <?php
                            }
                            ?>


                        </section> -->
                    </div>
                </div>

    </section>

    <!-- looking end -->



    <!-- connect with js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <!-- <script src="./asset/js/bootstrap.min.js"></script> -->
    <script src="./asset/js/all.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="./asset/js/slick.js"></script>
    <script src="./asset/js/includehtml.js"></script>
    <script src="./asset/js/custom.js"></script>
    <script type="text/javascript">
        $('.slider').slick({
            arrows: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,

            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        arrows: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>

    <?php require_once('footer.php'); ?>