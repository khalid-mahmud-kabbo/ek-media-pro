@extends('frontend.layout.docs')
@section('title', 'Iframe Documentation')


@section('content')
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
            <div class="card-text"><h4 class="card-title"><strong>Iframe Documentation</strong></h4></div>
        </div>
        <div class="card-body">
            <p>If you would like us to notify you whenever an offer is completed, set up a
                <a href="{{ route('documentation.postback-integration') }}" target="_blank">
                    Server Postback
                </a>
            </p>
            <div class="row">
                <label for="iframe-link" class="col-sm-2 col-form-label">Iframe Link</label>
                <div class="col-sm-8">
                    <div class="form-group">
                        <input type="text" id="iframe-link" class="form-control"
                               style="padding: 0 10px;"
                               value="<iframe src='{{ env('APP_URL') }}/live-offers?api_key={YOUR_API_KEY}&amp;pub_id={YOUR_PUB_ID}&amp;app_id={YOUR_APP_ID}&amp;user_id={YOUR_UNIQUE_USER_ID}' style='height: 100vh; width: 100%; margin: 0; padding: 0; border: 0;'></iframe>"
                               readonly>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <button type="button" data-link=""
                                class="btn btn-sm btn-info btn-flat btn-copy-iframe-link"><i
                                class="material-icons">content_copy</i> <span
                                id="copy-iframe-link-text">Copy</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
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
                        <td>user_id</td>
                        <td>Required</td>
                        <td>Your site's unique and constant User ID.</td>
                        <td>String</td>
                    </tr>
                    <tr>
                        <td>s1</td>
                        <td>Optional</td>
                        <td>Your site's changing user Click ID or Session ID.</td>
                        <td>String</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
                </div>
            </div>



        @endsection
