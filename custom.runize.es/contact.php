<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'assets/php/phpmailer/src/PHPMailer.php';


//======================================================================
// Variables
//======================================================================

//E-mail address. Enter your email
define("__TO__", "pedidos@runize.es");
define("__TONAME__", "Norberto Herrera");

//Success message
define('__SUCCESS_MESSAGE__', "Su mensaje ha sido enviado correctamente. Nos pondremos en contacto contigo pronto. ¡Gracias!");

//Error message
define('__ERROR_MESSAGE__', "Su mensaje no ha podido ser enviado Por favor, inténtelo de nuevo.");

//Messege when one or more fields are empty
define('__MESSAGE_EMPTY_FIELDS__', "Por favor, rellene todos los campos");


//======================================================================
// Functions
//======================================================================

//E-mail validation
function check_email($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else {
        return false;
    }
}

//E-mail validation
function check_phone($phone){
    $numbersOnly = preg_replace("[^0-9]", "", $phone);
    $numberOfDigits = strlen($numbersOnly);
    if ($numberOfDigits == 9) {
        return true;
    } else {
        return false;
    }
}




if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['subjectForm']) && isset($_POST['messageForm'])){
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $subjectForm = $_POST['subjectForm'];
    $messageForm = $_POST['messageForm'];
    if($name == '') {
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca su nombre"));
        exit();
    } else if(($email == '') || (check_email($email) == false)){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca una dirección mail válida."));
        exit();
    } else if(($phone == '') || (check_phone($phone) == false)){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca un teléfono válido."));
        exit();
    } else if($subjectForm == ''){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca un asunto"));
        exit();
    } else if($messageForm == ''){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca su mensaje"));
        exit();
    } else {
        $message = '
            <html>
            <head>
              <title>Contacto web Runize.es</title>
            </head>
            <body>
              <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
                <tr style="height: 32px;">
                  <th align="right" style="width:150px; padding-right:5px;">Nombre:</th>
                  <td align="left" style="padding-left:5px; line-height: 20px;">'. $name .'</td>
                </tr>
                <tr style="height: 32px;">
                  <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
                  <td align="left" style="padding-left:5px; line-height: 20px;">'. $email .'</td>
                </tr>
                <tr style="height: 32px;">
                  <th align="right" style="width:150px; padding-right:5px;">Teléfono:</th>
                  <td align="left" style="padding-left:5px; line-height: 20px;">'. $phone .'</td>
                </tr>
                <tr style="height: 32px;">
                  <th align="right" style="width:150px; padding-right:5px;">Asunto:</th>
                  <td align="left" style="padding-left:5px; line-height: 20px;">'. $subjectForm .'</td>
                </tr>
                <tr style="height: 32px;">
                  <th align="right" style="width:150px; padding-right:5px;">Mensaje:</th>
                  <td align="left" style="padding-left:5px; line-height: 20px;">'. $messageForm  .'</td>
                </tr>
              </table>
            </body>
            </html>
        ';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: ' . $mail . "\r\n";

        $mail = new PHPMailer;
        $mail->setFrom('host@runize.es', 'Contacto Web Runize');
        $mail->addAddress(__TO__, __TONAME__);

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject  = $subjectForm;
        $mail->Body     = $message;
        if(!$mail->send()) {
            echo json_encode(array('info' => 'error', 'phpMailError' => $mail->ErrorInfo, 'msg' => __ERROR_MESSAGE__));
        } else {
            echo json_encode(array('info' => 'success', 'msg' => __SUCCESS_MESSAGE__));
        }
    }
}
else {
    echo json_encode(array('info' => 'error', 'msg' => __MESSAGE_EMPTY_FIELDS__));
    exit();
}


// $mail = new PHPMailer;
// $mail->setFrom('from@example.com', 'Your Name');
// $mail->addAddress(__TO__, __TONAME__);
// $mail->Subject  = 'First PHPMailer Message';
// $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
// if(!$mail->send()) {
//   echo 'Message was not sent.';
//   echo 'Mailer error: ' . $mail->ErrorInfo;
// } else {
//   echo 'Message has been sent.';
// }

 ?>