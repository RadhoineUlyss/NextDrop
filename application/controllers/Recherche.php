<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recherche extends CI_Controller
{

    public function rechercheAjax()
    {
        $name = $this->input->post("search");
        $this->load->model('articles_model');
        $resultat =  $this->articles_model->getArticlesByName($name);
        echo json_encode($resultat);
    }
}
