<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>New Paths, Inc.</title>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- New Paths CSS-->
    <link rel="stylesheet" href="/css/stylesheet.css">

</head>
<?php
include "header.php";
?>

<!--BODY-->
<body>
    <Main class="main-top" >
        <!-- The rolling numbers start at 0 and ramp up to their ending value through a function defined in javascript.js -->

        <div class="maintext">
        <section class="gradiant">
        <h1>Our Purpose</h1>
        <p class="main-par-text-size"><strong>New Paths, Inc. provides comprehensive substance use disorder treatment for drug and alcohol disorders. Offering multiple levels of rehabilitation, NPI provides an effective level of treatment programming to meet specific clinical needs. Individuals are screened and referred through Region 10, have current Medicaid insurance or are eligible through Block Grant funding. Individuals also have the ability to self-pay for treatment services. </strong></p>
        </section>
        <h1>Our Mission</h1>
        <p class="main-par-text-size"><strong>Our mission is one of providing individuals an opportunity to change their lives. We are committed to utilizing innovative, evidence-based pathways to assist individuals in achieving and sustaining a healthy quality of life. </strong></p>
        <h1>Our Vision</h1>
        <p class="main-par-text-size"><strong>The vision of New Paths, Inc. is to be an effective and dynamic force in the treatment of behavioral health while recognizing the individuality of the person served. </strong></p>
        </div>
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
    </Main>
    <Main class="main-content">
    
    
        <!--Preload background images to help reduce white flickering of background-->
        <data value="imgarray">
        <img src="/imgs/flower.webp" style="display:none;">
        <img src="/imgs/sky.webp" style="display:none;">
        <img src="/imgs/sunset.webp" style="display:none;">
        <img src="/imgs/stackedrocks.webp" style="display:none;">
        <img src="/imgs/bench.webp" style="display:none;">
        <img src="/imgs/darktest.webp" style="display:none;">
        <img src="/imgs/circle_of_hands.webp" style="display:none;">
        <img src="/imgs/npi_summer.webp" style="display:none;">
        </data>
    </Main>

<?php
include "footer.php";
?>
    
</body>
</html>