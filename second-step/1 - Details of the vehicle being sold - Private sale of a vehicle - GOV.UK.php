<?php
include('../admin/inc/conn.php');

// if (isset($_POST['submit'])) {
//    $v_registration = mysqli_real_escape_string($conn, $_POST['registration']);
//    $v_certificate = mysqli_real_escape_string($conn, $_POST['certificate']);
//    $s_email = mysqli_real_escape_string($conn, $_POST['email']);
//    $verify_email = mysqli_real_escape_string($conn, $_POST['v_email']);
//    $radio_option = mysqli_real_escape_string($conn, $_POST['bussiness']);


//     $sql = "INSERT INTO vehical_detail (`vehical_reg_num`, `vehical_certificate`,`seller_email`,`confirm_email`,`vehical_sell`) VALUES ('$v_registration', '$v_certificate','$s_email','$verify_email','$radio_option')";
//     $run = mysqli_query($conn, $sql);

//     if ($sql) {
//         echo "Success";
//     } else {
//         echo "Failed";
//     }
// }\

// echo $sql;
// }

session_start();

if (isset($_POST['submit'])) {
   // Database connection
   // Replace $conn with your actual connection setup
   if (!$conn) {
      die("Database connection failed: " . mysqli_connect_error());
   }

   // Sanitize input
   $s_email = mysqli_real_escape_string($conn, $_POST['email']);
   $verify_email = mysqli_real_escape_string($conn, $_POST['v_email']);
   $v_registration = mysqli_real_escape_string($conn, $_POST['registration']);
   $v_certificate = mysqli_real_escape_string($conn, $_POST['certificate']);
   $radio_option = mysqli_real_escape_string($conn, $_POST['bussiness']);

   // Store values in the session
   $_SESSION['v_registration'] = $v_registration;
   $_SESSION['v_certificate'] = $v_certificate;
   $_SESSION['email'] = $s_email;
   $_SESSION['bussiness_type'] = $radio_option;

   // Redirect to the next page or perform further processing
   header('Location: 2 - Enter new keeper details - Private sale of a vehicle - GOV.UK.php'); // Replace with your next page

   // Check if email and confirm email match
   if ($s_email !== $verify_email) {
      $_SESSION['error_message'] = "Email and Confirm Email do not match.";
      header('Location: 1 - Details of the vehicle being sold - Private sale of a vehicle - GOV.UK.php'); // Replace with the actual form page name

   } else {
      header('Location: 2 - Enter new keeper details - Private sale of a vehicle - GOV.UK.php');
      exit;
   }
}

?>



<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!--<base href="#">-->
   <base href=".">
   <meta name="download_date" content="2024-01-08T16:55:45.995Z">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Details of the vehicle being sold - Private sale of a vehicle - GOV.UK</title>
   <link href="./styles.css" rel="stylesheet" type="text/css" />
   <link href="../style.css" rel="stylesheet" type="text/css" />

   <!--<![endif]-->
   <!--[if IE 8]>
      <link rel="stylesheet" href="#" type="text/css">
      <![endif]-->
   <link rel="shortcut icon" href="https://dvla-buysell-service.com/buysell-service/index.html#" type="image/x-icon">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/index.html#">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/index.html#"
      sizes="72x72">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/index.html#"
      sizes="76x76">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/index.html#"
      sizes="114x114">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/index.html#"
      sizes="120x120">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/index.html#"
      sizes="144x144">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/index.html#"
      sizes="152x152">
   <base href=".">


   <!-- <script>
      async function getCarDetails(event) {
         const registrationNumber = event.target.value;

         if (!registrationNumber) {
            alert("Please enter a valid car registration number.");
            return;
         }

         const apiKey = "2e1b4d62c8e142e04595668ce27c1b06";
         const url = `https://api.checkcardetails.co.uk/vehicledata/ukvehicledata?apikey=${apiKey}&vrm=${registrationNumber}`;

         try {
            const response = await fetch(url);
            if (!response.ok) {
               throw new Error(`Error fetching data: ${response.status}`);
            }

            const carData = await response.json();

            const make = carData?.VehicleRegistration?.Make;
            const model = carData?.VehicleRegistration?.Model;
            console.log('===', make);
            console.log('===', make);
            console.log('===', carData.VehicleRegistration);
         } catch (error) {
            console.error(error);
         }
      }
   </script> -->
</head>

<body class="js-enabled vsc-initialized" data-closing-time="1140">
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVJJC8C8" height="0" width="0"
         style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   <div id="global-cookie-message">
      <div class="cookie-message-wrapper">
         <p>GOV.UK uses cookies to make the site simpler.&nbsp;<a
               href="https://dvla-buysell-service.com/buysell-service/index.html#">Find out more about cookies</a></p>
      </div>
   </div>
   <a href="" class="govuk-skip-link">Skip to main
      content</a>
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
                  <span class="govuk-header__logotype-text" style="color: white; font-weight: 100 !important;">
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
                  <a class="govuk-link" id="feedback-open" href="" target="_blank">your
                     feedback</a>
                  will help us to improve it
               </span>
            </p>
         </div>
         <div class="section-content">
            <a class="govuk-back-link" id="back"
               href="https://dvla-buysell-service.com/buysell-service/index.html#">Back</a>
            <script>
               document.getElementById('back').addEventListener('click', function() {
                  history.back();
               });
            </script>
            <script>
               document.getElementById('back').addEventListener('click', function() {
                  history.back();
               });
            </script>
         </div>
         <main class="govuk-main-wrapper" id="main-content">
            <div class="app vehicles-change-keeper-online">
               <div class="two-col clearfix vehicle-lookup">
                  <div class="second-col">
                     <div style="font-weight:bold;" class="govuk-warning-text">
                        <span class="govuk-warning-text__icon" aria-hidden="true">!</span>
                        <strong class="govuk-warning-text__text">
                           <span class="govuk-warning-text__assistive">Warning</span>
                           <p>Do not use this service if you have sold your vehicle to a motor trader or garage. If you
                              have sold your vehicle to a motor trader or garage then please select this link.
                              &nbsp;<a href="https://dvla-buysell-service.com/buysell-service/index.html#">Sold your
                                 vehicle into the motor trade</a>
                           </p>
                        </strong>
                     </div>
                     <h1>Details of the vehicle being sold</h1>
                     <div class="form-steps">
                        <form action=""
                           method="POST" enctype="multipart/form-data">
                           <div class="step uppercase-input">
                              <div class="form-item">
                                 <label for="vehicleRegistrationNumber">
                                    Vehicle registration number
                                 </label>
                                 <span class="form-hint" id="vehicleRegistrationNumber-hint"></span>
                                 <input class="govuk-input" id="registration" required=""
                                    name="registration" value="" type="text"
                                    aria-describedby="vehicleRegistrationNumber-hint"
                                    onkeypress="check(event, this, /[a-zA-Z0-9]/);"
                                    onblur="getCarDetails()"
                                    autocomplete="off" maxlength="8">
                                 <div style="text-align: center; margin: 50px;">

                                 </div>
                              </div>
                              <div class="form-item">
                                 <label for="documentReferenceNumber">
                                    Latest V5C registration certificate (logbook) document reference number
                                 </label>
                                 <input class="govuk-input" id="documentReferenceNumber" name="certificate"
                                    value="" required="" type="tel" onkeypress="check(event, this, /[0-9]/);" title=""
                                    autocomplete="off"
                                    imgsrc="/sell-private/assets/images/b3b6317e5d209548ef6b7c3877b8dd94-V5Creferencehint.png"
                                    minlength="11" maxlength="11">

                                 <details class="govuk-details" data-module="govuk-details">
                                    <summary class="govuk-details__summary">
                                       <span class="govuk-details__summary-text">
                                          Where to find your V5C document reference number
                                       </span>
                                    </summary>
                                    <div class="govuk-details__text">
                                       <img alt="The V5C reference number can be located under Registered keeper"
                                          src="data:image/png;base64,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">
                                    </div>
                                 </details>
                              </div>
                              <div class="form-item">
                                 <div id="vehicleSellerEmailOption">
                                    <div class="govuk-form-group">
                                       <fieldset class="govuk-fieldset">
                                          <legend>Do you want an email confirmation of the sale?</legend>
                                          <div class="govuk-radios govuk-radios--conditional" data-module="govuk-radios">
                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input ga-track-value"
                                                   data-ga-action="vehicleSellerEmailOption" data-ga-label="provided"
                                                   data-target="#vehicleSellerEmailOption"
                                                   id="vehicleSellerEmailOption_visible" name="vehicleSellerEmailOption"
                                                   value="visible" showerrors="false" type="radio"
                                                   aria-controls="conditional-vehicleSellerEmailOption"
                                                   aria-expanded="false" required="">
                                                <label class="govuk-label govuk-radios__label"
                                                   for="vehicleSellerEmailOption_visible">
                                                   Yes
                                                </label>
                                             </div>
                                             <div class="govuk-radios__conditional govuk-radios__conditional"
                                                id="conditional-vehicleSellerEmailOption">
                                                <div class="govuk-form-group">
                                                   <div class="form-item" id="vehicleSellerEmail">
                                                      <div class="form-item">
                                                         <label for="vehicleSellerEmail_email">
                                                            Seller's email address
                                                         </label>
                                                       

                                                         <input class="govuk-input" id="vehicleSellerEmail_email"
                                                            name="email" value="" type="text"
                                                            no_optional_label="true" maxlength="254" autocomplete="on">
                                                      </div>
                                                      <div class="form-item">
                                                         <label for="confirmemail">
                                                            Confirm email address
                                                         </label>
                                                         <input class="govuk-input js-email-confirm"
                                                            id="vehicleSellerEmail_email-verify"
                                                            name="v_email" value="" type="text"
                                                            no_optional_label="true" autocomplete="off" maxlength="254">

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input ga-track-value"
                                                   data-ga-action="vehicleSellerEmailOption" data-ga-label="absent"
                                                   data-target="#vehicleSellerEmailOption"
                                                   id="vehicleSellerEmailOption_invisible" name="vehicleSellerEmailOption"
                                                   value="invisible" showerrors="false" type="radio"
                                                   data-aria-controls="conditional-vehicleSellerEmailOption-2" required="">
                                                <label class="govuk-label govuk-radios__label"
                                                   for="vehicleSellerEmailOption_invisible">
                                                   No
                                                </label>
                                             </div>
                                          </div>
                                       </fieldset>

                                    </div>
                                    <?php
                                    if (!empty($_SESSION['error_message'])): ?>
                                       <div class="govuk-error-message">
                                          <?= htmlspecialchars($_SESSION['error_message']); ?>
                                       </div>
                                    <?php endif; ?>
                                 </div>
                                 <style>
                                    .govuk-radios__conditional {
                                       display: none;
                                    }
                                 </style>
                                 <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                       var yesRadio = document.getElementById('vehicleSellerEmailOption_visible');
                                       var noRadio = document.getElementById('vehicleSellerEmailOption_invisible');
                                       var conditionalContainer = document.getElementById('conditional-vehicleSellerEmailOption');

                                       // Check if the radio buttons and container exist
                                       if (yesRadio && noRadio && conditionalContainer) {
                                          // Add an event listener to the "Yes" radio button
                                          yesRadio.addEventListener('change', function() {
                                             // Check if the "Yes" radio button is checked
                                             if (yesRadio.checked) {
                                                // Display the conditional container
                                                conditionalContainer.style.display = 'block';
                                             } else {
                                                // Hide the conditional container
                                                conditionalContainer.style.display = 'none';
                                             }
                                          });

                                          // Add an event listener to the "No" radio button
                                          noRadio.addEventListener('change', function() {
                                             // Check if the "No" radio button is checked
                                             if (noRadio.checked) {
                                                // Hide the conditional container
                                                conditionalContainer.style.display = 'none';
                                             }
                                          });
                                       }
                                    });
                                 </script>
                              </div>
                              <div class="form-item">
                                 <fieldset>
                                    <legend><strong>
                                          Is the vehicle being sold to a private individual or a business?
                                       </strong>
                                    </legend>
                                    <span class="govuk-hint">Do not use this service if you are selling the vehicle to the
                                       motor trade.</span>
                                    <div class="govuk-radios">
                                       <div id="vehicleSoldTo">
                                          <div class="form-item">
                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input form-radio selectable" type="radio"
                                                   id="vehicleSoldTo_Private" name="bussiness" value="Private"
                                                   data-ga-action="track_path" showerrors="false">
                                                <label class="govuk-label govuk-radios__label" for="vehicleSoldTo_Private">
                                                   <span class="text">Private individual</span>
                                                </label>
                                             </div>
                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input form-radio selectable" type="radio"
                                                   id="vehicleSoldTo_Business" name="bussiness" value="Business"
                                                   data-ga-action="track_path" showerrors="false">
                                                <label class="govuk-label govuk-radios__label"
                                                   for="vehicleSoldTo_Business">
                                                   <span class="text">Business</span>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </fieldset>

                              </div>

                              <div class="form-steps">
                                 <input type="submit" class="govuk-button" style="font-size: 20px;" name="submit" id=""
                                    value="Continue">
                                 <!-- <div id="car-details"></div>
                           </div> -->
                        </form>
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
            <script src="./fetchCarDetails.js"></script>
</body>

</html>