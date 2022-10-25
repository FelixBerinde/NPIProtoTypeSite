<!DOCTYPE html>
<html lang="en" dir="ltr">
  <!--HEAD-->
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Paths, Inc.</title>

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- New Paths CSS-->
    <link rel="stylesheet" href="/css/sandp.css">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="stylesheet" href="/css/highlightscards.css">
  </head>

<?php
include "header.php";
?>

<body>
  <div class="center-text band">
    <h2 class="band">In The News</h2>
  </div>

  <div class="cards">
    <div class="card">
      <text class="title">Courts Offer Flint man a second chance.</text>
      <a href="https://www.mlive.com/news/flint/2022/09/mental-health-court-graduation-offers-flint-man-second-chance.html" target="_blank">
      <img src="/imgs/septhighlight.jpg" alt="Link to an article regarding one of our graduated clients" width="auto" height="150vh"></a>
    </div>
    <div class="card">
      <text class="title">Overdose survivors tell their stories.</text>
      <a href="https://nbc25news.com/news/local/life-after-overdose-survivors-tell-their-stories" target="_blank">
      <img src="/imgs/septhighlight21.jpg" alt="Link to an article on overdose survivors." width="auto" height="150vh"></a>
    </div>
    <div class="card">
      <text class="title">Community Toolkit Available!</text>
      <a href="https://nbc25news.com/news/local/community-toolkit-launched-to-help-combat-opioid-crisis" target="_blank">
      <img src="/imgs/dechighlight19.jpg" alt="Link to an article regarding our community toolkits that are available." width="auto" height="150vh"></a>
    </div>

    <div class="card">
    <text class="title">Joe Murphy's Story</text>
    <video width="auto" height="150vh" controls>
    <source src="/videos/joevid.mp4" type="video/mp4" alt="Joe Murphey a recovery coach talks about his struggles with addiction.">
    Sorry something went wrong.
    </video> 
    </div>
    <div class="card">
    <text class="title">Jen's Story</text>
    <video width="auto" height="150vh" controls>
    <source src="/videos/jenvid.mp4" type="video/mp4" alt="Jen talks about her struggles with addiction.">
    Sorry something went wrong.
    </video> 
    </div>
    <div class="card">
      <text class="title">Hearsay (E-newsletter)</text>
      <a href="/imgs\Hearsay2018.pdf" target="_blank">
      <img src="/imgs/hearsay2018.jpg" alt="Link to 2018 Hearsay E-Newsletter." width="auto" height="90vh"></a>
    </div>
  </div>

<?php
include "footer.php";
?>

</body>
</html>
