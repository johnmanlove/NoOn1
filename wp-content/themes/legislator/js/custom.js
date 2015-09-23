/* ----------------- Start Document ----------------- */
(function($){
	$(document).ready(function(){

/*----------------------------------------------------*/
/*	Foundation Magic
/*----------------------------------------------------*/

	$(document).foundation();

/*----------------------------------------------------*/
/*  Fancybox Images
/*----------------------------------------------------*/

      $(".fancybox").fancybox({
        padding     : 0,
        helpers : {
            overlay : {
                css : {
                    'background' : 'rgba(35, 39, 43, 1)'
                }
            },
          title : {
            type: 'outside'
          },
          thumbs  : {
            width : 50,
            height  : 50
          }
        }
      });

/*----------------------------------------------------*/
/*  Home Posts Slider -  http://basic-slider.com/
/*----------------------------------------------------*/

    $('#home_post_slider').bjqs({
        'height' : 320,
        'width' : 1140,
        responsive : true,

        // animation values
        animtype : 'fade', // accepts 'fade' or 'slide'
        animduration : 450, // how fast the animation are
        animspeed : 3000, // the delay between each slide
        automatic : false, // automatic

        // control and marker configuration
        showcontrols : true, // show next and prev controls
        centercontrols : true, // center controls verically
        nexttext : '&#62;', // Text for 'next' button (can use HTML)
        prevtext : '&#60;', // Text for 'previous' button (can use HTML)
        showmarkers : false, // Show individual slide markers
        centermarkers : true, // Center markers horizontally

        // interaction values
        keyboardnav : true, // enable keyboard navigation
        hoverpause : true, // pause the slider on hover


    });


/*----------------------------------------------------*/
/*  Mailchimp hide label on focus - http://goo.gl/jfafbW
/*----------------------------------------------------*/

    $('.mc_input').each(function() {

        var elem = $(this);

        $('label[for="' + $(this).attr('id') + '"]').click(function() {
              elem.focus();
        });

        if ($(this).val() != '') {
            $('label[for="' + $(this).attr('id') + '"]').hide();
        }

    }).focus(function() {

        $('label[for="' + $(this)[0].id + '"]').hide();

    }).blur(function() {

        if($(this).val() == '') {
            $('label[for="' + $(this)[0].id + '"]').show();
        }

    }).change(function(){

      if($(this).val() != '') {
        $('label[for="' + $(this)[0].id + '"]').hide();
      }

    })

/* ------------------ End Document ------------------ */
});

})(this.jQuery);

