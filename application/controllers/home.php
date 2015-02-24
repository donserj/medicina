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

    public function __construct()
    {
        parent::__construct();
        $this->load->library("MyDB.php");
        $this->load->model("generalmodel");


    }

    public function index(){

        $this->data['leftCategories'] = $this->generalmodel->getLeftCategories('ro');
        $this->data['medArticles'] = $this->generalmodel->getArticlesByType('rightMedArticle', 'ro', array(0,7));

        //var_dump($this->data['medArticle']);

        $this->load->view('home', $this->data);
    }
} 