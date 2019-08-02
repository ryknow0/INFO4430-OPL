<?php include '../view/header.php'; ?>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="index.html" class="w-nav-brand"><img src="../images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <h1 class="centered-h1">Add User Account</h1>
      <div class="w-form">
      <!-- ACCOUNT CREATION FORM            --> 
      <!-- action="../user/index.php"  -->
      <!-- method="post"                    -->
        <form id="email-form" name="email-form" data-name="Email Form" action='../user/index.php' class="form" method="post">
          <div class="right-aligned-text"><span class="asterisk">*</span>Required Fields</div>
          <!-- Email Field   -->
          <!-- name="email"  -->
          <div class="field-wrapper">
            <label for="name" class="field-label wide">Email:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="email" data-name="email" id="name">
          </div>
          <!-- Password1 Field    -->
          <!-- name="password1"   -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Password:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="password1" data-name="password1" id="name-2">
          </div>
          <!-- Password2 Field    -->
          <!-- name="password2"   -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Re-Enter Password:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="password2" data-name="password2" id="name-2">
          </div>
          <!-- First Name Field    -->
          <!-- name="first_name"   -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">First Name:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="first_name" data-name="first_name" id="name-2">
          </div>
          <!-- Last Name Field    -->
          <!-- name="last_name"   -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Last Name:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="last_name" data-name="last_name" id="name-2">
          </div>
          <!-- Department Name Field    -->
          <!-- name="department"        -->
          <div class="field-wrapper">
            <label for="name-2" class="field-label wide">Department:</label><label for="name-3" class="asterisk">*</label>
            <input type="text" class="form-field w-input" maxlength="256" name="department" data-name="department" id="name-2">
          </div>
          <!-- Permissions Field    -->
          <!-- name="permission"    -->
          <div class="field-wrapper">
            <label for="name-3" class="field-label wide">Permissions:</label><label for="Admin" class="asterisk">*</label>
            <select id="Admin" name="permissions" data-name="permissions" class="w-select">
              <option value="admin">Administrator</option>
              <option value="employee">Employee</option>
              <option value="volunteer">Volunteer</option>
              <option value="view-only">View Only</option>
            </select>
          </div>
          <!-- Account Creation form buttons                            -->
          <!-- name="action"  value="add_user"                          -->
          <!-- SUCCESS redirect to account dashboard(index.php)         -->
          <!-- FAIL or CANCEL redirect to account dashboard(index.php)  --> 
          <div class="form-button-wrapper">
            <input type="submit" value="Submit" onclick="window.location.href = '../user/index.php';" data-wait="Please wait..." class="button login w-button">
            <input type="submit" value="Cancel" onclick="window.location.href = '../index.php';" data-wait="Please wait..." class="button w-button">
            <input type="hidden" name="action" value="add_user">
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
<?php include '../view/footer.php';?>