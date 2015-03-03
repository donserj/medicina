<?php
/**
 * Created by PhpStorm.
 * User: artosis
 * Date: 3/3/15
 * Time: 1:22 PM
 */

class Articledetail extends CI_Controller {

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
        $this->data['medArticles'] = $this->generalmodel->getArticlesByType('rightMedArticle', $this->lang, array(0,7), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['homeBottomArticles'] = $this->generalmodel->getArticlesByType('homeBottom', $this->lang, array(0,4), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['recentRecipes1'] = $this->generalmodel->getArticlesByType('recentRecipes', $this->lang, array(0,3), array("column"=> 'AddTime', "method"=>"DESC"));
        $this->data['recentRecipes2'] = $this->generalmodel->getArticlesByType('recentRecipes', $this->lang, array(3,3), array("column"=> 'AddTime', "method"=>"DESC"));
        $this->data['recentRecipes3'] = $this->generalmodel->getArticlesByType('recentRecipes', $this->lang, array(6,2), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['topRightArticles'] = $this->generalmodel->getArticlesByType('topRightArticle', $this->lang, array(0,5), array("column"=> 'AddTime', "method"=>"DESC"));

        $this->data['clinics'] = $this->generalmodel->getClinics($this->lang);

        $this->load->view('articleDetail', $this->data);
    }




} 