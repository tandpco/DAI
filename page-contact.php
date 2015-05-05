<?php
/**
 * Template Name: Contact Page
 *
 * @package DAI
 */

$commentError = $emailError = $nameError = "";

if(isset($_POST['submitted'])) {

  $firstName = trim($_POST['firstName']);
  $lastName  = trim($_POST['lastName']);

  if(trim($_POST['firstName']) === '' && trim($_POST['lastName']) === '') {
    $nameError = 'Please enter your name.';
    $hasError = true;
  } else {
    $name = trim($_POST['firstName']).' '.trim($_POST['lastName']);
  }

  if(trim($_POST['phone']) === '') {
    $phoneError = 'Please enter your phone number.';
    $hasError = true;
  } else {
    $phone = trim($_POST['phone']);
  }

  if(trim($_POST['email']) === '')  {
    $emailError = 'Please enter your email address.';
    $hasError = true;
  } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
    $emailError = 'You entered an invalid email address.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  if(trim($_POST['message']) === '') {
    $commentError = 'Please enter a message.';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['message']));
    } else {
      $comments = trim($_POST['message']);
    }
  }

  if(!isset($hasError)) {
    $emailTo = get_option('tz_email');
    if (!isset($emailTo) || ($emailTo == '') ){
      $emailTo = get_option('admin_email');
    }
    $subject = 'From '.$name;
    $body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nMessage: $comments \n\nZip: $zip";
    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
    wp_mail('[NULL]', $subject, $body, $headers);
    $emailSent = true;

  }

}

get_header(); ?>

  <div class="jumbotron content-break align-center-md contact">
    <h1 class="tr-up">We're eager to hear from you!</h1>
    <p>Simply call, email, or use the form below to get in touch.</p>
  </div>

  <div id="primary" class="content-area">
    <main id="main" class="site-main contact" role="main">
      <div class="container">
        <div class="row col-offset">
          <div class="col col-sm-12 col-md-8">
            <?php if ($emailSent): ?>
              <center><h2 style="margin-top: 20px;">Thanks for getting in touch!</h2></center>
            <?php else: ?>
              <h4>SEND US A MESSAGE</h4>
              <form action="<?php the_permalink(); ?>" method="POST">
                <div class="form-group <?php if ($nameError): ?> has-error <?php endif; ?>">
                  <?php if ($nameError): ?><div class="error"><?php echo $nameError; ?></div><?php endif; ?>
                  <label>YOUR NAME*</label>
                  <div class="group-column left">
                    <input type="text" placeholder="First Name" name="firstName" value="<?php echo $firstName ?>">
                  </div>
                  <div class="group-column right">
                    <input type="text" placeholder="Last Name" name="lastName" value="<?php echo $lastName ?>">
                  </div>
                </div>
                <div class="form-group <?php if ($emailError): ?> has-error <?php endif; ?>">
                  <?php if ($emailError): ?><div class="error"><?php echo $emailError; ?></div><?php endif; ?>
                  <label>YOUR EMAIL*</label>
                  <input type="text" placeholder="janedoe@gmail.com" name="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group <?php if ($phoneError): ?> has-error <?php endif; ?>">
                  <?php if ($phoneError): ?><div class="error"><?php echo $phoneError; ?></div><?php endif; ?>
                  <label>YOUR PHONE NUMBER*</label>
                  <input type="text" placeholder="(000) 123 - 4567" name="phone" value="<?php echo $phone ?>">
                </div>
                <div class="form-group <?php if ($commentError): ?> has-error <?php endif; ?>">
                  <?php if ($commentError): ?><div class="error"><?php echo $commentError; ?></div><?php endif; ?>
                  <label>MESSAGE</label>
                  <textarea rows="6" name="message"><?php echo $message ?></textarea>
                </div>
                <input type="hidden" name="submitted" value="true" />
                <button type="submit">Submit Message</button>
              </form>
            <?php endif; ?>
          </div>
          <div class="col col-sm-12 col-md-4 sidebar">
            <h4>CONNECT ON SOCIAL MEDIA</h4>

            <h4>GENERAL INQUIRIES</h4>
            <p>Please Call: </p>
            <h4>CONFERENCE QUESTIONS</h4>
            <p>Please Call: </p>
          </div>
        </div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>