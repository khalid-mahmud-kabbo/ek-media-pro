(function($) {
    "use strict";
    $(document).ready(function () {
        $('#ReversesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'OfferId',
                    name: 'OfferId'
                },
                {
                    data: 'AppName',
                    name: 'AppName'
                },
                {
                    data: 'UserId',
                    name: 'UserId'
                },
                {
                    data: 'offer_name',
                    name: 'offer_name'
                },
                {
                    data: 'payout',
                    name: 'payout'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'ip_address',
                    name: 'ip_address'
                },
                {
                    data: 'Status',
                    name: 'Status'
                },

            ]
        });
    });
})(jQuery)
