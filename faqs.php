<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs | Ace in the Hole Multisport Events</title>
  <link href="https://fonts.googleapis.com/css?family=Lora:700|Rubik" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <script src="script/prefixfree.min.js"></script>
  <script src="script/jquery-3.3.1.min.js"></script>  
  <script src="script/slippry.min.js"></script>
  <script src="script/perfect-scrollbar.min.js"></script>
  <link rel="stylesheet" href="style/reset.css">
  <link rel="stylesheet" href="style/generic.css">
  <link rel="stylesheet" href="style/main.css">
  <link rel="stylesheet" href="style/slippry.css">
  <link rel="stylesheet" href="style/perfect-scrollbar.css">
</head>

<body>
  <!--  Facebook JavaScript SDK-->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  
  <!--  Loading screen. Do not delete.-->
  <div id="loading-screen">
    <div>  
      <!-- Code taken from http://tobiasahlin.com/spinkit/-->
      <div class="sk-cube-grid"> 
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
      </div>
      <p>Loading...</p>    
    </div>
  </div>
  
  <?php include 'header.php';?>
  
  <main>
    <section>
      <section>
        <h1>FAQs - Frequently Asked Questions</h1>
        <ul>
          <li>
            <p>What are the Rules?</p>
            <p>We currently adhere to the USAT Rules for Triathlon &amp; Duathlon. Important rules include no drafting, you must wear a helmet and music is <strong>absolutely not</strong> allowed during the bike for obvious safety reasons.</p>            
          </li>
          <li>
            <p>Can I use a personal music device while cycling? </p>
            <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>            
          </li>
          <li>
            <p>Can I use a personal music device while running?</p>
            <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p>
            <p>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice…music or awards/points/rankings.</p>
            <p>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p>
            <p>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p>
          </li>
          <li>
            <p>Do I need to wear a wetsuit?</p>
            <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p> 
          </li>
          <li>
            <p>Do I have to use a road or racing bike?</p>
            <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
          </li>          
        </ul>
      </section>
    </section>
  
    <?php include 'feeds.php';?>
  </main>
  
  <?php include 'footer.php';?>
  
   
  <script src="script/custom.js"></script>
</body>
</html>