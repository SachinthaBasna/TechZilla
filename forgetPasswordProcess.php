<?php
include "connection.php";
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


$email = $_POST["e"];
$vcode = uniqid();


$rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $email . "'");
$num = $rs->num_rows;

if ($num > 0) {
    Database::iud("UPDATE `user` SET `v_code` = '" . $vcode . "' WHERE `email` = '" . $email . "'");

    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sachinthab99@gmail.com';
        $mail->Password = 'rkzkeyqnafqetdhg';   // App password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('sachinthab99@gmail.com', 'TechZilla');
        $mail->addReplyTo('Info@example.com', 'Information');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Reset Your Password';
        $mail->Body = '
        
            <table style="width: 50%; font-family: sans-serif; border: 1px solid black;"  align="center">
                <tbody >
                    <tr style="border: 1px solid black;">
                        <td align="center">
                            <table style="max-width: 600px;">
                                <tr>
                                    <td align="center">
                                        <a href="#"
                                            style="font-size: 45px; font-weight: bold; color: black; text-decoration: none;">TechZilla
                                    </td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-top: 2px solid black; line-height: 35px;">
                                        <h1>Reset your Password</h1>
                                        <p style="margin-bottom: 24px;">You can change your password by clicking the button below.
                                        </p>
                                        <div>
                                            <a href="http://localhost/TechZilla/resetpassword.php?vcode=' . $vcode . '" style="color: white;text-decoration: none; display: inline-block; padding: 10px 20px; background-color: blue;">
                                                Reset Password
                                            </a>
                                        </div>
                                        <p style="margin-top: 20px;">If you don\'t ask to reset your password, you can ignore this email.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="center">
                                        <p>&copy; techZilla | All rights reserved</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        ';

        $mail->send();
        echo ("success");
    } catch (Exception $email) {
        echo ("Message could not be send. Mailer Error:  {$mail->ErrorInfo}");
    }
} else {
    echo ("User Not Found! Please Check your Email");
}
?>