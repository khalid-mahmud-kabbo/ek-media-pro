(function($) {
    "use strict";
    $(document).ready(function () {
        $('#OfferSectionTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("/admin/offers"),
            columns: [
                {
                    data: 'title',
                    name: 'title'
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
