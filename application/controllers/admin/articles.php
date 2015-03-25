<?php
/**
 * Created by PhpStorm.
 * User: artosis
 * Date: 3/16/15
 * Time: 3:05 PM
 */

class Articles extends CI_Controller{

    public $db;
    public $online;
    public $data;

    function __construct(){
        parent::__construct();

        if($this->session->userdata("Login")){
            $this->online['Login'] = $this->session->userdata("Login");
            $this->online['OpID'] = $this->session->userdata("OpID");
        }else{
            redirect("/admin/auth");
        }

    }

    public function index(){


        $this->load->view("admin/dashboard", array(
            "data" => $this->data,
            "online" => $this->online,
        ));
    }

} 