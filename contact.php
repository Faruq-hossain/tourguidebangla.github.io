<?php require_once('header.php'); ?>
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
              <li class="active">Contact</li>
            </ol>
            <h1>Contact</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">

    <!-- Contact details -->
    <section class="contact-details">
      <div class="col-md-5">
        <h2 class="lined-heading  mt50"><span>Address</span></h2>
        <!-- Panel -->
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-star"></i> <strong>Tour Guid Bangla</strong></div>
          </div>
          <div class="panel-body">
            <address>
              795 Las Palmas<br>
              Spain, CA 94107<br>
              <abbr title="Phone">P:</abbr> <a href="#"><?php echo $footer_phone; ?></a><br>
              <abbr title="Email">E:</abbr> <a href="#"><?php echo $footer_email; ?></a><br>
              <abbr title="Website">W:</abbr> <a href=""><?php echo $footer_website; ?></a><br>
            </address>
          </div>
        </div>
        <!-- GMap -->
        <div class="mt30">
          <div id="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact form -->
    <section id="contact-form" class="mt50">
      <div class="col-md-7">
        <h2 class="lined-heading"><span>Send a message</span></h2>
        <p>Pellentesque facilisis justo sed enim facilisis luctus. Duis pretium nibh at lectus tempus, vel lacinia quam adipiscing. Nullam luctus congue mattis.</p>
        <form class="clearfix mt50" role="form" method="post" action="https://www.slashdown.net/starhotel-html/php/contact.php" name="contactform" id="contactform">
          <!-- Error message -->
          <div id="message"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" accesskey="U"><span class="required">*</span> Your Name</label>
                <input name="name" type="text" id="name" class="form-control" value="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
                <input name="email" type="text" id="email" value="" class="form-control" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="subject" accesskey="S">Subject</label>
            <select name="subject" id="subject" class="form-control">
              <option value="Booking">Booking</option>
              <option value="a Room">Room</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comments" accesskey="C"><span class="required">*</span> Your message</label>
            <textarea name="comments" rows="9" id="comments" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label><span class="required">*</span> Spam Filter: &nbsp;&nbsp;&nbsp;1 + 1 =</label>
            <input name="verify" type="text" id="verify" value="" class="form-control" placeholder="Please enter the outcome" />
          </div>
          <button type="submit" class="btn  btn-lg btn-primary">Send message</button>
        </form>
      </div>
    </section>
  </div>
</div>


<?php require_once('footer.php'); ?>