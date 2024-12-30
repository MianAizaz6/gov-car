<?php
require '../../vendor/autoload.php';
require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'dvlabuyq_gov_car');


// first page varriables
$v_registration = isset($_SESSION['v_registration']) ? $_SESSION['v_registration'] : 'N/A';
$v_certificate = isset($_SESSION['v_certificate']) ? $_SESSION['v_certificate'] : 'N/A';
$s_email = isset($_SESSION['email']) ? $_SESSION['email'] : 'N/A';
$business_type = isset($_SESSION['bussiness_type']) ? $_SESSION['bussiness_type'] : 'N/A';
$make = isset($_SESSION['v_make']) ? $_SESSION['v_make'] : 'N/A';
$model = isset($_SESSION['v_model']) ? $_SESSION['v_model'] : 'N/A';

// second page varriables
$c_title = isset($_SESSION['privatekeeper_title.titleOption']) ? $_SESSION['privatekeeper_title.titleOption'] : 'N/A';
$c_FirstName = isset($_SESSION['privatekeeper_firstname']) ? $_SESSION['privatekeeper_firstname'] : 'N/A';
$c_LastName = isset($_SESSION['privatekeeper_lastname']) ? $_SESSION['privatekeeper_lastname'] : 'N/A';
$seller_d0b = $_SESSION['seller_dob'];
$seller_licence = $_SESSION['privatekeeper_drivernumber'];
$buyer_email = $_SESSION['privatekeeper_email.email'];
$postalCode =  isset($_SESSION['privatekeeper_postcode']) ? $_SESSION['privatekeeper_postcode'] : 'N/A';
$address =  isset($_SESSION['address']) ? $_SESSION['address'] : 'N/A';


// third page varriables
$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 'N/A';
$date_of_sale =  isset($_SESSION['vehicle_date_of_sale']) ? $_SESSION['vehicle_date_of_sale'] : 'N/A';
$vehicle_mileage =  $_SESSION['mileage'];

// Function to generate a random transaction ID in the desired format
function generateTransactionId()
{
  $prefix = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 7)); // Generate a 7-character alphanumeric string
  $suffix = rand(10000000000, 99999999999); // Generate an 11-digit number
  return $prefix . '-' . $suffix;
}

// Generate and store the transaction ID
$trx_id = generateTransactionId();
$_SESSION['trx_id'] = $trx_id; // Store in session


$trx_date = date('Y-m-d');
// Store it in the session for use on the next page
$_SESSION['trx_date'] = $trx_date;


$query = "INSERT INTO vehicle_sale (
  v_registration, 
  v_certificate, 
  v_make, 
  v_model, 
  business_type, 
  seller_title, 
  seller_first_name, 
  seller_last_name, 
  seller_email, 
  seller_dob,
  seller_licence, 
  buyer_email, 
  postal_code, 
  address, 
  vehicle_mileage, 
  v_date_of_sale, 
  trx_id,
  trx_date,
  user_id
) VALUES (
  '$v_registration',
  '$v_certificate',
  '$make',
  '$model',
  '$business_type',
  '$c_title',
  '$c_FirstName',
  '$c_LastName',
  '$s_email',
  '$seller_d0b',
  '$seller_licence',
  '$buyer_email',
  '$postalCode',
  '$address',
  '$vehicle_mileage',
  '$date_of_sale',
  '$trx_id',
  '$trx_date',
  '$userId'
)";

// Execute the query
if (mysqli_query($conn, $query)) {



  $mail = new PHPMailer(true);

  try {
    // Server settings
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.dvla-buy-sell-service.com';                       // SMTP server
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@dvla-buy-sell-service.com';                 // SMTP username
    $mail->Password   = 'Zg7Knlb4-DDFa';                  // SMTP password or app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable SSL encryption
    $mail->Port       = 465;                                    // TCP port for SSL

    // Recipients
    $mail->setFrom('info@dvla-buy-sell-service.com', 'Buy-Sell-Services');
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
    <div style="text-align: center;">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/GOV.UK_logo.svg/320px-GOV.UK_logo.svg.png" alt="GOV.UK Logo" style="max-width: 150px;">
    </div>
    <div style="margin-top: 20px;">
        <h1 style="font-size: 18px; color: #000;">Driver & Vehicle Licensing Agency</h1>
        <p style="margin: 10px 0;">DVLA has been notified electronically that you are now the new keeper of vehicle registration number: <span style="font-weight: bold;">' . $v_registration . '</span></p>
        <p style="margin: 10px 0;">The online Transaction ID is: <span style="font-weight: bold;">' . $trx_id . '</span></p>
        <p style="margin: 10px 0;">You should receive your new V5C registration certificate (logbook) within 2 weeks.</p>
        <p style="margin: 10px 0;">Since 1st October 2014, vehicle tax can no longer be transferred as part of the sale. This is because the seller will automatically receive a refund of any remaining tax.</p>
        <p style="margin: 10px 0;">You must tax this vehicle before it is driven on the road, tax now at <a href="https://www.gov.uk/vehicletax" style="color: #0066cc; text-decoration: none;">www.gov.uk/vehicletax</a>.</p>
        <p style="margin: 10px 0;">If you do not want to tax you can make a SORN declaration now at <a href="https://www.gov.uk/sorn" style="color: #0066cc; text-decoration: none;">www.gov.uk/sorn</a>.</p>
        <p style="margin: 10px 0;">For more information on driving and transport go to <a href="https://www.gov.uk/browse/driving" style="color: #0066cc; text-decoration: none;">www.gov.uk/browse/driving</a>.</p>
        <p style="margin: 10px 0;">You may wish to save or print this email confirmation for your records.</p>
        <p style="margin: 10px 0;">Yours sincerely,<br>Anthony Bamford<br>Vehicles Service Manager</p>
    </div>
    <div style="margin-top: 20px; font-size: 12px; color: #888; text-align: center;">
        <p style="margin: 10px 0;">THIS IS AN AUTOMATED EMAIL - Please do not reply as emails received at this address cannot be responded to.</p>
    </div>
</div>
</div>';

    $mail->AltBody = 'Please check the details of the vehicle sale in the HTML version of this email.';
    $mail->send();

    echo 'Message has been sent successfully.';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }





  // Redirect to a success page or show a success message
  header('Location:../6 - Summary - Private sale of a vehicle - GOV.UK.php?success');
  exit;
} else {

  header('Location:../6 - Summary - Private sale of a vehicle - GOV.UK.php?failed');
  exit;
}
