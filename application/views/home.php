<!-- banner -->
<div class="banner">
    <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
        <!-- Wrapper-for-Slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"><!-- First-Slide -->
                <img src="<?PHP echo base_url() . 'assets_/images/3.jpg'; ?>" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated flipInX">WE ARE A TEAM OF GRAPHIC & WEB DEVELOPER</h3>
                </div>
            </div>
            <div class="item"> <!-- Second-Slide -->
                <img src="<?PHP echo base_url() . 'assets_/images/3.jpg'; ?>" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <h3 data-animation="animated fadeInDown">WE CREATE AMAZING EXPERIENCE</h3>
                </div>
            </div>
            <div class="item"><!-- Third-Slide -->
                <img src="<?PHP echo base_url() . 'assets_/images/3.jpg'; ?>" alt="" class="img-responsive"/>
                <div class="carousel-caption kb_caption kb_caption_center">
                    <h3 data-animation="animated fadeInLeft">PERFECTION IN WEB DEVELOPMENT</h3>
                </div>
            </div>
        </div>
        <!-- Left-Button -->
        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
            <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <!-- Right-Button -->
        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <script src="js/custom.js"></script>
</div>
<!-- //banner -->
<div class="privacy">
    <div class="container">        
        <div class="privacy-w3row col-sm-4">
            <h3 class="w3ls-title">Quick Query</h3>
            <?php if ($this->session->flashdata('_msg_q')) { ?>
                <div class="row">
                    <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                        <?php echo $this->session->flashdata('_msg_q'); ?>
                    </div>
                    <div class="col-sm-12">
                        &nbsp;
                    </div>
                </div>
            <?php } ?>
            <?php
            $data = array(
                'name' => 'frmfeedback',
                'id' => 'frmfeedback',
            );
            ?>
            <?php echo form_open('web/query', $data); ?>
            <div class="input-group"style="margin-bottom: 15px;">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtName',
                    'id' => 'txtName',
                    'class' => 'form-control',
                    'placeholder' => 'Name',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </div>

            <div class="input-group"style="margin-bottom: 15px;">
                <span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtClientMobile',
                    'id' => 'txtClientMobile',
                    'placeholder' => 'Mobile Number',
                    'pattern' => '[7-9]{1}[0-9]{9}',
                    'oninvalid' => "setCustomValidity('Plz enter correct 10 digit Contact Number')",
                    'onchange' => "try{setCustomValidity('')}catch(e){}",
                    'minlength' => '10',
                    'maxlength' => '10',
                    'class' => 'form-control',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </div>

            <div class="input-group"style="margin-bottom: 15px;">
                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                <?php
                $data = array(
                    'type' => 'email',
                    'name' => 'txtClientEmail',
                    'placeholder' => 'Email ID',
                    'class' => 'form-control',
                    'id' => 'txtClientEmail',
                    'required' => 'required'
                );
                echo form_input($data);
                ?>
            </div>

            <div class="input-group"style="margin-bottom: 15px;">
                <span class="input-group-addon"><i class="fa fa-file-text-o fa-fw"></i></span>
                <?php
                $data = array(
                    'type' => 'text',
                    'name' => 'txtMsg',
                    'placeholder' => 'Query',
                    'class' => 'form-control',
                    'style' => 'height:3em',
                    'id' => 'txtMsg',
                );
                echo form_textarea($data);
                echo form_hidden('page', uri_string());
                ?>
            </div>
            <div class="g-recaptcha" data-sitekey="6LfMMB4UAAAAAKFXdqKUx9KeVwyKMCOB2Xuel8LO" style="transform:scale(1.16);-webkit-transform:scale(1.16);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
            <input type="submit" value="send" class="btn btn-primary col-md-12" style='margin-top:20px;'>
            <?php echo form_close(); ?> 
        </div>
        <div class="privacy-w3row col-sm-8">
            <h3 class="w3ls-title">About Us</h3>
            <p>Teamfreelancers, as the name indicates that we are a group of individuals based in India offering complete Web Design and Graphic Design services where our clients get all required solutions through a single gateway. We offer excellent web design and graphic design services as per your needs which suits your budget.</p>
            <p>We believe in keeping things simple. We spend our time in understanding your objectives, business, defining the problems and then finally provide the best possible solution for you. Once you work with us you will experience a personalised and reliable services which lets you to come back to us again and again. We encourage our clients to allow us to serve them so that we can use our experience to fulfill their expectations. We as a team of professional yet friendly people are always ready to bring in something that may make our clients feel as if they are confronting the personification of the thing they imagined once.</p>
        </div>
    </div>
</div>
<!-- services-page -->
<div class="welcome">
    <div class="container">
        <div class="welcome-info">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div class="clearfix"> </div>
                <h3 class="w3ls-title" style="text-align: center">Featured Portfolio</h3>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="tabcontent-grids">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="#"><img src="<?PHP echo base_url() . 'assets_/portfolio/ecollect.jpg'; ?>" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="#">Collector nainital</a></h4>
                                            <p><a href="http://www.e-collectornainital.com/" target="_blank">e-collectornainital.com</a><br>Dynamic Responsive Web Portal for District Nainital, Uttarakhand</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="#"><img src="<?PHP echo base_url() . 'assets_/portfolio/gasports.jpg'; ?>" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="#">GA-Sports</a></h4>
                                            <p><a href="http://gasports.in/" target="_blank">gasports</a><br>Dynamic Responsive website (ready to use as e-commerce) for GASPORTS.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="#"><img src="<?PHP echo base_url() . 'assets_/portfolio/aura.jpg'; ?>" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="#">Auraveda</a></h4>
                                            <p><a href="http://auraveda.in/" target="_blank">auraveda.in</a><br>Dynamic Responsive web portal for Auraveda, Delhi.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="#"><img src="<?PHP echo base_url() . 'assets_/portfolio/onlineguru.jpg'; ?>" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="#">Online Gurujee</a></h4>
                                            <p><a href="http://www.onlinegurujee.in/" target="_blank">onlinegurujee</a><br>A portfolio platform for teaching professionals</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="#"><img src="<?PHP echo base_url() . 'assets_/portfolio/ctr.jpg'; ?>" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="#">Corbett Tiger Reserve</a></h4>
                                            <p><a href="http://www.corbetttigerreserve.com/" target="_blank">corbetttigerreserve</a><br>A dynamic web portal for booking in Corbett Tiger Reserve india</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="#"><img src="<?PHP echo base_url() . 'assets_/portfolio/utp.jpg'; ?>" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="#">Uttraakhand Tour Packages</a></h4>
                                            <p><a href="http://www.uttarakhand-tour-packages.com/" target="_blank">uttarakhand-tour-packages</a><br>A dynamic Website for online Tourist booking</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="glry-w3agile-grids agileits">
                                        <div class="new-tag"><h6>New</h6></div>
                                        <a href="#"><img src="<?PHP echo base_url() . 'assets_/portfolio/sparkleLogo.jpg'; ?>" alt="img"></a>
                                        <div class="view-caption agileits-w3layouts">
                                            <h4><a href="#">Little Sparkle Academy</a></h4>
                                            <p><a href="http://www.littlesparkleacademy.com/" target="_blank">Little Sparkle Academy</a><br>Logo for Little Sparkle Academy..</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p style="float:right"><a href="<?php echo site_url('web/portfolio') ?>">click here for more...</a></p>
            </div>
        </div>
    </div>
</div>
<div class="w3l-services">
    <div class="container">
        <h3 class="w3ls-title" style="text-align: center">Our Services</h3>
        <div class="services-row">
            <div class="col-md-3 services-grids">
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <h4 style="color:#006cff">Application Development</h4>
                <p style="text-align:center">Web Application</p>
                <p style="text-align:center">Mobile Application</p>
                <p style="text-align:center">Standalone Application</p>
                <p style="text-align:center"><a href="<?php echo site_url('web/services') ?>">read more...</a></p>
            </div>
            <div class="col-md-3 services-grids">
                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                <h4 style="color:#006cff">Web and Creative Designs</h4>
                <p style="text-align:center">Logo and brand Identity</p>
                <p style="text-align:center">Flex & Banner Designs</p>
                <p style="text-align:center">Brochure, Leaflet Designs</p>
                <p style="text-align:center"><a href="<?php echo site_url('web/services') ?>">read more...</a></p>
            </div>
            <div class="col-md-3 services-grids">
                <i class="fa fa-internet-explorer" aria-hidden="true"></i>
                <h4 style="color:#006cff">Internet Marketing</h4>
                <p style="text-align:center">Search Engine Optimization (SEO)</p>
                <p style="text-align:center">Social Media Optimzation (SMO)</p>
                <p style="text-align:center">Keyword Searching</p>
                <p style="text-align:center">bulk SMS</p>
                <p style="text-align:center"><a href="<?php echo site_url('web/services') ?>">read more...</a></p>
            </div>
            <div class="col-md-3 services-grids">
                <i class="fa fa-rupee" aria-hidden="true"></i>
                <h4 style="color:#006cff">e-Commerce Solutions</h4>
                <p style="text-align:center">Deliver a flawless shopping experience to your customers with our customized e-commerce solutions.</p>
                <p style="text-align:center"><a href="<?php echo site_url('web/services') ?>">read more...</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //services-page -->

<?php $this->load->view('templates/expertise'); ?>
