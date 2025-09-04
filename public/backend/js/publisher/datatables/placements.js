(function($) {
    "use strict";
    $(document).ready(function () {
        $('#PlacementsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'AppName',
                    name: 'AppName'
                },
                {
                    data: 'APIKey',
                    name: 'APIKey'
                },
                {
                    data: 'PayoutRate',
                    name: 'PayoutRate'
                },
                {
                    data: 'Status',
                    name: 'Status'
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
