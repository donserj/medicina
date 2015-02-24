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
    }

    public function index(){

        $this->load->view('page');
    }
} 