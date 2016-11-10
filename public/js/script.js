
$(document).ready(function() {
    $('#summernote').summernote({
        height: 300,
        minHeight: 300,             // set minimum height of editor
        maxHeight: 300,             // set maximum height of editor
    });
});

$('.my-source-field').on('keyup', function(){
    var sr = $(this).val();
    sr = sr.trim();
    sr = sr.toLowerCase();
    sr = sr.replace(/\s/g, '-');
    sr = sr.replace(/\W/g, '');
    $('.my-target-field').val(sr);
});

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

$('.update-cart').on('click', function(){
    $.ajax({
        url: BASE_URL + 'shop/update-cart',
        type: "GET",
        dataType: "html",
        data: { op: $(this).data('op'), id: $(this).data('id') },
        success: function (response) {
            location.reload();
        }
    });
});