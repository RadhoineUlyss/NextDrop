<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class connection_model extends CI_Model
{
    public function check_id($pseudo, $pass)
    {
        $this->db->where('username', $pseudo);
        $this->db->where('password', sha1($pass));
        $q = $this->db->get('membres');
        if ($q->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('membres');
        $data  = $query->first_row();

        return $data;
    }

    function modify($id, $data)
    {
        //$this->db->update_string('membres', $data, $id);
        /*$this->db->where('username', $id);
        $this->db->update('membres', $data); */
        $this->db->set($data);
        $this->db->where('username', $id);
        $this->db->update('membres');
    }
}
