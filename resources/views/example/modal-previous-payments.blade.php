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
