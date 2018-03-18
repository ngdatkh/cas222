
$(document).ready(function() {     
  $("#loading-screen").addClass("finished");
  $("#hamburger-menu").click(function(event) {
    event.preventDefault();
    event.stopPropagation();  
    $(this).next().slideToggle("200");
  });
  
  $("body").click(function() {
    if(!$("#hamburger-menu").is(":hidden")) {
      $("#hamburger-menu").next().slideUp("100");
    }
  });
  
  jQuery(document).ready(function(){
    jQuery('.sy-box').slippry();
  });
  
  // Enable readonly attribute
  $("#shirt-result").prop('readonly', true);
  $("#role-result").prop('readonly', true);
  $("#first-result").prop('readonly', true);
  $("#second-result").prop('readonly', true);
  $("#first-selection").prop('readonly', true);
  $("#second-selection").prop('readonly', true);
  
  var tShirt = $("#shirt-result");
  var role = $("#role-result");
  var firstResult = $("#first-day");
  var secondResult = $("#second-day");
  var registerButton = $("#register-form-submit");
  var contactButton = $("#contact-form-submit");
  var firstUnregister = $("#first-no-selection").is(':checked');
  var secondUnregister = $("#second-no-selection").is(':checked');
  var warning = $("#register-errors");
  var message = "";
  
  tShirt.val($("#t-shirt input:checked").next().html());
  role.val($("#role-selection input:checked").next().html());
  firstResult.val($("#first-selection input:checked").next().html());
  secondResult.val($("#second-selection input:checked").next().html());
  
  $("#t-shirt input").click(function() {
    if($("#t-shirt input:checked").val()) {
      $("#t-shirt label").removeClass("active");
      $("#t-shirt input:checked").next().addClass("active");    
      tShirt.val($("#t-shirt input:checked").next().html());
    }    
  });
  
  $("#role-selection input").click(function() {
    if($("#role-selection input:checked").val()) {
      $("#role-selection label").removeClass("active");
      $("#role-selection input:checked").next().addClass("active");    
      role.val($("#role-selection input:checked").next().html());
    }    
  });
  
  $("#first-selection input").click(function() {
    if($("#first-selection input:checked").val()) {
      $("#first-selection label").removeClass("active");
      $("#first-selection input:checked").next().addClass("active");    
      firstUnregister = $("#first-no-selection").is(':checked');
      firstResult.val($("#first-selection input:checked").next().html());
    }    
  });
  
  $("#second-selection input").click(function() {
    if($("#second-selection input:checked").val()) {
      $("#second-selection label").removeClass("active");
      $("#second-selection input:checked").next().addClass("active"); 
      secondUnregister = $("#second-no-selection").is(':checked');
      secondResult.val($("#second-selection input:checked").next().html());
    }    
  }); 

  function getInputValue(id) {
    return document.getElementById(id).value;
  }

  function hasValidLength(string, min, max) {
    var stringLength = string.length;
    return stringLength >= min && stringLength <= max;
  }

  function checkName() {
    var userName = getInputValue("name");
    var error = false;

    if(!hasValidLength(userName, 3, 30)) {     
      error = true;
    }

    if(error == false) {
      return true;
    }
    else {
      return false;
    }			
  }

  function checkEmail() {
    var email = document.getElementById("email").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
      return false;
    }
    else {
      message = "";
      return true;
    }			
  } 
  
  function checkContactName() {
    var userName = getInputValue("emergency-name");
    var error = false;

    if(!hasValidLength(userName, 3, 30)) {     
      error = true;
    }

    if(error == false) {
      return true;
    }
    else {
      return false;
    }			
  } 
  
  function checkContactPhoneNumber() {
    var phone = document.getElementById("emergency-phone-number").value;
    var filter = /^\d{10}$/;

    if (!filter.test(phone)) {
      return false;
    }
    else {
      message = "";
      return true;
    }			
  } 
  
  registerButton.click(function() {
    var error = false;
    message = "";
    warning.empty();
    checkName();
    checkEmail();
    checkContactName();
    checkContactPhoneNumber();
    
    if(!checkName()) {      
      message = message + "Name must contain 3-30 characters.<br>";
      warning.html(message);
      error = true;
    }
    
    if(!checkEmail()) {
      message = message + "Email must be a valid email address.<br>";
      warning.html(message);
      error = true;
    }
    
    if(!checkContactName()) {
      message = message + "Emergency contact name must contain 3-30 characters.<br>";
      warning.html(message);
      error = true;
    }
    
    if(!checkContactPhoneNumber()) {
      message = message + "Emergency contact phone number must contain 10 digits.<br>";
      warning.html(message);
      error = true;
    }   
    
    if(firstUnregister === true && secondUnregister === true) {
      message = message + "At least one course must be selected. Please check.<br>";         
      warning.html(message);
      error = true;
    }     
    
    if(error == true) {
      return false;
    }
    else {
      return true;
    }
  });
  
  //  for the contact button
  function checkMessage() {
    var userName = getInputValue("message");
    var error = false;

    if(!hasValidLength(userName, 10, 1000)) {     
      error = true;
    }

    if(error == false) {
      return true;
    }
    else {
      return false;
    }			
  }
  
  contactButton.click(function() {
    var error = false;
    message = "";
    warning.empty();
    checkName();
    checkEmail();    
    checkMessage();    
    
    if(!checkName()) {      
      message = message + "Name must contain 3-30 characters.<br>";
      warning.html(message);
      error = true;
    }
    
    if(!checkEmail()) {
      message = message + "Email must be a valid email address.<br>";
      warning.html(message);
      error = true;
    }
    
    if(!checkMessage()) {
      message = message + "Message must contain 10-1000 characters.<br>";
      warning.html(message);
      error = true;
    }      
    
    if(error == true) {
      return false;
    }
    else {
      return true;
    }
  });
  
  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
//          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
//            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
  
});

function resizeFBPlugin(){
  //getting parent box width
  var container_width = ($('.fb-column').width() - parseInt($('.fb-column').css('padding-left'))).toFixed(0);

  if (!isNaN(container_width)) {
      $(".fb-page").attr("data-width", container_width);
  }
  if (typeof FB !== 'undefined' ) {
      FB.XFBML.parse();
  }
}

$(window).on('resize', function() {
   setTimeout(function(){resizeFBPlugin()}, 500);
});
 
$(window).on('load', function() {
   setTimeout(function(){resizeFBPlugin()}, 1500);
});




