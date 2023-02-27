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
      <div class="col-md-3 col-sm-3">
        <h4>About Tour Guide Bangla</h4>
        <p>Suspendisse sed sollicitudin nisl, at dignissim libero. Sed porta tincidunt ipsum, vel volutpat. <br>
          <br>
          Nunc ut fringilla urna. Cras vel adipiscing ipsum. Integer dignissim nisl eu lacus interdum facilisis. Aliquam erat volutpat. Nulla semper vitae felis vitae dapibus.
        </p>
      </div>
      <div class="col-md-3 col-sm-3">
        <h4>Recieve our newsletter</h4>
        <p>Suspendisse sed sollicitudin nisl, at dignissim libero. Sed porta tincidunt ipsum, vel volutpa!</p>

        <form role="form" action="" method="post">
          <div class="form-group">
            <input name="s_name" type="text" value="" class="form-control" placeholder="Full Name">
            <input name="s_email" type="text" value="" class="form-control" placeholder="Email Address">
          </div>
          <button type="submit" class="btn btn-lg btn-black btn-block" name="form_subscriber">Submit</button>
        </form>

      </div>

      <!-- Hotel blog -->
      <div class="col-md-2 col-sm-2">
        <h4>Hotel blog</h4>
        <ul>

          <?php
          $i = 0;
          $q = $pdo->prepare("SELECT * FROM post ORDER BY post_id DESC");
          $q->execute();
          $res = $q->fetchAll();
          foreach ($res as $row) {
            $i++;
            if ($i > $footer_how_many_post) {
              break;
            }
          ?>
            <li>
              <article>
                <a href="blog-detail.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?><br><?php echo $row['post_day'] . '-' . $row['post_month'] . '-' . $row['post_year']; ?></a>
              </article>
            </li>
          <?php
          }
          ?>



        </ul>
      </div>

      <!-- Tour blog -->
      <div class="col-md-2 col-sm-2">
        <h4>Tour blog</h4>
        <ul>

          <?php
          $i = 0;
          $q = $pdo->prepare("SELECT * FROM post_tour ORDER BY post_id DESC");
          $q->execute();
          $res = $q->fetchAll();
          foreach ($res as $row) {
            $i++;
            if ($i > $footer_how_many_post) {
              break;
            }
          ?>
            <li>
              <article>
                <a href="blog-detail.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?><br><?php echo $row['post_day'] . '-' . $row['post_month'] . '-' . $row['post_year']; ?></a>
              </article>
            </li>
          <?php
          }
          ?>



        </ul>
      </div>



      <div class="col-md-2 col-sm-2">
        <h4>Address</h4>
        <address>
          <?php echo nl2br($footer_address); ?><br>
          <abbr title="Phone">P:</abbr> <?php echo $footer_phone; ?><br>
          <abbr title="Email">E:</abbr> <?php echo $footer_email; ?><br>
          <abbr title="Website">W:</abbr> <?php echo $footer_website; ?><br>
        </address>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-6"> <?php echo $footer_copyright; ?> </div>
        <div class="col-xs-6 text-right">
          <ul>
            <li><a href="http://localhost/tourhotel/contact.php">Contact</a></li>
          </ul>
        </div>
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


<!-- find ill help instanc -->
<div class="chat_icon2">

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }

    .modal-body {
      padding: 2px 16px;
    }

    .modal-footer {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
    }
  </style>
  </head>

  <body>


    <!-- Trigger/Open The Modal -->
    <button id="myBtn" style="color:white;font-size:15px; background:#000;padding-top:5px;padding-left:5px;padding-bottom:5px;padding-right:5px;">Help desk 16263</button>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="background-color:black">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Modal Header</h2>
        </div>
        <div class="modal-body" style="background-color:black">
          <div class="w3-bar w3-black" style="background-color:black;text-align:center;font-size:20px;">
            <button class="w3-bar-item w3-button tablink w3-red" onclick="openCity(event,'London')">Doctors |</button>
            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Hospital </button>
            <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Add Doctor</button>
          </div><br>

          <div id="London" class="w3-container w3-border city">
            <!-- !PAGE CONTENT! -->

            <!-- <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px"> -->

              <!-- First Photo Grid-->
              <div class="w3-row-padding w3-padding-16 w3-center" id="food">
                <div class="w3-quarter">
                  <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                  <h3>Dr. Mohammad Hasan Tarik</h3>
                  <ul>
                    <p>
                      Specialty – Medicine
                    </p>
                    <p>
                      Degree – MBBS, FCPS (Medicine)
                    </p>
                    <p>
                      Designation: Professor
                    </p>
                    <p>
                      Department: Medicine
                    </p>
                    <p>
                      Institute: Rajshahi Medical College & Hospital
                    </p>
                    <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                    <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                    <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                    <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                    <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                  </ul>
                </div>
                <div class="w3-quarter">
                  <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                  <h3>Dr. Mohammad Hasan Tarik</h3>
                  <ul>
                    <p>
                      Specialty – Medicine
                    </p>
                    <p>
                      Degree – MBBS, FCPS (Medicine)
                    </p>
                    <p>
                      Designation: Professor
                    </p>
                    <p>
                      Department: Medicine
                    </p>
                    <p>
                      Institute: Rajshahi Medical College & Hospital
                    </p>
                    <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                    <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                    <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                    <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                    <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                  </ul>
                </div>

                <div class="w3-quarter">
                  <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                  <h3>Dr. Mohammad Hasan Tarik</h3>
                  <ul>
                    <p>
                      Specialty – Medicine
                    </p>
                    <p>
                      Degree – MBBS, FCPS (Medicine)
                    </p>
                    <p>
                      Designation: Professor
                    </p>
                    <p>
                      Department: Medicine
                    </p>
                    <p>
                      Institute: Rajshahi Medical College & Hospital
                    </p>
                    <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                    <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                    <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                    <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                    <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                  </ul>
                </div>

                <div class="w3-quarter">
                  <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                  <h3>Dr. Mohammad Hasan Tarik</h3>
                  <ul>
                    <p>
                      Specialty – Medicine
                    </p>
                    <p>
                      Degree – MBBS, FCPS (Medicine)
                    </p>
                    <p>
                      Designation: Professor
                    </p>
                    <p>
                      Department: Medicine
                    </p>
                    <p>
                      Institute: Rajshahi Medical College & Hospital
                    </p>
                    <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                    <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                    <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                    <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                    <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                  </ul>
                </div>
              </div>

              <!-- Second Photo Grid-->
              <div class="w3-row-padding w3-padding-16 w3-center">
                <div class="w3-quarter">
                  <img src="/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
                  <h3>All I Need Is a Popsicle</h3>
                  <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>
                <div class="w3-quarter">
                  <img src="/w3images/salmon.jpg" alt="Salmon" style="width:100%">
                  <h3>Salmon For Your Skin</h3>
                  <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>
                <div class="w3-quarter">
                  <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
                  <h3>The Perfect Sandwich, A Real Classic</h3>
                  <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>
                <div class="w3-quarter">
                  <img src="/w3images/croissant.jpg" alt="Croissant" style="width:100%">
                  <h3>Le French</h3>
                  <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                </div>
              </div>

            <!-- </div> -->

            <div id="Paris" class="w3-container w3-border city" style="display:none">
              <!-- <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px"> -->

                <!-- First Photo Grid-->
                <div class="w3-row-padding w3-padding-16 w3-center" id="food">
                  <div class="w3-quarter">
                    <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                    <h3>Dr. Mohammad Hasan Tarik</h3>
                    <ul>
                      <p>
                        Specialty – Medicine
                      </p>
                      <p>
                        Degree – MBBS, FCPS (Medicine)
                      </p>
                      <p>
                        Designation: Professor
                      </p>
                      <p>
                        Department: Medicine
                      </p>
                      <p>
                        Institute: Rajshahi Medical College & Hospital
                      </p>
                      <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                      <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                      <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                      <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                      <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                    </ul>
                  </div>
                  <div class="w3-quarter">
                    <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                    <h3>Dr. Mohammad Hasan Tarik</h3>
                    <ul>
                      <p>
                        Specialty – Medicine
                      </p>
                      <p>
                        Degree – MBBS, FCPS (Medicine)
                      </p>
                      <p>
                        Designation: Professor
                      </p>
                      <p>
                        Department: Medicine
                      </p>
                      <p>
                        Institute: Rajshahi Medical College & Hospital
                      </p>
                      <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                      <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                      <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                      <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                      <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                    </ul>
                  </div>

                  <div class="w3-quarter">
                    <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                    <h3>Dr. Mohammad Hasan Tarik</h3>
                    <ul>
                      <p>
                        Specialty – Medicine
                      </p>
                      <p>
                        Degree – MBBS, FCPS (Medicine)
                      </p>
                      <p>
                        Designation: Professor
                      </p>
                      <p>
                        Department: Medicine
                      </p>
                      <p>
                        Institute: Rajshahi Medical College & Hospital
                      </p>
                      <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                      <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                      <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                      <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                      <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                    </ul>
                  </div>

                  <div class="w3-quarter">
                    <img src="images/doc/d1.jpg" alt="Sandwich" style="width:100%">
                    <h3>Dr. Mohammad Hasan Tarik</h3>
                    <ul>
                      <p>
                        Specialty – Medicine
                      </p>
                      <p>
                        Degree – MBBS, FCPS (Medicine)
                      </p>
                      <p>
                        Designation: Professor
                      </p>
                      <p>
                        Department: Medicine
                      </p>
                      <p>
                        Institute: Rajshahi Medical College & Hospital
                      </p>
                      <p>Visiting Hour: 04:00 PM – 09:00 PM</p>
                      <p>Practice Days: Saturday , Sunday , Monday , Tuesday , Wednesday , Thursday , Friday</p>
                      <p>Appointment Number (For Serial): +880 9613787811,+880 24781211-7,+880 1944447930-34</p>
                      <p>Chamber Name & Address: Popular Diagnostic Center Ltd. (RAJSHAHI Branch)</p>
                      <p>House # 474, Chowdhury Tower, Laxmipur, Rajshahi.</p>

                    </ul>
                  </div>
                </div>

                <!-- Second Photo Grid-->
                <div class="w3-row-padding w3-padding-16 w3-center">
                  <div class="w3-quarter">
                    <img src="/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
                    <h3>All I Need Is a Popsicle</h3>
                    <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                  </div>
                  <div class="w3-quarter">
                    <img src="/w3images/salmon.jpg" alt="Salmon" style="width:100%">
                    <h3>Salmon For Your Skin</h3>
                    <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                  </div>
                  <div class="w3-quarter">
                    <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
                    <h3>The Perfect Sandwich, A Real Classic</h3>
                    <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                  </div>
                  <div class="w3-quarter">
                    <img src="/w3images/croissant.jpg" alt="Croissant" style="width:100%">
                    <h3>Le French</h3>
                    <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
                  </div>
                </div>

              </div>
            <!-- </div> -->

            <div id="Tokyo" class="w3-container w3-border city" style="display:none">
            <h2>Add Doctor</h2>
            <p>Tokyo is the capital of Japan.</p>
          </div>
          </div>

          <script>
            function openCity(evt, cityName) {
              var i, x, tablinks;
              x = document.getElementsByClassName("city");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablink");
              for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " w3-red";
            }
          </script>
        </div>

      </div>

    </div>

    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>


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