<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
require './config.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/credentials.env');
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['full_name_or_company_name'] = $_POST['full_name_or_company_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['website_type'] = $_POST['website_type'];
    $_SESSION['order_number'] = $_POST['order_number'];

    if (str_contains($_SESSION['email'], '.com' || '.ru' || '.ge')) {

        $full_name_or_company_name = $_SESSION['full_name_or_company_name'];
        $email = $_SESSION['email'];
        
        if ($_SESSION['website_type'] === 'landing') {
            $website_type = $lang['option_landing'];
        } else if ($_SESSION['website_type'] === 'corporate') {
            $website_type = $lang['option_corporate'];
        } else if ($_SESSION['website_type'] === 'online_webstore') {
            $website_type = $lang['option_online_webstore'];
        } else {
            $website_type = $lang['option_other'];
        }

        $order_number = $_SESSION['order_number'];

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = $_ENV['SMTP_HOST'];
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['SMTP_USER'];
            $mail->Password = $_ENV['SMTP_PASS'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';

            $mail->setFrom($email, $full_name_or_company_name);
            $mail->addAddress('kurdgelashvili2013@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = "ახალი შეკვეთა #" . $order_number;
            $mail->Body = "
                <h2>შემოვიდა ახალი შეკვეთა!</h2>

                <p>მონაცემები:</p>
                <ul>
                    <li>სახელი და გვარი/კომპანიის სახელწოდება: $full_name_or_company_name</li>
                    <li>ელ. ფოსტა: $email</li>
                    <li>ვებსაიტის ტიპი: $website_type</li>
                </ul>
            ";

            $mail->send();
            
            $mail->clearAddresses();
            $mail->clearAttachments();

            $mail->setFrom('kurdgelashvili2013@gmail.com');
            $mail->addAddress($email, $full_name_or_company_name);

            $mail->isHTML(true);
            $mail->Subject = "დიდი მადლობა ნდობისთვის!";
            $mail->Body = "
                <!DOCTYPE html>
                <html>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                </head>
                <body style='margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #001329; color: #f7f7f7;'>
                    
                    <!-- Main Container -->
                    <table width='100%' cellpadding='0' cellspacing='0' border='0' style='background-color: #001329;' role='presentation'>
                        <tr>
                            <td align='center' style='padding: 40px 20px;'>
                                
                                <!-- Content Container -->
                                <table width='600' cellpadding='0' cellspacing='0' border='0' style='max-width: 600px; margin: 0 auto;' role='presentation'>
                                    <tr>
                                        <td align='center' style='padding: 0;'>
                                            
                                            <!-- Main Heading -->
                                            <h2 style='color: #248aff; font-size: 24px; margin: 0 0 20px 0; padding: 0; font-weight: bold; line-height: 1.4;'>
                                                დიდი მადლობა, რომ სარგებლობთ ვებსაიტის შექმნის სერვისით!
                                            </h2>
                                            
                                            <!-- Description Text -->
                                            <p style='font-size: 17px; line-height: 1.6; margin: 0 0 30px 0; padding: 0 20px; color: #f7f7f7;'>
                                                დაგიკავშირდებით შეტყობინების მიღებიდან 24 საათის განმავლობაში. მანამდე კი შეგიძლიათ ნახოთ ჩემი ნამუშევარი :)
                                            </p>
                                            
                                            <!-- Social Media Section -->
                                            <div style='margin: 20px 0;'>
                                                <h3 style='color: #f7f7f7; font-size: 18px; margin: 0 0 15px 0; font-weight: bold;'>
                                                    სოციალური ქსელები:
                                                </h3>
                                                
                                                <!-- Social Media Icons -->
                                                <table cellpadding='0' cellspacing='0' border='0' style='margin: 0 auto;' role='presentation'>
                                                    <tr>
                                                        <!-- Facebook -->
                                                        <td style='padding: 0 8px;'>
                                                            <a href='https://www.facebook.com/shota.kurdgelashvili2003/' style='text-decoration: none;'>
                                                                <img src='https://shotakurdgelashvili.dev/img/facebook.png' 
                                                                    alt='Facebook' 
                                                                    width='45' 
                                                                    height='45' 
                                                                    style='display: block; border: 0; width: 45px; height: 45px;'>
                                                            </a>
                                                        </td>
                                                        
                                                        <!-- Instagram -->
                                                        <td style='padding: 0 8px;'>
                                                            <a href='https://www.instagram.com/shota_kurdgelashvili/' style='text-decoration: none;'>
                                                                <img src='https://shotakurdgelashvili.dev/img/instagram.png' 
                                                                    alt='Instagram' 
                                                                    width='45' 
                                                                    height='45' 
                                                                    style='display: block; border: 0; width: 45px; height: 45px;'>
                                                            </a>
                                                        </td>
                                                        
                                                        <!-- LinkedIn -->
                                                        <td style='padding: 0 8px;'>
                                                            <a href='https://www.linkedin.com/in/shota-kurdgelashvili-70438b237/' style='text-decoration: none;'>
                                                                <img src='https://shotakurdgelashvili.dev/img/linkedin.png' 
                                                                    alt='LinkedIn' 
                                                                    width='45' 
                                                                    height='45' 
                                                                    style='display: block; border: 0; width: 45px; height: 45px;'>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            
                                            <!-- Footer Note -->
                                            <p style='font-size: 12px; color: #999; margin: 30px 0 0 0; padding: 20px 0 0 0; border-top: 1px solid #333;'>
                                                ეს არის ავტომატური შეტყობინება. გთხოვთ არ უპასუხოთ ამ წერილს Reply-ით.
                                            </p>
                                            
                                        </td>
                                    </tr>
                                </table>
                                
                            </td>
                        </tr>
                    </table>
                    
                </body>
                </html>
            ";
            $mail->AltBody = "დიდი მადლობა, რომ შეიძინეთ ჩემი სერვისი! დაგიკავშირდებით დღის განმავლობაში, შეტყობინების მიღებიდან არაუგვიანეს 24 საათში, მანამდე კი შეგიძლიათ ნახოთ ჩემი ნამუშევარი :) https://shotakurdgelashvili.dev. სოციალური ქსელები: Facebook - https://www.facebook.com/shota.kurdgelashvili2003, Instagram - https://www.instagram.com/shota_kurdgelashvili/, LinkedIn - https://www.linkedin.com/in/shota-kurdgelashvili-70438b237/";

            $mail->send();
            $mail->smtpClose();

            header("Location: success.php");

        } catch (Exception $e) {
            echo "Message could not be sent. Error: {$mail->ErrorInfo}";
            header("Location: fail.php");
        }

    } else {
        header("Location: fail.php");
        session_destroy();
        exit();
    }

} else {
    die("Invalid Request Method");
}