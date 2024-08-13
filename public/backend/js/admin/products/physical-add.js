(function ($) {
    "use strict";

    $(".tag_one").select2({ placeholder: "Select One" });
    $(".tag_two").select2({ placeholder: "Select One" });





    $('#discount').on('keyup', function () {
        discount_price()
    })

    $('#price').on('keyup', function () {
        discount_price()
    })

    function discount_price() {
        var price = $('#price').val();
        var discount = $('#discount').val();
        var discount_price = (price * (100 - discount)) / 100;
        $('#discount_price').val(discount_price);
    }
    discount_price()





    $('#discountpp').on('keyup', function () {
        discount_price()
    })

    $('#price').on('keyup', function () {
        discount_price()
    })

    function discount_price() {
        var price = $('#price').val();
        var discount = $('#discountpp').val();
        var discount_price = (price) - (discount);
        $('#discount_price').val(discount_price);
    }
    discount_price()








    $('#en-product-name').on('keyup', function () {
        let $this = $(this);
        let str = $this.val().toLowerCase().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');
        $('#en-product-slug').val(str);
    })

    $('#en-product-name').on('keyup', function () {
        let $this = $(this);
        let str = $this.val();
        $('#fr-product-name').val(str);
    })

    $('#en_about').on('keyup', function () {
        let $this = $(this);
        let str = $this.val();
        $('#fr_about').val(str);
    })

    // $('#summernote').on('keyup', function () {
    //     let $this = $(this);
    //     let str = $this.val();
    //     $('#summernote4').val(str);
    // })

    // $('#summernote2').on('keyup', function () {
    //     let $this = $(this);
    //     let str = $this.val();
    //     $('#summernote5').val(str);
    // })

    // $('#summernote3').on('keyup', function () {
    //     let $this = $(this);
    //     let str = $this.val();
    //     $('#summernote6').val(str);
    // })

    $('#en-product-name').on('keyup', function () {
        let $this = $(this);
        let str = $this.val().toLowerCase().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');
        $('#fr-product-slug').val(str);
    })





})(jQuery)
