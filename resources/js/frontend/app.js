$(document).ready(function() {
    $('select').niceSelect();
});

$(function () {
  $('.phone-mask').mask('+38 (999) 999-99-99');
  
  $('.phone-mask').on('focus', function () {
     if ($(this).val().length === 0) {
       $(this).val('+38 (');
     }
  });
  
  $('.phone-mask').keydown(function (e) {
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			 (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			 (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
			 (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
			 (e.keyCode >= 35 && e.keyCode <= 39)) {
				return;
		}

		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
});


$(document).ready(function(){
  $("#show-filter").click(function(){
    $(".content-filter").toggleClass("block");
});
});


$("ul li:has(ul)").addClass("has-submenu");
$("ul li ul").addClass("sub-menu");
$("ul.dropdown li").hover(function () {
    $(this).addClass("hover")
}, function () {
    $(this).removeClass("hover")
});
var $menu = $("#menu"), $menulink = $("#spinner-form"), $search = $("#search"), $search_box = $(".search_box"),
    $menuTrigger = $(".has-submenu > a");
$menulink.click(function (e) {
    $menulink.toggleClass("active");
    $menu.toggleClass("active");
    if ($search.hasClass("active")) {
        $(".menu.active").css("padding-top", "50px")
    }
});
$search.click(function (e) {
    e.preventDefault();
    $search_box.toggleClass("active")
});
$menuTrigger.click(function (e) {
    e.preventDefault();
    var t = $(this);
    t.toggleClass("active").next("ul").toggleClass("active")
});
$("ul li:has(ul)");

$('.sales-wrapper-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: false,
    autoplay: true
  });

  $('.sales-arrows__left-arrow').click(function(){
    $('.sales-wrapper-slider').slick('slickPrev');
  })
  
  $('.sales-arrows__right-arrow').click(function(){
    $('.sales-wrapper-slider').slick('slickNext');
  });


$('.slider-blocks-third__slider-wrapper').slick({
    dots: false,    
    arrows: false,
    autoplay: true,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          focusOnSelect: true
        }
      }
      
    ]
  });

  $('.slider-blocks-third__title-with-arrows__arrows .left-arrow').click(function(){
    $('.slider-blocks-third__slider-wrapper').slick('slickPrev');
  })
  
  $('.slider-blocks-third__title-with-arrows__arrows .right-arrow').click(function(){
    $('.slider-blocks-third__slider-wrapper').slick('slickNext');
  });


$('.news-slider-container__slider-wrapper-news').slick({
    dots: false,    
    arrows: false,
    autoplay: true,
    slidesToShow: 2,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }      
    ]
  });

  $('.title-with-arrows__arrows .left-arrow').click(function(){
    $('.news-slider-container__slider-wrapper-news').slick('slickPrev');
  })
  
  $('.title-with-arrows__arrows .right-arrow').click(function(){
    $('.news-slider-container__slider-wrapper-news').slick('slickNext');
  });

  
if($(window).width() > 992) {
  var $catWidth = $('.cat-autoheight').width();
var $catHeight = $('.cat-autoheight').height();
$('.menu-header ul ul').css({
    'width': $catWidth,
    'min-height': $catHeight + 30
});
}

$(document).ready(function(){
	
	$('#price-range-submit').hide();

	$("#min_price,#max_price").on('change', function () {

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());

	  if (min_price_range > max_price_range) {
		$('#max_price').val(min_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });
	  
	});

	$("#min_price,#max_price").on("paste keyup", function () {                                        

	  $('#price-range-submit').show();

	  var min_price_range = parseInt($("#min_price").val());

	  var max_price_range = parseInt($("#max_price").val());
	  
	  if(min_price_range == max_price_range){

			max_price_range = min_price_range + 100;
			
			$("#min_price").val(min_price_range);		
			$("#max_price").val(max_price_range);
	  }

	  $("#slider-range").slider({
		values: [min_price_range, max_price_range]
	  });

	});


	$(function () {
	  $("#slider-range").slider({
		range: true,
		orientation: "horizontal",
		min: 0,
		max: 1000,
		values: [0, 1000],
		step: 10,

		slide: function (event, ui) {
		  if (ui.values[0] == ui.values[1]) {
			  return false;
		  }
		  
		  $("#min_price").val(ui.values[0]);
		  $("#max_price").val(ui.values[1]);
		}
	  });

	  $("#min_price").val($("#slider-range").slider("values", 0));
	  $("#max_price").val($("#slider-range").slider("values", 1));

	});

	$("#slider-range,#price-range-submit").click(function () {

	  var min_price = $('#min_price').val();
	  var max_price = $('#max_price').val();

	  $("#searchResults").text("Here List of products will be shown which are cost between " + min_price  +" "+ "and" + " "+ max_price + ".");
	});

});

$('.slider-desc-main').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  dots: false,
  autoplay: true,
  asNavFor: '.slider-desc-nav'
});
$('.slider-desc-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-desc-main',
  dots: false,
  arrows: false,
  focusOnSelect: true
});

var list = $(".left-side-review");
var numToShow = 3;
var button = $("#show-more");
var numInList = list.length;
list.hide();
if (numInList > numToShow) {
  button.show();
}
list.slice(0, numToShow).show();

button.click(function(){
    var showing = list.filter(':visible').length;
    list.slice(showing - 1, showing + numToShow).fadeIn();
    var nowShowing = list.filter(':visible').length;
    if (nowShowing >= numInList) {
      button.hide();
    }
});

var countReviews = $('.left-side-review').length;
$('.reviews-count').html(countReviews);

var lists = $(".right-side-review");
var numToShows = 3;
var buttons = $(".show-more");
var numInLists = lists.length;
lists.hide();
if (numInLists > numToShows) {
  buttons.show();
}
lists.slice(0, numToShows).show();

buttons.click(function(){
    var showings = lists.filter(':visible').length;
    lists.slice(showings - 1, showings + numToShows).fadeIn();
    var nowShowings = lists.filter(':visible').length;
    if (nowShowings >= numInLists) {
      buttons.hide();
    }
});

var countReviews = $('.left-side-review').length;
$('.reviews-count').html(countReviews);

var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;

$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});

function recalculateCart()
{
  var subtotal = 0;
  
  $('.product-incart').each(function () {
    subtotal += parseFloat($(this).find('.product-line-price').text());
  });
 
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed());
   
    $('#cart-total').html(total.toFixed());
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}
var subtotal = 0;
  
  $('.product-incart').each(function () {
    subtotal += parseFloat($(this).find('.product-line-price').text());
  });
$('#cart-subtotal').html(subtotal.toFixed());

function updateQuantity(quantityInput)
{
 
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.find('.product-description-info .product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  productRow.find('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed());
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}

function removeItem(removeButton)
{

  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}

$("ul.nav-tabs a").click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});

var list = $(".item-to-show");
var numToShow = 10;
var button = $("#next-posts");
var numInList = list.length;
list.hide();
if (numInList > numToShow) {
  button.show();
}
list.slice(0, numToShow).show();

button.click(function(){
    var showing = list.filter(':visible').length;
    list.slice(showing - 1, showing + numToShow).fadeIn();
    var nowShowing = list.filter(':visible').length;
    if (nowShowing >= numInList) {
      button.hide();
    }
});

// ss_code

$(document).ready(function () {
    $(document.body).delegate('#js-login-form', 'submit', function () {
       var data = $(this).serialize();
       var type = $(this).attr('method');
       var route = $(this).attr('action');

       $.ajax({
           type: type,
           url: route,
           data: data,
           success: function () {
               $('#login-modal').modal('hide');

               window.location.reload();
           },
           error: function (data) {
               $('#loginpassword').val('');

               var email_errors = data.responseJSON.errors.email;

               var email = $('#phoneoremail');
               var email_feedbak = $('#email-feedback');

               $.each(email_errors, function (index, error) {
                   email.addClass('is-invalid');
                   email_feedbak.html(`
                        <div class="invalid-feedback">`+error+`</div>
                   `);
               });
           }
       });

        return false;
    });


    $(document.body).delegate('#js-regiser-form', 'submit', function (e) {
        e.preventDefault();
       var data = $(this).serialize();
       var type = $(this).attr('method');
       var route = $(this).attr('action');

       $.ajax({
           type: type,
           url: route,
           data: data,
           success: function () {
               $('#regiser-modal').modal('hide');

               window.location.reload();
           },
           error: function (data) {
               $('#yourpass').val('');
               $('#yourpassrepeat').val('');

               var email_errors = data.responseJSON.errors.email;
               var password_errors = data.responseJSON.errors.password;

               var email = $('#youremail');
               var email_feedback = $('.js-email-feedback');

               var password = $('#yourpass');
               var password_feedback = $('.js-password-feedback');

               errorsDisplay(email_errors, email, email_feedback);
               errorsDisplay(password_errors, password, password_feedback);

               // $.each(email_errors, function (index, error) {
               //     email.addClass('is-invalid');
               //     email_feedbak.html(`
               //          <div class="invalid-feedback">`+error+`</div>
               //     `);
               // });
           }
       });

        return false;
    });





    function errorsDisplay(array, input_selector, feedback_selector) {
        $.each(array, function (index, error) {
            input_selector.addClass('is-invalid');
            feedback_selector.html(`
                        <div class="invalid-feedback">`+error+`</div>
                   `);
        });
    }
});