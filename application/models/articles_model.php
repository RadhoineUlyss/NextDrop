<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class articles_model extends CI_Model
{
    public function getArticles($type=null)
    {

        if($type !=null) {
            $array = $this->db->select("*")
                ->where("type", $type)
                ->group_by("nom")
                ->get("view_article_taille", 50)
                ->result();
        }
        else{
            $array = $this->db->select("*")
                ->group_by("nom")
                ->get("view_article_taille", 50)
                ->result();
        }

        for($i=0; $i<count($array);$i++) {
            $array2 =[];
            $query = $this->db->select("taille")
                ->where("nom", $array{$i}->nom)
                ->get("view_article_taille", 50);

            foreach ($query->result() as $row){
                array_push($array2,$row->taille);
            }
            $array{$i}->tailles = $array2;
        }
        return $array;
    }

    public function getArticlesByName($name){
        return $this->db->select("*")
                ->from("view_article_taille")
                ->like("nom", $name)
                ->group_by("nom")
                ->get()
                ->result();
    }
}