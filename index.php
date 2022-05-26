<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!--HEAD-->
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/calender.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Paths, Inc.</title>
    <link rel="icon" type="jpg" href="/imgs/NPI_Logoscaled.jpg">
  </head>

<?php
include "header.php";
?>

<!--BODY-->
<body>
<Main class="main-top" >
    <!-- The rolling numbers start at 0 and ramp up to their ending value through a function defined in javascript.js -->
    <aside class="rolling-numbers">
    <section>
        <p>Success Stories Told Last Year</p>
        <text>+</text>
        <text id="stories">0</text>
        <hr>
    </section>
    <section>
        <p>People Helped Every Year</p>
        <text>+</text>
        <text id="people">0</text>
        <hr>
    </section>
    <section>
        <p>Interventions Started Every Day</p>
        <text>+</text>
        <text id="interventions">0</text>
    </section>
    </aside>
    <div class="maintext">
    <section class="gradiant">
    <h1>Our Purpose</h1>
    <p class="main-par-text-size"><strong>New Paths, Inc. provides comprehensive substance use disorder treatment for drug and alcohol addictions. Offering multiple levels of rehabilitation, NPI provides an effective level of treatment programming to meet specific clinical needs. Individuals are screened and referred through Region 10/GHS Access Center, have current Medicaid insurance or are eligible through Block Grant funding. Individuals also have the ability to self-pay for treatment services. </strong></p>
    </section>
    <h1>Our Mission</h1>
    <p class="main-par-text-size"><strong>Our mission is one of providing individuals an opportunity to change their lives. We are committed to utilizing innovative, evidence-based pathways to assist individuals in achieving and sustaining a healthy quality of life. </strong></p>
    <h1>Our Vision</h1>
    <p class="main-par-text-size"><strong>The vision of New Paths, Inc. is to be an effective and dynamic force in the treatment of behavioral health while recognizing the individuality of the person served. </strong></p>
    </div>
    <aside class="socials-events-media">
    <section id="socials">
        <p>Social Media</p>
        <p style="font-size: 14px;">Coming Soon!</p>
        <h3 style="font-size: 20px;">Announcement:</h3>
        <p style="font-size: 14px;">Our Website is currently under construction, please excuse our mess!</p>
    </section>
    <section id="events">
        <p>Events</p>
        <!-- This calender ID is what displays the calender on the homepage all the CSS/JS is in their own stylesheets-->
        <div id="calendar"></div>
    </section>
    </aside>
</Main>
<Main class="main-content">


    <!--Preload background images to help prevent white flickering of background-->
    <data value="imgarray">
    <img src="/imgs/flower.jpg" style="display:none;">
    <img src="/imgs/sky.jpg" style="display:none;">
    <img src="/imgs/sunset.jpg" style="display:none;">
    <img src="/imgs/stackedrocks.jpg" style="display:none;">
    <img src="/imgs/bench.jpg" style="display:none;">
    <img src="/imgs/darktest.jpg" style="display:none;">
    <img src="/imgs/test.jpg" style="display:none;">
    <img src="/imgs/npi_summer.jpg" style="display:none;">
    </data>
</Main>

<?php
include 'footer.php';
?>

</body>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
  <script src="/javascript/calender.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="/javascript/javascript.js"></script>
</html>