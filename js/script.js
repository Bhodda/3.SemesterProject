
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
        if(window.innerWidth <= 856) {
            return true;
        } else {
            return false;
        }
    }



    /* Flips the order section on its back which reveals the products that are available. Simple JQuery to control CSS classes*/
    $(function() {
        $('.orderbutton').on('click', function(){
            $('#card').toggleClass('flipped');
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


});
