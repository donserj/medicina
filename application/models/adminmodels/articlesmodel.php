<?php
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 3/23/15
 * Time: 2:42 PM
 */

class Articlesmodel extends CI_Model{


    function getArticles(){

        $stmt = $this->db->prepare("SELECT * FROM Articles ");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }

    function getArticle($id){

        $stmt = $this->db->prepare("SELECT * FROM Articles WHERE `ArticleID`=:id");
        $stmt->execute(array(":id" => $id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    function getCategories(){

        $stmt = $this->db->prepare("SELECT `CategID`, `ParentID`, `CategName_ro` FROM Categories ");
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    function getArticleTypes(){

        $stmt = $this->db->prepare("SELECT `ArticleType` FROM Articles GROUP BY `ArticleType`");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }

    function setArticle($data){

        try {
            $stmt = $this->db->prepare("INSERT INTO Articles (`Title_ro`, `Title_ru`, `Text_ro`, `Text_ru`, `AddTime`, `ArticleType`, `CategoryID`, `Logo`, `Visible`)
                                    VALUES (:tiro, :tiru, :tero, :teru, :addtime, :atype, :catid, :logo, :visible)");
            $stmt->execute(array(
                ":addtime" => $data['addtime'],
                ":tiro" => $data['title_ro'],
                ":tiru" => $data['title_ru'],
                ":tero" => $data['text_ro'],
                ":teru" => $data['text_ru'],
                ":atype" => $data['article_type'],
                ":catid" => $data['select_categ'],
                ":logo" => $data['article_img'],
                ":visible" => $data['visible'],
            ));

            $res['code'] = 100;
            $res['text'] = "Success";

        }catch (PDOException $e){
            $res['code'] = -80;
            $res['text'] = "DB error: ".$e->getMessage();

        }

        return $res;
    }
} 