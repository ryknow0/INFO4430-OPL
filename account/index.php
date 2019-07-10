<?php
include '../view/header.php';
?>
<!--Account Creation Page Body -->
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.php" class="w-nav-brand"><img src="../images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <h1 class="centered-h1">Create Account</h1>
      <div class="w-form">
      <!-- ACCOUNT CREATION FORM            --> 
      <!-- action="account_controller.php"  -->
      <!-- method="post"                    -->
        <form id="email-form" name="email-form" data-name="Email Form" action='../account/account_controller.php' class="form" method="post">
          <div class="right-aligned-text"><span class="asterisk">*</span>Required Fields</div>
          <!-- Account Name Field   -->
          <!-- name="account_name"  -->
          <div class="field-wrapper">
            <label for="name" class="field-label wide">Account Name:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="account_name" data-name="account_name" id="name">
          </div>
          <!-- Department Name          -->
          <!-- name="department"   -->
          <div class="field-wrapper">
            <label for="name-2" class="field-label wide">Department:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="department" data-name="department" id="name-2">
          </div>
          <!-- Account Admin Section Label  --> 
          <label for="name-3" class="field-label wide">ACCOUNT ADMINISTRATOR</label>
          <!-- Account Admin First Name   -->
          <!-- name="first_name"          -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">First Name:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="first_name" data-name="first_name" id="name-2">
          </div>
          <!-- Account Admin Last Name    -->
          <!-- name="last_name"           -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Last Name:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="last_name" data-name="last_name" id="name-2">
          </div>
          <!-- Phone Number         -->
          <!-- name="phone  -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Phone Number:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="phone" data-name="phone" id="name-2">
          </div>
          <!-- Email          -->
          <!-- name="email"   -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Username/Email:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="email" data-name="email" id="name-2">
          </div>
          <!-- Password           -->
          <!-- name="password1"   -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Password:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="password1" data-name="password1" id="name-2">
          </div>
          <!-- Re-enter password  -->
          <!-- name="password2"   -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Re-Enter Password:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="password2" data-name="password2" id="name-2">
          </div>
          <div class="form-button-wrapper">
          <!-- Account Creation form buttons                      -->
          <!-- name="action"  value="create_account"              -->
          <!-- SUCCESS redirect to account dashboard(index.php)   -->
          <!-- FAIL or CANCEL redirect to account loginform.php   -->          
            <input type="submit" value="Submit" onclick="window.location.href = '../index.php';" data-wait="Please wait..." class="button login w-button">
            <input type="submit" value="Cancel" onclick="window.location.href = '../index.php';" data-wait="Please wait..." class="button w-button">
            <input type="hidden" name="action" value="create_account">
            </div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
        <?php var_dump($_SESSION); ?>
      </div>
    </div>
  </div>
  
<?php include '../view/footer.php'; ?>
