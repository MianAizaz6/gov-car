<?php

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
  // $prefix = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 7)); // Generate a 7-character alphanumeric string
  $suffix = rand(10000000000, 99999999999); // Generate an 11-digit number
  return $_SESSION['v_registration'] . '-' . $suffix;
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
  // Redirect to a success page or show a success message
  header('Location:../6 - Summary - Private sale of a vehicle - GOV.UK.php?success&send_email=true');
  exit;
} else {

  header('Location:../6 - Summary - Private sale of a vehicle - GOV.UK.php?failed');
  exit;
}
