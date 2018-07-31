// Some information has been removed
<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Used information from form.guide/email-form/php-form-to-email.html
if(!isset($_POST['submit'])) {
  //This page should not be accessed directly. Need to submit the form.
  echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$emergency_name = $_POST['emergency-name'];
$emergency_phone_number = $_POST['emergency-phone-number'];
$shirt_result = $_POST['shirt-result'];
$role_result = $_POST['role-result'];
$first_selection = $_POST['first-day'];
$second_selection = $_POST['second-day'];

//Validate first
if(empty($name) || empty($visitor_email) || empty($emergency_name) || empty($emergency_phone_number) || empty($first_selection) || empty($second_selection)) {
  echo "Name, email, emergency name, emergency contact phone number, and first and second selections are mandatory!";
  exit;
}

if(IsInjected($visitor_email)) {
  echo "Bad email value!";
  exit;
}


// Send email
$email_from = '';//<== update the email address
$email_subject = "New Form submission";
$email_body = "This is an email from Ace in the Hole Multisport Events.\nYou have received a registering request from $name.\n"
              ."The registered email is $visitor_email.\n"
              ."The emergency contact name is $emergency_name.\n"
              ."The emergency contact phone number is $emergency_phone_number.\n"
              ."The T-shirt size is $shirt_result.\n"
              ."Registered as $role_result.\n"
              ."The selection on March 24th is $first_selection.\n"
              ."The selection on March 25th is $second_selection.\n";
    
$to = "ngdatkh@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);

// Escaping before put the values into the database
$name = mysqli_real_escape_string($conn, $name);
$visitor_email = mysqli_real_escape_string($conn, $visitor_email);
$emergency_name = mysqli_real_escape_string($conn, $emergency_name);
$emergency_phone_number = mysqli_real_escape_string($conn, $emergency_phone_number);
$shirt_result = mysqli_real_escape_string($conn, $shirt_result);
$role_result = mysqli_real_escape_string($conn, $role_result);
$first_selection = mysqli_real_escape_string($conn, $first_selection);
$second_selection = mysqli_real_escape_string($conn, $second_selection);

// Insert into database
$query = "INSERT INTO registration (name, email, emergency_name, emergency_phone_number, shirt_size, role, first_day_choice, second_day_choice) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
$stmt->bind_param('ssssssss', $name, $visitor_email, $emergency_name, $emergency_phone_number, $shirt_result, $role_result, $first_selection, $second_selection);
$stmt->execute();
$stmt->close();

// Close connection
mysqli_close($conn);

//done. redirect to thank-you page.
header('Location: thankyou.html');

// Function to validate against any email injection attempts
function IsInjected($str) {
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str)) {
    return true;
  }
  else {
    return false;
  }
}
   
?> 
