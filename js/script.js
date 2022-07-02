                                        /*owl carousel initiation*/
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        autoplayhoverpause:true,
        autoplaytimeout:100,
        items:3,
        nav:true,
        loop:true
    });



                                        /*button click form*/
    $('#login').click(function(){
       /* var x = $('#formVisible').hasClass('d-none');
        if (x){
            $('#formVisible').removeClass('d-none');
        }else{
            $('#formVisible').addClass('d-none');
        }*/
        $('#formVisible').toggleClass('d-none');
     });

     $('#press').click(function(){
         alert('its running');
         
     });
    
