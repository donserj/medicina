<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 1/13/15
 * Time: 7:30 PM
 */

class Page extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");

    }

    public function index(){

        $this->load->view('page');
    }

    public function translatePage(){

        if(isset($_POST)){

            $this->session->set_userdata('lang', ($_POST['lang_ro'])? $_POST['lang_ro']:$_POST['lang_ru']);
            redirect($_POST['current_page']);
        }



    }
} 