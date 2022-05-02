<div id="flipkart__section">
    <?php $flipDetails = getSetting('flipkart'); ?>
    <div class="card-panel">
        <form class="flipkart__form" method="post" action="{{ route('admin.settings.save')}}" >
            @csrf
            <div class="row">
                <input type="hidden" name="type" value="flipkart" id="flikart__hidden">
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_flipkart_api_url" value="{{ $flipDetails->dd_flipkart_api_url ?? '' }}" name="dd_flipkart_api_url" type="text" data-error=".errorTxtf4">
                        <label for="oldpswd">API Url:</label>
                        <small class="errorTxtf4"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_flipkart_api_token" value="{{ $flipDetails->dd_flipkart_api_token ?? '' }}" name="dd_flipkart_api_token" type="text" data-error=".errorTxtf5">
                        <label for="newpswd">Access Token:</label>
                        <small class="errorTxtf5"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_flipkart_username" value="{{ $flipDetails->dd_flipkart_username ?? '' }}" type="text" name="dd_flipkart_username" data-error=".errorTxtf6">
                        <label for="repswd">User Name</label>
                        <small class="errorTxtf6"></small>
                    </div>
                </div>
                <div class="col s12 display-flex justify-content-end form-action">
                    <button type="submit" class="btn indigo waves-effect waves-light mr-1">Save changes</button>
                    <button type="reset" class="btn btn-light-pink waves-effect waves-light">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>