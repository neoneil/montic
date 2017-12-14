


<?php

  $con = mysqli_connect('localhost','root','160302');
  $db = mysqli_select_db($con,'montgomery');

     if($con){
      echo 'Successful to connect to database'.'<br />';
    }
     else{
      echo 'Error to connect to database';
    }

    if($db){
     echo ' Successful to find montgomery' . '<br />';
   }
    else{
     echo 'Error to find montgomery';
   }

   $choosingValues = $_COOKIE['mycookie'];
   echo 'Choosing values are '.$choosingValues;

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $age = $_POST['userage'];
   $telephone = $_POST['usertelephone'];
   $email = $_POST['useremail'];
   $country = $_POST['country'];
   // $score1 = $_POST['score1'];
   // $score2 = $_POST['score2'];

   $sql = "INSERT INTO  users (firstname, lastname, age, telephone, email, country)
          VALUES ('$firstname','$lastname','$age','$telephone','$email','$country')";
   if(!mysqli_query($con, $sql))
   {
     echo 'Not Saved, something wrong and redirecting in 30 seconds';
     header("refresh:30; url = page-visa-BM-calculate.html");
   }else {
     echo 'Information saved and redirecting in 5 seconds';
     header("refresh:50; url = page-visa-BM-calculate.html");
   }

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'PHPMailer/src/Exception.php';
   require 'PHPMailer/src/PHPMailer.php';
   require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();
    try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'adelaideneocs@gmail.com';                 // SMTP username
    $mail->Password = '20160302n**';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom('neoneilcs46@163.com', 'Montgomery');
    $mail->addAddress($email, 'Neo');     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thanks for consulting Montgomery';
    $mail->Body    = 'From Montgomery International Consultants to you <b> Dear Customer: </b>' . $firstname .'<br />'.'<br />'.'This is an Auto-reply Email, call 426008309 to get consultation.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
     echo 'Message has been sent';
    } catch (Exception $e) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

?>
