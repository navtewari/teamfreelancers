<body>
    <!-- header -->
    <header class="navbar navbar-default navbar-fixed-top" role="banner" style="z-index: 9999;">
        <div class="container" style="min-height: 80px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?PHP echo site_url('/'); ?>"><img class="img-responsive" src="<?PHP echo base_url() . 'assets_/images/logo.png' ?>" title="Amrapali Group of Institutes"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php
                                    if ($menuActive == 1) {
                                        echo "active";
                                    }
                                    ?>"><a href="<?php echo site_url('web/')?>"><i class="fa fa-university" aria-hidden="true"></i> HOME</a></li>
                    <li class="<?php
                                    if ($menuActive == 2) {
                                        echo "active";
                                    }
                                    ?>"><a href="<?php echo site_url('web/about')?>"><i class="fa fa-group" aria-hidden="true"></i> ABOUT US</a></li>
                    <li class="<?php
                                    if ($menuActive == 3) {
                                        echo "active";
                                    }
                                    ?>"><a href="<?php echo site_url('web/services')?>"><i class="fa fa-cogs" aria-hidden="true"></i> SERVICES</a></li>
                    <li class="<?php
                                    if ($menuActive == 4) {
                                        echo "active";
                                    }
                                    ?>"> <a href="<?php echo site_url('web/portfolio')?>"><i class="fa fa-diamond" aria-hidden="true"></i> PORTFOLIO</a></li>
                    <li class="<?php
                                    if ($menuActive == 5) {
                                        echo "active";
                                    }
                                    ?>"> <a href="<?php echo site_url('web/contact')?>"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="header" style="padding-top: 80px;">        
        <div class="w3ls-header"><!--header-one-->
            <div class="w3ls-header-left col-sm-12">
                <p style="text-align: center;"><i class="fa fa-envelope" aria-hidden="true"></i> ttchld@gmail.com, info@teamfreelancers.com | <i class="fa fa-phone" aria-hidden="true"></i>(+91) 9568873015</p>
            </div>                
            <div class="clearfix"> </div>
        </div>

        <div class="header-three"><!-- header-three -->
            <div class="container">
                <div class="menu">
                    <div class="cd-dropdown-wrapper">
                        <a class="cd-dropdown-trigger" href="#">OUR SERVICES</a>
                        <nav class="cd-dropdown">
                            <a href="#" class="cd-close">Close</a>
                            <ul class="cd-dropdown-content">
                                <li><a href="<?php echo site_url('web/services')?>">WEBSITE DEVELOPMENT</a></li>
                                <li><a href="<?php echo site_url('web/services')?>">WEBSITE MAINTENANCE, RE DESIGNING </a></li>
                                <li><a href="<?php echo site_url('web/services')?>">GRAPHIC DESIGNING</a></li>
                                <li><a href="<?php echo site_url('web/services')?>">BULK SMS</a></li>
                                <li><a href="<?php echo site_url('web/services')?>">INTERNET MARKETING, SEM, SEO</a></li>
                                <li><a href="<?php echo site_url('web/services')?>">ON-DEMAND WORKSHOP</a></li>
                                <li><a href="<?php echo site_url('web/services')?>">TRAINING PROGRAMS</a></li>
                            </ul> <!-- .cd-dropdown-content -->
                        </nav> <!-- .cd-dropdown -->
                    </div> <!-- .cd-dropdown-wrapper -->
                </div>
                <div class="move-text">
                    <div class="marquee"><a href="<?php echo site_url('web/services')?>"> We offer excellent web design and graphic design services as per your needs which suits your budget.<span>We are a group of individuals based in India offering complete Web Design and Graphic Design services </span></a></div>
                    <script type="text/javascript" src="<?php echo base_url('assets_/js/jquery.marquee.min.js'); ?>"></script>
                    <script>
                        $('.marquee').marquee({pauseOnHover: true});
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- //header -->