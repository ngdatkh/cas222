<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Details | Ace in the Hole Multisport Events</title>
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
        <h1>Course Details</h1>
        <p><strong>Water temperature</strong> is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
        
        <strong>Long Course Swim – 1.2mi</strong> 
        <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
        
        <strong>Long Course Bike – 58 Miles</strong> 
        <p>A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>
        
        <strong>Long Course Run – 13.1mi</strong>
        <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
        
        <strong>Olympic Swim – 1,500 meters</strong> 
        <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
        
        <strong>Olympic Bike – 28mi</strong>
        <p>A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>
        
        <strong>Olympic Run – 10K</strong>
        <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>
        
        <strong>Sprint</strong> 
        <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>
        
        <strong>Try-A-Tri</strong>
        <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>
        
        <strong>Half Marathon Course: Half-Marathon (13.1-miles)</strong>
        <p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified.</p>
        
        <strong>10k Course</strong>
        <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>
        
        <strong>Splash and Dash</strong>
        <p>The splash and Dash is an event for kids 12 and under. It is a 100 yard swim and a 50 meter dash. It is free for kids who have an adult register and $25 for those who do not.</p>
      </section>
    </section>
  
    <?php include 'feeds.php';?>
  </main>
  
  <?php include 'footer.php';?>
  
   
  <script src="script/custom.js"></script>
</body>
</html>