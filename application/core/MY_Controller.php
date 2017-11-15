<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $data = array();

    function __construct() {
        parent::__construct();
        $this->data['page_title'] = 'd2Reality';
        $this->data['before_head'] = '';
        $this->data['before_body'] = '';
        $this->data['css_files'] = array();
        $this->data['js_files'] = array();
        $this->load->library(array('session', 'form_validation', 'calendar', 'pagination', 'image_lib', 'encrypt', 'upload'));
        $this->load->helper(array('url', 'form', 'html', 'captcha', 'email', 'date', 'common'));
        $this->load->database();
//        $this->load->model('common_Model', 'commonMdl');
    }

}

class Front_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library(array('image_lib', 'encrypt'));
        $this->load->helper(array('common', 'security'));
        $this->load->library('cart');

        $meta_tags = array();
        $meta_tags['viewport'] = 'width=device-width, initial-scale=1.0';
        $meta_tags['description'] = 'd2Reality description';
        $meta_tags['keywords'] = 'd2Reality keywords';
        $meta_tags['author'] = 'Amit Yadav';
        $meta_tags['language'] = 'English';
        $meta_tags['subject'] = 'Corporate Business For New innoverive Ideas Crowd Funding';
        $meta_tags['robots'] = 'index, follow';
        $meta_tags['revisit-after'] = '1 days';
        $meta_tags['cache-control'] = 'no-cache';

        $this->data['page_title'] = 'd2Reality - Corporate Business For New innoverive Ideas Crowd Funding';
        $this->data['meta_tags'] = $meta_tags;

        $this->data['params'] = $this->uri->uri_to_assoc(3);
        $this->data['page_name'] = $this->router->fetch_class();
        $this->data['page_name_sub'] = $this->router->fetch_method();

        addCss(array('style.css', 'responsive.css', 'custom.css'));
        addJs(array('jquery-3.2.1.js', 'popper.js', 'bootstrap.min.js', 'owl.carousel.min.js', 'jquery.countdown.min.js', 'wow.min.js', 'isotope.pkgd.min.js', 'jquery.bxslider.min.js', 'main.js'));
    }

}

class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

}

class Api_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

}

class Static_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

}
