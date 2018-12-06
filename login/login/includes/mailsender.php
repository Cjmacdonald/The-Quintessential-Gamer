<?php
class MailSender
{
    public function sendMail($email, $user, $id, $type)
    {
        require 'scripts/PHPMailer/PHPMailerAutoload.php';
        include 'config.php';

        $finishedtext = $active_email;
        $verifyurl = "http://localhost:4000/The_quintessential_gamer/index.php";

        $mail = new PHPMailer;
        $mail->isHTML(true);
        $mail->CharSet = "text/html; charset=UTF-8;";
        $mail->WordWrap = 80;
        $mail->setFrom($from_email, $from_name);
        $mail->AddReplyTo($from_email, $from_name);
        $mail->addAddress($email, $user);

        if ($type == 'Verify') {
            $mail->Subject = $user . ' Account Verification';
            $mail->Body = $verifymsg . '<br><a href="'.$verifyurl.'">'.$verifyurl.'</a>';
            $mail->AltBody  =  $verifymsg . $verifyurl;

        } elseif ($type == 'Active') {
            $mail->Subject = $site_name . ' Account Created!';
            $mail->Body = $active_email . '<br><a href="'.$signin_url.'">'.$signin_url.'</a>';
            $mail->AltBody  =  $active_email . $signin_url;

        };
        if ($mailServerType == 'smtp') {
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = $smtp_server;
            $mail->SMTPSecure = $smtp_security;
            $mail->Port = $smtp_port;
            $mail->Username = $smtp_user;
            $mail->Password = $smtp_pw;
            $mail->SMTPDebug = 0;

        }

        try {

            $mail->Send();

        } catch (phpmailerException $e) {

            echo $e->errorMessage();

        } catch (Exception $e) {

            echo $e->getMessage();

        }
    }
}
