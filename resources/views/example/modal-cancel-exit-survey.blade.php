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
