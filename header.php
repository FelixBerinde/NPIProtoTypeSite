<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="/index.php"><h4>New Paths Inc.</h4>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome to New Paths!</p>
                <a></a>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/index.php") echo 'active' ?>">
                    <a href="/index.php">Home</a>
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
                            <a href="/residential.php">Residential</a>
                        </li>
                        <li>
                            <a href="/daytreatment&intensiveoutpatient.php">Day Treatment & Intensive Outpatient</a>
                        </li>
                        <li>
                            <a href="/medicatedassistedtreatment.php">Medication Assisted Treatment</a>
                        </li>
                        <li>
                            <a href="/courtreferredservices.php">Court Referred Services</a>
                        </li>
                        <hr>
                        <h5>Support Services</h5>
                        <li>
                            <a href="/recoveryhousing.php">Recovery Housing</a>
                        </li>
                        <li>
                            <a href="/soberingfacility.php">Sobering Facility</a>
                        </li>
                        <li>
                            <a href="/drugandalcoholtesting.php">Drug and Alcohol Testing</a>
                        </li>
                        <li>
                            <a href="/angermanagement.php">Anger Management</a>
                        </li>
                        <li>
                            <a href="/oorpqrt.php">OORP/QRT</a>
                        </li>
                        <hr>
                    </ul>
                </li>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/highlights.php") echo 'active' ?>">
                    <a href="/highlights.php">Highlights</a>
                </li>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/npileadership.php") echo 'active' ?>">
                    <a href="#aboutusSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">About Us</a>
                    <ul class="collapse list-unstyled" id="aboutusSubmenu">
                        <li>
                            <a href="/npileadership.php">NPI Leadership</a>
                        </li>
                        <li>
                            <a href="/volunteer-support0.php">Volunteering & Support</a>
                        </li>
                        <hr>
                    </ul>
                </li>
                <li class="<?php if($_SERVER['SCRIPT_NAME']=="/faq.php") echo 'active' ?>">
                    <a href="/faq.php" >FAQ's</a>
                </li>
                <li>
                    <a href="#careersSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Careers</a>
                    <ul class="collapse list-unstyled" id="careersSubmenu">
                        <li>
                            <a target="_blank" href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=66bbc086-7453-4032-8a3a-e38cfece5782&ccId=19000101_000001&lang=en_US">Apply On ADP</a>
                        </li>
                        <li>
                            <a href="#">Recovery Coach Academy</a>
                        </li>
                        <li>
                            <a href="/donations.php">Donations</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="phonenumberslist">
                <li><span>Contact Us: <a href="tel:(810)-233-5340">(810)-233-5340</a></span></li>
                <li><span>QRT Warmline: <a href="tel:(810)-624-1117">(810)-624-1117</a></span></li>
                <li><span>QRT Textline: <a href="tel:(810)-835-4288">(810)-835-4288</a></span></li>
                <li><span>Suicide Hotline: <a href="https://988lifeline.org/" target="_blank">https://988lifeline.org/</a></span></li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                    <img src="/imgs/Final_Approved_Logo.png" id="NPILogo">
            </nav>