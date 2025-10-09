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
        <div class="card-header card-header-info card-header-text">
            <div class="card-text"><h4 class="card-title"><strong>All Offers API Documentation</strong></h4></div>
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                If you would like to check API response using your App credentials, you can check&nbsp;
                <a href="https://publisher.notik.me/pub/api-docs#endpoints-GETapi-v2-get-offers-all"
                   target="_blank">
                    <strong><u>our documentation here</u>.</strong>
                </a>
            </div>
            <p>If you would like us to notify you whenever an offer is completed, set up a
                <a href="https://publisher.notik.me/v1/postback-documentation" target="_blank">
                    Server Postback
                </a>
            </p>
            <p>
                Our all offers API consists of paginated offer data in JSON format, providing a maximum of 1000 offers
                per page. This API delivers all available offers without any filters. Macros for filtering are included
                in the response, enabling you to store these offers in your database and filter them as needed.
            </p>

            <div class="row">
                <label for="api-key" class="col-sm-2 col-form-label">API URL</label>
                <div class="col-sm-8">
                    <div class="form-group">
                        <input type="text" id="api-key" class="form-control"
                               style="padding: 0 10px;"
                               value="https://notik.me/api/v2/get-offers/all?api_key={api_key}&amp;pub_id={pub_id}&amp;app_id={app_id}"
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
                    <td>Your API key for a particular App</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>pub_id</td>
                    <td>Required</td>
                    <td>Your Publisher ID</td>
                    <td>String</td>
                </tr>
                <tr>
                    <td>app_id</td>
                    <td>Required</td>
                    <td>ID specified to your App</td>
                    <td>String</td>
                </tr>
                </tbody>
            </table>
            <p>
                # Replace <span class="text-rose">[user_id]</span> in the click_url with your unique and constant User
                ID. To include dynamic values such as Click ID or Session ID, append them using the <span
                    class="text-rose">&s1=</span> parameter in the click_url.<br>
                <strong>Fetch flow: </strong>Use the <span class="text-info">next_page_url</span> from the API response
                to fetch offers sequentially. Continue making HTTP requests to the <span
                    class="text-info">next_page_url</span> until its value is <span class="text-info">null</span> to
                retrieve all available offers. Refer to the response example below.<br>
                <strong>Fetch Frequency: </strong>Pull offers every 15 minutes to ensure validity.<br>
                <strong>Note: </strong>Sending traffic to invalid or disabled offers will not be rewarded.<br>
                <strong>Maximum request attempts: </strong>30 requests per 15 minutes.<br>
                <strong>Duplicate Offer Handling: </strong>Check if a user has already completed an offer. For offers
                marked as "new users only," ensure that the offer is hidden for users who have completed it previously.
                Such users will not be rewarded.<br>
                <strong>Top Converting Offers: </strong>To access a list of offers ranked by maximum conversions, refer
                to the <a href="https://publisher.notik.me/v2/api-top-offers-documentation" target="_blank"><u>"Top
                        Converting Offers API documentation"</u></a>.<br>
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
                        <img src="https://publisher.notik.me/img/allOffersV2SuccessResponse.jpg" alt="response-200"
                             style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>



        @endsection
