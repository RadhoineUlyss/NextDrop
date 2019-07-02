<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accessoires extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     *
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('articles_model');
        // On stocke notre page dans la variable $page
        //$page = $this->load->view('accueil_view', '', true);
        // On affiche notre page avec le template
        $this->session->set_flashdata('current_url', current_url());
        $data['accessoires'] = $this->getProducts('Accessoires');
        $page = $this->load->view('accessoires_view', $data, true);
        $this->dynamic_navbar->verification($page,'','galeries_style');

    }

    public function getProducts($id=null)
    {
        return $this->articles_model->getArticles($id);
    }
}
