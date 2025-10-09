@extends('frontend.layout.docs')
@section('title', 'All Offers API Documentation')


@section('content')
<div class="row">
                <div class="col-md-12">

    <div class="card body-text">
        <div class="card-header card-header-info card-header-text">
            <div class="card-text"><h4 class="card-title"><strong>All Offers API Documentation</strong></h4></div>
        </div>
        <div class="card-body">
            <p>If you would like us to notify you whenever an offer is completed, set up a
                <a href="{{ route('documentation.postback-integration') }}" target="_blank">
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
                               value="{{ env('APP_URL') }}/api/v2/get-offers/all?api_key={api_key}&amp;pub_id={pub_id}&amp;app_id={app_id}"
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
                to the <a href="{{ route('documentation.top-conversion-offers-api') }}" target="_blank"><u>"Top
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
                        <img src="{{ asset('assets/images/allOffersV2SuccessResponse.jpg') }}" alt="response-200"
                             style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>



        @endsection
