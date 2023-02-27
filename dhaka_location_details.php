<?php require_once('header.php'); ?>

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
    <!-- <link rel="stylesheet" href="./asset/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./asset/css/themify-icons.css">

    <link rel="stylesheet" href="./asset/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/header.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/css/custom.css">
</head>

<body>

    <!-- main body start  -->
    <section class="container mt-5">
        <h4 class="fw-bolder" style="font-size: 30px;margin-top:30px;">
            Dhaka
        </h4>

        <div class="row mb-4" style="height: 450px;margin-top:30px;">
            <div class="col-lg-8 p-1" style="height: 100%">
                <img src="./asset/image/content/Dhaka 1.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="col-lg-4 text-center p-1" style="height: 10%;">
                <img src="./asset/image/content/Dhaka 2.jpg" alt="" width="100%" height="50%" class="pb-1 pt-1">
                <img src="./asset/image/content/Dhaka 3.jpg" alt="" width="100%" height="50%">
            </div>
        </div>
    </section><br><br><br><br>

    <!-- details and booking start -->
    <section class="container mb-5">
        <div class="row p-3">
            <div class="col-lg-8"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <p class="text-justify">
                    Dhaka, also spelled Dacca, city and capital of Bangladesh. It is located just north of the Buriganga River, a channel of the Dhaleswari River, in the south-central part of the country. Dhaka is Bangladesh’s most populous city and is one of the largest metropolises in South Asia. Pop. (2001) city, 5,333,571; metro. area, 9,672,763; (2011) city, 7,033,075; metro. area, 14,543,124.
                    <br><br>
                    Dhaka’s name is said to refer to the dhak tree, once common in the area, or to Dhakeshwari (“The Hidden Goddess”), whose shrine is located in the western part of the city. Although the city’s history can be traced to the 1st millennium CE, the city did not rise to prominence until the 17th century, when it served as the capital of the Muslim Mughal dynasty of Bengal province (1608–39 and 1660–1704). It was the centre of a flourishing sea trade, attracting English, French, Armenian, Portuguese, and Dutch traders.
                    <br><br>
                    Historic buildings of the Muslim period include Lal Bagh fort (1678) and its tomb of Bibi Pari (died 1684), wife of a governor of Bengal; the Bara Katra (great caravansary, a building historically used for sheltering caravans and other travelers; 1664); the Chhota Katra (small caravansary; 1663); and Husayni Dalan (a religious monument of the Shīʿite branch of Islam; 1642). Other 17th-century buildings include the Hindu Dhakeshwari temple and Tejgaon church, built by the Portuguese.
                    <br><br>
                    With the removal of the provincial capital to Murshidabad (1704) and the weakening of the muslin industry, Dhaka entered a period of decline. It passed under British control in 1765 and was constituted a municipality in 1864, but it continued to lose prominence until it was designated the capital of Eastern Bengal and Assam province (1905–12). During the early 20th century Dhaka served as a commercial centre and seat of learning. Following the end of British rule, when the region became a part of Pakistan, it was named the capital of East Bengal province (1947) and of East Pakistan (1956). Dhaka suffered heavy damage during the war of independence in 1971 but emerged as the capital of Bangladesh.
                </p>
            </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

            <div class="col-lg-4 border pt-3" style="border-radius: 10px; height: 100%;">
                <h4 class="fw-bold" style="font-size:25px;">
                    Important Place
                </h4>
                <div class="p-3">
                    <p>
                        1. Ahsan Monzil
                    </p>
                    <p>
                        2. Lalbagh Fort
                    </p>
                    <p>
                        3. Sadarghat
                    </p>
                    <p>
                        4. Liberation War
                    </p>
                    <p>
                        5. Parliament Building of Bangladesh
                    </p>
                </div>
            </div>
        </div>
    </section><br><br><br><br>

    <!-- details and booking end -->


    <!-- subscriber start  -->
    <section class="container mt-2 ">
        <div class="subs">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h1 class="text-center fw-extrabold" style="color: white;">
                        Subscribe and get exclusive deals & offer
                    </h1>

                    <?php
                    $q = $pdo->prepare("SELECT * FROM settings WHERE id=?");
                    $q->execute([1]);
                    $res = $q->fetchAll();
                    foreach ($res as $row) {
                        $footer_address = $row['footer_address'];
                        $footer_phone = $row['footer_phone'];
                        $footer_email = $row['footer_email'];
                        $footer_website = $row['footer_website'];
                        $footer_copyright = $row['footer_copyright'];
                        $footer_how_many_post = $row['footer_how_many_post'];
                    }
                    ?>
                    <?php
                    if (isset($_POST['form_subscriber'])) {
                        $valid = 1;
                        if ($_POST['s_name'] == '') {
                            $valid = 0;
                            $error_message .= 'Name can not be empty\n';
                        }
                        if ($_POST['s_email'] == '') {
                            $valid = 0;
                            $error_message .= 'Email can not be empty\n';
                        }

                        if ($valid == 1) {
                            $hash = md5(time());

                            $q = $pdo->prepare("INSERT INTO subscriber (
        s_name,
        s_email,
        s_hash,
        s_active
      ) 
      VALUES (?,?,?,?)");
                            $q->execute([
                                $_POST['s_name'],
                                $_POST['s_email'],
                                $hash,
                                0
                            ]);

                            require_once('mail/class.phpmailer.php');
                            $mail = new PHPMailer();
                            $mail->CharSet = 'UTF-8';

                            try {

                                $mail->SMTPSecure = "ssl";
                                $mail->IsSMTP();
                                $mail->SMTPAuth   = true;
                                $mail->Host       = 'business32.web-hosting.com';
                                $mail->Port       = '465';
                                $mail->Username   = 'usa@commercialcleaningjanitorialserviceslosangeles.com';
                                $mail->Password   = '63@n6#3)W.G%';

                                $mail->addReplyTo('noreply@yourwebsite.com');
                                $mail->setFrom('usa@commercialcleaningjanitorialserviceslosangeles.com');
                                $mail->addAddress($_POST['s_email']);


                                $mail->isHTML(true);
                                $mail->Subject = 'Subscription Confirmation';

                                $verify_link = '<a href="' . SITE_URL . 'verify_subscriber.php?email=' . $_POST['s_email'] . '&hash=' . $hash . '">' . SITE_URL . 'verify_subscriber.php?email=' . $_POST['s_email'] . '&hash=' . $hash . '</a>';

                                $mail->Body = 'Please click on the link below to confirm the subscription:' . $verify_link;
                                $mail->send();

                                $success_message = 'Your subscription is completed. Please check your email address to follow the process to confirm the subscription.';
                            } catch (Exception $e) {
                                echo 'Message could not be sent.';
                                echo 'Mailer Error: ' . $mail->ErrorInfo;
                            }
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
                    <footer>
                        <div class="container">
                            <div class="row">

                                <div class="col-md-3 col-sm-3" style="margin-top:10px;">
                                    
                                    <form role="form" action="" method="post">
                                        <div class="form-group">
                                            <input name="s_name" type="text" value="" class="form-control" placeholder="Full Name">
                                            <input name="s_email" type="text" value="" class="form-control" placeholder="Email Address">
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-black btn-block" name="form_subscriber">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </footer>

                    <!--Start of Tawk.to Script-->
                    <script type="text/javascript">
                        var Tawk_API = Tawk_API || {},
                            Tawk_LoadStart = new Date();
                        (function() {
                            var s1 = document.createElement("script"),
                                s0 = document.getElementsByTagName("script")[0];
                            s1.async = true;
                            s1.src = 'https://embed.tawk.to/6373dda5daff0e1306d791e0/1ghu9jk8k';
                            s1.charset = 'UTF-8';
                            s1.setAttribute('crossorigin', '*');
                            s0.parentNode.insertBefore(s1, s0);
                        })();
                    </script>
                    <!--End of Tawk.to Script-->

                    <!-- Go-top Button -->
                    <div style="margin-bottom: 60px;margin-right: -10px;" id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

                    <div class="chat_icon">
                        <a href="chatapp/login.php"><i class="fa fa-comment"></i></a>
                    </div>




                    <!-- Disable Mouse Right Click, Cut, Copy & Paste-->
                    <!-- <script type="text/javascript">
  $(document).ready(function() {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function(e) {
      e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu", function(e) {
      return false;
    });
  });
</script> -->


                    <script>
                        $(document).on('submit', '#stripe_form', function() {
                            $('#submit-button').prop("disabled", true);
                            $("#msg-container").hide();
                            Stripe.card.createToken({
                                number: $('.card-number').val(),
                                cvc: $('.card-cvc').val(),
                                exp_month: $('.card-expiry-month').val(),
                                exp_year: $('.card-expiry-year').val()
                                // name: $('.card-holder-name').val()
                            }, stripeResponseHandler);
                            return false;
                        });
                        Stripe.setPublishableKey('pk_test_0SwMWadgu8DwmEcPdUPRsZ7b');

                        function stripeResponseHandler(status, response) {
                            if (response.error) {
                                $('#submit-button').prop("disabled", false);
                                $("#msg-container").html('<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
                                $("#msg-container").show();
                            } else {
                                var form$ = $("#stripe_form");
                                var token = response['id'];
                                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                                form$.get(0).submit();
                            }
                        }
                    </script>

</body>

</html>
</div>
<div class="col-lg-3"></div>
</div>
</div>


</section>
<!-- subscriber end  -->

<!-- main body end  -->
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
<!--footerrt  -->
<?php require_once('footer.php'); ?>