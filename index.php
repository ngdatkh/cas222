<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage | Ace in the Hole Multisport Events</title>
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
  
  <!-- Loading screen. Do not delete.-->
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
      <section id="about">
        <h1>About Ace In The Hole Multisport Events</h1>
        <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
      </section>
      <section>
        <h2>About the event</h2>
        <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
        <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
      </section>
      <section>
        <h2>Starting times</h2>
        <article>
          <h3>Saturday</h3>
          <p>7:00 AM - Long Course Triathlon</p>	  	
          <p>7:30 AM - Olympic Triathlon</p>	  	
          <p>7:15 AM - 10K</p>	  	
          <p>7:15 AM - Half Marathon</p>
        </article>
        <article>
          <h3>Sunday</h3>
          <p>8:00 AM - Sprint Triathlon</p>	  	
          <p>8:20 AM - Try-a-Tri</p>	  	
          <p>12:00 PM - Splash n Dash</p>	
        </article>
      </section>
      <section>
        <h2>What to bring</h2>
        <p>Watch the weather closely. <em>The show goes on no matter what the weather is doing.</em></p>
        <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
        <p><strong>Swim</strong>: Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>
        <p><strong>Bike</strong>: A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
        <p><strong>Run</strong>: You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p>
        <p>Remember to bring a change of clothing so you can enjoy the post-event festivities. </p>
      </section>
      
      <section id="contact">
        <h2>Contact form</h2>
        <p>To contact us, fill in the following form and click Send.</p>
        <form method="post" name="contactform" action="contact-form-to-email.php">
          <label for="name">Your name</label>
          <input type="text" name="name" id="name">
          <label for="email">Your email</label>
          <input type="text" name="email" id="email">

          <div id="role-selection">
            <p>You have registered as</p>
            <input type="radio" name="role" id="first-role-selection" value="first-role-selection" checked="checked">
            <label class="active" for="first-role-selection">Athlete</label>
            <input type="radio" name="role" id="second-role-selection" value="second-role-selection">
            <label for="second-role-selection">Volunteer</label>

            <input type="text" name="role-result" id="role-result" readonly>
          </div>
          
          <p>Enter your message here...</p>
          <textarea id="message" name="message" rows="10"></textarea>
          
          <section>
            <p id="register-errors"></p>
          </section>          
          <button id="contact-form-submit" type="submit">Send</button>
        </form>
      </section>
    </section>
  
    <?php include 'feeds.php';?>
  </main>
  
  <?php include 'footer.php';?>
  
   
  <script src="script/custom.js"></script>
</body>
</html>