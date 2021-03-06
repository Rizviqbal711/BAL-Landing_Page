<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143361165-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-143361165-1');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '422311248361106');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=422311248361106&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buyanylight.com - Sourcing Reinvented</title>
        <link href="{{ asset('images/logo-black-icon.png') }}" rel="icon" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" rel="stylesheet">

        <!-- Facebook Pixel Code -->

        <!-- Styles -->
        @yield('css')

        @section('css')
        <link rel="stylesheet" href="css/app.css?v=1">
        @show
        <link rel="stylesheet" href="css/privacy.css?v=1">
        <link rel="stylesheet" href="/css/slick.css?v=1">
        <link rel="stylesheet" href="/css/slick-theme.css?v=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        
    @yield('meta')

    <!-- Meta -->
    <!-- //////////////////////////////////////////////////////////////////////// -->
    <meta name="author" content="Buyanylight.com">
    <meta name="keywords" content="Light, chandelier, lamp, led strip lights, ceiling lights, pendant lighting, outdoor lights, led strip, wall lights, light fixtures, Cheapest lights, cheapest place to buy lights, LED lights, online lighting store, kitchen lights, bathroom lights, bedroom lights, led panel, flood lights, lighting design, architectural lighting, home lighting, smart home, find light, light finder, get light quotes, search lights online, buy lights online, Sourcing reinvented, project management, lighting mangement, lighting consultancy, lighting solutions, lighting project, lighting companies, lighting consultant, innovation, switch to led, sourcing solution" />

    <meta property="og:type" content="article">
    <meta property="og:url" content="https://buyanylight.com">
    <meta property="og:image" content="https://buyanylight.com/images/bal-logo-share.png">



    @section('meta-title')
    <meta name="title" content="BuyAnyLight.com | Sourcing Reinvented - The global marketplace for LED Lighting">
    <meta property="og:title" content="BuyAnyLight.com | Sourcing Reinvented - The global marketplace for LED Lighting">
    @show

    @section('meta-description')
    <meta name="description" content="BUY ANY LIGHT (BAL) has pioneered an innovation that changes the procedure of sourcing lights forever! The BAL platform benefits users with the best possible prices for any light, increased efficiency of lights procurement, access to the actual manufacturers of top global brands, increased profits, automation functions, and many other excellent features." />
    <meta property="og:description" content="BUY ANY LIGHT (BAL) has pioneered an innovation that changes the procedure of sourcing lights forever! The BAL platform benefits users with the best possible prices for any light, increased efficiency of lights procurement, access to the actual manufacturers of top global brands, increased profits, automation functions, and many other excellent features.">
    @show

    <!-- //////////////////////////////////////////////////////////////////////// -->
    <!-- Meta -->


    </head>
    <body class="eupopup eupopup-bottom">
        @include('includes.navbar')
        @yield('content')

        @include('includes.footer')
        <!-- Scripts -->
        <script src="js/app.js" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
     <script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_KEY') }}"></script>
 

    <script type="text/javascript">
        grecaptcha.ready(function() {
        grecaptcha.execute( '{{ env('CAPTCHA_KEY') }}' , { action: 'contact' } )
           .then(function(token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
                $('.send-message').removeAttr('disabled','disabled');
            });
     });
        $(document).ready(function(){

        $('.center').slick({
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 4,
            initialSlide:0,
            infinite: true,
        });

          $('.timeline').slick({
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 4,
            initialSlide:0,
            infinite: false,
            appendArrows: $('.arrows'),
            prevArrow: '<button type="button" class="slick-prev d-inline-block">Previous</button>',
            nextArrow: '<button type="button" class="slick-next d-inline-block">Next</button>',
        });



        'use strict';
  
        var c, currentScrollTop = 0,
        navbar = $('nav');

        $(window).scroll(function () {
            var a = $(window).scrollTop();
            var b = navbar.height();
     
            currentScrollTop = a;
     
            if (c < currentScrollTop && a > b + b) {
                navbar.addClass("scrollUp");
            } else if (c > currentScrollTop && !(a <= b)) {
                navbar.removeClass("scrollUp");
            }
            c = currentScrollTop;
        });

        $('.trial').click(function(){
            console.log("Hello World!");
            if($('.trial-down').is(':visible')){

                $('.trial-down').hide();  
                $('.trial-up').show();  

            } else {

                $('.trial-down').show();  
                $('.trial-up').hide(); 
            }
        })

        $('.introduction').click(function(){
            console.log("Hello World!");
            if($('.introduction-down').is(':visible')){

                $('.introduction-down').hide();  
                $('.introduction-up').show();  

            } else {

                $('.introduction-down').show();  
                $('.introduction-up').hide(); 
            }
        })

        $('.finder2').click(function(){
            console.log("Hello World!");
            if($('.finder2-down').is(':visible')){

                $('.finder2-down').hide();  
                $('.finder2-up').show();  

            } else {

                $('.finder2-down').show();  
                $('.finder2-up').hide(); 
            }
        })


        $('.finder3').click(function(){
            console.log("Hello World!");
            if($('.finder3-down').is(':visible')){

                $('.finder3-down').hide();  
                $('.finder3-up').show();  

            } else {

                $('.finder3-down').show();  
                $('.finder3-up').hide(); 
            }
        })

        $('.pricing').click(function(){
            console.log("Hello World!");
            if($('.pricing-down').is(':visible')){

                $('.pricing-down').hide();  
                $('.pricing-up').show();  

            } else {

                $('.pricing-down').show();  
                $('.pricing-up').hide(); 
            }
        })

        $('.home2').click(function(){
            console.log("Hello World!");
            if($('.home2-down').is(':visible')){

                $('.home2-down').hide();  
                $('.home2-up').show();  

            } else {

                $('.home2-down').show();  
                $('.home2-up').hide(); 
            }
        })


        $('.home3').click(function(){
            console.log("Hello World!");
            if($('.home3-down').is(':visible')){

                $('.home3-down').hide();  
                $('.home3-up').show();  

            } else {

                $('.home3-down').show();  
                $('.home3-up').hide(); 
            }
        })

        $('.tower2').click(function(){
            console.log("Hello World!");
            if($('.tower2-down').is(':visible')){

                $('.tower2-down').hide();  
                $('.tower2-up').show();  

            } else {

                $('.tower2-down').show();  
                $('.tower2-up').hide(); 
            }
        })


        $('.tower3').click(function(){
            console.log("Hello World!");
            if($('.tower3-down').is(':visible')){

                $('.tower3-down').hide();  
                $('.tower3-up').show();  

            } else {

                $('.tower3-down').show();  
                $('.tower3-up').hide(); 
            }
        })

        $('pricing').click(function(){
            console.log("Hello World!");
            if($('pricing-down').is(':visible')){

                $('pricing-down').hide();  
                $('pricing-up').show();  

            } else {

                $('pricing-down').show();  
                $('pricing-up').hide(); 
            }
        })

        $('.read-more').click(function(){
            console.log("Hello World!");
            if($('.read-more-down').is(':visible')){

                $('.read-more-down').hide();  
                $('.1-read-more').hide();  
                $('.read-more-up').show();  
                $('.1-read-less').show();  

            } else {

                $('.1-read-less').hide();  
                $('.1-read-more').show();  
                $('.read-more-down').show();  
                $('.read-more-up').hide(); 
            }
        })

    });

    function makeTimerPrivate() {

    //      var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");  
        var endTime = new Date("01 October 2019 0:00:00 GMT+04:00");          
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $("#days").html("<span style='font-size: 14px;'>" + days +" </span>" + "<br><span>Days</span>");
            $("#hours").html("<span style='font-size: 14px;'>" + hours +" </span>" + "<br><span>Hours</span>");
            $("#minutes").html("<span style='font-size: 14px;'>" + minutes +" </span>" + "<br><span>Minutes</span>");
            $("#seconds").html("<span style='font-size: 14px;'>" + seconds +" </span>" + "<br><span>Seconds</span>");       

    }

    setInterval(function() { makeTimerPrivate(); }, 1000);

    function makeTimerPublic() {

    //      var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");  
        var endTime = new Date("01 December 2019 0:00:00 GMT+04:00");          
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $("#days1").html("<span style='font-size: 14px;'>" + days +" </span>" + "<br><span>Days</span>");
            $("#hours1").html("<span style='font-size: 14px;'>" + hours +" </span>" + "<br><span>Hours</span>");
            $("#minutes1").html("<span style='font-size: 14px;'>" + minutes +" </span>" + "<br><span>Minutes</span>");
            $("#seconds1").html("<span style='font-size: 14px;'>" + seconds +" </span>" + "<br><span>Seconds</span>");       

    }

    setInterval(function() { makeTimerPublic(); }, 1000);




    </script>
    @if (session('success') || session('danger'))
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.toast').toast('show')
        });
    </script>
    @endif
       </body>
</html>

