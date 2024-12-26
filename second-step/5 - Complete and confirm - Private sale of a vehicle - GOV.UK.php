<?php

session_start();

if (isset($_POST['dateofsale'])) {
    $_SESSION['dateofsale_day'] = $_POST['dateofsale_day'];
    $_SESSION['dateofsale_month'] = $_POST['dateofsale_month'];
    $_SESSION['dateofsale_year'] = $_POST['dateofsale_year'];
    $_SESSION['mileage'] = $_POST['mileage'];

    // put date in a proper formate in session
    $_SESSION['vehicle_date_of_sale'] = sprintf(
        '%04d-%02d-%02d',
        $_POST['dateofsale_year'],
        $_POST['dateofsale_month'],
        $_POST['dateofsale_day'],
    );
}
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
    <meta name="download_date" content="2024-01-08T12:14:27.832Z">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complete and confirm - Private sale of a vehicle - GOV.UK</title>
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        type="image/x-icon">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        sizes="72x72">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        sizes="76x76">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        sizes="114x114">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        sizes="120x120">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        sizes="144x144">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        sizes="152x152">
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
                    href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#">Find
                    out more about cookies</a>
            </p>
        </div>
    </div>
    <a href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
        class="govuk-skip-link">Skip to main content</a>
    <header class="govuk-header " role="banner" data-module="govuk-header">
        <div class="govuk-header__container govuk-width-container">
            <div class="govuk-header__logo">
                <a class="govuk-header__link govuk-header__link--homepage" data-track-action="logoLink"
                    data-track-category="headerClicked" data-track-label="https://www.gov.uk"
                    data-track-dimension="GOV.UK" data-track-dimension-index="29"
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
                            href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#"
                            target="_blank">your feedback</a>
                        will help us to improve it
                    </span>
                </p>
            </div>
            <div class="section-content">
                <a class="govuk-back-link" id="back"
                    href="https://dvla-buysell-service.com/buysell-service/next/after/then/confirm/complete/confirm.php#">Back</a>
            </div>
            <main class="govuk-main-wrapper" id="main-content">
                <div class="app vehicles-change-keeper-online">
                    <div class="two-col clearfix acquire-complete-confirm">
                        <h1>Complete and confirm</h1>
                        <p>Please check that all of the information shown below is correct and use the Back button to
                            amend any errors if necessary.
                        </p>
                        <div class="first-col">
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
                        </div>
                        <div class="second-col">
                            <div>
                                <div class="playback">
                                    <h2>New keeper details</h2>
                                    <dl>
                                        <dt>Name</dt>
                                        <dd><?php echo $_SESSION['privatekeeper_firstname']; ?></dd>
                                        <dt>Address</dt>
                                        <dd> <?php echo $_SESSION['address'] ?>
                                        </dd>
                                        <dt>Email</dt>
                                        <dd><?php echo $_SESSION['email']; ?></dd>
                                        <dt>Date of sale</dt>
                                        <dd>
                                            <?php
                                            echo $_SESSION['dateofsale'] = $_POST['dateofsale_day'] . '-' . $_POST['dateofsale_month'] . '-' . $_POST['dateofsale_year'];
                                            ?>
                                        </dd>

                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="form-steps">
                            <form action="./process/sale_process.php" method="POST">
                                <div class="form-item">
                                    <div class="govuk-checkboxes">
                                        <div class="govuk-checkboxes__item">
                                            <input id="regRight" required="" name="regRight"
                                                class="govuk-checkboxes__input" value="true" type="checkbox">
                                            <label for="regRight" class="govuk-label govuk-checkboxes__label">
                                                I understand that I will lose the rights to this registration number
                                                when I confirm the sale
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-steps">
                                    <div style="font-weight:bold;" class="govuk-warning-text">
                                        <span class="govuk-warning-text__icon" aria-hidden="true">!</span>
                                        <strong class="govuk-warning-text__text">
                                            <span class="govuk-warning-text__assistive">Warning</span>
                                            <p>
                                                If you have a personalised or private registration number on this
                                                vehicle that you want to keep, you must transfer or retain it before
                                                notifying the sale. If you notify the sale without doing this, you will
                                                lose the rights to the registration number.
                                            </p>
                                        </strong>
                                    </div>
                                </div>
                                <div class="form-item">
                                    <div class="govuk-checkboxes">
                                        <div class="govuk-checkboxes__item">
                                            <input id="consent" name="consent" required=""
                                                class="govuk-checkboxes__input" value="true" type="checkbox">
                                            <label for="consent" class="govuk-label govuk-checkboxes__label">
                                                I have the consent of the party named to notify DVLA.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-item">
                                    <input class="govuk-button" id="mileage" style="font-size: 18px;" name="step-4"
                                        value="Confirm Sale" type="submit" autocomplete="off" maxlength="6">
                                </div>
                            </form>
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
                            <a class="govuk-footer__link" data-track-category="footerClicked"
                                data-track-action="supportLink" data-track-label="/help"
                                data-track-options="{&quot;dimension29&quot;:&quot;Help&quot;}"
                                data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;1&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                                href="#" https:="" www.gov.uk="" help"="">Help</a>
                        </li>
                        <li class="govuk-footer__inline-list-item">
                            <a class="govuk-footer__link" data-track-category="footerClicked"
                                data-track-action="supportLink" data-track-label="/help/privacy-notice"
                                data-track-options="{&quot;dimension29&quot;:&quot;Privacy&quot;}"
                                data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;2&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                                href="#" https:="" www.gov.uk="" help="" privacy-notice"="">Privacy</a>
                        </li>
                        <li class="govuk-footer__inline-list-item">
                            <a class="govuk-footer__link" data-track-category="footerClicked"
                                data-track-action="supportLink" data-track-label="/help/cookies"
                                data-track-options="{&quot;dimension29&quot;:&quot;Cookies&quot;}"
                                data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;3&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                                href="#" https:="" www.gov.uk="" help="" cookies"="">Cookies</a>
                        </li>
                        <li class="govuk-footer__inline-list-item">
                            <a class="govuk-footer__link" data-track-category="footerClicked"
                                data-track-action="supportLink" data-track-label="/help/accessibility-statement"
                                data-track-options="{&quot;dimension29&quot;:&quot;Accessibility statement&quot;}"
                                data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;4&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                                href="#" https:="" www.gov.uk="" help="" accessibility-statement"="">Accessibility
                                statement</a>
                        </li>
                        <li class="govuk-footer__inline-list-item">
                            <a class="govuk-footer__link" data-track-category="footerClicked"
                                data-track-action="supportLink" data-track-label="/contact"
                                data-track-options="{&quot;dimension29&quot;:&quot;Contact&quot;}"
                                data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;5&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                                href="#" https:="" www.gov.uk="" contact"="">Contact</a>
                        </li>
                        <li class="govuk-footer__inline-list-item">
                            <a class="govuk-footer__link" data-track-category="footerClicked"
                                data-track-action="supportLink" data-track-label="/help/terms-conditions"
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
                            <a class="govuk-footer__link" data-track-category="footerClicked"
                                data-track-action="supportLink"
                                data-track-label="/government/organisations/government-digital-service"
                                data-track-options="{&quot;dimension29&quot;:&quot;Government Digital Service&quot;}"
                                data-ga4-link="{&quot;event_name&quot;:&quot;navigation&quot;,&quot;type&quot;:&quot;footer&quot;,&quot;index_link&quot;:&quot;8&quot;,&quot;index_section&quot;:&quot;3&quot;,&quot;index_section_count&quot;:&quot;5&quot;,&quot;index_total&quot;:&quot;8&quot;,&quot;section&quot;:&quot;Support links&quot;}"
                                href="#" https:="" www.gov.uk="" government="" organisations=""
                                government-digital-service"="">Government Digital
                                Service</a>
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
                    data-track-options="{&quot;dimension29&quot;: &quot;© Crown copyright&quot;}"
                    data-track-links-only=""
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