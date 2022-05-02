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
