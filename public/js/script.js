$(function () {

    "use_strict";

    var topoffset = 50; //variable for menu height

    //Activate Scrollspy
    $('body').scrollspy({
        target: 'header .navbar',
        offset: topoffset
    });

    var hash = $(this).find('li.active a').attr('href');
    if(hash !== '#featured'){
        $('header nav').addClass('inbody');
    } else {
        $('header nav').removeClass('inbody');
    }

    // Add an inbody class to nav when scrollspy event fires
    $('.navbar-fixed-top').on('activate.bs.scrollspy', function () {
        var hash = $(this).find('li.active a').attr('href');
        if(hash !== '#featured'){
            $('header nav').addClass('inbody');
        } else {
            $('header nav').removeClass('inbody');
        }
    })
});

$(document).ready(function() {

    $('input.search').keyup(function () {

        var userText = $.trim( $(this).val() );

        if (userText.length > 0) {

            $.ajax({
                url: BASE_URL + '/requestProducts',
                type: "GET",
                dataType: "json",
                data: {search: userText},
                success: function (response) {

                    if (response) {

                        var autoList = '<table>';

                        $.each(response, function (key, val) {

                            autoList += '<tr><td style="padding: 1px 2px"><img style="background: #FFFFFF; border: 1px solid #e1e1e1; padding: 2px; border-radius: 1px; max-width: 40px; max-height: 40px; text-shadow: none" width="30" src="'+ BASE_URL + 'images/products/'+val.url+'/'+val.primary_image+'"></td><td style="padding: 0 10px"><a href="'+ BASE_URL + 'shop/'+val.category+'/'+val.sub_category+'/'+val.url+'">'+val.title+'</a></td></tr>';

                        });

                        autoList += '</table>';
                        $('div.search-result').html(autoList).fadeIn(200);

                    } else {

                        $('div.search-result').fadeOut(200);

                    }

                }
            });

        } else {

            $('div.search-result').fadeOut(200);

        }

    });

    $('input.search').focusout(function(){
        if(!$('div.search-result').is(":hover")){
            $('div.search-result').fadeOut(200);
        }
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

$('.sm-box').delay(3000).fadeOut();

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

// Update Cart Ajax
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

// Keep width and height of the target equal.
// Currently in use for products images for proper scaling in case image resolution is not equal.
var cw = $('.child').width();
$('.child').css({
    'height': cw + 'px'
});