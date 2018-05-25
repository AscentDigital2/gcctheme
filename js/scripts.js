(function($) {
  $('.menu-button').on('click', function(){
    $('.menu-container').toggleClass('open-menu');  

  });
  $('.close-navigation').on('click', function(){
    $('.menu-container').toggleClass('open-menu'); 
  }); 
  $(document).mouseup(function(e) {
    var container = $(".menu-container"); 
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      $('.menu-container').removeClass('open-menu'); 
    }
  });  

  $('.carousel').carousel();

  $("#volunteer-form").validate({
    rules: {
        name: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        phone:{
          required:true
        },
        message: {required: true},
    },
    submitHandler: function(form) {
        $('#volunteer-submit').text('Sending...').attr('disabled', true);
        var data = $(form).serialize();

        $.ajax({
            type: "POST",
            url: gcctheme_volunteers_vars.ajaxUrl,
            data: $(form).serialize() + '&nonce=' + gcctheme_volunteers_vars.nonce + '&action=gcctheme_volunteers',
            success: function () {
                $('#volunteer-success').show();
                $('#volunteer-submit').text('Send').attr('disabled', false);
            }
        });

        return false;
    }
});
})( jQuery );