<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration | Ace in the Hole Multisport Events</title>
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
      <h1>Registration Form</h1>
      <article id="registration-page">
        <p>To register in our event, fill in the following form and click Register. You have to be <em>16 years of age or older</em> to be able to participate in the event, and you can only register for one event per day. Those are the only restrictions.</p>
        
        <strong>Here is the list price</strong>
        <ul>          
          <li><span>Long course triathlon</span> <span>$240</span></li> 
          <li><span>Olympic triathlon</span> <span>$110</span></li>
          <li><span>10K</span> <span>$50</span></li>
          <li><span>Half marathon</span> <span>$75</span></li>
          <li><span>Sprint marathon</span> <span>$90</span></li>
          <li><span>Try-a-Tri</span> <span>$65</span></li>
          <li><span>Splash and Dash - $25 or Free for kids who have adults register</span></li>
        </ul>
        
        <strong>Cost includes</strong>
        <ul>
          <li>Food &amp; Beer </li>
          <li>Access to the weekend’s live entertainment &amp; Fitness Expo</li>
          <li>Commemorative Finisher medal</li>
          <li>Accurate Chip Timing for competitive races</li>
          <li>Ace in the Hole MultiSport Weekend</li>  
        </ul>
        
        <strong>Packet pick up</strong>
        <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.</p>
    
      </article>
      
      <form method="post" id="registration-form" name="registrationform" action="register-form-to-email.php">
        <p>Enter the your information here</p> 
       
        <label for="name">Your name</label>
        <input type="text" name="name" id="name">
        <label for="email">Your email</label>
        <input type="text" name="email" id="email">
        <label for="emergency-name">Emergency contact name</label>
        <input type="text" name="emergency-name" id="emergency-name">
        <label for="emergency-phone-number">Emergency contact phone number</label>
        <input type="text" name="emergency-phone-number" id="emergency-phone-number">
<!--        <input type="text" name="selections" id="selections">-->
        
        <div id="t-shirt">
          <p>Choose your t-shirt size</p>
          <input type="radio" name="shirt" id="first-size-choice" value="first-size-choice">
          <label for="first-size-choice">XS</label>
          <input type="radio" name="shirt" id="second-size-choice" value="second-size-choice">
          <label for="second-size-choice">S</label>
          <input type="radio" name="shirt" id="third-size-choice" value="third-size-choice">
          <label for="third-size-choice">M</label>
          <input type="radio" name="shirt" id="fourth-size-choice" value="fourth-size-choice" checked="checked">
          <label class="active" for="fourth-size-choice">L</label>
          <input type="radio" name="shirt" id="fifth-size-choice" value="fifth-size-choice">
          <label for="fifth-size-choice">XL</label>
          <input type="radio" name="shirt" id="sixth-size-choice" value="sixth-size-choice">
          <label for="sixth-size-choice">XXL</label>
          <input type="radio" name="shirt" id="seventh-size-choice" value="seventh-size-choice">
          <label for="seventh-size-choice">XXXL</label>
          
          <input type="text" name="shirt-result" id="shirt-result" readonly>
        </div>
        
        <div id="role-selection">
          <p>You would register as</p>
          <input type="radio" name="role" id="first-role-selection" value="first-role-selection" checked="checked">
          <label class="active" for="first-role-selection">Athlete</label>
          <input type="radio" name="role" id="second-role-selection" value="second-role-selection">
          <label for="second-role-selection">Volunteer</label>
          
          <input type="text" name="role-result" id="role-result" readonly>
        </div>
        
        <div id="first-selection">
          <p>Select a course on March 24th, 2018</p>
          <input type="radio" name="first-choice" id="first-no-selection" value="first-no-selection" checked="checked">
          <label class="active" for="first-no-selection">None</label>
          <input type="radio" name="first-choice" id="first-long-course-triathlon" value="first-long-course-triathlon">
          <label for="first-long-course-triathlon">Long course triathlon</label>
          <input type="radio" name="first-choice" id="first-olympic-triathlon" value="first-olympic-triathlon">
          <label for="first-olympic-triathlon">Olympic triathlon</label>
          <input type="radio" name="first-choice" id="first-ten-k" value="first-ten-k">
          <label for="first-ten-k">10k</label>
          <input type="radio" name="first-choice" id="first-half-marathon" value="first-half-marathon">
          <label for="first-half-marathon">Half marathon</label>
          
          <input type="text" name="first-day" id="first-day" readonly>
        </div>
        
        <div id="second-selection">
          <p>Select a course on March 25th, 2018</p>
          <input type="radio" name="second-choice" id="second-no-selection" value="second-no-selection" checked="checked">
          <label class="active" for="second-no-selection">None</label>
          <input type="radio" name="second-choice" id="second-sprint-triathlon" value="second-sprint-triathlon">
          <label for="second-sprint-triathlon">Sprint triathlon</label>
          <input type="radio" name="second-choice" id="second-try-a-tri" value="second-try-a-tri">
          <label for="second-try-a-tri">Try-A-Tri</label>
          <input type="radio" name="second-choice" id="second-splash-n-dash" value="second-splash-n-dash">
          <label for="second-splash-n-dash">Splash n Dash</label>
          <p>* The Splash and Dash is an event for kids 12 and under. It is a 100 yard swim and a 50 meter dash. It is free for kids who have an adult register and $25 for those who do not.</p>
          <input type="text" name="second-day" id="second-day" readonly>
        </div>
        <div>
          <p>To see more details of the courses, please visit <a href="course-details.php">course details page</a>.</p>
        </div>
        <section>
          <p id="register-errors"></p>
        </section>
        <button id="register-form-submit" type="submit">Register</button>
      </form>      

    </section>
    
    <?php include 'feeds.php';?>
  </main>
  
  <?php include 'footer.php';?>
  
   
  <script src="script/custom.js"></script>
</body>
</html>