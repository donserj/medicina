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

        $this->load->library("MyDB.php");
        $this->db = MyDB::getConnection();
        $this->load->model("adminmodels/articlesmodel");

    }

    public function index(){

        $this->data['articles'] = $this->articlesmodel->getArticles();

        $this->load->view("admin/articles", array(
            "data" => $this->data,
            "online" => $this->online,
        ));
    }

    public function newArticle(){

        $form = $data = array();
        $form['data'] = date("d.m.Y", time());
        $this->data['message'] = "";
        if(isset($_POST['newarticle'])){

            if(isset($_POST['addtime']) && !empty($_POST['addtime'])){
                $data['addtime'] = $_POST['addtime'];
            }else{
                $data['addtime'] = date("d.m.Y", time());
            }

            if(isset($_POST['title_ro']) && !empty($_POST['title_ro'])){
                $data['title_ro'] = $_POST['title_ro'];
            }else{
                $data['title_ro'] = "";
            }

            if(isset($_POST['title_ru']) && !empty($_POST['title_ru'])){
                $data['title_ru'] = $_POST['title_ru'];
            }else{
                $data['title_ru'] = "";
            }

            if(isset($_POST['text_ro']) && !empty($_POST['text_ro'])){
                $data['text_ro'] = $_POST['text_ro'];
            }else{
                $data['text_ro'] = "";
            }

            if(isset($_POST['text_ru']) && !empty($_POST['text_ru'])){
                $data['text_ru'] = $_POST['text_ru'];
            }else{
                $data['text_ru'] = "";
            }

            if(isset($_POST['visible']) && !empty($_POST['visible'])){
                $data['visible'] = 1;
            }else{
                $data['visible'] = 0;
            }

            if(isset($_POST['select_categ']) && !empty($_POST['select_categ'])){
                $data['select_categ'] = $_POST['select_categ'];
            }else{
                $data['select_categ'] = 0;
            }

            if(isset($_POST['article_type']) && !empty($_POST['article_type'])){
                $data['article_type'] = $_POST['article_type'];
            }else{
                $data['article_type'] = "";
            }
            //---------image----------
            if(isset($_FILES['article_img']['tmp_name']) && !empty($_FILES['article_img']['tmp_name'])){
                $filename = time()."-".$_FILES['article_img']['name'];
                $data['article_img'] = "/assets/images/articles/".$filename;
                if(move_uploaded_file($_FILES["article_img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."assets/images/articles/".$filename)){
                    $this->data['message'] .= "file move success";
                }else{
                    $this->data['message'] .= "file move error";
                }

            }else{
                $data['article_img'] = "";
            }

            $res = $this->articlesmodel->setArticle($data);
            if($res['code'] == 100){
                $this->data['message'] .= "Success inserted";
            }else{
                $this->data['message'] .= "Error inserted : ".$res['text'];
            }

        }

        $this->data['categories'] = $this->articlesmodel->getCategories();
        $this->data['types'] = $this->articlesmodel->getArticleTypes();

        $this->load->view("admin/newArticle", array(
            "data" => $this->data,
            "form" => $form,
            "online" => $this->online,
        ));
    }

    public function update($articleid){

        if(isset($_POST['updatearticle'])){

            if(isset($_POST['addtime']) && !empty($_POST['addtime'])){
                $data['addtime'] = $_POST['addtime'];
            }else{
                $data['addtime'] = date("d.m.Y", time());
            }

            if(isset($_POST['title_ro']) && !empty($_POST['title_ro'])){
                $data['title_ro'] = $_POST['title_ro'];
            }else{
                $data['title_ro'] = "";
            }

            if(isset($_POST['title_ru']) && !empty($_POST['title_ru'])){
                $data['title_ru'] = $_POST['title_ru'];
            }else{
                $data['title_ru'] = "";
            }

            if(isset($_POST['text_ro']) && !empty($_POST['text_ro'])){
                $data['text_ro'] = $_POST['text_ro'];
            }else{
                $data['text_ro'] = "";
            }

            if(isset($_POST['text_ru']) && !empty($_POST['text_ru'])){
                $data['text_ru'] = $_POST['text_ru'];
            }else{
                $data['text_ru'] = "";
            }

            if(isset($_POST['visible']) && !empty($_POST['visible'])){
                $data['visible'] = 1;
            }else{
                $data['visible'] = 0;
            }

            if(isset($_POST['select_categ']) && !empty($_POST['select_categ'])){
                $data['select_categ'] = $_POST['select_categ'];
            }else{
                $data['select_categ'] = 0;
            }

            if(isset($_POST['article_type']) && !empty($_POST['article_type'])){
                $data['article_type'] = $_POST['article_type'];
            }else{
                $data['article_type'] = "";
            }
            //---------image----------
            if(isset($_FILES['article_img']['tmp_name']) && !empty($_FILES['article_img']['tmp_name'])){
                $filename = time()."-".$_FILES['article_img']['name'];
                $data['article_img'] = "/assets/images/articles/".$filename;
                if(move_uploaded_file($_FILES["article_img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."assets/images/articles/".$filename)){
                    $this->data['message'] .= "file move success";
                }else{
                    $this->data['message'] .= "file move error";
                }

            }else{
                $data['article_img'] = "";
            }

            $res = $this->articlesmodel->setArticle($data);
            if($res['code'] == 100){
                $this->data['message'] .= "Success inserted";
            }else{
                $this->data['message'] .= "Error inserted : ".$res['text'];
            }

        }

        $this->data['categories'] = $this->articlesmodel->getCategories();
        $this->data['types'] = $this->articlesmodel->getArticleTypes();

        $this->data['article'] = $this->articlesmodel->getArticle($articleid);

        $this->load->view("admin/editArticle", array(
            "data" => $this->data,
            "online" => $this->online,
        ));
    }

    public function delete($articleid){

        $this->data['articles'] = $this->articlesmodel->deleteArticle($articleid);

        $this->data['articles'] = $this->articlesmodel->getArticles();

        $this->load->view("admin/articles", array(
            "data" => $this->data,
            "online" => $this->online,
        ));
    }

} 