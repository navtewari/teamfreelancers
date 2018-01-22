<!--  about-page -->
<div class="about">
    <div class="container"> 
        <h3 class="w3ls-title w3ls-title1"><span style="color: #006cff">TRAINING @ HOME</span> - Our Services</h3>
        <div class="about-text">	            
            <div class="collpse tabs">                
                <div class="services-bottom">  
                    <div class="panel-group col-sm-8 collpse" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                                        <b>TRAINING @ HOME <i class="fa fa-star fa-spin fa-fw"></i></b><span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i></a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body" style="text-align: justify;">
                                    <p>We are <b>Teamfreelancers</b>; a startup company with experienced professionals from Industry as well as from Academics.</p>
                                    <p>We are dedicated in Project Training & Professional Development via working on Live Projects using cutting edge Technology.</p>
                                    <p>We visualize the concept of <b>"Training @ Home"</b>; means no need to go any where, at your local you will trained as Industry Standards.</p>
                                    <p>Our Focus is on to train you as a "Complete Software Engineer" with the special skills on "Problem Thinking, Problem Analysis, Writing Customized Code, Understands UI/UX and finally A Project Manager".</p><br>
                                    <p>Our skilled team is ready to shape you as future demands. </p>
                                    <br>
                                    <p><b>Limited Vacant. First Come Serve.</b></p><br>
                                    <p><b>Training Start Date: Feb 1, 2018</b></p>
                                </div>
                            </div>
                        </div>                        
                    </div> 

                    <div class="col-sm-4">
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

                        <div class="input-group" style="margin-bottom: 15px;">
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
                        <div class="g-recaptcha" data-sitekey="6LfMMB4UAAAAAKFXdqKUx9KeVwyKMCOB2Xuel8LO"></div>
            <input type="submit" value="send" class="btn btn-primary col-md-12" style='margin-top:20px;'>
                        <?php echo form_close(); ?> 
                    </div>
                </div>
            </div>                 
            <div class="clearfix"> </div>
        </div>         
    </div>    
</div>

<?php $this->load->view('templates/nutshell');?>

<?php $this->load->view('templates/expertise'); ?>