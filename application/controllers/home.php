<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 1/13/15
 * Time: 7:30 PM
 */

class Home extends CI_Controller{

    public $data;
    public $db;
    public $lang;

    public function __construct()
    {
        parent::__construct();

        $this->load->library("MyDB.php");
        $this->load->library("session");
        $this->load->model("generalmodel");
        $this->load->helper("url");

        if($this->session->userdata('lang')){
            $this->lang = $this->session->userdata('lang');
        }else{
            $this->lang = 'ro';
        }
    }

    public function index(){

        $this->data['leftCategories'] = $this->generalmodel->getLeftCategories($this->lang);
        $this->data['medArticles'] = $this->generalmodel->getArticlesByType('rightMedArticle', $this->lang, array(0,7));

        $this->load->view('home', $this->data);
    }
} 