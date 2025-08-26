<?php

namespace System\Service\Support\Mail;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use System\Config\Config;

class Mail
{
    public function send($emailAddress, $subject, $body)
    {
        $mail = new PHPMailer(Config::get('mail.SMTP.PHPMailer'));

        try {

            $mail->CharSet = Config::get('mail.SMTP.CharSet');
            //Server settings
            $mail->SMTPDebug = Config::get('mail.SMTP.SMTPDebug');
            $mail->isSMTP();
            $mail->Host       = Config::get('mail.SMTP.Host');
            $mail->SMTPAuth   = Config::get('mail.SMTP.SMTPAuth');
            $mail->Username   = Config::get('mail.SMTP.Username');
            $mail->Password   = Config::get('mail.SMTP.Password');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = Config::get('mail.SMTP.Port');

            //Recipients
            $mail->setFrom(Config::get('mail.SMTP.setFrom.mail'), Config::get('mail.SMTP.setFrom.name'));
            $mail->addAddress($emailAddress);

            //Content
            $mail->isHTML(Config::get('mail.SMTP.HTML'));
            $mail->Subject = $subject;
            $mail->Body  = $body;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }

    public static function __callStatic($name, $arguments)
    {
        $instance = new Mail();
        return call_user_func_array(array($instance, $name), $arguments);
    }
}
