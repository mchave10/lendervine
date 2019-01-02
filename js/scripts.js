/* Template: Cedo - Loans Credit Landing Page Template
   Author: InovatikThemes
   Created: Jan 2018
   Description: Custom JS file
*/


(function($) {
    "use strict"; 
	
	/* Preloader */
	$(window).on('load', function() {
		var preloaderFadeOutTime = 500;
		function hidePreloader() {
			var preloader = $('.spinner-wrapper');
			setTimeout(function() {
				preloader.fadeOut(preloaderFadeOutTime);
			}, 500);
		}
		hidePreloader();
	});

	
	/* Navbar Scripts */
	// jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
		if ($(".navbar").offset().top > 60) {
			$(".fixed-top").addClass("top-nav-collapse");
		} else {
			$(".fixed-top").removeClass("top-nav-collapse");
		}
	});

	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$(document).on('click', 'a.page-scroll', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 600, 'easeInOutExpo');
			event.preventDefault();
		});
	});

    // closes the responsive menu on menu item click
    $(".navbar-nav li a").on("click", function(event) {
    if (!$(this).parent().hasClass('dropdown'))
        $(".navbar-collapse").collapse('hide');
    });
    

	/* Image Slider - Swiper */
	var imageSlider = new Swiper('.image-slider', {
        autoplay: {
			delay: 3500
		},
        loop: false,
        navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev'
		}
    });


	/* Card Slider - Swiper */
	var cardSlider = new Swiper('.card-slider', {
		autoplay: {
			delay: 4000,
		},
        loop: false,
        pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
		slidesPerView: 3,
		spaceBetween: 0,
        breakpoints: {
            992: {
                slidesPerView: 1
            }
        }
	});


    /* Lightbox - Magnific Popup */
	$('.popup-with-move-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false, /* keep it false to avoid html tag shift with margin-right: 17px */
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-slide-bottom'
	});


	/* Image Slider - Magnific Popup */
	$('.popup-link').magnificPopup({
		removalDelay: 300,
		type: 'image',
		callbacks: {
			beforeOpen: function() {
				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure ' + this.st.el.attr('data-effect'));
			},
			beforeClose: function() {
				$('.mfp-figure').addClass('fadeOut');
			}
		},
		gallery:{
			enabled:true //enable gallery mode
		}
	});


    /* Move Form Fields Label When User Types */
    // for input and textarea fields
    $("input, textarea").keyup(function(){
		if ($(this).val() != '') {
			$(this).addClass('notEmpty');
		} else {
			$(this).removeClass('notEmpty');
		}
    });
    

	
	/* Contact Form */
    $("#ContactForm").validator().on("submit", function(event) {
    	if (event.isDefaultPrevented()) {
            // handle the invalid form...
            cformError();
            csubmitMSG(false, "Please fill all fields!");
        } else {
            // everything looks good!
            event.preventDefault();
            csubmitForm();
        }
    });

    function csubmitForm() {
        // initiate variables with form content
		var name = $("#cname").val();
		var email = $("#cemail").val();
        var message = $("#cmessage").val();
        var terms = $("#cterms").val();

        $.ajax({
            type: "POST",
            url: "php/contactform-process.php",
            data: "name=" + name + "&email=" + email + "&message=" + message + "&terms=" + terms, 
            success: function(text) {
                if (text == "success") {
                    cformSuccess();
                } else {
                    cformError();
                    csubmitMSG(false, text);
                }
            }
        });
	}

    function cformSuccess() {
        $("#ContactForm")[0].reset();
        csubmitMSG(true, "Message Submitted!")
    }

    function cformError() {
        $("#ContactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
	}

    function csubmitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h3 text-center tada animated";
        } else {
            var msgClasses = "h3 text-center";
        }
        $("#cmsgSubmit").removeClass().addClass(msgClasses).text(msg);
        $("input").removeClass('notEmpty'); // resets the field label after submission
        $("textarea").removeClass('notEmpty'); // resets the field label after submission
    }


    /* Privacy Form */
    $("#PrivacyForm").validator().on("submit", function(event) {
    	if (event.isDefaultPrevented()) {
            // handle the invalid form...
            pformError();
            psubmitMSG(false, "Please fill all fields!");
        } else {
            // everything looks good!
            event.preventDefault();
            psubmitForm();
        }
    });

   





    /* Back To Top Button */
    // create the back to top button
    $('body').prepend('<a href="body" class="back-to-top page-scroll">Back to Top</a>');
    var amountScrolled = 700;
    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $('a.back-to-top').fadeIn('500');
        } else {
            $('a.back-to-top').fadeOut('500');
        }
    });


	/* Removes Long Focus On Buttons */
	$(".button, a, button").mouseup(function() {
		$(this).blur();
	});
    
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    $(window).on('load',function(){
        var rangeVal = parseInt($('#loan_amount').val());
        rangeVal = numberWithCommas(rangeVal);
        $('#loan_amount_label').text('$' + rangeVal);    
    });
    $('#loan_amount').on('input change', function () {
        var rangeVal = parseInt($('#loan_amount').val());
        rangeVal = numberWithCommas(rangeVal);
        $('#loan_amount_label').text('$' + rangeVal);
    });
     $(window).on('load',function(){
        var rangeValrevenue = parseInt($('#monthly_revenue').val());
        rangeValrevenue = numberWithCommas(rangeValrevenue);
        $('#monthly_revenue_label').text('$' + rangeValrevenue + '+');    
    });
    $('#monthly_revenue').on('input change', function () {
        var rangeValrevenue = parseInt($('#monthly_revenue').val());
        rangeValrevenue  = numberWithCommas(rangeValrevenue);
        $('#monthly_revenue_label').text('$' + rangeValrevenue + '+');
    });
    $(window).on('load',function(){
        var rangeValcredit  = parseInt($('#credit_score').val());
        rangeValcredit  = numberWithCommas(rangeValcredit );
        $('#credit_score_label').text(rangeValcredit + '+');    
    });
    $('#credit_score').on('input change', function () {
        var rangeValcredit = parseInt($('#credit_score').val());
        rangeValcredit  = numberWithCommas(rangeValcredit );
        $('#credit_score_label').text(rangeValcredit + '+');
    });
    $(window).on('load',function(){

            $(".finalstep input:not(#submit)").each(function(){


                if($(this).val() !== "") {


                    $(this).next('label').addClass('focused');          
                }   
                else {
                    $(this).next('label').removeClass('focused');  

                } 
            });     
        });    
        $('.finalstep input').on("change focus keydown blur", function(){
            if($(this).val() !== "") {
                $(this).siblings('label').addClass('focused');          
            }   
            else {
                $(this).next('label').removeClass('focused');  

            }    
        }); 
    
        $('#bottom-wizard button').on('click',function(){
            setTimeout(function() {
				if($('.finalstep').hasClass('current')) {
                    $('.header-content').addClass('finalstepheadercontent');  
                    $('.header').addClass('finalstepheader');  
                }
                else {
                    $('.header-content').removeClass('finalstepheadercontent');  
                    $('.header').removeClass('finalstepheader');     
                }
			}, 500);   
        });

    
})(jQuery);

