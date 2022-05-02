<?php $amznDetails = getSetting('amazon'); ?>

<div id="change-password">
    <div class="card-panel">
        <form class="paaswordvalidate" method="post" action="{{ route('admin.settings.save')}}">
            @csrf
            <div class="row">
                <div class="col s12">
                    <input type="hidden" name="type" value="amazon">
                    <div class="input-field">
                        <input id="dd_access_key_id" value="{{ $amznDetails->dd_access_key_id ?? '' }}" name="dd_access_key_id" type="text" data-error=".errorTxta4">
                        <label for="oldpswd">Amazon AccessKeyId</label>
                        <small class="errorTxta4"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_amazon_seller_id" value="{{ $amznDetails->dd_amazon_seller_id ?? '' }}" name="dd_amazon_seller_id" type="text" data-error=".errorTxta5">
                        <label for="oldpswd">Amzon SellerId</label>
                        <small class="errorTxta5"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_amazon_authtoken"  value="{{ $amznDetails->dd_amazon_authtoken ?? '' }}" name="dd_amazon_authtoken" type="text" data-error=".errorTxta6">
                        <label for="newpswd">Authtoken</label>
                        <small class="errorTxta6"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <input id="dd_amazon_secret_key"  value="{{ $amznDetails->dd_amazon_secret_key ?? '' }}" type="text" name="dd_amazon_secret_key" data-error=".errorTxta7">
                        <label for="amazon_secret_key">Amazon Secret Key:</label>
                        <small class="errorTxta7"></small>
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