
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
