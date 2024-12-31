<?php
session_start();
require '../../vendor/autoload.php';
require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ZU=IK.,=FX#4

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
if (!empty($input['email'])) {
  $mail = new PHPMailer(true);

  $s_email = $_SESSION['email'] ?? null;
  $v_registration = $_SESSION['v_registration'] ?? 'Unknown';
  $trx_id = $_SESSION['trx_id'] ?? 'Unknown';
  try {
    // Server settings
    $mail->isSMTP();                              // Set mailer to use SMTP
    $mail->Host       = 'smtp.us.appsuite.cloud';                       // SMTP server
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply-dvla@buysellvehicle.co.uk';                 // SMTP username
    $mail->Password   = 'ZU=IK.,=FX#4';                  // SMTP password or app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable SSL encryption
    $mail->Port       = 465;                                    // TCP port for SSL

    // Recipients
    $mail->setFrom('noreply-dvla@buysellvehicle.co.uk', 'Buy-Sell-Services');
    $mail->addAddress($s_email, 'Support team'); // Add a recipient

    // Content
    // $mail->isHTML(true);                                        // Set email format to HTML
    // $mail->Subject = 'Test Email';
    // $mail->Body    = "<h1>This is a test email</h1><p>'".$_SESSION."'</p>";
    // $mail->AltBody = 'This is the plain text version of the email content.';

    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Vehicle Sale Details';
    $mail->Body = '<div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f9f9f9; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 20px auto; background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
        <!-- Header -->
        <div style="display: flex; align-items: center; gap: 4px; padding: 7px; background-color: #000; border-radius: 5px 5px 0 0;">
            <img src="https://res.cloudinary.com/dltiu8vbe/image/upload/v1735684062/Screenshot_2025-01-01_at_3.27.20_AM_tgitsq.png" 
                 alt="GOV.UK Logo" style="height:35px; width:35px"
                 />
            <span style="font-size: 20px; margin-left:-5px; margin-top:3px; font-weight: 500; color: white; text-decoration:none;">GOV<span>.</span>UK</span>
        </div>

        <!-- Body -->
        <div style="margin-top: 20px; padding:0px 30px;">
            <p style="font-size: 14px; color: #000; display:flex; gap:3px; align-items:center"> <span> <img src="https://res.cloudinary.com/dltiu8vbe/image/upload/v1735683762/govuk-crest-d409ea573e5aaadc4412628fe98b2e0c021afcbb7860774383cf734475e8d672_vt2moo.png" style="height:20px; margin-right:3px; width:20px;" /> </span> Driver & Vehicle Licensing Agency</p>
            <p style="margin: 10px 0; color:black;">DVLA has been notified electronically that you are now the new keeper of vehicle registration number: <span style="font-weight: bold;">' . $v_registration . '</span></p>
            <p style="margin: 10px 0; color:black;">The online Transaction ID is: <span style="font-weight: bold;">' . $trx_id . '</span></p>
            <p style="margin: 10px 0; color:black;">You should receive your new V5C registration certificate (logbook) within 2 weeks.</p>
            <p style="margin: 10px 0; color:black;">Since 1st October 2014, vehicle tax can no longer be transferred as part of the sale. This is because the seller will automatically receive a refund of any remaining tax.</p>
            <p style="margin: 10px 0; color:black;">You must tax this vehicle before it is driven on the road, tax now at <a href="https://www.gov.uk/vehicletax" style="color: #0066cc; text-decoration: none;">www.gov.uk/vehicletax</a>.</p>
            <p style="margin: 10px 0; color:black;">If you do not want to tax you can make a SORN declaration now at <a href="https://www.gov.uk/sorn" style="color: #0066cc; text-decoration: none;">www.gov.uk/sorn</a>.</p>
            <p style="margin: 10px 0; color:black;">For more information on driving and transport go to <a href="https://www.gov.uk/browse/driving" style="color: #0066cc; text-decoration: none;">www.gov.uk/browse/driving</a>.</p>
            <p style="margin: 10px 0; color:black;">You may wish to save or print this email confirmation for your records.</p>
            <p style="margin: 10px 0; color:black;">Yours sincerely,<br>Anthony Bamford<br>Vehicles Service Manager</p>
        </div>

        <!-- Footer -->
        <div style="margin-top: 20px; font-size: 12px; color: #888; text-align: center;">
            <p style="margin: 10px 0;">THIS IS AN AUTOMATED EMAIL - Please do not reply as emails received at this address cannot be responded to.</p>
        </div>
    </div>
</div>
';

    $mail->AltBody = 'Please check the details of the vehicle sale in the HTML version of this email.';
    $mail->send();

    echo 'Message has been sent successfully.';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
} else {
  echo json_encode(['status' => 'error', 'message' => 'Email not provided.']);
}
