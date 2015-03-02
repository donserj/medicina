<?php
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 2/10/15
 * Time: 7:30 PM
 */

class GeneralModel extends CI_Model{

    public function getLeftCategories($lang){

        $this->db = MyDB::getConnection();

        $stmt = $this->db->prepare("SELECT * FROM Categories WHERE CategLang=:lang AND ParentID=0");
        $stmt->execute(array(":lang" => $lang));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;


    }

    public function getArticlesByType($type, $lang, $limit=null, $order=null){

        $this->db = MyDB::getConnection();

        $limite = "";
        if(isset($limit) && !empty($limit)){
            $limite = "LIMIT ".$limit[0].",".$limit[1];
        }

        $ordered = "";
        if(isset($order) && !empty($order)){
            $ordered = "ORDER BY ".$order['column']." ".$order['method'];
        }

        $stmt = $this->db->prepare("SELECT * FROM Articles WHERE Lang=:lang AND ArticleType=:articletype ".$ordered." ".$limite);
        $stmt->execute(array(":lang" => $lang, ":articletype" => $type));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;


    }

    public function getClinics($lang){

        $this->db = MyDB::getConnection();

        $stmt = $this->db->prepare("SELECT * FROM ClinicsHospitals WHERE Lang=:lang");
        $stmt->execute(array(":lang" => $lang));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;

    }
} 