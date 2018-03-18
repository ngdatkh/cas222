<?php
  echo '<header>
    <nav>
      <section>
        <p><a href="index.php">Ace In The Hole</a></p>
        <p><a href="registration.php">Register</a></p>
      </section>
      <section>
        <!--This div is used to create the hamburger icon. Please keep it.-->
        <div id="hamburger-menu">
          <p>Menu</p>
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>          
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#contact">Contact</a></li>
          <li><a href="course-details.php">Course Details</a></li>
          <li><a href="faqs.php">FAQs</a></li>
          <li><a href="registration.php">* Register</a></li>
        </ul>
      </section>
    </nav>
    <section>
      <!-- Weather feed from weatherwidget.io -->      
      <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-days="3" data-theme="gray" >PORTLAND WEATHER</a>
      <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js");
      </script>
    </section>    
    <section>
      <div>
        <img src="images/biking-1.jpg" alt="">
      </div>
      <!-- Slideshow from slippry.com -->
      <ul class="sy-box sy-slides-wrap">
        <li>
          <a href="#slide1"><img src="images/biking-1.jpg" alt=""></a>
        </li>
        <li>
          <a href="#slide2"><img src="images/running-1.jpg"  alt=""></a>
        </li>
        <li>
          <a href="#slide3"><img src="images/swimming-1.jpeg" alt=""></a>
        </li>
         <li>
          <a href="#slide4"><img src="images/biking-2.jpeg" alt=""></a>
        </li>
         <li>
          <a href="#slide5"><img src="images/running-2.jpg" alt=""></a>
        </li>
         <li>
          <a href="#slide6"><img src="images/swimming-2.jpg" alt=""></a>
        </li>
      </ul>
    </section>
  </header>';
?>