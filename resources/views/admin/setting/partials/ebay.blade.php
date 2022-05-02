<div id="ebay__section">
    <?php $ebayDetails = getSetting('ebay'); ?>
    <div class="card-panel">
        <form class="ebay__form" method="post" action="{{ route('admin.settings.save')}}">
            @csrf
            <div class="row">
                <input type="hidden" name="type" value="ebay" id="ebay__hidden">
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_ebay_api_url" value="{{ $ebayDetails->dd_ebay_api_url ?? '' }}" name="dd_ebay_api_url" type="text" data-error=".errorTxt100">
                        <label for="api_url">API URL:</label>
                        <small class="errorTxt100"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_ebay_app_id" value="{{ $ebayDetails->dd_ebay_app_id ?? '' }}" name="dd_ebay_app_id" type="text" data-error=".errorTxt101">
                        <label for="oldpswd">App Id</label>
                        <small class="errorTxt101"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_ebay_dev_id" value="{{ $ebayDetails->dd_ebay_dev_id ?? '' }}" name="dd_ebay_dev_id" type="text" data-error=".errorTxt102">
                        <label for="newpswd">Dev Id</label>
                        <small class="errorTxt102"></small>
                    </div>
                </div> 
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_ebay_cert_id" name="dd_ebay_cert_id" value="{{ $ebayDetails->dd_ebay_cert_id ?? '' }}" type="text" data-error=".errorTxt103">
                        <label for="newpswd">Cert Id</label>
                        <small class="errorTxt103"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_ebay_username" value="{{ $ebayDetails->dd_ebay_username ?? '' }}" name="dd_ebay_username" type="text" data-error=".errorTxt104">
                        <label for="newpswd">Username</label>
                        <small class="errorTxt104"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_ebay_api_token" value="{{ $ebayDetails->dd_ebay_api_token ?? '' }}" type="text" name="dd_ebay_api_token" data-error=".errorTxt105">
                        <!-- <textarea data-error=".errorTxt6" name="dd_ebay_api_token"></textarea> -->
                        <label for="ebay_api_token">API Token:</label>
                        <small class="errorTxt105"></small>
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