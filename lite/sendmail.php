<?
require("phpmailer/class.phpmailer.php"); // path to the PHPMailer class.
$fm = $_POST['mail'];
$to = "naruphon12ball@gmail.com"; //อีเมล์ของผู้รับ
$cc = "";
$bcc = "";
$subj = $_POST['header'];
$mesg = $_POST['messages'];
$mail = new PHPMailer();
$mail->CharSet = "utf-8"; 
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPAuth = true;
/* ------------------------------------------------------------------------------------------------------------- */
/* ตั้งค่าการส่งอีเมล์ โดยใช้ SMTP ของ Gmail */
$is_gmail = true;

if($is_gmail)
        {
            $mail->SMTPSecure = 'tls'; 
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;  
			$mail->Username   = "itsut2770@gmail.com";  // GMAIL username
			$mail->Password   = "b5871858";            // GMAIL password
        }
        else
        {
            $mail->Host = 'smtp.mail.google.com';
			$mail->Username   = "itsut2770@gmail.com";  // GMAIL username
			$mail->Password   = "b5871858";            // GMAIL password
		}
/* --------------------------------------------------------------------------------------------------------------- */
$mail->From = $fm;
$mail->AddAddress($to);
$mail->AddReplyTo($fm);
$mail->AddCC($cc);
$mail->AddBCC($bcc);
$mail->Subject = $subj;
$mail->Body     = $mesg;
$mail->WordWrap = 50;  
//
if(!$mail->Send()) {
echo "<meta name='language' content='TH'>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
echo 'Message was not sent.';
echo 'Could not send email at this time' . $mail->ErrorInfo;
exit;
} else {
echo "<meta name='language' content='TH'>";
echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";
echo 'Email Sent Success';
}
?>
