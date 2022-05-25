<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php" name="NPILogo">
      <img src="https://i.imgur.com/xn9eFrd.png" title="source: imgur.com" alt="NPI Logo" aria="New Paths Logo" id="NPILogo" width="130px" height="75px"></a>
      <section class="addressbox">
        <address>765 E Hamilton Ave, Flint, MI 48505</address>
        <p>(810) 233-5340</p>
      </section>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarToggler">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['SCRIPT_NAME']=="/index.php") echo 'active' ?>" aria-current="page" href="/index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="dropdown-toggle nav-link 
          <?php if($_SERVER['SCRIPT_NAME']=="/programs.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/residential.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/programs.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/daytreatment&intensiveoutpatient.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/outpatient.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/medicatedassistedtreatment.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/justiceinvolvedindividuals.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/recoveryhousing.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/soberingfacility.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/drugandalcoholtesting.php") echo 'active' ?>
          <?php if($_SERVER['SCRIPT_NAME']=="/angermanagement.php") echo 'active' ?>" href="/programs.php">Services and Programs</a>
          <ul class="dropdown-menu">
              <li class="servicesdropdown">Programs</li>
              <li><a class="dropdown-item" href="/residential.php">Residential</a></li>
              <li><a class="dropdown-item" href="/daytreatment&intensiveoutpatient.php">Day Treatment & Intensive Outpatient</a></li>
              <li><a class="dropdown-item" href="/outpatient.php">Outpatient</a></li>
              <li><a class="dropdown-item" href="/medicatedassistedtreatment.php">Medication Assisted Treatment</a></li>
              <li><a class="dropdown-item" href="/justiceinvolvedindividuals.php">Justice Involved Individuals</a></li>
              <hr>
              <li class="servicesdropdown">Support Services</li>
              <li><a class="dropdown-item" href="/recoveryhousing.php">Recovery Housing</a></li>
              <li><a class="dropdown-item" href="/soberingfacility.php">Sobering Facility</a></li>
              <li><a class="dropdown-item" href="/drugandalcoholtesting.php">Drug and Alcohol Testing</a></li>
              <li><a class="dropdown-item" href="/angermanagement.php">Anger Management</a></li>
          </ul>
        </li>
        <li  class="nav-item">
          <a <?php if($_SERVER['SCRIPT_NAME']=="/highlights.php") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?> href="/highlights.php">Highlights</a>
        </li>
        <li class="nav-item dropdown">
          <a <?php if($_SERVER['SCRIPT_NAME']=="/aboutus.php") { ?> class="dropdown-toggle nav-link active" <?php } else { ?> class="dropdown-toggle nav-link" <?php } ?> href="/aboutus.php">About Us</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/npileadership.php">NPI Leadership</a></li>
            <li><a class="dropdown-item" href="/volunteer-support.php">Volunteering & Support</a></li>
            <li><a class="dropdown-item" href="/recovery-coach-academy.php">Recovery Coach Academy</a></li>
            <li><a class="dropdown-item" href="/alumni.php">Alumni</a></li>
            <li><a class="dropdown-item" target="_blank" href="/reports.php">Reports and Statistics</a></li>
          </ul>
        <li class="nav-item">
          <a <?php if($_SERVER['SCRIPT_NAME']=="//faq.php") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?> href="/faq.php">FAQ's</a>
        </li>
        <li class="nav-item">
          <a <?php if($_SERVER['SCRIPT_NAME']=="/contactus.php") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?> href="/contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a <?php if($_SERVER['SCRIPT_NAME']=="/careers.php") { ?> class="nav-link active" <?php } else { ?> class="nav-link" <?php } ?> target="_blank" href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=66bbc086-7453-4032-8a3a-e38cfece5782&ccId=19000101_000001&lang=en_US">Careers</a>
        </li>
      </ul>
    </div>
  </div>
</nav>