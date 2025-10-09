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
            <div class="card-text">
                <h4 class="card-title">Postback Documentation</h4>
            </div>
        </div>
        <div class="card-body">
            <p>Whenever a user makes a conversion, we will send you a URL request, called a 'Server to Server Postback'
                with some information. Using this information, you can reward the user who performed the action
                accordingly. The postback will be sent to the global postback URL you have defined in your App
                Settings.
            </p>
            <p class="lead">
                These are the parameters that we will send to you with your postback to ensure proper tracking of your
                leads:
            </p>
            <table class="table">
                <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>pub_id</td>
                    <td>Your Publisher ID specified in the click url.</td>
                </tr>
                <tr>
                    <td>app_id</td>
                    <td>Your App ID specified in the click url.</td>
                </tr>
                <tr>
                    <td>user_id</td>
                    <td>Your User ID specified in the click url.</td>
                </tr>
                <tr>
                    <td>s1</td>
                    <td>Your subID (&s1=) specified in the click url.</td>
                </tr>
                <tr>
                    <td>amount</td>
                    <td>Virtual amount earned by your User. In your chosen conversion rate.</td>
                </tr>
                <tr>
                    <td>payout</td>
                    <td>Amount earned for conversion. In USD ($).</td>
                </tr>
                <tr>
                    <td>offer_id</td>
                    <td>ID of completed offer.</td>
                </tr>
                <tr>
                    <td>offer_name</td>
                    <td>Name of completed offer.</td>
                </tr>
                <tr>
                    <td>currency_name</td>
                    <td>Virtual currency name defined in your app settings.</td>
                </tr>
                <tr>
                    <td>timestamp</td>
                    <td>Offer completed timestamp.</td>
                </tr>
                <tr>
                    <td>hash</td>
                    <td>
                        This hash consists of a HEX encoded SHA1 HMAC. The whole URL is hashed with the secret key of
                        the App. By checking the hash, you can be sure that the postback was actually sent by us and
                        that it is legit.
                    </td>
                </tr>
                <tr>
                    <td>txn_id</td>
                    <td>
                        Unique identifier of this transaction, make sure to store and check this for each request, so
                        you
                        won't credit your user multiple times.
                    </td>
                </tr>
                <tr>
                    <td>conversion_ip</td>
                    <td>
                        Converting device's IP address if known, 0.0.0.0 otherwise
                    </td>
                </tr>
                <tr>
                    <td>rewarded_txn_id</td>
                    <td>
                        This will only be available for chargebacks and will contain the previously sent reward postback
                        transaction id, in case you need to locate the original conversion.
                    </td>
                </tr>
                <tr>
                    <td>event_id</td>
                    <td>
                        ID of the offer event that was credited. For non-event conversions, it will be empty.
                    </td>
                </tr>
                <tr>
                    <td>event_name</td>
                    <td>
                        Name of the offer event that was credited. For non-event conversions, it will be empty.
                    </td>
                </tr>
                </tbody>
            </table>
            <p>
                <b class="text-uppercase">Important note: </b>
                <br>
                - Keep in mind that in case of chargebacks, the payout and amount parameter will be negative. And the
                amount will be calculated based on your current conversion rate settings.
                <br>
                - We use RFC 1738 as encoding_type, which implies that spaces are encoded as plus (+) signs.
                <br>
                - Please check in your application, if the parameters without values in the postback are being treated
                as "NULL" instead of empty value, which would result in different hash value.
                <br>
                - After validating the postback request details, we will require expected response as soon as possible,
                to mark the postback as sent. Our max wait time is 15 seconds.
            </p>
            <p>
                <b class="text-uppercase">Postback Ips: </b> All of our postbacks shall be sent from the
                IP: 192.53.121.112. Please white-list this IP as this is the ONLY IP we'll be
                sending postbacks from.
            </p>
        </div>
    </div>

    <div class="card body-text">
        <div class="card-header card-header-rose card-header-text">
            <div class="card-text">
                <h4 class="card-title">Expected Response</h4>
            </div>
        </div>
        <div class="card-body">
            <p>
                We expect a response with 200 status code to indicate that the postback was received successfully. In
                case we receive response with any other invalid status code, we will try to send the postback up to 2
                times, if we still do not receive a 200 status code, we will stop sending postback calls and email you
                with the details, so you can process it manually.
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-header card-header-success card-header-text">
            <div class="card-text">
                <h4 class="card-title">PHP Example Code</h4>
            </div>
        </div>
        <div class="card-body body-text">
            <p>
                <span><</span><span>?</span><span>php</span>
                <br>/*Get query parameters*/
                <br>$pub_id = $_REQUEST['pub_id'];
                <br>$app_id = $_REQUEST['app_id'];
                <br>$user_id = $_REQUEST['user_id'];
                <br>$amount = $_REQUEST['amount'];
                <br>$payout = $_REQUEST['payout'];
                <br>$offer_id = $_REQUEST['offer_id'];
                <br>$offer_name = $_REQUEST['offer_name'];
                <br>$event_id = $_REQUEST['event_id'];
                <br>$event_name = $_REQUEST['event_name'];
                <br>$txn_id = $_REQUEST['txn_id'];
                <br>$currency_name = $_REQUEST['currency_name'];
                <br>$timestamp = $_REQUEST['timestamp'];
                <br>$hash = $_REQUEST['hash'];
                <br>
                <br>/*Check if duplicate transaction*/
                <br>$transactionExist = false; // Search in database if current txn_id exist. True if exist
                <br>if ($transactionExist) {
                <br>&nbsp;&nbsp;&nbsp;&nbsp;/*Duplicate transaction detected. Do not reward user but send us postback
                received positive response*/
                <br>&nbsp;&nbsp;&nbsp;&nbsp;return 1;
                <br>}
                <br>
                <br>/*Create validation hash and validate hashes*/
                <br>$secretKey = ""; // This has to be your App's secret key that you can find in you App detail page
                <br>/*Get the currently active http protocol*/
                <br>$protocol = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") ? "https" : "http";
                <br>/*Build the full callback URL*/
                <br>/*Example: https://url.com?param1=foo&amp;param2=bar&amp;hash=3171f6b78e06cadcec4c9c3b15f8588400e8738*/
                <br>$url = "$protocol://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                <br>/*Get the callback URL without the "hash" query parameter*/
                <br>/*Example: https://url.com?param1=foo&amp;param2=bar*/
                <br>$urlWithoutHash = substr($url, 0, -strlen("&hash=$hash"));
                <br>/*Generate a hash from the complete callback URL without the "hash" query parameter*/
                <br>$generatedHash = hash_hmac("sha1", $urlWithoutHash, $secretKey);
                <br>
                <br>/*Check if the generated hash is the same as the "hash" query parameter*/
                <br>if ($generatedHash == $hash) {
                <br>&nbsp;&nbsp;&nbsp;&nbsp;/*Validation successful. Queue your user credit functions and send us
                postback received positive response*/
                <br>&nbsp;&nbsp;&nbsp;&nbsp;return 1;
                <br>} else {
                <br>&nbsp;&nbsp;&nbsp;&nbsp;/*Hash not equal. Send error response.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;Try to fix any errors found for hash validation.
                <br>&nbsp;&nbsp;&nbsp;&nbsp;Contact us in case the postback is from our ip and need some assistance.*/
                <br>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
                <br>}
            </p>
        </div>
    </div>
                </div>
            </div>



        @endsection
