<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Team Freelancers, website development company, SEO, Bulk SMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '317505651937020',
                    xfbml: true,
                    version: 'v2.7'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <link href="<?php echo base_url('assets_/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('assets_/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('assets_/css/menu.css'); ?>" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
        <link href="<?php echo base_url('assets_/css/ken-burns.css'); ?>" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider -->
        <link href="<?php echo base_url('assets_/css/animate.min.css'); ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('assets_/css/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
        <!-- //Custom Theme files -->
        <!-- font-awesome icons -->
        <link href="<?php echo base_url('assets_/css/font-awesome.css'); ?>" rel="stylesheet">
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="<?php echo base_url('assets_/js/jquery-2.2.3.min.js'); ?>"></script>
        <!-- //js -->
        <!-- web-fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
        <!-- web-fonts -->
        <script src="<?php echo base_url('assets_/js/owl.carousel.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items: 4,
                    itemsDesktop: [640, 5],
                    itemsDesktopSmall: [480, 2],
                    navigation: true

                });
            });
        </script>
        <script src="<?php echo base_url('assets_/js/jquery-scrolltofixed-min.js'); ?>" type="text/javascript"></script>
        <script>
            $(document).ready(function () {

                // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

                $('.header-two').scrollToFixed();
                // previous summary up the page.

                var summaries = $('.summary');
                summaries.each(function (i) {
                    var summary = $(summaries[i]);
                    var next = summaries[i + 1];

                    summary.scrollToFixed({
                        marginTop: $('.header-two').outerHeight(true) + 10,
                        zIndex: 999
                    });
                });
            });
        </script>
        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url('assets_/js/move-top.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets_/js/easing.js'); ?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling -->
        <!-- smooth-scrolling-of-move-up -->
        <script type="text/javascript">
            $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //smooth-scrolling-of-move-up -->
        <script src="<?php echo base_url('assets_/js/bootstrap.js'); ?>"></script>
        <script type="text/javascript">
            base_url_ = "<?php echo base_url(); ?>";
            site_url_ = "<?php echo site_url(); ?>";
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>