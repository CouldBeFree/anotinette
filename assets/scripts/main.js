(function($) {

    var first = $('#first input');
    var second = $('#second input');
    var labelFirst = $('.first');
    var labelSecond = $('.second');
    var hoverTarget = $('.additional-wrap input');
    var submit = $('.wpcf7-submit');

    first.focus(function () {
        labelFirst.animate({
            top: '2px',
            fontSize: '14px'
        }, 500);
    });

    first.blur(function () {
        if(!first.val()){
            labelFirst.animate({
                top: '25px',
                fontSize: '18px'
            }, 500);
        }
    });

    second.focus(function () {
        labelSecond.animate({
            top: '2px',
            fontSize: '14px'
        }, 500);
    });

    second.blur(function () {
        if(!second.val()){
            labelSecond.animate({
                top: '25px',
                fontSize: '18px'
            }, 500);
        }
    });

    /*submit.click(function () {
        if(!first.val() || !second.val()){
            labelFirst.css('top', '25px');
            labelSecond.css('top', '25px')
        }
        /!*else if(!second.val()){
            labelSecond.css('top', '25px')
        }*!/
    })*/

    /*hoverTarget.addClass('animated');

    hoverTarget.mouseenter(function(){
        $(this).addClass('zoomOutDown');
    });

    hoverTarget.mouseleave(function(){
        $(this).removeClass('zoomOutDown');
    })*/

})(jQuery);