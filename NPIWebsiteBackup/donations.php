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
  </head>

<?php
include "header.php";
?>

<body>
  <div class="center-text band">
    <h2 class="band">Donations</h2>
  </div>
  <div class="center-text">
    <h2> Donate with Paypal</h2>
    <div id="donate-button-container">
    <div id="donate-button"></div>
    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
    <script>
      PayPal.Donation.Button({
      env:'production',
      hosted_button_id:'SRVPPU3TZLF8W',
      image: {
      src:'https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif',
      alt:'Donate with PayPal button',
      title:'PayPal - The safer, easier way to pay online!',
    }
    }).render('#donate-button');
    </script>
</div>
  <div class="center-text">
    <h2>Support us with Amazon Smile</h2>
    <p>Amazon donates 0.5% of the price of your eligible <a href="https://smile.amazon.com/ch/38-2302935">AmazonSmile</a> purchases to New Paths, Inc.</p>

    <a style="background-color:#D3B574;color:black;" target="_blank" href="https://smile.amazon.com/ch/38-2302935" class="btn btn-secondary btn-lg">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width:25px;height:25px"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
    <path d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2
     0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5
      37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z"></path>
    </svg> Support Us!</a>
  </div>
  <div style="text-align: left;">
    <h2 class="center-text">Ways To Donate</h2>
    <p>There are a variety of charitable giving opportunities available to alumni, families and friends.
All gifts are gratefully accepted and individually acknowledged. Please contact our Finance
Department for assistance at 810-233-5340 ext: 125, or contact us.</p>
    <ul>
      <li>Annual Fund: The Annual Fund is foremost and vital New Paths Inc.’s charitable
mission. These unrestricted funds are needed for growth and the long-term stability of the organization.</li>
      <li>Memorial Gifts: Memorial gifts are a wonderful way to celebrate someone’s sobriety or
a special occasion, thank a friend or relative for their support, honor a special person in
your life, or remember the life of a loved one.</li>
      <li>Will or Bequest: This is the easiest and most frequently used method of deferred giving.
You will retain control of your assets and your heirs may experience tax benefits from your charitable gift. I, name, of city, state, zip, give, devise and bequeath to New Paths, Inc. 765 East Hamilton, Flint, MI, 48505, amount or percentage of the estate or description of property, for its unrestricted use and purpose.</li>
      <li>We are funded by the Michigan Department of Health and Human Services (MDHHS), Region 10 PIHP, MSHN PIHP, and the Michigan Department of Corrections.</li>
    </ul>
  </div>

<?php
include "footer.php";
?>

</body>
</html>
