$(document).ready(function() {
    $x = true;
    setBindings();
    $('#top1').fadeIn(1000);
    $(window).scroll(function() {
        $scrollTop = $(window).scrollTop();
        console.log($scrollTop);

        if ($scrollTop > 132) {
            $('#logo .logo1 .logo2')
                .css('transform', 'translateY(0px)');

            setTimeout(function() {
                $('#logo .logo1 .logo3')
                    .css('transform', 'translateY(0px)');
            }, 500)
            setTimeout(function() {
                $('#logo .logo4')
                    .css('transform', 'translateY(0px)');
            }, 700)

            setTimeout(function() {
                $('#logo .logo5')
                    .css('transform', 'translateY(0px)');
            }, 900)
            setTimeout(function() {
                $('#logo .logo6')
                    .css('transform', 'translateY(0px)');
            }, 1200)

        }
        if ($scrollTop > 460 && $x == true) {
            $('#aboutSection .textRight,.img-left')
                .css('transform', 'translateX(0px)');

            // for (var i = 0; i <1; i++) {
            // 	$('#about .textRight').animate({marginLeft: '-=50px'}, 'fast')
            // 	$('#about .textRight').animate({marginLeft: '+=50px'}, 'fast')
            // 	$('#about .img-left').animate({marginLeft: '+=50px'}, 'fast')
            // 	$('#about .img-left').animate({marginLeftt: '-=100px'}, 'fast')
            // 	$x=false;
            // }
        }

        if ($scrollTop > 922) {
            $('#processSection .textLeft,.img-right')
                .css('transform', 'translateX(0px)');

        }

        if ($scrollTop > 1600) {
            $('#processSection .textRight,.img-left')
                .css('transform', 'translateX(0px)');

        }
        if ($scrollTop > 2190) {
            $('#featuresSection .img1')
                .css('transform', 'rotateX(0deg)');
        }
        if ($scrollTop > 2686) {
            $('#features-listSection .row:first-child .iconDiv')
                .css('transform', 'translateX(0px)');
        }
        if ($scrollTop > 3050) {

            $('#features-listSection .row:last-child .iconDiv')
                .css('transform', 'translateX(0px)');
        }

        if ($scrollTop > 3184) {
            $('#news-letterSection .leftDiv')
                .css('transform', 'translateX(0px)');
        }
        if ($scrollTop > 3184) {
            $('#news-letterSection .form')
                .css('transform', 'translateX(0px)');
        }
        if ($scrollTop > 3420) {
            $('#productSection .container')
                .css('transform', 'translateY(0px)');
        }
        if ($scrollTop > 4190) {
            $('#awardsSection #textDiv,.logo')
                .css('transform', 'translateY(0px)');

        }
        if ($scrollTop > 4590) {
            $('#feedbackSection #textDiv, #down')
                .css('transform', 'translateY(0px)');

        }
        if ($scrollTop > 4765) {
            $('#bootpartSection #botpart')
                .css('transform', 'translateY(0px)');
        }
        if ($scrollTop > 5383) {
            $('#teamSection .up,.down')
                .css('transform', 'translateY(0px)');
        }

    });

    $('.btn').click(function() {
        $('.btn').removeClass('active');
        $(this).addClass('active');
    });

    $('#first-tab').click(function() {
        $('.first-tab').css('display', 'block');
        $('.second-tab,.third-tab').css('display', 'none');



        setTimeout(function(argument) {
            $('#aboutSection .textRight,.img-left')
                .css('transform', 'translateX(0px)');

        }, 100)
        $('.second-tab .textLeft').css('transform', 'translateX(-800px)');
        $('.second-tab .img-right').css('transform', 'translateX(800px)');


        // 	for (var i = 0; i <1; i++) {
        // 	$('#about .textRight').animate({marginLeft: '-=50px'}, 'fast');
        // 	$('#about .textRight').animate({marginLeft: '+=50px'}, 'fast');
        // 	$('#about .img-left').animate({marginLeft: '-=50px'}, 'fast');
        // 	$('#about .img-left').animate({marginLeftt: '+=50px'}, 'fast');
        // 	$x=false;
        // }

    });

    $('#aboutSection #second-tab').click(function() {

        $('.third-tab,.first-tab').css('display', 'none');
        $('.second-tab').css('display', 'block');
        setTimeout(function(argument) {
            $('#aboutSection .textLeft, .img-right')
                .css('transform', 'translateX(0px)');
        }, 200)

        $('.first-tab .textRight').css('transform', 'translateX(800px)');
        $('.first-tab .img-left').css('transform', 'translateX(-800px)');
        // $('#about textRight').css('marginLeft', '0px');
        //    $('#about img-left').css('marginLeft', '0px');
        //    $('#about textLeft').css('marginLeft', '0px');
        //    $('#about img-right').css('marginLeft', '0px');
        // 	for (var i = 0; i <2; i++) {
        // 	$('#about .textLeft').animate({marginLeft: '+=50px'}, 'fast')
        // 	$('#about .textLeft').animate({marginLeft: '-=50px'}, 'fast')
        // 	$('#about .img-right').animate({marginLeft: '-=50px'}, 'fast')
        // 	$('#about .img-right').animate({marginLeftt: '+=50px'}, 'fast')

        // }
    });
    $('#aboutSection #third-tab').click(function() {
        $('.third-tab').css('display', 'block');
        $('.first-tab,.second-tab').css('display', 'none');

        $('.second-tab .textLeft,.first-tab .img-left').css('transform', 'translateX(-800px)');
        $('.second-tab .img-right,.first-tab .textRight').css('transform', 'translateX(800px)');

    });

    // $('#features .col').click(function() {
    //    $('#features .col').removeClass('active');
    // $(this).addClass('active');
    //       a = $(this).data('href');
    //       $('.img img').attr("src",'img/'+a)
    //        if (a=='rich_features_1.png') {
    //        	console.log('hhhhh');
    //        	$('.img img').addClass('img1')
    //        	$('.img img').removeClass('img2');
    //        	setTimeout(function(argument){
    //        	$('.img1').css({transform:'rotateX(0deg)'})
    //        	},500);
    //        }
    //       else if (a=='rich_features_2.png') {
    //        	console.log('hhhhh');
    //        	$('.img img').removeClass('img1');
    //        	$('.img img').addClass('img2')
    //        	setTimeout(function(argument){
    //        	$('.img2').css({transform:'rotateY(0deg)'})
    //        	},500);
    //        }
    //         else if (a=='rich_features_3.png') {
    //        	console.log('hhhhh');
    //        	$('.img img').removeClass('img1');
    //        	$('.img img').removeClass('img2');
    //        	$('.img img').addClass('img3')
    //        	setTimeout(function(argument){
    //        	$('.img2').css({transform:'rotateY(0deg)'})
    //        	},500);
    //        }

    // });

    $('#featuresSection .col').click(function() {
        $('#featuresSection .col').removeClass('active');
        $(this).addClass('active');
    });


    $('#colOne').click(function() {
        $('.img1').css('display', 'block');
        $('.img2,.img3').css('display', 'none');

        setTimeout(function(argument) {
            $('.img1').css('transform', 'rotateX(0deg)');
        }, 10);
        $('.img2').css('transform', 'rotateY(88deg)');
        $('.img3').css('transform', 'translateX(600px)');
    });


    $('#colTwo').click(function() {

        $('.img .img1').css('display', 'none');
        $('.img .img2').css('display', 'block');
        $('.img .img3').css('display', 'none');
        setTimeout(function(argument) {
            $('.img2').css('transform', 'rotateY(0deg)');
        }, 10)
        $('.img1').css('transform', 'rotateX(88deg)');
        $('.img3').css('transform', 'translateX(600px)');
    });

    $('#colThree').click(function() {
        $('.img .img1').css('display', 'none');
        $('.img .img2').css('display', 'none');
        $('.img .img3').css('display', 'block');
        setTimeout(function(argument) {
            $('.img3').css('transform', 'translateX(0px)');
        }, 10)
        $('.img1').css('transform', 'rotateX(88deg)');
        $('.img2').css('transform', 'rotateY(88deg)');
    });

});

function setBindings() {
    $('#head ul li .a').click(function(e) {
        e.preventDefault();
        var ID = e.currentTarget.id + "Section";

        $("html body").animate({
            scrollTop: $("#" + ID).offset().top
        }, 1000)


    });
}
