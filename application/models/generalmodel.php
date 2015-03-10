<?php
/**
 * Created by PhpStorm.
 * User: donserj
 * Date: 2/10/15
 * Time: 7:30 PM
 */

class GeneralModel extends CI_Model{

    public function getLeftCategories(){

        $this->db = MyDB::getConnection();

        $stmt = $this->db->prepare("SELECT * FROM Categories WHERE ParentID=0");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;


    }

    public function getArticlesByType($type, $limit=null, $order=null){

        $this->db = MyDB::getConnection();

        $limite = "";
        if(isset($limit) && !empty($limit)){
            $limite = "LIMIT ".$limit[0].",".$limit[1];
        }

        $ordered = "";
        if(isset($order) && !empty($order)){
            $ordered = "ORDER BY ".$order['column']." ".$order['method'];
        }

        $stmt = $this->db->prepare("SELECT * FROM Articles WHERE ArticleType=:articletype ".$ordered." ".$limite);
        $stmt->execute(array(":articletype" => $type));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;


    }

    public function getClinics(){

        $this->db = MyDB::getConnection();

        $stmt = $this->db->prepare("SELECT * FROM ClinicsHospitals ");
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;

    }

    public function  getArticleByID($id){

        $this->db = MyDB::getConnection();

        $stmt = $this->db->prepare("SELECT * FROM Articles WHERE ArticleID=:id");
        $stmt->execute(array(":id" => $id));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }
} 