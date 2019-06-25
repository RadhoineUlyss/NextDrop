<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class connection_model extends CI_Model
{
    public function check_id($pseudo, $pass)
    {
        $this->db->where('username', $pseudo);
        $this->db->where('password', $pass);
        $q = $this->db->get('membres');
        if ($q->num_rows() > 0) {
            $this->db->where('username', $pseudo);
            return $this->getId($pseudo);
        } else {
            return 0;
        }
    }

    public function getId($username)
    {
        $this->db->select('id');
        $this->db->where('username', $username);
        $query = $this->db->get('membres');
        $data  = $query->first_row();
        return $data->id;
    }
    
    public function getData($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('membres');
        $data  = $query->first_row();
        return $data;
    }

    public function getAdresse($membre_id)
    {
        $this->db->where('membre_id', $membre_id);
        $query = $this->db->get('adresse');
        $data  = $query->first_row();

        return $data;
    }

    function modifyPers($id, $data, $add)
    {
        //$this->db->update_string('membres', $data, $id);
        /*$this->db->where('username', $id);
        $this->db->update('membres', $data); */
        $this->db->set($data);
        $this->db->where('username', $id);
        $this->db->update('membres');

        $this->db->set($add);
        $this->db->where('membre_id', $this->getId($id));
        $this->db->update('adresse');
    }

    function modifyCte($id, $data)
    {
        //$this->db->update_string('membres', $data, $id);
        /*$this->db->where('username', $id);
        $this->db->update('membres', $data); */
        $this->db->set($data);
        $this->db->where('username', $id);
        $this->db->update('membres');
    }
}
