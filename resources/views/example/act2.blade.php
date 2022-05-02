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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
          {{-- Manage your contact info, billing details and subscription below… --}}
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

        {{-- section 1 file --}}
                @include('example.modal-edit-name',['fullname'=>$fullname])

        {{-- end section 1 --}}

        {{-- section 2 file  --}}

            @include('example.modal-edit-email',['cust_email' => $cust_email])

        {{-- end section 2 file --}}

        @include('example.modal-edit-phone')
        {{--------------}}

        @include('example.modal-password')

        {{--  --}}

        @include('example.modal-previous-payments')

        {{--  --}}


        @include('example.modal-update-payment-method')

        {{--  --}}

        @include('example.modal-pause-subscription')

        {{--  --}}
        @include('example.modal-cancel-exit-survey')



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
