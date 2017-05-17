

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
}); 

