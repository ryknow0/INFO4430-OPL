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
      <!-- Account Creation Form-->
        <form id="email-form" name="email-form" data-name="Email Form" class="form">
          <div class="right-aligned-text"><span class="asterisk">*</span>Required Fields</div>
          <!-- Account Name Field -->
          <div class="field-wrapper">
            <label for="name" class="field-label wide">Account Name:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="name" data-name="Name" id="name">
          </div>
          <!-- Department Name -->
          <div class="field-wrapper">
            <label for="name-2" class="field-label wide">Department:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2">
          </div>
          <!-- Primary Account Contact -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Primary Contact:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2">
          </div>
          <!-- Phone Number -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Phone Number:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2">
          </div>
          <!-- Email -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Username/Email:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2">
          </div>
          <!-- Password -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Password:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2">
          </div>
          <!-- Re-enter password -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Re-Enter Password:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="name-2" data-name="Name 2" id="name-2">
          </div>
          <div class="form-button-wrapper">
          <!--Account Creation form buttons -->          
            <input type="submit" value="Submit" data-wait="Please wait..." class="button login w-button">
            <input type="submit" value="Cancel" data-wait="Please wait..." class="button w-button">
            <input type="hidden" name="action" value="create_account">
            </div>
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
  
<?php include '../view/footer.php'; ?>
