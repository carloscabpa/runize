<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/php/phpmailer/src/Exception.php';
require 'assets/php/phpmailer/src/PHPMailer.php';
require 'assets/php/phpmailer/src/SMTP.php';


//======================================================================
// Variables
//======================================================================


//E-mail address. Enter your email
define("__TO__", "pedidos@runize.es");

//Success message
define('__SUCCESS_MESSAGE__', "Su mensaje ha sido enviado correctamente. Nos pondremos en contacto contigo pronto. ¡Gracias!");

//Error message
define('__ERROR_MESSAGE__', "Su mensaje no ha podido ser enviado Por favor, inténtelo de nuevo.");

//Messege when one or more fields are empty
define('__MESSAGE_EMPTY_FIELDS__', "Por favor, rellene todos los campos");


//======================================================================
// Do not change
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

//Send mail
function send_mail($from, $name, $subject, $message, $headers){

    //Create a new PHPMailer instance
//     $mail = new PHPMailer();
//     $mail->isSendmail(); // Set PHPMailer to use the sendmail transport

// $mail->Host = 'smtp.1and1.es';
// $mail->Port = 25;
// $mail->SMTPAuth = true;
// $mail->Username = 'pedidos@runize.es';
// $mail->Password = '*Runize.Mail*';

//     $mail->setFrom($from , $name); //Add a from
//     $mail->addReplyTo($from , $name);
//     $mail->addAddress(__TO__, 'Norberto Herrera'); //Add a recipient
//     $mail->Subject = $subject;
//     $mail->msgHTML($message);

    if(mail($from, $subject, $message, $headers)){
        echo json_encode(array('info' => 'success', 'msg' => __SUCCESS_MESSAGE__));
    } else {
        echo json_encode(array('info' => 'error', 'msg' => __ERROR_MESSAGE__));

    }

// if(mail($from, $subject, $message, $headers)){
//     return true;
// }
// else {
//     return false;
// }


}

//Get data form and send mail
if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subjectForm']) && isset($_POST['messageForm'])){

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $subjectForm = $_POST['subjectForm'];
    $messageForm = $_POST['messageForm'];

    if($name == '') {
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca su nombre"));
        exit();
    } else if(($mail == '') || (check_email($mail) == false)){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca una dirección mail válida."));
        exit();
    } else if($subjectForm == ''){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca un asunto"));
        exit();
    } else if($messageForm == ''){
        echo json_encode(array('info' => 'error', 'msg' => "Por favor, introduzca su mensaje"));
        exit();
    } else {
        $from = $mail;
        $subject = $subjectForm . ' ' . $name;
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
              <td align="left" style="padding-left:5px; line-height: 20px;">'. $mail .'</td>
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

        send_mail($from, $name, $subject, $message, $headers);
    }
} else {
    echo json_encode(array('info' => 'error', 'msg' => __MESSAGE_EMPTY_FIELDS__));
    exit();
}


 ?>