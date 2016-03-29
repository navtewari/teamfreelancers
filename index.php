<!DOCTYPE html>
<html>
    <head>
        <title>Team Freelancers, website developing, SEO, Bulk SMS</title>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="Team Freelancers, website developing, maintenance, SEO, Bulk SMS, GRAPHIC(BROCHURE, LOGO, LEAFLET, etc.) DESIGNING, ON-DEMAND WORKSHOP, TRAINING PROGRAMS">
        <meta name="description" content="Teamfreelancers, as the name indicates are a group of individuals based in India offering complete Web Design and Graphic Design services.">
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!--//fonts-->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });</script>
        <!----start-top-nav-script---->
        <script>
            $(function () {
                var pull = $('#pull');
                menu = $('.top-nav ul');
                menuHeight = menu.height();
                $(pull).on('click', function (e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function () {
                    var w = $(window).width();
                    if (w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });</script>

    </head>
    <body> 
        <!--header-->
        <div class="header navbar-fixed-top">
            <div class="container">
                <div class="logo">
                    <a href="#"><img src="images/logo.png" alt="teamfreelancers logo"></a>
                </div>
                <div class="top-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about" class="scroll"> About</a></li>
                        <li><a href="#services" class="scroll">Services</a></li>
                        <li><a href="#portfolio" class="scroll">portfolio </a></li>
                        <li><a href="#contact" class="scroll">contact</a></li>
                    </ul>
                    <a href="#" id="pull"><img src="images/menu.png" title="menu" alt="teamfreelancers menu"/></a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!--banner-->
        <div class="banner">
            <div class="container">
                <ul class="social-ic-icons">
                    <li class="facebook"><a href="#"><span> </span></a></li>				
                    <li class="been"><a href="#"><span> </span></a></li>
                    <li class="twitter"><a href="#"><span> </span></a></li>
                </ul>
                <div class="clearfix"> </div>
                <div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;"> 
                            <div class="banner-wrap">
                                <div class="bannertop_box">
                                    <div class="welcome_box">
                                        <h2><span>WE ARE A TEAM OF </span>GRAPHIC &amp; WEB DEVELOPER</h2>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class='clearfix'></div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;"> 
                            <div class="banner-wrap">
                                <div class="bannertop_box">
                                    <div class="welcome_box">
                                        <h2><span>WE ARE Professional</span> in web, graphics & Print</h2>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class='clearfix'></div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;"> 
                            <div class="banner-wrap">
                                <div class="bannertop_box">
                                    <div class="welcome_box">
                                        <h1>Perfection<span>in web development</span></h1>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class='clearfix'></div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;"> 
                            <div class="banner-wrap">
                                <div class="bannertop_box">
                                    <div class="welcome_box">
                                        <h2>We create<span>amazing experience</span></h2>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class='clearfix'></div>
                            </div>
                        </article>
                    </div>
                </div>
                <!---->
                <script src="js/jquery.wmuSlider.js"></script> 
                <script>
            $('.example1').wmuSlider({
                pagination: false,
            });</script> 	
                <div class="banner-matter">
                    <p>Contact us at <span> </span></p>
                    <ul class="social-in-icons">
                        <li class="facebook"><a href="https://www.facebook.com/Team-Freelancers-1736986626516930/" target="_blank"><span> </span></a></li>
                    </ul>
                    <a href="#"> ttchld@gmail.com, info@teamfreelancers.com<br>Mobile: (+91) 9568873015</a>
                    <a href="#clients" class="scroll" style="color:#ffff00"><br><br>Check what our Clients say about us</a>
                </div>
                <div class='clearfix'></div>
                <a href="#hello" class="scroll down"><img src="images/arr.png" alt="scroller" /></a>
            </div>   
        </div>
        <!--content-->
        <div class="content">
            <div class="container">
                <div class="hello" id="hello">
                    <span class="arrow"> </span>
                    <h3>Hello <span>There</span> !</h3>
                    <p>Teamfreelancers, as the name indicates that we are a group of individuals based in India offering complete Web Design and Graphic Design services where our clients get all required solutions through a single gateway. We offer excellent web design and graphic design services as per your needs which suits your budget.</p>
                    <p>We believe in keeping things simple. We spend our time in understanding your objectives, business, defining the problems and then finally provide the best possible solution for you. Once you work with us you will experience a personalised and reliable services which lets you to come back to us again and again. We encourage our clients to allow us to serve them so that we can use our experience to fulfill their expectations. We as a team of professional yet friendly people are always ready to bring in something that may make our clients feel as if they are confronting the personification of the thing they imagined once.</p>
                    <div class="in-btns">
                        <a class="startnow" href="#portfolio">Our Work</a>
                        <a class="livedemo" href="#contact">Hire Us</a>
                    </div>
                </div>
            </div>
            <!--services-->
            <div class="services" id="services" style="background: url('images/webdevelopment.jpg');background-repeat: repeat-y; background-position:top right;">
                <div class="container">
                    <div class="services-top">
                        <h3><span>SERVICES</span></h3>
                    </div>
                    <div class="services-bottom">  
                        <div class="panel-group col-sm-8 services-grid" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #ffffcc;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            WEBSITE DEVELOPMENT</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body" style="text-align: left; font-family: monospace">While making a dynamic website, we use a scripting languages which includes PHP, JavaScript, AJAX, HTML, XHTML, DHTML, Jquery, CSS and these can be backed with database servers like MySQL depending on website or web application which needs to be developed. Our procedure starts with planning, developing, testing and finally implementing the required application. Our expertise in Web Application Development helps our clients to manage their website at their own which requires minimum maintenance and support.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #ffffcc;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            WEBSITE MAINTENANCE, RE-DESIGNING</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body" style="text-align: left; font-family: monospace">All websites need to be maintained in order to keep them up to date. It is necessary that your website should be maintained and updated at regular basis which includes changing web pages, revising or editing contents of your website. Website are required to be updated regularly otherwise the rank of your website will move down in the listings of search engines. So, to maintain or improve your website listing in search engines, you need to keep your website up to date.
                                        We provide you the quality service at affordable prices to maintain your website in a professional way which will make the clients comfortable. Website maintenance also helps you to increase your business.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #ffffcc;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                            GRAPHIC(BROCHURE, LOGO, LEAFLET, etc.) DESIGNING</a>
                                    </h4>
                                </div>
                                <div id="collapse6" class="panel-collapse collapse">
                                    <div class="panel-body" style="text-align: left; font-family: monospace">At Teamfreelancer, we ensure that all your Graphic Designing needs are met to complete satisfaction. We work closely with our clients to design an excellent and creating solution for their need and requirements. We offer a complete design service for your project. Through our Graphic Design team's experience, we make sure that your brand has its own identity that meets your requirements and is well suited to your target audience.
                                        <br><br>we offer our range of products which includes:<br>Business Cards, Flyer Design, Corporate Identity, Poster Design, Catalogs, Advertisements, Book Designing, Book Cover Design, Magazine, Letterheads, Postcards, Brochure Design,                                     
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #ffffcc;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            BULK SMS</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body" style="text-align: left; font-family: monospace">Today's competitive world demands to communicate instantaneously with your present and prospective customers in a manner that is cheaper and reliable. Bulk SMS Service meets this need by enabling users to reach thousands of mobile handsets within few seconds in one shot.
                                        We provide very reliable bulk SMS gateways for integration into software, online portals, and other applications. Our bulk sms solution filters Do Not Disturb (NDNC filter - National Do Not Call Registry) numbers before sending promotional messages. Messages deliver to all mobile numbers in case of informational sms.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #ffffcc;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            INTERNET MARKETING, SEM, SEO</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body" style="text-align: left; font-family: monospace"> Internet marketing associated with the researching, submitting and positioning of a website within search engines to achieve maximum visibility and increase your share of paid and/or organic traffic referrals from search engines.
                                        SEM involves things such as search engine optimization (SEO), keyword research, competitive analysis, paid listings and other search engine services that will increase search traffic to your site.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background: #ffffcc;">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                            ON-DEMAND WORKSHOP, TRAINING PROGRAMS</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body" style="text-align: left; font-family: monospace">We offer customized training to meet your specific needs.                                        Whether it’s because a change was made to your curriculum, you have specific teaching needs you wish to address,  or simply because our regular programming does not offer the topic you are looking for within your context, we can offer you custom training that is tailored to your needs.</div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-4  services-grid">
                            <h4 style="background: #fff; border: 1px #990000 dashed; border-radius: 10px; padding:10px; color:#990000; background: #ffffcc">
                                For further detail please Contact us at:<br><br> ttchld@gmail.com, info@teamfreelancers.com,<br><br> (+91) 9568873015</h4>
                        </div>
                        <div class='clearfix'></div>
                    </div>
                </div>
            </div>
            <!--work-->
            <div  id="portfolio" class="work">
                <div class="container">
                    <h3>LASTEST WORKS</h3>
                    <div class="work-top">
                        <div class="work-grid ">
                            <a href="#"><img class="img-responsive in-work" src="images/motherIndia.jpg" alt="motherIndia TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>					
                            <div class="web">
                                <h6>Mother India global school</h6>
                                <p>Dynamic Responsive website for Mother India Global School. </p>

                            </div>
                        </div>
                        <div class="work-grid sit">
                            <a href="#"><img class="img-responsive in-work" src="images/schoolerp.jpg" alt="schoolERP TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>School ERP</h6>
                                <p>Responsive Web based software for School Management (Customised).</p>

                            </div>
                        </div>
                        <div class="work-grid">
                            <a href="#"><img class="img-responsive in-work" src="images/gasports.jpg" alt="gasports TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>GA Sports</h6>
                                <p>Dynamic Responsive website (ready to use as e-commerce) for GASPORTS. </p>

                            </div>
                        </div>
                        <div class="work-grid work-grid-in sit">
                            <a href="#"><img class="img-responsive in-work" src="images/sparkle.jpg" alt="sparkle TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>Little Sparkle Academy</h6>
                                <p>Dynamic Responsive website for Little Sparkle Academy. </p>

                            </div>
                        </div>
                        <div class="work-grid">
                            <a href="#"><img class="img-responsive in-work" src="images/sparkleLogo.jpg" alt="logo sparkle TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>Little Sparkle Academy</h6>
                                <p>Logo for Little Sparkle Academy. </p>

                            </div>
                        </div>
                        <div class="work-grid sit">
                            <a href="#"><img class="img-responsive in-work" src="images/wisdom.jpg" alt="wisdom TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>Wisdom Solutions</h6>
                                <p>Dynamic Responsive website for Wisdom Solutions. </p>

                            </div>
                        </div>
                        <div class="work-grid in-zoom">
                            <a href="#"><img class="img-responsive in-work" src="images/onlineguru.jpg" alt="onlinegurujee TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>Online Gurujee</h6>
                                <p>A portfolio platform for teaching professionals</p>                              
                            </div>
                        </div>
                        <div class="work-grid work-grid-in in-zoom">
                            <a href="#"><img class="img-responsive in-work" src="images/bakers.jpg" alt="bakers TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>Bakers Delicia</h6>
                                <p>Dynamic Responsive website for Bakers Delicia. </p>

                            </div>
                        </div>
                        <div class="work-grid in-zoom">
                            <a href="#"><img class="img-responsive in-work" src="images/ph.jpg" alt="onlinegurujee TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>Pighalta Himalaya</h6>
                                <p>A dynamic portal for Hindi Weekly Newspaper published from Uttarakhand</p>                              
                            </div>
                        </div>
                        <div class="work-grid work-grid-in in-zoom">
                            <a href="#"><img class="img-responsive in-work" src="images/lbsci.jpg" alt="bakers TeamFreelancers" />
                                <span class="zoom-icon"></span>	</a>
                            <div class="web">
                                <h6>Lal Bahadur Shastri Insitute</h6>
                                <p>Admin portal for online Student Admission fee Management and Exam</p>

                            </div>
                        </div>
                        <div class='clearfix'></div>
                    </div>
                </div>
            </div>

            <div  id="about" class="about-me">
                <div class="container">
                    <div class="about">
                        <h3><span>About Us</span></h3>
                        <p>We are a team of extremely talented, dedicated and hard working Web Designers and Graphic Designers and can deliver with cost effective, interactive, innovative and "just my kind of" web design and graphic design services. We are having experience of 8-10 years in the field of Graphic Designing and Website Designing. While working on any project, we pay full attention to it so that we do not miss anything and give you the best services. We always welcome the new ideas of the clients as well because it is the client only who possesses the basic structure of that "WOW" factor which everyone amongst us is waiting and hoping for. So just bring in the imagination, we will make it the reality.</p>
                    </div>
                    <div class="panel-body col-sm-6">
                        <p class="">
                            WEBSITE DEVELOPMENT, MAINTENANCE, RE-DESIGNING
                        </p>
                        <div class="progress progress-striped active progress-sm">
                            <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <p class="">
                            GRAPHIC(BROCHURE, LOGO, LEAFLET, etc.) DESIGNING
                        </p>
                        <div class="progress progress-striped active progress-sm">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <p class="">
                            INTERNET MARKETING, SEO
                        </p>
                        <div class="progress progress-striped active progress-sm">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                    </div>
                    <div class="panel-body col-sm-6">
                        <p class="">
                            ON-DEMAND WORKSHOP, TRAINING PROGRAMS
                        </p>
                        <div class="progress progress-striped active progress-sm">
                            <div class="progress-bar progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <p class="">
                            BULK SMS
                        </p>
                        <div class="progress progress-striped active progress-sm">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <p class="">
                            ON-DEMAND WORKSHOP, TRAINING PROGRAMS
                        </p>
                        <div class="progress progress-striped active progress-sm">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clients" id="clients">
                <div class="container">
                    <h3>What our client thinks about us </span></h3>
                    <!---->
                    <!-- requried-jsfiles-for owl -->
                    <link href="css/owl.carousel.css" rel="stylesheet">
                    <script src="js/owl.carousel.js"></script>
                    <script>
            $(document).ready(function () {
                $("#owl-demo1").owlCarousel({
                    items: 1,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: true,
                    navigationText: true,
                    pagination: false,
                });
            });</script>
                    <!-- //requried-jsfiles-for owl -->
                    <!-- start content_slider -->
                    <div id="owl-demo1" class="owl-carousel">
                        <div class="item-bottom">
                            <div class="item-right">
                                <p>"Extremely professional and creative team. Very good hold on graphic design, web designing & content. Best part is they deliver what they promise. No over commitment and on time delivery is their USP. Very nice experience working with them."</p>
                                <span>Nikhil Kunwar, Manager, paytm</span>
                            </div>
                        </div>
                        <div class="item-bottom">
                            <div class="item-right">
                                <p>"TeamFreelancers did the great job, they helped me step by step, my website has come up very well. Getting good response. I would recommend TeamFreelancers to any company."</p>
                                <span>MotherIndia Global School</span>
                            </div>
                        </div>
                        <div class="item-bottom">
                            <div class="item-right">
                                <p>"I needed a informational website for my cookery classes and I had very limited time, Teamfreelancers gave me beautiful design and was completed in time. The site is appealing and content rich, and most importantly, it is well optimized for search engine ranking."</p>
                                <span>Shailja Mathur, Bakers Delicia</span>
                            </div>
                        </div>
                        <div class="item-bottom">
                            <div class="item-right">
                                <p>"Teamfreelancers were very professional and went out of there way to assist where possible. Very happy with the service provided by Teamfreelancers. Would recommend to anyone."</p>
                                <span>Dr. Manish Mathur, Wisdom Solutions</span>
                            </div>
                        </div>					
                    </div>
                </div>	
            </div>
            <!----contact-->
            <div class="contact" id="contact">
                <div class="container">
                    <h3>CONTACT US</h3>
                    <div class="contact-in">
                        <div class="col-md-6 in-on">																								
                            <small>to</small>
                            <p>info@teamfreelancers.com</p>
                            <form method="post" action="email.php">
                                <h4>Name:</h4> <input type="text" name="txtName" required="required" placeholder="Your Name">
                                <h4>Contact Number:</h4> <input type="text" name="txtNumber" required="required" placeholder="Your Contact Number">
                                <h4>Email:</h4> <input type="email" name="txtEmail" required="required" placeholder="Your email">
                                <h4>Message:</h4> <input type="text" name="txtMsg" required="required" placeholder="Your Message">
                                <div class="send-in">
                                    <input type="submit" value="Send" >
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 dot-in">	
                            <img class="img-responsive in-map" src="images/ma.png" alt="map TeamFreelancers" />
                            <label class="dot"></label>
                            <div class="live">

                                <p>We Live in India</p>
                                <span>ttchld@gmail.com, info@teamfreelancers.com<br>Mobile: (+91) 9568873015</span>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="footer">
            <div class="container">
                <div class="footer-class">
                    <div class="class-footer">
                        <ul>
                            <li><a href="#">Home</a>  <span>/</span> </li>
                            <li><a href="#about" class="scroll">About </a><span>/</span></li>
                            <li><a href="#services" class="scroll">Services</a>  <span>/</span></li>
                            <li><a href="#portfolio" class="scroll">Portfolio</a> <span>/</span></li>
                            <li><a href="#contact" class="scroll">Contact </a></li>
                        </ul>
                        <p class="footer-grid">&copy; 2016 copyright by <a href="#" target="_blank">teamfreelancers</a> </p>
                    </div>	 
                    <ul class="social-in-icons">
                        <li class="facebook"><a href="https://www.facebook.com/Team-Freelancers-1736986626516930/" target="_blank"><span> </span></a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    /*
                     var defaults = {
                     containerID: 'toTop', // fading element id
                     containerHoverID: 'toTopHover', // fading element hover id
                     scrollSpeed: 1200,
                     easingType: 'linear' 
                     };
                     */
                    $().UItoTop({easingType: 'easeOutQuart'});
                });
            </script>
            <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>
    </body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74987470-1', 'auto');
  ga('send', 'pageview');

</script>
