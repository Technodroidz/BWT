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
