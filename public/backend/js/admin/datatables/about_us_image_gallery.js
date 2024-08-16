(function($) {
    "use strict";
    $(document).ready(function () {
        $('#ImageGallery').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Image',
                    name: 'Image'
                },
                {
                    data: 'product_link',
                    name: 'product_link'
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
