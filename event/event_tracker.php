<?php include '../view/header.php' ?>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
    <div class="container-2 w-container"><a href="../index.html" class="w-nav-brand"><img src="../images/orem-library.jpg" alt="" class="navbar-image"></a>
      <div class="w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="container w-container">
      <h1 class="centered-h1">Event_Name</h1>
      <h4 class="centered-h1">Event Tracker</h4>
      <div class="fields-wrapper">
        <div class="add-attendee-wrapper">
          <h2 class="heading-2">Add Attendee</h2>
          <div id="add-attendee-button" class="add-attendee-button"><img src="../images/person_add_white_2048x2048.png" srcset="../images/person_add_white_2048x2048.png 500w, ../images/person_add_white_2048x2048.png 800w, ../images/person_add_white_2048x2048.png 1080w, ../images/person_add_white_2048x2048.png 2048w" sizes="(max-width: 479px) 7vw, 34px" alt="" class="image-2"></div>
        </div>
        <div>
          <h2 class="h2-centered">Total: 85</h2>
        </div>
        <div class="attendance-demographic-wrapper">
          <div class="w-row">
            <div class="w-col w-col-4">
              <h3 class="demographic-heading">Age:</h3>
            </div>
            <div class="w-col w-col-8">
              <div>Under 18</div>
              <div>18-64</div>
              <div>65+</div>
            </div>
          </div>
        </div>
        <div class="attendance-demographic-wrapper">
          <div class="w-row">
            <div class="w-col w-col-4">
              <h3 class="demographic-heading">Gender:</h3>
            </div>
            <div class="w-col w-col-8">
              <div>Boys</div>
              <div>Girls</div>
              <div>Men</div>
              <div>Women</div>
            </div>
          </div>
        </div>
        <div class="attendance-demographic-wrapper">
          <div class="w-row">
            <div class="w-col w-col-4">
              <h3 class="demographic-heading">Ethnicity:</h3>
            </div>
            <div class="w-col w-col-8">
              <div>Hispanic</div>
              <div>Black</div>
              <div>White</div>
              <div>Asian</div>
              <div>Other</div>
            </div>
          </div>
        </div>
        <div class="centered-contents-div"><a href="#" class="button w-button">Submit</a></div>
        <div class="w-embed w-script">
          <script>
	document.getElementById('add-attendee-button').addEventListener('click', function() {
  	console.log('add attendee clicked');
  });
</script>
        </div>
      </div>
    </div>
  </div>
  <?php include '../view/footer.php' ?>

