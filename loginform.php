 
<?php
   session_start();
   if ( isset($_SESSION['username']) ) {
       header('Location:index.php');
   }
   $errors='';
?>

<?php include 'view/header.php';?>
<!-- the body section -->
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand w--current"><img src="images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <div class="div-block"><img src="images/EventTracker_Logo-1.png" alt="" class="logo-image">
        <h1 class="heading">Event<br>Tracker</h1>
      </div>
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form" action="user/index.php" method="post">
          <div class="field-wrapper"><label for="name" class="field-label">Username: </label><input type="text" class="form-field w-input" maxlength="256" name="email" data-name="email" id="email"></div>
          <div class="field-wrapper"><label for="name-2" class="field-label">Password:</label><input type="text" class="form-field w-input" maxlength="256" name="password" data-name="password" id="password"></div>
          <div class="w-clearfix"><a href="../password/pass_reset.php" class="forgot-password-link">forgot password?</a></div>
          <div class="form-button-wrapper"><input type="submit" onclick="window.location.href = 'index.php';" value="Login" data-wait="Please wait..." class="button login w-button"><input type="submit" onclick="window.location.href= 'account/index.php';" value="Sign Up" data-wait="Please wait..." class="button w-button"></div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <div>

<?php include 'view/footer.php'; ?>
