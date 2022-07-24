/* font-family: 'Kaushan Script', cursive; */
/* font-family: 'Pinyon Script', cursive; */
/* font-family: 'Petit Formal Script', cursive; */
/* font-family: 'Aguafina Script', cursive; */
/* font-family: 'Rouge Script', cursive; */
// font-family: 'Roboto', sans-serif;

        
$(document).ready(function() {

    $('.counter').each(function () {
$(this).prop('Counter',0).animate({
    Counter: $(this).text()
}, {
    duration: 4000,
    easing: 'swing',
    step: function (now) {
        $(this).text(Math.ceil(now));
    }
});
});

});  
