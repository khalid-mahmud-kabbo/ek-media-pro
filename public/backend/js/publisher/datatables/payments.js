(function($) {
    "use strict";
    $(document).ready(function () {
        $('#PaymentsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'ID',
                    name: 'ID'
                },
                {
                    data: 'PaymentMethod',
                    name: 'PaymentMethod'
                },
                {
                    data: 'PaymentInfo',
                    name: 'PaymentInfo'
                },
                {
                    data: 'Amount',
                    name: 'Amount'
                },
                {
                    data: 'ViewDetails',
                    name: 'ViewDetails'
                },
                {
                    data: 'Status',
                    name: 'Status'
                }
            ]
        });
    });
})(jQuery)
