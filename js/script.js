new WOW().init();
$(document).ready(function(){
    //МАСКА ДЛЯ НОМЕРА
    // $(".phone-input").mask("+9?9 (999) 999-9999");

    //FORM
    $('.phone-input').on('focus', function(){
        $(this).val('+');
    });
    $('#but_form').on('click', function(){
        // $('.anonymity__content--form').submit();
        if($('.phone-input').val().length > 2){
            $('.pop-up').show(300);
        } else alert('Enter your phone number!');
        
    });
    $('.pop-close').on('click', function(){
        $('.pop-up').hide(300);
    });

    //СКРОЛЛЫ
    $('.header__logo').on('click', function(){
        $('html, body').animate({scrollTop: $(".anonymity").offset().top}, 300);
    });
    $('#anon').on('click', function(){
        $('html, body').animate({scrollTop: $(".anonymity").offset().top}, 300);
    });
    $('#debit').on('click', function(){
        $('html, body').animate({scrollTop: $(".debit").offset().top}, 300);
    });
    $('#price').on('click', function(){
        $('html, body').animate({scrollTop: $(".price").offset().top}, 300);
    });
    $('#app').on('click', function(){
        $('html, body').animate({scrollTop: $(".app").offset().top}, 300);
    });
    $('#faq').on('click', function(){
        $('html, body').animate({scrollTop: $(".faq").offset().top}, 300);
    });
    
    //FAQ
    var k1 = 0;
    $('#o1').click( function(){
        if(k1 === 0){
            rotate();
            hideAll();
            $('#q1').show(300);
            k1 = 1;
            k2 = 0;
            k3 = 0;
            k4 = 0;

            $('#o1 .open').css({
                transform: 'rotate(180deg)',
            });
        } else{
            $('#q1').hide(300);
            k1 = 0;

            $('#o1 .open').css({
                transform: 'rotate(0deg)',
            });
        }
    });
    var k2 = 0;
    $('#o2').click( function(){
        if(k2 === 0){
            rotate();
            hideAll();
            $('#q2').show(300);
            k2 = 1;
            k1 = 0;
            k3 = 0;
            k4 = 0;
            $('#o2 .open').css({
                transform: 'rotate(180deg)',
            });
        } else{
            $('#q2').hide(300);
            k2 = 0;
            $('#o2 .open').css({
                transform: 'rotate(0deg)',
            });
        }
    });
    var k3 = 0;
    $('#o3').click( function(){
        if(k3 === 0){
            rotate();
            hideAll();
            $('#q3').show(300);
            k3 = 1;
            k1 = 0;
            k2 = 0;
            k4 = 0;
            $('#o3 .open').css({
                transform: 'rotate(180deg)',
            });
        } else{
            $('#q3').hide(300);
            k3 = 0;
            $('#o3 .open').css({
                transform: 'rotate(0deg)',
            });
        }
    });
    var k4 = 0;
    $('#o4').click( function(){
        if(k4 === 0){
            rotate();
            hideAll();
            $('#q4').show(300);
            k4 = 1;
            k1 = 0;
            k2 = 0;
            k3 = 0;
            $('#o4 .open').css({
                transform: 'rotate(180deg)',
            });
        } else{
            $('#q4').hide(300);
            k4 = 0;
            $('#o4 .open').css({
                transform: 'rotate(0deg)',
            });
        }
    });

    function hideAll(){
        $('#q1').hide(300);
        $('#q2').hide(300);
        $('#q3').hide(300);
        $('#q4').hide(300);
    }

    function rotate(){
        $('#o1 .open').css({
            transform: 'rotate(0deg)',
        });
        $('#o2 .open').css({
            transform: 'rotate(0deg)',
        });
        $('#o3 .open').css({
            transform: 'rotate(0deg)',
        });
        $('#o4 .open').css({
            transform: 'rotate(0deg)',
        });
    }
});