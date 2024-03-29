<?php
session_start();
include '../view/header.php';
?>
<!-- User Account Page-->
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="../index.php" class="w-nav-brand"><img src="../images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <h1 class="centered-h1">Password Reset</h1>
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" action='../password/pass_reset.php' class="form" method="post">
          <div class="right-aligned-text"><span class="asterisk">*</span>Required Fields</div>
          <!-- Email password  -->
          <!-- name="email"   --> 
          <div class="field-wrapper">
              <label for="name" class="field-label wide">Username/Email:</label>
              <label for="name-3" class="asterisk">*</label>
              <input type="text" class="form-field w-input" maxlength="256" name="email" data-name="email" id="name">
            </div>
          <!-- Password Reset form buttons                      -->
          <!-- name="action"  value="email_lookup"              -->
          <!-- SUCCESS redirect to account dashboard(index.php)   -->
          <!-- FAIL or CANCEL redirect to account loginform.php   -->  
          <div class="form-button-wrapper">
              <input type="submit" value="Submit" onclick="window.location.href = '../index.php';" data-wait="Please wait..." class="button login w-button">
              <input type="submit" value="Cancel" data-wait="Please wait..." class="button w-button">
            </div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your password has been reset!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while please contact support to reset your password.</div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
<?php include '../view/footer.php'; ?>

