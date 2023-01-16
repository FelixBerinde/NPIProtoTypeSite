<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="/index.php" aria-label="Homepage"><h4>New Paths Inc.</h4>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome to New Paths!</p>
                <a></a>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/index.php") echo 'active' ?>">
                    <a href="/index.php" aria-label="Home">Home</a>
                </li>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/residential.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/daytreatment&intensiveoutpatient.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/outpatient.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/medicatedassistedtreatment.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/justiceinvolvedindividuals.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/recoveryhousing.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/soberingfacility.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/drugandalcoholtesting.php") echo 'active' ?>
                    <?php if($_SERVER['SCRIPT_NAME']=="/angermanagement.php") echo 'active' ?>">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Services & Programs</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <hr>
                        <h5>Programs</h5>
                        <li>
                            <a href="/residential.php" aria-label="Residential">Residential</a>
                        </li>
                        <li>
                            <a href="/daytreatment&intensiveoutpatient.php" aria-label="Day Treatment & Intensive Outpatient">Day Treatment & Intensive Outpatient</a>
                        </li>
                        <li>
                            <a href="/outpatient.php">Outpatient</a>
                        </li>
                        <li>
                            <a href="/medicatedassistedtreatment.php" aria-label="Medictation Assisted Treatment">Medication Assisted Treatment</a>
                        </li>
                        <li>
                            <a href="/courtreferredservices.php" aria-label="Court Referred Services">Court Referred Services</a>
                        </li>
                        <hr>
                        <h5>Support Services</h5>
                        <li>
                            <a href="/recoveryhousing.php" aria-label="Recovery Housing">Recovery Housing</a>
                        </li>
                        <li>
                            <a href="/soberingfacility.php" aria-label="Sobering Facility">Sobering Facility</a>
                        </li>
                        <li>
                            <a href="/drugandalcoholtesting.php" aria-label="Drug and Alcohol Testing">Drug and Alcohol Testing</a>
                        </li>
                        <li>
                            <a href="/angermanagement.php" aria-label="Anger Management">Anger Management</a>
                        </li>
                        <li>
                            <a href="/oorpqrt.php" aria-label="OORP/QRT">OORP/QRT</a>
                        </li>
                        <hr>
                    </ul>
                </li>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/highlights.php") echo 'active' ?>">
                    <a href="/highlights.php" aria-label="Highlights">Highlights</a>
                </li>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/npileadership.php") echo 'active' ?>">
                    <a href="#aboutusSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" aria-label="About Us">About Us</a>
                    <ul class="collapse list-unstyled" id="aboutusSubmenu">
                        <li>
                            <a href="/npileadership.php" aria-label="NPI Leadership">NPI Leadership</a>
                        </li>
                        <li>
                            <a href="/volunteer-support0.php" aria-label="Volunteering & Support">Volunteering & Support</a>
                        </li>
                        <hr>
                    </ul>
                </li>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/faq.php") echo 'active' ?>">
                    <a href="/faq.php" aria-label="FAQ's">FAQ's</a>
                </li>
                <li>
                    <a href="#careersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Careers</a>
                    <ul class="collapse list-unstyled" id="careersSubmenu" aria-label="Careers">
                        <li>
                            <a aria-label="ADP Careers Page" target="_blank" href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=66bbc086-7453-4032-8a3a-e38cfece5782&ccId=19000101_000001&lang=en_US">Apply On ADP</a>
                        </li>
                        <li>
                            <a href="/recovery-coach-academy.php" aria-label="Recovery Coach Academy">Recovery Coach Academy</a>
                        </li>
                        <hr>
                    </ul>
                    <li class="<?php if($_SERVER['SCRIPT_NAME']=="/donations.php") echo 'active' ?>">
                    <a href="/donations.php" aria-label="Donations">Donations</a>
                    </li>
                    <li class="<?php if($_SERVER['SCRIPT_NAME']=="/narcan.php") echo 'active' ?>">
                    <a href="/narcan.php" aria-label="Naloxone (Narcan) Information">Naloxone (Narcan) Information</a>
                    </li>
                    <li>
                    <a href="https://sites.google.com/a/newpaths.org/startup/home" target="_blank" aria-label="Employee Portal">Employee Portal</a>   
                    </li>
            </ul>
            <ul class="phonenumberslist" style="font-size: 14px; font-weight: 600;">
                <li><span>Contact Us: <a aria-label="Contact Us Phone Number" href="tel:(810)-233-5340">(810)-233-5340</a></span></li>
                <li><span>QRT Warmline: <a aria-label="QRT Warmline Phone Number" href="tel:(810)-624-1177">(810)-624-1177</a></span></li>
                <li><span>QRT Textline: <a aria-label="QRT Textline Phone Number" href="tel:(810)-835-4288">(810)-835-4288</a></span></li>
                <li><span>Suicide Hotline: <a aria-label="Suicide Hotline Phone Number" href="https://988lifeline.org/" target="_blank">https://988lifeline.org/</a></span></li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar">
                    <button type="button" id="sidebarCollapse" class="btn btn-info" aria-label="Menu">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                    <a id="NPILogo" href="/index.php"><img src="/imgs/Final_Approved_Logo.png" id="NPILogo" alt="New Paths Inc. Behavioral Health and Recovery Center"></a>
            </nav>
            <div id="centerPhoneDiv">
                <span class="phoneNum">Contact Us: <a aria-label="Contact Us Phone Number" href="tel:(810)-233-5340">(810)-233-5340</a></span>
            </div>