<?php
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 1/14/15
 * Time: 7:15 PM
 */

class Auth extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){

        $this->load->view('admin/index');
    }
} 