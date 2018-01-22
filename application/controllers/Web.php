<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function index() {
        $data['menuActive'] = 1;
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu',$data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
    
    public function about() {
        $data['menuActive'] = 2;
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu',$data);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }
    
    public function services() {
        $data['menuActive'] = 3;
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu',$data);
        $this->load->view('services');
        $this->load->view('templates/footer');
    }
    
    public function training() {
        $data['menuActive'] = 3;
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu',$data);
        $this->load->view('training');
        $this->load->view('templates/footer');
    }
    
    public function portfolio() {
        $data['menuActive'] = 4;
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu',$data);
        $this->load->view('portfolio');
        $this->load->view('templates/footer');
    }
    
    public function contact() {
        $data['menuActive'] = 5;
        
        $this->load->view('templates/header');
        $this->load->view('templates/menu',$data);
        $this->load->view('templates/footer');
    }
    
    function query() {
        $page = $this->input->post('page');
        $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');
        
        if ($this->form_validation->run()===FALSE) {
             redirect($page);
        } else {
            
            $this->email->set_mailtype("html");

            $msg_ = "<h2 style='color: #000090'>Quick Query from www.teamfreelancers.com: </h2> <br /><span style='font-size: 13px; color: #121212'>Name: ";
            $msg_ = $msg_ . $this->input->post('txtName') . "<br /><br />";
            $msg_ = $msg_ . "Contact: ";
            $msg_ = $msg_ . $this->input->post('txtClientMobile') . "<br />";
            $msg_ = $msg_ . "Email ID: ";
            $msg_ = $msg_ . $this->input->post('txtClientEmail') . "<br />";
            $msg_ = $msg_ . "(Message/Query): ";
            $msg_ = $msg_ . $this->input->post('txtMsg') . "<br />";

            $from_ = $this->input->post('txtClientEmail');
            $name_ = $this->input->post('txtClientName');

            $this->email->from($from_, $name_);
            $this->email->to('ttchld@gmail.com');
            $this->email->bcc('navtewari@gmail.com');

            $this->email->subject('Quick Query from www.teamfreelancers.com');
            $this->email->message($msg_);

            if ($this->email->send()) {
                $this->session->set_flashdata('_msg_q', 'Thanks for your Query. We will get back to you soon...');
            } else {
                $this->session->set_flashdata('_msg_q', 'Something goes wrong. please try again...');
            }
            //-------------
             redirect($page);
        }
    }

    public function recaptcha($str = '') {
        $google_url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = '6LfMMB4UAAAAAJYRgEGSNjw5PYJr0KCvyamryAs8';
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = $google_url . "?secret=" . $secret . "&response=" . $str . "&remoteip=" . $ip;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        $res = curl_exec($curl);
        curl_close($curl);
        $res = json_decode($res, true);
        //reCaptcha success check
        if ($res['success']) {
            return TRUE;
        } else {
            $this->session->set_flashdata('_msg_q', 'The reCAPTCHA field is telling me that you are a robot. Please check the recaptcha field and try again?');
            return FALSE;
        }
    }


}
