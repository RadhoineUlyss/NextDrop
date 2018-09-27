<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inscription_model extends CI_Model
{
	function signup($data)
  {
    $this->db->insert('membres',$data);
  }
  function check_pseudo($pseudo)
  {

      $this->db->select('id');
      $this->db->from('membres');
      $this->db->where('username',$pseudo);
      if($this->db->count_all_results()>0)
      {
        
        return false;
      }
      else
      {
        return true;
      }
    }
  
  
  function check_email($email)
  {
      $this->db->select('id');
      $this->db->from('membres');
      $this->db->where('email',$email);
      if($this->db->count_all_results()>0)
      {
        return false;
      }
      else
      {
        return true;
      }
}
}