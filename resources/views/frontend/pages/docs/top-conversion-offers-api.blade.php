@extends('frontend.layout.docs')
@section('title', 'Top Conversion Offers Documentation')


@section('content')
<div class="row">
                <div class="col-md-12">

    <div class="card body-text">
        <div class="card-header card-header-info card-header-text">
            <div class="card-text">
                <h4 class="card-title"><strong>Top Converting Offers API Documentation</strong></h4>
            </div>
        </div>
        <div class="card-body">
            <p>If you would like us to notify you whenever an offer is completed, set up a
                <a href="{{ route('documentation.postback-integration') }}" target="_blank">
                    Server Postback
                </a>
            </p>
            <p>
                The Top Converting Offers API provides a ranked list of up to 100 offers in JSON format, based on the
                highest number of conversions. This API allows publishers to identify high-performing offers and direct
                traffic accordingly.
                It's the fastest and easiest way to discover our most effective offers and boost your sales today.
                Macros to filter with are provided in response so that you can store these offers in your database and
                filter as needed.
            </p>
            <p>
                <strong>
                    Key Features:
                </strong>
            </p>
            <p>
                <strong>Ranking by Conversions: </strong>
                Offers are ranked in descending order of conversions, helping publishers focus on the most effective
                campaigns. <br>
                <strong>Earnings Transparency: </strong>
                The API displays the original payout in USD, representing what the publisher earns per conversion.
                Virtual currency adjustments can be managed by the publisher as needed. <br>
                <strong>Dynamic Click URLs: </strong>
                A new click_url is generated with each API call. However, all URLs function identically, ensuring no
                impact on usability. <br>
            </p>
            <p>
                <strong>
                    Notes:
                </strong>
            </p>
            <p>
                # Offer details such as name, description, and events remain consistent and do not change between API
                calls.<br>
                # Publishers can use the data to tailor their user experience by converting earnings into their desired
                virtual reward currency.<br>
                # This API empowers publishers with actionable insights to maximize traffic and optimize earnings
                effectively.<br>
            </p>

            <div class="row">
                <label for="api-key" class="col-sm-2 col-form-label">API URL</label>
                <div class="col-sm-8">
                    <div class="form-group">
                        <input type="text" id="api-key" class="form-control"
                               style="padding: 0 10px;"
                               value="{{ env('APP_URL') }}/api/v2/get-top-converting-offers?api_key={api_key}&amp;pub_id={pub_id}&amp;app_id={app_id}"
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
                <tr>
                    <td>omit_survey</td>
                    <td>Optional</td>
                    <td>Exclude Surveys from list. Add param &omit_survey=1</td>
                    <td>String</td>
                </tr>
                </tbody>
            </table>
            <p>
                # Replace <span class="text-rose">[user_id]</span> in the click_url with your unique and constant User
                ID. To include dynamic values such as Click ID or Session ID, append them using the <span
                    class="text-rose">&s1=</span> parameter in the click_url.<br>
                # Pull offers from this API every hour to keep your list updated with top-performing offers. <span
                    class="text-rose">You can make up to 3 API requests per hour</span>.<br>
                # The API response provides offer details similar to the "All Offers" API, but without pagination. For
                details about the response structure, please see the <a
                    href="{{ route('documentation.all-offers-api') }}" target="_blank"><u>"All Offers
                        API documentation"</u></a>.<br>
            </p>
        </div>
    </div>
                </div>
            </div>



        @endsection
