<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 1/13/15
 * Time: 7:30 PM
 */

class Page extends CI_Controller{

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

        $this->data['leftCategories'] = $this->generalmodel->getLeftCategories();
        $this->data['medArticles'] = $this->generalmodel->getArticlesByType('rightMedArticle', array(0,7), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['homeBottomArticles'] = $this->generalmodel->getArticlesByType('homeBottom', array(0,4), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['recentRecipes1'] = $this->generalmodel->getArticlesByType('recentRecipes', array(0,3), array("column"=> 'AddTime', "method"=>"DESC"));
        $this->data['recentRecipes2'] = $this->generalmodel->getArticlesByType('recentRecipes', array(3,3), array("column"=> 'AddTime', "method"=>"DESC"));
        $this->data['recentRecipes3'] = $this->generalmodel->getArticlesByType('recentRecipes', array(6,2), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['topRightArticles'] = $this->generalmodel->getArticlesByType('topRightArticle', array(0,5), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['clinics'] = $this->generalmodel->getClinics();

        $this->data['lang'] = $this->lang;

        $this->load->view('page', $this->data);
    }

    public function translatePage(){

        if(isset($_POST)){
            $this->session->set_userdata('lang', ($_POST['lang_ro'])? strtolower($_POST['lang_ro']) : strtolower($_POST['lang_ru']));
            redirect($_POST['current_page']);
        }
    }

    public function articleDetail($articleid){

        $this->data['leftCategories'] = $this->generalmodel->getLeftCategories();
        $this->data['medArticles'] = $this->generalmodel->getArticlesByType('rightMedArticle', array(0,7), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['homeBottomArticles'] = $this->generalmodel->getArticlesByType('homeBottom', array(0,4), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['recentRecipes1'] = $this->generalmodel->getArticlesByType('recentRecipes', array(0,3), array("column"=> 'AddTime', "method"=>"DESC"));
        $this->data['recentRecipes2'] = $this->generalmodel->getArticlesByType('recentRecipes', array(3,3), array("column"=> 'AddTime', "method"=>"DESC"));
        $this->data['recentRecipes3'] = $this->generalmodel->getArticlesByType('recentRecipes', array(6,2), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['topRightArticles'] = $this->generalmodel->getArticlesByType('topRightArticle', array(0,5), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['clinics'] = $this->generalmodel->getClinics();

        $this->data['articleDetail'] = $this->generalmodel->getArticleByID($articleid);

        $this->data['lang'] = $this->lang;

        //var_dump($this->data['articleDetail']);

        $this->load->view('articleDetail', $this->data);
    }
} 