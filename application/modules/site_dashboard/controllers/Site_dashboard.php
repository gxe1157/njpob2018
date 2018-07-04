<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Rename Perfectcontroller to [Name]
class Site_dashboard extends MY_Controller 
{

/* model name goes here */
public $mdl_name = 'Mdl_site_dashboard';
public $main_controller = 'site_dashboard';

public $flash_msg = '';

public $default = [];

function __construct($data = null) {
    parent::__construct();

    $this->load->module('auth');
    if (!$this->ion_auth->logged_in())
        redirect('auth/login', 'refresh');
 
    $this->default['page_nav'] = "Dashboard";  
    $this->default['flash']    = $this->session->flashdata('item');
}


/* ===================================================
    Controller functions goes here. Put all DRY
    functions in applications/core/My_Controller.php
  ==================================================== */

function welcome()
{
    $data['custom_jscript'] = '';
    $data['page_url'] = 'welcome';
    $data['view_module'] = 'site_dashboard';
    $data['title'] = "Welcome";

    $this->default['page_title'] = 'Dashboard Page';    
    $data['default'] =  $this->default;  

    $this->load->module('templates');
    $this->templates->admin($data);     
}


function settings()
{
    $data['custom_jscript'] = '';
    $data['page_url'] = 'settings';
    $data['view_module'] = 'site_dashboard';
    $data['title'] = "Site Settings";

    $this->default['page_title'] = 'Site Settings Page';
    $data['default'] =  $this->default;  

    $this->load->module('templates');
    $this->templates->admin($data);     
}

/* ===============================================
    Call backs go here...
  =============================================== */


/* ===============================================
    David Connelly's work from perfectcontroller
    is in applications/core/My_Controller.php which
    is extened here.
  =============================================== */


} // End class Controller
