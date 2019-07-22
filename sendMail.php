<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "index.php";
// $error_page = "error_message.html";
$thankyou_page = "profesionales/index.php";



function c_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

// c_log("tomi es un copado, pero no es papa php");

//_____________________Esto guarda los datos del formulario en variables___________________


$adwords       = 'no';
$hosting       = 'no';
$contenido     = 'no';
$redes         = 'no';

/*This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.*/

$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$a6 = $_POST['a6'];
if(isset($_POST['a7'])){$a7 = $_POST['a7'];}

$timestamp = date("Y-m-d H:i:s");


//______________________________Datos guardados en variables____________________________________
//_________________________________ENVIO el mail a Latteros_____________________________________

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings

      $mail->SMTPDebug = 4;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      // $mail->Host = 'smtp.lattedev.com';                    // Specify main and backup SMTP servers
      $mail->Host = gethostbyname('mail.idemomotors.com');
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'idemo@idemomotors.com';                // SMTP username
      $mail->Password = 'Idemomotors25';                       // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to

      $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ));


      //Recipients
    $mail->setFrom('idemo@idemomotors.com', 'Consulta Idemo');
    $mail->addAddress('molinerozadkiel@gmail.com', 'Zack');          // Add a recipient
    // $mail->addAddress('tomas.moralparra@gmail.com', 'Tomm');         // Name is optional
    // $mail->addAddress('rafmoline@gmail.com', 'Ralf');                // Name is optional

      // $mail->addAddress($email_address, $first_name);     // Add a recipient



      // $mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('molinerozadkiel@gmail.com', 'Info');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nueva consulta de '.$first_name;
    $mail->Body    =
    'data1 '.$a1.'<br>'.
    'data2 '.$a2.'<br>'.
    'data3 '.$a3.'<br>'.
    'data4 '.$a4.'<br>'.
    'data5 '.$a5.'<br>'.
    'data6 '.$a6.'<br>'.
    'data7 '.$a7.'<br>'.
    'fecha y hora '.$timestamp;



      $mail->AltBody = 'data1 '.$a1.'<br>'.
      'data2 '.$a2.'<br>'.
      'data3 '.$a3.'<br>'.
      'data4 '.$a4.'<br>'.
      'data5 '.$a5.'<br>'.
      'data6 '.$a6.'<br>'.
      'data7 '.$a7.'<br>'.
      'fecha y hora '.$timestamp;


      // header( "Location: $thankyou_page" );
      // header( "Location: index.php?mail=success" );
      header( "Location: https://www.idemomotors.com/?mail=success" );
      $mail->send();
      // echo 'Message has been sent';
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      // header( "Location: index.php?mail=error" );
  }

// echo "<script>window.location.href = 'http://www.idemomotors.com/';</script>";
      // header( "Location: index.php?mail=success" );




//_______________________________________$mail ENVIADO________________________________________
//__________________________________________GL_HF_____________________________________________?>
