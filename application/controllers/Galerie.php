<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galerie extends CI_Controller
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
        // On stocke notre page dans la variable $page
        //$page = $this->load->view('accueil_view', '', true);
        // On affiche notre page avec le template
        $this->session->set_flashdata('current_url', current_url());

        if ($this->session->userdata('login') || $this->session->userdata('logged')) {
            $bouton = "<a href=\"".base_url('/profil')."\" class=\"btn btn-outline-info\">Action que seuls les membres peuvent faire</a>";
        } else {
            $bouton = "<a href=\"#myModal\" class=\"btn btn-outline-info\" data-toggle=\"modal\">Action que seuls les membres peuvent faire</a>";
        }
        $page = $this->load->view('galerie_view', ['bouton_membre' => $bouton ], true);
        $this->dynamic_navbar->verification($page);
    }
}
