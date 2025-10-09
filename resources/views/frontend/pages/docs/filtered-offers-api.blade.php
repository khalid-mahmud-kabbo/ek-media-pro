@extends('frontend.layout.docs')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

<div class="row">
                <div class="col-md-12">
                        <style>
        .body-text {
            font-family: Roboto, Helvetica, Arial, sans-serif;
            font-size: 15px;
            line-height: 30px;
            font-weight: 500;
            color: rgb(31, 85, 90);
        }
    </style>

    <div class="card body-text">
        <div class="alert alert-info">
            If you would like to check API response using your App credentials, you can check&nbsp;
            <a href="https://publisher.notik.me/pub/api-docs#endpoints-GETapi-v1-get-offers-filtered"
               target="_blank">
                <strong><u>our documentation here</u>.</strong>
            </a>
        </div>
        <div class="card-header card-header-info card-header-text">
            <div class="card-text"><h4 class="card-title"><strong>Filtered Offers API Documentation</strong></h4></div>
        </div>
        <div class="card-body">
            <p>If you would like us to notify you whenever an offer is completed, set up a
                <a href="https://publisher.notik.me/v1/postback-documentation" target="_blank">
                    Server Postback
                </a>
            </p>
            <p>
                Our filtered offers API consists of a single API call which retrieves in JSON format a list of all of
                our
                filtered available offers for a particular user. By adding additional URL parameters to the API call URL
                you may filter the offers returned in a
                variety of manners. A documentation for all of these options is provided below.
            </p>

            <div class="row">
                <label for="api-key" class="col-sm-2 col-form-label">API URL</label>
                <div class="col-sm-8">
                    <div class="form-group">
                        <input type="text" id="api-key" class="form-control"
                               style="padding: 0 10px;"
                               value="https://notik.me/api/v1/get-offers/filtered?api_key={api_key}&amp;pub_id={pub_id}&amp;app_id={app_id}&amp;user_id={user_id}&amp;s1={s1}&amp;device_name={device_name}&amp;device_type={device_type}&amp;device_os={device_os}&amp;os_version={os_version}&amp;browser_name={browser_name}&amp;browser_version={browser_version}&amp;country_code={country_code}&amp;user_agent={user_agent}&amp;ip={ip}"
                               readonly>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <button type="button" data-link=""
                                class="btn btn-sm btn-info btn-flat btn-copy-api-key"><i
                                class="material-icons">content_copy</i> <span
                                id="copy-api-key-text">Copy</span>
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <table class="table">
                <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Required</th>
                    <th>Description</th>
                    <th>Type</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>api_key</td>
                    <td>Required</td>
                    <td>Your API key for a particular App.</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>pub_id</td>
                    <td>Required</td>
                    <td>Your Publisher ID.</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>app_id</td>
                    <td>Required</td>
                    <td>ID specified to your App.</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>user_id</td>
                    <td>Required</td>
                    <td>This is your site's unique and constant User ID.</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>s1</td>
                    <td>Optional</td>
                    <td>This is your site's changing user Click ID or Session ID.</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>device_name</td>
                    <td>Required</td>
                    <td>
                        Device name of your user.&nbsp;
                        <span class="text-rose">Accepted values: iphone, ipad, other.</span>
                        For tablet, desktop or android mobile devices, this should be <span
                            class="text-rose">other</span>.
                    </td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>device_type</td>
                    <td>Required</td>
                    <td>Device type of your user.&nbsp;
                        <span class="text-rose">Accepted values: tablet, mobile, desktop.</span>
                    </td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>device_os</td>
                    <td>Required</td>
                    <td>
                        Device os of your user.&nbsp;
                        <span class="text-rose">
                            Accepted values: android, ios, windows, macosx, linux.
                        </span>
                        For iphone or ipad devices, this should be <span class="text-rose">ios</span>.
                    </td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>os_version</td>
                    <td>Optional</td>
                    <td>Device os version of your user.
                        <span class="text-rose">E.g.: 5.0, 4.4, 8, 12, etc.</span>&nbsp;
                        This can help filter offers that have specific OS versions defined.
                    </td>
                    <td>Double</td>
                </tr>
                <tr>
                    <td>browser_name</td>
                    <td>Optional</td>
                    <td>Browser name of your user.
                        <span class="text-rose">E.g.: chrome, safari, etc.</span>&nbsp;
                        This can help filter offers that have specific browser name defined.
                    </td>
                    <td>Double</td>
                </tr>
                <tr>
                    <td>browser_version</td>
                    <td>Optional</td>
                    <td>Browser version of your user.
                        <span class="text-rose">E.g.: 111.0, 111.0.5563.64, etc.</span>&nbsp;
                        This can help filter offers that have specific browser versions defined.
                    </td>
                    <td>Double</td>
                </tr>
                <tr>
                    <td>country_code</td>
                    <td>Required</td>
                    <td>Country code of your user.&nbsp;
                        <span class="text-rose">E.g.: US, GB, IN, etc.</span>
                    </td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>user_agent</td>
                    <td>Required</td>
                    <td>
                        User Agent of your user's device.&nbsp;
                        <span class="text-rose">
                            E.g.: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36
                        </span>
                    </td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>ip</td>
                    <td>Required</td>
                    <td>IP Address of your user.&nbsp;
                        <span class="text-rose">Format: 0.0.0.0</span>
                    </td>
                    <td>String</td>
                </tr>
                </tbody>
            </table>
            <p>
                <b class="text-uppercase">Important note: </b>
                <br>
                - Keep in mind that the offers shown are based on the filter values provided from your side, so we
                advise you to map the correct user details in the filter fields for better conversions.
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-header card-header-success card-header-text">
            <div class="card-text"><h4 class="card-title"><strong>API Response</strong></h4></div>
        </div>
        <div class="card-body">
            <h3>Response 200</h3>
            <h5>Content-Type: application/json</h5>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <img src="https://publisher.notik.me/img/filteredOffersSuccessResponse.jpg" alt="response-200"
                             style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>


        @endsection
