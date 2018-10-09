<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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

        if ($this->session->userdata('login') || $this->session->userdata('logged')) {
            $this->session->set_flashdata('current_url', current_url());
            $data = $this->getData();
            if ($data->superadmin) {
                $this->session->set_userdata('superadmin', $data->superadmin);
            }
            $page = $this->load->view('profil_view', $data, true);
            $this->dynamic_navbar->verification($page , 'profil_script');
        } else {
            redirect($this->session->flashdata('current_url'));
        }
    }

    private function getData()
    {
        $this->load->model('connection_model');
        return $this->connection_model->getData($this->session->userdata('login'));
    }

    private function setButtons()
    {
        $data['donnees'] = array(
            'email' => "<a href=\"" . base_url('profil/modifier/email') . "\" class=\"btn btn-outline-dark\">Modifier</a>",
            'nom' => "<a href=\"" . base_url('profil/modifier/nom') . "\" class=\"btn btn-outline-dark\">Modifier</a>",
            'prenom' => "<a href=\"" . base_url('profil/modifier/prenom') . "\" class=\"btn btn-outline-dark\">Modifier</a>",
            'adresse' => "<a href=\"" . base_url('profil/modifier/adresse') . "\" class=\"btn btn-outline-dark\">Modifier</a>",
        );
    }

    public function modifier($donnee){
        $this->load->model('connection_model');
        $data = array(
            $donnee => $this->input->post($donnee)
        );
        $this->connection_model->modify($this->session->userdata('login'), $data);
        $this->session->set_flashdata('message', 'Modifications réalisées');
        redirect($this->session->flashdata('current_url'));
    }

}
