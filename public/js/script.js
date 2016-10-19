
$('.sm-box').delay(3000).slideUp();

$('.add-to-cart-btn').on('click', function(){

    $.ajax({
        url: BASE_URL + 'shop/add-to-cart',
        type: "GET",
        dataType: "html",
        data: { product_id: $(this).data('id') },
        success: function (response) {
            location.reload();
        }
    });

});