<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1920, maximum-scale=1.0" />
    <link rel="shortcut icon" href="./../img/favicon.png" />
    <meta name="og:type" content="website" />
    <meta name="twitter:card" content="photo" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-account.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-pause-subscription.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-cancel-exit-survey.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-password.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-edit-phone.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-update-payment-method.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-edit-name.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-edit-email.css" />
    <link rel="stylesheet" type="text/css" href="../css/my-profile-modal-previous-payments.css" />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Poppins:400,500");

      @font-face {
        font-family: "FontAwesome 5 Pro-Solid";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5b59ac6041bb8600090b709d/Font Awesome 5 Pro-Solid-900.otf")
          format("opentype");
      }

      @font-face {
        font-family: "UtopiaStd-BlackHeadline";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5c51df35b696f3000a78043f/.18219.otf") format("opentype");
      }

      @font-face {
        font-family: "CrimsonPro-Regular";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5cda9157861125000ab45d44/CrimsonPro-Regular.ttf")
          format("truetype");
      }

      @font-face {
        font-family: "Font Awesome 5 Pro";
        font-weight: 1 1000;
        src: url("./fonts/Font Awesome 5 Pro-Regular-400.otf") format("opentype");
      }

      @font-face {
        font-family: "ProximaNova-Extrabold";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5c5874afb72544000ad1576b/ProximaNova-Reg.ttf")
          format("truetype");
      }

      @font-face {
        font-family: "ProximaNova-Medium";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5b92aac3e833790009188215/.25136.otf") format("opentype");
      }

      @font-face {
        font-family: "CrimsonPro-Italic";
        font-weight: 1 1000;
        src: url("./fonts/CrimsonPro-Italic-VariableFont_wght.ttf") format("truetype");
      }

      @font-face {
        font-family: "ProximaNova-Semibold";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5b92aac3e833790009188215/.173.otf") format("opentype");
      }

      @font-face {
        font-family: "CrimsonPro-Medium";
        font-weight: 1 1000;
        src: url("./fonts/CrimsonPro-VariableFont_wght.ttf") format("truetype");
      }

      @font-face {
        font-family: "FontAwesome 5 Pro-Regular";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5b59ac6041bb8600090b709d/Font Awesome 5 Pro-Regular-400.otf")
          format("opentype");
      }

      @font-face {
        font-family: "ProximaNova-Bold";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5b92aac3e833790009188215/.139.otf") format("opentype");
      }

      @font-face {
        font-family: "FontAwesome 5 Pro-Light";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5b59ac6041bb8600090b709d/Font Awesome 5 Pro-Light-300.otf")
          format("opentype");
      }

      @font-face {
        font-family: "Ondo-Bold";
        font-weight: 1 1000;
        src: url("./fonts/Ondo-Bold.ttf") format("truetype");
      }

      @font-face {
        font-family: "CrimsonPro-Light";
        font-style: normal;
        font-weight: 1 1000;
        src: url("https://anima-uploads.s3.amazonaws.com/5d691399bc05e4b153a4310e/CrimsonPro-Light.ttf")
          format("truetype");
      }

      .component-wrapper a,
      .screen a {
        text-decoration: none;
        display: contents;
      }

      .full-width-a {
        width: 100%;
      }

      .full-height-a {
        height: 100%;
      }

      .screen textarea:focus,
      .screen input:focus {
        outline: none;
      }

      .screen *,
      .component-wrapper * {
        box-sizing: border-box;
      }

      .screen div {
        -webkit-text-size-adjust: none;
      }

      .container-center-vertical,
      .container-center-horizontal {
        pointer-events: none;
        display: flex;
        flex-direction: row;
        padding: 0;
        margin: 0;
      }

      .container-center-vertical {
        align-items: center;
        height: 100%;
      }

      .container-center-horizontal {
        justify-content: center;
        width: 100%;
      }

      .container-center-vertical > *,
      .container-center-horizontal > * {
        pointer-events: auto;
        flex-shrink: 0;
      }

      .component-wrapper,
      .screen {
        overflow-wrap: break-word;
        word-wrap: break-word;
        word-break: break-all;
        word-break: break-word;
      }

      .auto-animated div {
        opacity: 0;
        position: absolute;
        --z-index: -1;
      }

      .auto-animated .container-center-vertical,
      .auto-animated .container-center-horizontal {
        opacity: 1;
      }

      .overlay {
        position: absolute;
        opacity: 0;
        display: none;
        top: 0;
        width: 100%;
        height: 100%;
        position: fixed;
      }

      .animate-appear {
        opacity: 0;
        display: block;
        animation: reveal 0.3s ease-in-out 1 normal forwards;
      }

      .animate-disappear {
        opacity: 1;
        display: block;
        animation: reveal 0.3s ease-in-out 1 reverse forwards;
      }

      .animate-nodelay {
        animation-delay: 0s;
      }

      @keyframes reveal {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      .align-self-flex-start {
        align-self: flex-start;
      }
      .align-self-flex-end {
        align-self: flex-end;
      }
      .align-self-flex-center {
        align-self: center;
      }
      .valign-text-middle {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .valign-text-bottom {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }
      input:focus {
        outline: none;
      }
      .component-wrapper,
      .component-wrapper * {
        pointer-events: none;
      }

      .component-wrapper a *,
      .component-wrapper a,
      .component-wrapper input,
      .component-wrapper video,
      .component-wrapper iframe,
      .listeners-active,
      .listeners-active * {
        pointer-events: auto;
      }

      .hidden,
      .hidden * {
        visibility: hidden;
        pointer-events: none;
      }

      .smart-layers-pointers,
      .smart-layers-pointers * {
        pointer-events: auto;
        visibility: visible;
      }

      .component-wrapper.not-ready,
      .component-wrapper.not-ready * {
        visibility: hidden !important;
      }

      .listeners-active-click,
      .listeners-active-click * {
        cursor: pointer;
      }
    </style>
    <meta name="author" content="AnimaApp.com - Design to code, Automated." />
  </head>
  <body style="margin: 0">
    <input type="hidden" id="anPageName" name="page" value="my-profile-account" />
    <div class="container-center-horizontal">
      <div class="my-profile-account screen" onclick="window.open('javascript:history.back()', '_self');">
        <img class="line-91-C61RwL" src="../img/line-91-13@1x.png" />
        <div class="group-33-C61RwL">
          <div class="julia-here-count-info-uEDaR8">{{$fullname}}, Here’s Your Account Info…</div>
        </div>
        <div class="manage-you-tion-below-C61RwL crimsonpro-medium-heavy-metal-24px">
          Manage your contact info, billing details and subscription below…
        </div>
        <div class="personal-information-C61RwL">Personal Information</div>
        <div class="overlap-group-C61RwL">
          <div class="group-724-4eduM0">
            <img class="line-298-bqtUxh" src="../img/line-298-1@1x.png" />
            <img class="line-298-RK6xwr" src="../img/line-298-1@1x.png" />
            <div class="juliajohns-23gmailcom-bqtUxh proximanova-medium-concord-20px">{{$cust_email}}</div>
            <img class="line-298-VgTrcF" src="../img/line-298-1@1x.png" />
            <div class="email-address-bqtUxh proximanova-bold-mine-shaft-24px">Email Address</div>
            <div class="x1-555-452-2586-bqtUxh proximanova-medium-concord-20px">{{$cust_phone}}</div>
            <img class="line-298-3xsFt8" src="../img/line-298-1@1x.png" />
            <div class="phone-number-bqtUxh proximanova-bold-mine-shaft-24px">Phone Number</div>
            <div class="julia-johnson-bqtUxh proximanova-medium-concord-20px">{{ $fullname }}</div>
            <img class="line-298-LHWIyU" src="../img/line-298-10@1x.png" />
            <div class="name-bqtUxh proximanova-bold-mine-shaft-24px">Name</div>
            <a
              href="javascript:ShowOverlay('my-profile-modal-edit-name', 'animate-appear');"
              onclick="window.event.stopPropagation()"
            >
              <div class="component-114-1-bqtUxh">
                <div class="group-657-IZzSJn"><div class="edit-WBXVdE">Edit</div></div>
              </div></a
            >
            <a
              href="javascript:ShowOverlay('my-profile-modal-edit-email', 'animate-appear');"
              onclick="window.event.stopPropagation()"
            >
              <div class="component-114-2-bqtUxh">
                <div class="group-657-WtFYmp"><div class="edit-SHKqmy">Edit</div></div>
              </div></a
            >
            <a
              href="javascript:ShowOverlay('my-profile-modal-edit-phone', 'animate-appear');"
              onclick="window.event.stopPropagation()"
            >
              <div class="component-114-3-bqtUxh">
                <div class="group-657-ZmYxRc"><div class="edit-Zg4B1K">Edit</div></div>
              </div></a
            >
            <div class="last-updat-st-20-2020-bqtUxh proximanova-medium-concord-20px">{{$last_updated}}</div>
            <img class="line-298-xUxdsk" src="../img/line-298-1@1x.png" />
            <div class="password-bqtUxh proximanova-bold-mine-shaft-24px">Password</div>
            <a
              href="javascript:ShowOverlay('my-profile-modal-password', 'animate-appear');"
              onclick="window.event.stopPropagation()"
            >
              <div class="component-114-4-bqtUxh">
                <div class="group-657-iVfQmF"><div class="edit-NE8kth">Edit</div></div>
              </div></a
            >
            <div class="monthly-bqtUxh proximanova-medium-concord-20px">{{$subscription_plan}}</div>
            <div class="october-24-2020-4999-bqtUxh proximanova-medium-concord-20px">{{$next_billing}}</div>
            <img class="line-298-CRuxs0" src="../img/line-298-1@1x.png" />
            <img class="line-366-bqtUxh" src="../img/line-298-1@1x.png" />
            <div class="current-plan-bqtUxh proximanova-bold-mine-shaft-24px">Current Plan</div>
            <div class="next-payment-bqtUxh proximanova-bold-mine-shaft-24px">Next Payment</div>
            <div class="visa-1818e-ation-0322-bqtUxh proximanova-medium-concord-20px">
              Visa … {{$card_number_last4}}<br />Expiration: {{$card_expmonth}}/{{$card_expyear}}
            </div>
            <img class="line-298-NrbxD6" src="../img/line-298-1@1x.png" />
            <div class="payment-method-bqtUxh proximanova-bold-mine-shaft-24px">Payment Method</div>
            <img class="image-83-bqtUxh" src="../img/image-83@1x.png" />
            <div class="group-681-bqtUxh"><div class="default-Y8mn2a">DEFAULT</div></div>
            <a
              href="javascript:ShowOverlay('my-profile-modal-previous-payments', 'animate-appear');"
              onclick="window.event.stopPropagation()"
              ><div class="see-previo-s-payments-bqtUxh">See Previous Payments</div></a
            >
            <a
              href="javascript:ShowOverlay('my-profile-modal-update-payment-method', 'animate-appear');"
              onclick="window.event.stopPropagation()"
            >
              <div class="component-114-5-bqtUxh">
                <div class="group-657-Z7CSEt"><div class="edit-Vqscwf">Edit</div></div>
              </div></a
            >
          </div>
          <img class="line-339-4eduM0" src="../img/line-330-1@1x.png" />
          <div class="login-security-4eduM0">Login &amp; Security</div>
          <div class="my-subscription-4eduM0">My Subscription</div>
        </div>
        <div class="group-731-C61RwL">
          <a
            href="javascript:ShowOverlay('my-profile-modal-cancel-exit-survey', 'animate-appear');"
            onclick="window.event.stopPropagation()"
            ><div class="cancel-subscription-fVI0WV">Cancel Subscription</div></a
          >
          <a
            href="javascript:ShowOverlay('my-profile-modal-pause-subscription', 'animate-appear');"
            onclick="window.event.stopPropagation()"
          >
            <div class="quiz-buttons-fVI0WV">
              <div class="pause-subscription-PCnsrd proximanova-extra-normal-white-30px">Pause Subscription</div>
            </div></a
          >
        </div>
        <div class="footer-C61RwL">
          <div class="footer-iPe1yZ">
            <div class="footer-qJOyZt">
              <div class="made-with--of-america-xZsxxx">
                <span class="span0-zh1IA8">Made with</span><span class="span1-zh1IA8">  </span
                ><span class="span2-zh1IA8">and</span><span class="span3-zh1IA8">  </span
                ><span class="span4-zh1IA8">in the United States of America </span>
              </div>
            </div>
          </div>
          <div class="metabolic--contact-us-iPe1yZ">
            ©Metabolic Living 2020&nbsp;&nbsp;|&nbsp;&nbsp;Terms + Privacy&nbsp;&nbsp;|&nbsp;&nbsp;Contact Us
          </div>
        </div>
      </div>
    </div>


    <div id="overlay-my-profile-modal-edit-name" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div class="my-profile-modal-edit-name screen" onclick="window.open('javascript:history.back()', '_self');">
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="edit-your-name-C61RwL utopiastd-blackheadline-black-science-blue-50px">Edit Your Name</div>
          <div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div>
          <div class="group-668-C61RwL"><img class="line-357-xtAAOn" src="../img/line-324-1@1x.png" /></div>
          <a
            href="javascript:ShowOverlay('my-profile-account', 'animate-appear');"
            onclick="window.event.stopPropagation()"
          >
            <div class="group-715-C61RwL">
              <div class="quiz-buttons-RK0vMK">
                <div class="save-BpHwNW proximanova-extra-normal-white-30px">Save</div>
              </div>
              <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
                <div class="quiz-buttons-yMcFRb">
                  <div class="x-cancel-8G1Seu fontawesome5pro-normal-mountain-mist-24px">
                    <span class="span0-rAinWV"> </span><span class="span1-rAinWV">Cancel</span>
                  </div>
                </div></a
              >
            </div></a
          >
          <div class="group-893-C61RwL">
            <div class="rectangle-211-qNJcun mountain-mist-border-1px"></div>
            <div class="rectangle-215-qNJcun mountain-mist-border-1px"></div>
            <div class="first-name-qNJcun proximanova-bold-heavy-metal-20px">First Name</div>
            <div class="last-name-qNJcun proximanova-bold-heavy-metal-20px">Last Name</div>
            <div class="julia-qNJcun crimsonpro-light-dove-gray-24px">Julia</div>
            <div class="johnson-qNJcun crimsonpro-light-dove-gray-24px">Johnson</div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-edit-name";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-edit-name", "animate-disappear");
          }
        },
        false
      );
    </script>


    <div id="overlay-my-profile-modal-edit-email" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div class="my-profile-modal-edit-email screen" onclick="window.open('javascript:history.back()', '_self');">
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="edit-your--il-address-C61RwL utopiastd-blackheadline-black-science-blue-50px">
            Edit Your Email Address
          </div>
          <div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div>
          <a
            href="javascript:ShowOverlay('reset-your-password-email-address', 'animate-appear');"
            onclick="window.event.stopPropagation()"
          >
            <div class="group-715-C61RwL">
              <div class="quiz-buttons-RK0vMK">
                <div class="save-BpHwNW proximanova-extra-normal-white-30px">Save</div>
              </div>
              <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
                <div class="quiz-buttons-yMcFRb">
                  <div class="x-cancel-8G1Seu fontawesome5pro-normal-mountain-mist-24px">
                    <span class="span0-rAinWV"> </span><span class="span1-rAinWV">Cancel</span>
                  </div>
                </div></a
              >
            </div></a
          >
          <div class="group-668-C61RwL"><img class="line-357-xtAAOn" src="../img/line-324-1@1x.png" /></div>
          <div class="rectangle-211-C61RwL mountain-mist-border-1px"></div>
          <div class="email-address-C61RwL proximanova-bold-heavy-metal-20px">Email Address</div>
          <div class="well-use-t--access-to-C61RwL crimsonpro-light-heavy-metal-24px">
            We’ll use this to get you logged in to your account.<br />Make sure to use an address you’ll always have
            access to.
          </div>
          <div class="juliajohns-23gmailcom-C61RwL crimsonpro-light-dove-gray-24px">Juliajohnson23@gmail.com</div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-edit-email";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-edit-email", "animate-disappear");
          }
        },
        false
      );
    </script>


    <div id="overlay-my-profile-modal-edit-phone" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div class="my-profile-modal-edit-phone screen" onclick="window.open('javascript:history.back()', '_self');">
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="edit-your--one-number-C61RwL utopiastd-blackheadline-black-science-blue-50px">
            Edit Your Phone Number
          </div>
          <div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div>
          <div class="group-668-C61RwL"><img class="line-357-xtAAOn" src="../img/line-324-1@1x.png" /></div>
          <div class="group-715-C61RwL">
            <div class="quiz-buttons-RK0vMK">
              <div class="save-BpHwNW proximanova-extra-normal-white-30px">Save</div>
            </div>
            <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
              <div class="quiz-buttons-yMcFRb">
                <div class="x-cancel-8G1Seu fontawesome5pro-normal-mountain-mist-24px">
                  <span class="span0-rAinWV"> </span><span class="span1-rAinWV">Cancel</span>
                </div>
              </div></a
            >
          </div>
          <div class="group-686-C61RwL">
            <div class="group-685-MMstEQ">
              <div class="country-zfdyrT proximanova-bold-heavy-metal-20px">Country</div>
              <div class="group-692-zfdyrT mountain-mist-border-1px">
                <div class="united-states-xCUTHh crimsonpro-light-dove-gray-24px">United States</div>
                <div class="textlabel-xCUTHh"></div>
              </div>
            </div>
          </div>
          <div class="group-894-C61RwL">
            <div class="group-685-Tcs7qh">
              <div class="phone-zeTiWU proximanova-bold-heavy-metal-20px">Phone</div>
              <div class="group-692-zeTiWU">
                <div class="rectangle-217-GthXrE mountain-mist-border-1px"></div>
                <div class="x1-GthXrE crimsonpro-light-dove-gray-24px">+1</div>
                <div class="x555-452-2586-GthXrE crimsonpro-light-dove-gray-24px">555-452-2586</div>
                <img class="line-418-GthXrE" src="../img/line-418@1x.png" />
              </div>
            </div>
          </div>
          <div class="for-notifi-logging-in-C61RwL crimsonpro-light-heavy-metal-24px">
            For notifications, reminders or help logging in.
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-edit-phone";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-edit-phone", "animate-disappear");
          }
        },
        false
      );
    </script>



    <div id="overlay-my-profile-modal-password" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div class="my-profile-modal-password screen" onclick="window.open('javascript:history.back()', '_self');">
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="update-your-password-C61RwL utopiastd-blackheadline-black-science-blue-50px">
            Update Your Password
          </div>
          <a href="javascript:history.back()" onclick="window.event.stopPropagation()"
            ><div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div></a
          >
          <div class="group-668-C61RwL">
            <div class="rectangle-162-xtAAOn mountain-mist-border-1px"></div>
            <div class="rectangle-211-xtAAOn mountain-mist-border-1px"></div>
            <div class="rectangle-212-xtAAOn mountain-mist-border-1px"></div>
            <div class="new-password-xtAAOn proximanova-bold-heavy-metal-20px">New Password</div>
            <div class="confirm-password-xtAAOn proximanova-bold-heavy-metal-20px">Confirm Password</div>
            <div class="current-password-xtAAOn proximanova-bold-heavy-metal-20px">Current Password</div>
            <div class="wrong-pass-o-reset-it-xtAAOn">
              Wrong password. Try again or click Forgot password to reset it
            </div>
            <div class="passwords---try-again-xtAAOn">Passwords don’t match. Try again.</div>
            <img class="line-324-xtAAOn" src="../img/line-324-1@1x.png" />
            <a
              href="javascript:ShowOverlay('reset-your-password-authorization-code', 'animate-appear');"
              onclick="window.event.stopPropagation()"
              ><div class="forgot-password-xtAAOn">Forgot password?</div></a
            >
          </div>
          <div class="note-snacks-desserts-C61RwL">
            <div class="x-you-last---24th-2020-yZhceu">
              <span class="span0-GkJ0q9"></span
              ><span class="span1-GkJ0q9">&nbsp;&nbsp;You last updated your password on August 24th, 2020.</span>
            </div>
          </div>
          <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
            <div class="quiz-buttons-C61RwL">
              <div class="update-password-vOG7ya proximanova-extra-normal-white-30px">Update Password</div>
            </div></a
          >
          <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
            <div class="quiz-buttons-VMr6Om">
              <div class="x-cancel-JeKCnj fontawesome5pro-normal-mountain-mist-24px">
                <span class="span0-LMUEKt"> </span><span class="span1-LMUEKt">Cancel</span>
              </div>
            </div></a
          >
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-password";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-password", "animate-disappear");
          }
        },
        false
      );
    </script>


    <div id="overlay-my-profile-modal-previous-payments" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div
          class="my-profile-modal-previous-payments screen"
          onclick="window.open('javascript:history.back()', '_self');"
        >
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="your-previ-s-payments-C61RwL utopiastd-blackheadline-black-science-blue-50px">
            Your Previous Payments
          </div>
          <a href="javascript:history.back()" onclick="window.event.stopPropagation()"
            ><div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div></a
          >
          <div class="note-snacks-desserts-C61RwL">
            <div class="x-your-next--24th-2020-yZhceu">
              <span class="span0-55hhSK"></span
              ><span class="span1-55hhSK">&nbsp;&nbsp;Your next payment is on October 24th,</span>
            </div>
          </div>
          <div class="group-723-C61RwL">
            <div class="rectangle-221-1F92SZ"></div>
            <div class="rectangle-222-1F92SZ"></div>
            <img class="line-329-1F92SZ" src="../img/line-329@1x.png" />
            <img class="line-338-1F92SZ" src="../img/line-329@1x.png" />
            <img class="line-330-1F92SZ" src="../img/line-330@1x.png" />
            <div class="september--ne-24-2020-1F92SZ">
              September 24, 2020<br />August 24, 2020<br />July 24, 2020<br />June 24, 2020
            </div>
            <div class="x4999499949994999-1F92SZ">$49.99<br />$49.99<br />$49.99<br />$49.99</div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-previous-payments";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-previous-payments", "animate-disappear");
          }
        },
        false
      );
    </script>



    <div id="overlay-my-profile-modal-update-payment-method" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div
          class="my-profile-modal-update-payment-method screen"
          onclick="window.open('my-profile-account.html', '_self');"
        >
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div>
          <div class="update-pay-ent-method-C61RwL utopiastd-blackheadline-black-science-blue-50px">
            Update Payment Method
          </div>
          <img class="line-324-C61RwL" src="../img/line-324-1@1x.png" />
          <img class="line-325-C61RwL" src="../img/line-324-1@1x.png" />
          <img class="line-326-C61RwL" src="../img/line-324-1@1x.png" />
          <div class="group-684-C61RwL">
            <div class="rectangle-162-WtStix mountain-mist-border-1px"></div>
            <div class="rectangle-213-WtStix mountain-mist-border-1px"></div>
            <div class="rectangle-214-WtStix mountain-mist-border-1px"></div>
            <div class="card-info-WtStix proximanova-bold-heavy-metal-20px">Card Info</div>
            <div class="card-number-WtStix crimsonpro-light-dove-gray-24px">Card Number</div>
            <div class="expiration-WtStix crimsonpro-light-dove-gray-24px">Expiration</div>
            <div class="cvv-WtStix crimsonpro-light-dove-gray-24px">CVV</div>
          </div>
          <div class="group-683-C61RwL">
            <div class="rectangle-211-tolfHD mountain-mist-border-1px"></div>
            <div class="rectangle-215-tolfHD mountain-mist-border-1px"></div>
            <div class="first-name-tolfHD proximanova-bold-heavy-metal-20px">First Name</div>
            <div class="last-name-tolfHD proximanova-bold-heavy-metal-20px">Last Name</div>
            <div class="julia-tolfHD crimsonpro-light-dove-gray-24px">Julia</div>
            <div class="johnson-tolfHD crimsonpro-light-dove-gray-24px">Johnson</div>
          </div>
          <div class="quiz-buttons-C61RwL">
            <div class="update-card-vOG7ya proximanova-extra-normal-white-30px">Update Card</div>
            <div class="textlabel-vOG7ya"></div>
          </div>
          <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
            <div class="quiz-buttons-VMr6Om">
              <div class="x-cancel-JeKCnj fontawesome5pro-normal-mountain-mist-24px">
                <span class="span0-LMUEKt"> </span><span class="span1-LMUEKt">Cancel</span>
              </div>
            </div></a
          >
          <img class="image-84-C61RwL" src="../img/image-84@1x.png" />
          <div class="group-686-C61RwL">
            <div class="group-685-MMstEQ">
              <div class="rectangle-216-zfdyrT mountain-mist-border-1px"></div>
              <div class="rectangle-217-zfdyrT mountain-mist-border-1px"></div>
              <div class="billing-info-zfdyrT proximanova-bold-heavy-metal-20px">Billing Info</div>
              <div class="country-region-zfdyrT proximanova-bold-heavy-metal-20px">Country / Region</div>
              <div class="incorrect---try-again-zfdyrT">Incorrect zip code. Try again.</div>
              <div class="zip-code-zfdyrT crimsonpro-light-dove-gray-24px">ZIP Code</div>
              <div class="united-states-zfdyrT crimsonpro-light-dove-gray-24px">United States</div>
              <div class="textlabel-zfdyrT"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-update-payment-method";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-update-payment-method", "animate-disappear");
          }
        },
        false
      );
    </script>



    <div id="overlay-my-profile-modal-cancel-exit-survey" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div
          class="my-profile-modal-cancel-exit-survey screen"
          onclick="window.open('javascript:history.back()', '_self');"
        >
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div>
          <div class="why-are-yo-ling-today-C61RwL utopiastd-blackheadline-black-science-blue-50px">
            Why Are You Cancelling Today?
          </div>
          <a
            href="javascript:ShowOverlay('my-profile-modal-cancel-yn', 'animate-appear');"
            onclick="window.event.stopPropagation()"
          >
            <div class="quiz-buttons-C61RwL">
              <div class="continue-to-cancel-vOG7ya proximanova-extra-normal-white-30px">Continue to Cancel</div>
            </div></a
          >
          <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
            <div class="quiz-buttons-VMr6Om">
              <div class="x-go-back-JeKCnj fontawesome5pro-normal-mountain-mist-24px">
                <span class="span0-2Yq0C1"> </span><span class="span1-2Yq0C1">Go Back</span>
              </div>
            </div></a
          >
          <div class="x-C61RwL crimsonpro-medium-heavy-metal-24px">&nbsp;</div>
          <div class="group-705-C61RwL">
            <div class="textlabel-Ja8VPa"><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
            <div class="group-190-Ja8VPa">
              <div class="i-dont-hav--not-to-sa-CI1cJr">
                <br />I don’t have enough time to cook<br />There were not enough recipes to choose from<br />I didn’t
                like the recipes<br />I would rather use a food delivery service<br />It wasn’t worth the price<br />The
                meal planner was not easy to use<br />Because of financial reasons<br />Prefer not to say
              </div>
            </div>
            <img class="line-291-Ja8VPa" src="../img/line-291@1x.png" />
            <img class="line-292-Ja8VPa" src="../img/line-291@1x.png" />
            <img class="line-293-Ja8VPa" src="../img/line-291@1x.png" />
            <img class="line-294-Ja8VPa" src="../img/line-291@1x.png" />
            <img class="line-295-Ja8VPa" src="../img/line-291@1x.png" />
            <img class="line-296-Ja8VPa" src="../img/line-291@1x.png" />
            <img class="line-297-Ja8VPa" src="../img/line-291@1x.png" />
            <img class="line-298-Ja8VPa" src="../img/line-298-8@1x.png" />
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-cancel-exit-survey";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-cancel-exit-survey", "animate-disappear");
          }
        },
        false
      );
    </script>


    <div id="overlay-my-profile-modal-pause-subscription" class="overlay" style="min-height: 1976px">
      <div class="container-center-horizontal">
        <div
          class="my-profile-modal-pause-subscription screen"
          onclick="window.open('javascript:history.back()', '_self');"
        >
          <div class="group-395-C61RwL"></div>
          <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
          <div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div>
          <div class="pause-your-bscription-C61RwL utopiastd-blackheadline-black-science-blue-50px">
            Pause Your Subscription
          </div>
          <img class="line-324-C61RwL" src="../img/line-324-1@1x.png" />
          <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
            <div class="quiz-buttons-C61RwL">
              <div class="pause-subscription-vOG7ya proximanova-extra-normal-white-30px">Pause Subscription</div>
            </div></a
          >
          <div class="group-686-C61RwL">
            <div class="group-685-MMstEQ">
              <div class="how-long-d-bscription-zfdyrT proximanova-bold-heavy-metal-20px">
                How long do you want to pause your subscription?
              </div>
              <div class="group-692-zfdyrT mountain-mist-border-1px">
                <div class="x1-month-xCUTHh crimsonpro-light-dove-gray-24px">1 Month</div>
                <div class="textlabel-xCUTHh"></div>
              </div>
            </div>
          </div>
          <a href="my-profile-account.html" onclick="window.event.stopPropagation()">
            <div class="quiz-buttons-VMr6Om">
              <div class="x-cancel-JeKCnj fontawesome5pro-normal-mountain-mist-24px">
                <span class="span0-LMUEKt"> </span><span class="span1-LMUEKt">Cancel</span>
              </div>
            </div></a
          >
          <div class="note-snacks-desserts-C61RwL">
            <div class="x-your-subs--24th-2020-yZhceu">
              <span class="span0-zxhl7N"></span
              ><span class="span1-zxhl7N"
                >&nbsp;&nbsp;Your subscription will start back up on Monday, September 24t</span
              >
            </div>
          </div>
          <div class="x-C61RwL crimsonpro-medium-heavy-metal-24px">&nbsp;</div>
          <div class="temporaril-s-trip-etc-C61RwL crimsonpro-light-heavy-metal-24px">
            Temporarily pausing your subscription is a great option if you know you won’t be needing your meal plan for
            a little while (like a summer vacation, business trip, etc.).
          </div>
          <div class="when-you-p-that-point-C61RwL">
            When you pause your subscription, your payments will be suspended starting the first day of your next
            billing cycle. You will have full access to the service up until that point.
          </div>
        </div>
      </div>
    </div>
    <script>
      var overlay_id = "overlay-my-profile-modal-pause-subscription";
      document.getElementById(overlay_id).addEventListener(
        "click",
        function (event) {
          var e = event || window.event;
          var overlayElement = document.getElementById(overlay_id);
          var clickedDiv = e.toElement || e.target;
          if (overlayElement.contains(clickedDiv)) {
            HideOverlay("my-profile-modal-pause-subscription", "animate-disappear");
          }
        },
        false
      );
    </script>
    <script>
      ShowOverlay = function (overlayName, animationName) {
        overlayName = "overlay-" + overlayName;
        var cssClasses = document.getElementById(overlayName).className.split(" ");
        var last = cssClasses.slice(-1)[0];
        if (last.lastIndexOf("animate") == -1) {
          document.getElementById(overlayName).className =
            document.getElementById(overlayName).className + " " + animationName;
        }
        if (window.loadAsyncSrc != undefined) {
          loadAsyncSrc();
        }
      };
      HideOverlay = function (overlayName, animationName) {
        overlayName = "overlay-" + overlayName;
        var cssClasses = document.getElementById(overlayName).className.split(" ");
        var last = cssClasses.slice(-1)[0];
        if (last.lastIndexOf("animate") != -1) {
          cssClasses.splice(-1);
          cssClasses.push(animationName);
          document.getElementById(overlayName).className = cssClasses.join(" ");

          cssClasses.splice(-1);
          setTimeout(function () {
            document.getElementById(overlayName).className = cssClasses.join(" ");
          }, 1100);
        }
        var vids = document.getElementsByTagName("video");
        if (vids) {
          for (var i = 0; i < vids.length; i++) {
            var video = vids.item(i);
            video.pause();
          }
        }
      };
    </script>
  </body>
</html>
