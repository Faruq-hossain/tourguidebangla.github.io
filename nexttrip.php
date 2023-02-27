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
        .spen-slide .slick-prev:before,
        .spen-slide .slick-next:before {
            font-size: 30px;
        }

        .spen-slide .slick-prev::before {
            color: #847474;
        }

        .spen-slide .slick-next::before {
            color: #ED7D2B;
        }

        .slick-prev:before {
            color: black;
            font-size: 30px;
        }

        .slick-next::before {
            color: #ED7D2B;
            font-size: 30px;
        }
    </style>
</head>

<body>


    <!-- main body start  -->
    <!-- header section start  -->


    <!-- looking for section start  -->
    <section class="container mb-5">
        <div class="col-sm-12">
            <h2 class="lined-heading" style="font-size: 25px;font-weight:bold;"><span>Looking for some place for <br> your next trip?</span></h2>
        </div>
        <div class="row p-3 mb-3">
            <div class="col-lg-12 fw-normal" style="text-align:center;">
                <p>
                    Start planning the trip of your dreams with the help of 100+ hotels, tour, host, transport on
                    findtel official.
                </p>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-4">
                <div id="carouselExampleDark" class="carousel carousel-light slide mt-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10">
                            <img src="./asset/image/content/l1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>


                <div class="trip-part" style="width: 85%; margin-left: auto;">
                    <div class="row trip">
                        <div class="col-lg-12">
                            <div>
                                <h1 class="fw-bold" style="margin-bottom:20px;font-size:30px;font-weight:bold;">Dhaka</h1>
                                <small>
                                    <p> Embrace the great outdoors. Spend some quality time with Mother Nature for a<br> (literal)
                                        breath of
                                        fresh air.</p>
                                </small><br>
                                <a href="http://localhost/tourhotel/dhaka_location_details.php" class="btn">Exploree-></a>

                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <!-- <img src="./asset/image/content/spend.png" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="carouselExampleDark" class="carousel carousel-light slide mt-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="./asset/image/content/l2.png" class="d-block w-100" alt="...">
                                    <!-- <div class="carousel-caption-secondary d-none d-md-block">
                                        <h5 class="fw-bold">Kuakata</h5>
                                        <small>
                                            Start planning the trip of your dreams with the help of 100+ hotels, tour,
                                            host,
                                            transport on findtel official.
                                        </small><br>
                                        <a href="./kuakata_location_details.php" class="btn btn-warning mt-3 btn-dhaka">
                                            Explore
                                        </a>
                                    </div> -->
                                </div>
                            </div>

                            <div class="trip3-part" style="width: 85%; margin-left: auto;">
                                <div class="row trip3">
                                    <div class="col-lg-12">
                                        <div>
                                            <h1 class="fw-bold" style="margin-bottom:20px;font-size:30px;font-weight:bold;">Kuakata</h1>
                                            <small>
                                                <p> Start planning the trip of your dreams with the help of 100+ hotels, tour,<br>
                                                    host,
                                                    transport on findtel official.</p>
                                            </small><br>
                                            <button class="btn btn-warning mt-3 btn-spend">
                                                Explore
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <!-- <img src="./asset/image/content/spend.png" alt=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div id="carouselExampleDark" class="carousel carousel-light slide mt-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="./asset/image/content/l4.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="trip2-part" style="width: 85%; margin-left: auto;">
                            <div class="row trip2">
                                <div class="col-lg-12">
                                    <div>
                                        <h1 class="fw-bold" style="margin-bottom:20px;font-size:30px;font-weight:bold;">Saint Martin</h1>
                                        <small>
                                            <p> Start planning the trip of your dreams with the help of 100+ hotels, tour,<br>
                                                host,
                                                transport on findtel official.</p>
                                        </small><br>
                                        <button class="btn btn-warning mt-3 btn-spend">
                                            Explore
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <!-- <img src="./asset/image/content/spend.png" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div id="carouselExampleDark" class="carousel carousel-light slide mt-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="./asset/image/content/l3.png" class="d-block w-100" alt="...">

                                </div>
                            </div>

                            <div class="trip4-part" style="width: 85%; margin-left: auto;">
                                <div class="row trip4">
                                    <div class="col-lg-12">
                                        <div>
                                            <h1 class="fw-bold" style="margin-bottom:20px;font-size:30px;font-weight:bold;">Jaflong</h1>
                                            <small>
                                                <p> Start planning the trip of your dreams with the help of 100+ hotels, tour,<br>
                                                    host,
                                                    transport on findtel official.</p>
                                            </small><br>
                                            <button class="btn btn-warning mt-3 btn-spend">
                                                Explore
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <!-- <img src="./asset/image/content/spend.png" alt=""> -->
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="carouselExampleDark" class="carousel carousel-light slide mt-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="./asset/image/content/l6.png" class="d-block w-100" alt="...">

                                </div>
                            </div>
                        </div>


                        <div class="trip5-part" style="width: 85%; margin-left: auto;">
                            <div class="row trip5">
                                <div class="col-lg-12">
                                    <div>
                                        <h1 class="fw-bold" style="margin-bottom:20px;font-size:30px;font-weight:bold;">Chattogram</h1>
                                        <small>
                                            <p> Start planning the trip of your dreams with the help of 100+ hotels, tour,<br>
                                                host,
                                                transport on findtel official.</p>
                                        </small><br>
                                        <button class="btn btn-warning mt-3 btn-spend">
                                            Explore
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0">
                                    <!-- <img src="./asset/image/content/spend.png" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- looking for section end  -->



    <!-- main body end  -->

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