<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class connection_model extends CI_Model
{
  function check_id($pseudo,$pass)
  {
    $this->db->where('username',$pseudo);
    $this->db->where('password',sha1($pass));
    $q = $this->db->get('membres');
    if($q->num_rows()>0)
    {
      return true;
    }
    else{
      return false;
    }
  }
}