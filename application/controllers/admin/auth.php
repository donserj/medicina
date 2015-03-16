<?php
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 1/14/15
 * Time: 7:15 PM
 */

class Auth extends CI_Controller {

    public $db;
    public $data;
    public $online;

    function __construct(){
        parent::__construct();

        $this->load->library("MyDB.php");
        $this->db = MyDB::getConnection();
        $this->load->model("adminmodels/authmodel");
        //$this->load->library("session");

    }

    public function index(){

        if(isset($_POST['login'])){

            $login = trim($_POST['login']);
            $pass = trim($_POST['pass']);

            $this->online = $this->authmodel->Authorization($login, $pass);

            if($this->online){

                $this->session->set_userdata('OpID', $this->online['OpID']);
                $this->session->set_userdata('Login', $this->online['Login']);

                redirect('/admin/articles');
            }else{
                $this->data['error'] = "Incorrect login or pass";
            }
        }

        if(isset($_GET['out'])){
            $this->session->unset_userdata("Login");
            $this->session->unset_userdata("OpID");
        }

        //var_dump($this->online);

        $this->load->view('admin/index', $this->data);
    }
} 