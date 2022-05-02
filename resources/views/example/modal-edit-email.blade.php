<div id="overlay-my-profile-modal-edit-email" class="overlay" style="min-height: 1976px">
    <div class="container-center-horizontal">
      <div class="my-profile-modal-edit-email screen" onclick="window.open('javascript:history.back()', '_self');">
        <div class="group-395-C61RwL"></div>
        <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
        <div class="edit-your--il-address-C61RwL utopiastd-blackheadline-black-science-blue-50px">
          Edit Your Email Address
        </div>
        <input type="text" name="cust_email" value="{{$cust_email}}">
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
