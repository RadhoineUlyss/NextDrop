<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class articles_model extends CI_Model
{
    public function getArticles($id=null)
    {
        if($id !=null) {
            return $this->db->select("*")
                ->where("Type_id", $id)
                ->get("article", 50)
                ->result();
        }
        else{
            return $this->db->select("*")
                ->get("article", 50)
                ->result();
        }
    }
}