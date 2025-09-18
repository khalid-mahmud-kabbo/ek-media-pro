(function($) {
    "use strict";
    $(document).ready(function () {
        $('#OffersTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Icon',
                    name: 'Icon'
                },
                {
                    data: 'OfferId',
                    name: 'OfferId'
                },
                {
                    data: 'OfferName',
                    name: 'OfferName'
                },
                {
                    data: 'Category',
                    name: 'Category'
                },
                {
                    data: 'Devices',
                    name: 'Devices'
                },
                {
                    data: 'Platforms',
                    name: 'Platforms'
                },
                {
                    data: 'Countries',
                    name: 'Countries'
                },
                {
                    data: 'OS',
                    name: 'OS'
                },
                {
                    data: 'Payout',
                    name: 'Payout'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });
    });
})(jQuery)
