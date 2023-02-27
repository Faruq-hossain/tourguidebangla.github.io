<?php require_once('header.php'); ?>

<?php
$success_message = '';
if (isset($_POST['form_registration'])) {

  $hash = md5(time());

  $q = $pdo->prepare("INSERT INTO customer (
        cust_name,
        cust_phone,
        cust_email,
        cust_password,
        cust_hash,
        cust_active
      ) 
      VALUES (?,?,?,?,?,?)");
  $q->execute([
    $_POST['cust_name'],
    $_POST['cust_phone'],
    $_POST['cust_email'],
    md5($_POST['cust_password']),
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
    $mail->Host       = 'mail.tourguidebangla.com';
    $mail->Port       = '587';
    $mail->Username   = 'tour@tourguidebangla.com';
    $mail->Password   = 'tourguidebangla55@';

    $mail->addReplyTo('noreply@yourwebsite.com');
    $mail->setFrom('tour@tourguidebangla.com');
    $mail->addAddress($_POST['cust_email']);


    $mail->isHTML(true);
    $mail->Subject = 'Registration Confirmation';

    $verify_link = '<a href="http://localhost/tourhotel/verify_registration.php?email=' . $_POST['cust_email'] . '&hash=' . $hash . '">http://localhost/tourhotel/registration.php?email=' . $_POST['cust_email'] . '&hash=' . $hash . '</a>';

    $mail->Body = 'Please click on the link below to confirm the registration:' . $verify_link;
    $mail->send();

    // $success_message = 'Your registration is completed. Please check your email address to follow the process to confirm your registration.';
    $success_message = 'Your registration is completed. Please Login Now.';
  } catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
}
?>

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
              <li><a href="index.html">Home</a></li>
              <li class="active">Registration</li>
            </ol>
            <h1>Registration</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <!-- Contact form -->
    <section id="contact-form" class="mt50">
      <div class="col-md-7">


        <?php if ($success_message) {
          echo $success_message;
        } ?>

        <form class="clearfix mt50" method="post" action="">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name"><span class="required">*</span> Name</label>
                <input required placeholder="Name" name="cust_name" type="text" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" required> Phone Number</label>
                <input required placeholder="Number" name="cust_phone" type="number" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name"><span class="required" required>*</span> Email Address</label>
                <input required type="email" placeholder="example@gmail.com" name="cust_email" type="text" class="form-control" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name"><span class="required" required>*</span> Password</label>
                <input required placeholder="Password" name="cust_password" type="password" class="form-control" value="">
              </div>
            </div>
          </div>
          <button type="submit" class="btn  btn-lg btn-primary" name="form_registration">Regisater Now!</button>
        </form>




      </div>
    </section>
  </div>
</div>


<?php require_once('footer.php'); ?>