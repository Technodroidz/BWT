
<form method="post" action="{{ route('updateAcct')}}">
    <div id="overlay-my-profile-modal-edit-name" class="overlay" style="min-height: 1976px">
        <div class="container-center-horizontal">
          <div class="my-profile-modal-edit-name screen" onclick="window.open('javascript:history.back()', '_self');">
            <div class="group-395-C61RwL"></div>
            <div class="rectangle-129-C61RwL dove-gray-border-1px"></div>
            <div class="edit-your-name-C61RwL utopiastd-blackheadline-black-science-blue-50px">Edit Your Name</div>
                <input type="text" name="your_name" value="{{$fullname}}">
            <div class="textlabel-C61RwL fontawesome5pro-regular-normal-chicago-40px"></div>
            <div class="group-668-C61RwL"><img class="line-357-xtAAOn" src="../img/line-324-1@1x.png" /></div>
            <a
              href="javascript:ShowOverlay('my-profile-account', 'animate-appear');"
              onclick="window.event.stopPropagation()"
            >
              <div class="group-715-C61RwL">
                <div class="quiz-buttons-RK0vMK">
                  {{-- <div  class="btn btn-success save-BpHwNW proximanova-extra-normal-white-30px">Save</div> --}}
                <button type="submit" class="btn btn-success">save</button>
                </div>
                {{-- <a href="my-profile-account.html" onclick="window.event.stopPropagation()"> --}}
                    <a href="{{ route('example')}}" onclick="window.event.stopPropagation()">
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

</form>


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
