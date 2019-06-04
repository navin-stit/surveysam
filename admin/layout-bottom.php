
<footer style="background-color:#d6d6d6;letter-spacing:1px;padding:2px;text-align:center;color:#333;">
        <h5>
          Copyright &copy; <?php echo date('Y')?> All Rights Reserved.
        </h5>
</footer>

<!-- Javascripts --> 
<script type="text/javascript" src="../js/jquery.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<!-- Javascripts -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript">
$(document).on('click', '.swap', function() {
    var swapDirection = $(this).attr('title');
    var postDat = {};
    switch (swapDirection) {
        case "UP":
            var swapIdFrom = $(this).parent().parent('tr').attr('id');
            var swapIdTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).attr('id');
            
            var swapUrlFrom = $(this).parent().parent('tr').find('td.URL').find('a').attr('href');
            var swapUrlTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.URL').find('a').attr('href');
            
            var swapProNameFrom = $(this).parent().siblings('td.product_name').html();
            var swapProNameTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.product_name').html();
            var swapProNameFrom = $.trim(swapProNameFrom);
            var swapProNameTo = $.trim(swapProNameTo);

			var swapImageFrom = $(this).parent().siblings('td.images').children('img').attr('src');
            var swapImageTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.images').children('img').attr('src');

			var swapImagePopularFrom = $(this).parent().siblings('td.img_popular').children('img').attr('src');
            var swapImagePopularTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.img_popular').children('img').attr('src');

            var swapDescFrom = $(this).parent().siblings('td.description').html();
            var swapDescTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.description').html();
            var swapDescFrom = $.trim(swapDescFrom);
            var swapDescTo = $.trim(swapDescTo);

            var swapProPriceFrom = $(this).parent().siblings('td.product_price').html();
            var swapProPriceTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.product_price').html();
            var swapProPriceFrom = $.trim(swapProPriceFrom);
            var swapProPriceTo = $.trim(swapProPriceTo);

            var swapRegPriceFrom = $(this).parent().siblings('td.regular_price').html();
            var swapRegPriceTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.regular_price').html();
            var swapRegPriceFrom = $.trim(swapRegPriceFrom);
            var swapRegPriceTo = $.trim(swapRegPriceTo);

            var swapShipPriceFrom = $(this).parent().siblings('td.shipping').html();
            var swapShipPriceTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.shipping').html();
            var swapShipPriceFrom = $.trim(swapShipPriceFrom);
            var swapShipPriceTo = $.trim(swapShipPriceTo);


            var swapPIdFrom = $(this).parent().parent('tr').attr('class');
            var swapPIdTo = $('.table tr#' + (parseInt(swapIdFrom) - 1)).attr('class');
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.URL').find('a').attr('href', swapUrlFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.URL').find('a').html(swapUrlFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.product_name').html(swapProNameFrom);
			$('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.images').children('img').attr('src',swapImageFrom);
			$('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.img_popular').children('img').attr('src',swapImagePopularFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.description').html(swapDescFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.product_price').html(swapProPriceFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.regular_price').html(swapRegPriceFrom);
            $('.table tr#' + (parseInt(swapIdFrom) - 1)).find('td.shipping').html(swapShipPriceFrom);


            $(this).parent().parent('tr').find('td.URL').find('a').attr('href', swapUrlTo);
            $(this).parent().parent('tr').find('td.URL').find('a').html(swapUrlTo);
            $(this).parent().siblings('td.product_name').html(swapProNameTo);
			$(this).parent().siblings('td.images').children('img').attr('src',swapImageTo);
			$(this).parent().siblings('td.img_popular').children('img').attr('src',swapImagePopularTo);
            $(this).parent().siblings('td.description').html(swapDescTo);
            $(this).parent().siblings('td.product_price').html(swapProPriceTo);
            $(this).parent().siblings('td.regular_price').html(swapRegPriceTo);
            $(this).parent().siblings('td.shipping').html(swapShipPriceTo);


            for (var key in products) {
               
                if ("cls_" + products[key].id == swapPIdFrom) {
                    postDat['idfrom'] = swapPIdFrom;
                
                    postDat['urlfrom'] = swapUrlTo;
                    products[key].URL = swapUrlTo;

                    postDat['pronamefrom'] = swapProNameTo;
                    products[key].product_name = swapProNameTo;

					postDat['proImagefrom'] = swapImageTo;
                    products[key].images = swapImageTo;

					postDat['proImagePopularfrom'] = swapImagePopularTo;
                    products[key].img_popular = swapImagePopularTo;

                    postDat['prodescfrom'] = swapDescTo;
                    products[key].description = swapDescTo;

                    postDat['proPricefrom'] = swapProPriceTo;
                    products[key].product_price = swapProPriceTo;

                    postDat['proRegfrom'] = swapRegPriceTo;
                    products[key].regular_price = swapRegPriceTo;

                    postDat['proShipfrom'] = swapShipPriceTo;
                    products[key].shipping = swapShipPriceTo;
                }

                if ("cls_" + products[key].id == swapPIdTo) {
                    postDat['idTo'] = swapPIdTo;

                    postDat['urlTo'] = swapUrlFrom;
                    products[key].URL = swapUrlFrom;

                    postDat['pronameTo'] = swapProNameFrom;
                    products[key].product_name = swapProNameFrom;

					postDat['proImageTo'] = swapImageFrom;
                    products[key].images = swapImageFrom;

					postDat['proImagePopularTo'] = swapImagePopularFrom;
                    products[key].img_popular = swapImagePopularFrom;

                    postDat['prodescTo'] = swapDescFrom;
                    products[key].description = swapDescFrom;

                    postDat['proPriceTo'] = swapProPriceFrom;
                    products[key].product_price = swapProPriceFrom;

                    postDat['proRegTo'] = swapRegPriceFrom;
                    products[key].regular_price = swapRegPriceFrom;

                    postDat['proShipTo'] = swapShipPriceFrom;
                    products[key].shipping = swapShipPriceFrom;

                }
            }
            console.log(postDat);
            break;
        case "DOWN":
        
            var swapIdFrom = $(this).parent().parent('tr').attr('id');
            var swapIdTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).attr('id');

            var swapUrlFrom = $(this).parent().parent('tr').find('td.URL').find('a').attr('href');
            var swapUrlTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.URL').find('a').attr('href');

			var swapImageFrom = $(this).parent().siblings('td.images').children('img').attr('src');
            var swapImageTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.images').children('img').attr('src');

			var swapImagePopularFrom = $(this).parent().siblings('td.img_popular').children('img').attr('src');
            var swapImagePopularTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.img_popular').children('img').attr('src');

            var swapProNameFrom = $(this).parent().siblings('td.product_name').html();
            var swapProNameTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.product_name').html();

            var swapDescFrom = $(this).parent().siblings('td.description').html();
            var swapDescTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.description').html();

            var swapProPriceFrom = $(this).parent().siblings('td.product_price').html();
            var swapProPriceTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.product_price').html();

            var swapRegPriceFrom = $(this).parent().siblings('td.regular_price').html();
            var swapRegPriceTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.regular_price').html();

            var swapShipPriceFrom = $(this).parent().siblings('td.shipping').html();
            var swapShipPriceTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.shipping').html();


			var swapPIdFrom = $(this).parent().parent('tr').attr('class');
            var swapPIdTo = $('.table tr#' + (parseInt(swapIdFrom) + 1)).attr('class');
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.URL').find('a').attr('href', swapUrlFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.URL').find('a').html(swapUrlFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.product_name').html(swapProNameFrom);
			$('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.images').children('img').attr('src',swapImageFrom);
			$('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.img_popular').children('img').attr('src',swapImagePopularFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.description').html(swapDescFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.product_price').html(swapProPriceFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.regular_price').html(swapRegPriceFrom);
            $('.table tr#' + (parseInt(swapIdFrom) + 1)).find('td.shipping').html(swapShipPriceFrom);

			$(this).parent().parent('tr').find('td.URL').find('a').attr('href', swapUrlTo);
            $(this).parent().parent('tr').find('td.URL').find('a').html(swapUrlTo);
            $(this).parent().siblings('td.product_name').html(swapProNameTo);
			$(this).parent().siblings('td.images').children('img').attr('src',swapImageTo);
			$(this).parent().siblings('td.img_popular').children('img').attr('src',swapImagePopularTo);
            $(this).parent().siblings('td.description').html(swapDescTo);
            $(this).parent().siblings('td.product_price').html(swapProPriceTo);
            $(this).parent().siblings('td.regular_price').html(swapRegPriceTo);
            $(this).parent().siblings('td.shipping').html(swapShipPriceTo);
           
		    for (var key in products) {
                if ("cls_" + products[key].id == swapPIdFrom) {
                    postDat['idfrom'] = swapPIdFrom;
                    postDat['urlfrom'] = swapUrlTo;
                    products[key].URL = swapUrlTo;

                    postDat['pronamefrom'] = swapProNameTo;
                    products[key].product_name = swapProNameTo;

					postDat['proImagefrom'] = swapImageTo;
                    products[key].images = swapImageTo;

					postDat['proImagePopularfrom'] = swapImagePopularTo;
                    products[key].img_popular = swapImagePopularTo;


                    postDat['prodescfrom'] = swapDescTo;
                    products[key].description = swapDescTo;

                    postDat['proPricefrom'] = swapProPriceTo;
                    products[key].product_price = swapProPriceTo;

                    postDat['proRegfrom'] = swapRegPriceTo;
                    products[key].regular_price = swapRegPriceTo;

                    postDat['proShipfrom'] = swapShipPriceTo;
                    products[key].shipping = swapShipPriceTo;
                }
				if ("cls_" + products[key].id == swapPIdTo) {
                    postDat['idTo'] = swapPIdTo;

                    postDat['urlTo'] = swapUrlFrom;
                    products[key].URL = swapUrlFrom;

                    postDat['pronameTo'] = swapProNameFrom;
                    products[key].product_name = swapProNameFrom;

					postDat['proImageTo'] = swapImageFrom;
                    products[key].images = swapImageFrom;

					postDat['proImagePopularTo'] = swapImagePopularFrom;
                    products[key].img_popular = swapImagePopularFrom;

                    postDat['prodescTo'] = swapDescFrom;
                    products[key].description = swapDescFrom;

                    postDat['proPriceTo'] = swapProPriceFrom;
                    products[key].product_price = swapProPriceFrom;

                    postDat['proRegTo'] = swapRegPriceFrom;
                    products[key].regular_price = swapRegPriceFrom;

                    postDat['proShipTo'] = swapShipPriceFrom;
                    products[key].shipping = swapShipPriceFrom;
                }
            }
            break;
    }
    var baseUrL = window.location.protocol + "//" + window.location.host;
    $.ajax({
        url: baseUrL + "/sam/admin/update_url.php",
        type: "post",
        data: postDat,
        dataType: "json",
        success: function(jsonResponse) {
            if (jsonResponse.status == true) {
                }

        },
        error: function(jsonResponse) {
            if (jsonResponse.status == true) {
              
            } else {
                console.log("Internal Server Error! Try After some time.");
            }
        }
    });
});
</script>

<script type="text/javascript">
  var baseUrL = window.location.protocol + "//" + window.location.host;
$(document).on('click','.removePic',function(){
    var productid = $(this).parent().parent('tr').attr('class');
    var Obj = $(this);
    $.ajax({
        url:baseUrL + "/sam/admin/update_url.php",
        type: "post",
        data: {'productID':productid},
        dataType: "json",
        success: function(jsonResponse) {
            if (jsonResponse.status == true) {   
                $(Obj).parent().parent('tr').find('.images').find('img').attr('src',baseUrL + '/images/products_image/default-product-img.jpg');                 
                $(Obj).parent().find('a').remove();
            }
        },
        error: function(jsonResponse) {
            if (jsonResponse.status == true) {
               
            } else {
                console.log("Internal Server Error! Try After some time.");
            }
        }
    });
    
});

$(document).on('click', '.remove_pic',function(){
    var imageId = $(this).parents('tr').attr('class');
    var Obj = $(this);
       $.ajax({
        url: baseUrL + "/sam/admin/update_url.php",
        type: "post",
        data: {'image_id' : imageId},
        dataType: 'json',
        success: function(jsonResponse) {
            if (jsonResponse.status == true) {   
                $(Obj).parent().parent('tr').find('.img_popular').find('img').attr('src',baseUrL + '/images/popular_image/default-product-img.jpg');                 
                $(Obj).parent().find('a').remove();
            }
        },
        error: function(jsonResponse) {
            if (jsonResponse.status == true) {
               
            } else {
                console.log("Internal Server Error! Try After some time.");
            }
        }
    });
});

</script>


</body>
</html>