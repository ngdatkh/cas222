//Some information has been removed
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
$role_result = $_POST['role-result'];
$message = $_POST['message'];

//Validate first
if(empty($name) || empty($visitor_email) || empty($message)) {
  echo "Name, email, and message are mandatory!";
  exit;
}

if(IsInjected($visitor_email)) {
  echo "Bad email value!";
  exit;
}

// Send email
$email_from = '';//<== update the email address
$email_subject = "New Form submission";
$email_body = "This is an email from Ace in the Hole Multisport Events.\nYou have received a new message from $name.\n"
              ."The registered email is $visitor_email.\n"
              ."Registered as $role_result.\n"
              ."The message is: '$message'.\n";
    
$to = "ngdatkh@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);

// Escaping before put the values into the database
$name = mysqli_real_escape_string($conn, $name);
$visitor_email = mysqli_real_escape_string($conn, $visitor_email);
$role_result = mysqli_real_escape_string($conn, $role_result);
$message = mysqli_real_escape_string($conn, $message);

// Insert into database
$query = "INSERT INTO contact (name, email, role, message) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
$stmt->bind_param('ssss', $name, $visitor_email, $role_result, $message);
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
