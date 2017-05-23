
//burgermenu funktionalitet
$(document).ready(function(){
    $(function() {
        $('.nav-toggle').on('click', function(){
            $('.mobilnav').toggleClass('open');
        });
    });
    $(function() {
        $('.toggleclose').on('click', function(){
            $('.mobilnav').toggleClass('open');
        });
    }); 



    function isTablet() {
        if(window.innerWidth <= 768) {
            return true;
        } else {
            return false;
        }
    }



    $(function() {
        $('.show-basket').on('click', function(){
            if($('#check-out-wrapper').hasClass('open')) {
                $('#check-out-wrapper').toggleClass('open');
                setTimeout(function() {
                    $('#check-out-wrapper').css('display', 'none');
                }, 450);
            } else {
                $('#check-out-wrapper').css('display', 'block');
                setTimeout(function() {
                    $('#check-out-wrapper').toggleClass('open');
                }, 10);
            }
        });
    });

    $(function() {
        $('.close-basket').on('click', function(){
            $('#check-out-wrapper').removeClass('open');
        });
    }); 







    /* Flips the order section on its back which reveals the products that are available. Simple JQuery to control CSS classes*/
    $(function() {
        $('.orderbutton').on('click', function(){
            $('#ordercard').toggleClass('flipped');
        });
    }); 
    $(function() {
        $('.orderfrontflip').on('click', function(){
            $('#ordercard').toggleClass('flipped');
        });
    }); 
    $(function() {
        $('.locationbutton').on('click', function(){
            $('#locationcard').toggleClass('flipped');
        });
    }); 
    $(function() {
        $('#aboutusreturn').on('click', function(){
            $('#locationcard').toggleClass('flipped');
        });
    }); 


    /* moves in the hands of the attention section after a delay by controlling classes */

    $(function() {
        setTimeout(function() {
            $("#lefthand").addClass("animationlh");
        }, 300);

        setTimeout(function() {
            $("#righthand").addClass("animationrh");
        }, 600);
        setTimeout(function(){
            if(!isTablet()) {
                $(".attentionstarwrapper").fadeIn(2500)
            } else {
                $(".mobilattentionstars").fadeIn(2500)
            }
        }, 3500)

        setTimeout(function(){
            $("#attentionh1").fadeIn(3000)
        }, 3500)
        setTimeout(function(){
            $("#attentionh2").fadeIn(3700)
        }, 3500)
    }); 


    //errorhandling for the ordersection
    $(".orderinputfield").on("focusout keyup" ,function() {
        if($("#phone").val().length > 15 || $("#phone").val().length <= 0 || !$.isNumeric($("#phone").val()) || $("#name").val().length > 40 || $("#name").val().length <= 0 || $.isNumeric($("#name").val())) {
            $(".buttondisable").show();
            $(".cl-effect-20 a span").css("background", "#e5e5e5");
            $(".cl-effect-20 a span").css("box-shadow", "inset 0 3px #969696");
        } else {
            $(".buttondisable").hide();
            $(".cl-effect-20 a span").css("background", "#fca309");
            $(".cl-effect-20 a span").css("box-shadow", "inset 0 3px #724c0b");
        }
    });  
});
