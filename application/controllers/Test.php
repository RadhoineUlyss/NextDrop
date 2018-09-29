<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
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
        $this->dynamic_navbar->verification();

    }

    public function inscription()
    {

        $this->load->model('inscription_model');

        $this->form_validation->set_message('email_exists', 'L\'email est déjà utilisé');
        $this->form_validation->set_message('username_exists', 'Le nom d\'utilisateur est déjà utilisé');
        $this->form_validation->set_message('valid_email', 'L\'adresse email doit être valide');
        $this->form_validation->set_message('min_length', 'Minimum 5 caractères pour le mot de passe');

        $this->form_validation->set_rules('nom', 'Nom', 'trim|required');
        $this->form_validation->set_rules('prenom', 'Prénom', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_exists');
        $this->form_validation->set_rules('username', 'Pseudo', 'trim|required|callback_username_exists');
        $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|min_length[5]');

        if ($this->form_validation->run()) {
            $data = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => sha1($this->input->post('password')),
            );
            $this->inscription_model->signup($data);
            $this->session->set_flashdata('message', 'Inscription réussie');
        } else {
            $this->session->set_flashdata('error_ins', '<strong>Erreur d\'inscription : </strong>'.form_error('email').form_error('password').form_error('username'));
        }
        redirect($this->session->flashdata('current_url'));
        //$this->dynamic_navbar->verification(); sauvegarde le cache formulaire
    }

    public function connection()
    {
        $this->load->model('connection_model');

        $this->form_validation->set_rules('username', 'Pseudo', 'trim|required');
        $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required');

        if ($this->form_validation->run()) {
            if ($this->connection_model->check_id($this->input->post('username'), $this->input->post('password'))) {
                $data = array('login' => $this->input->post('username'), 'logged' => true);
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', 'Connexion réussie. Bonjour ' . $this->input->post('username') . ' !');
            } else {
                $this->session->set_flashdata('error_ident', 'Mauvais identifiants');
            }
        }
        redirect($this->session->flashdata('current_url'));
        //$this->dynamic_navbar->verification(); sauvegarde le cache formulaire
    }

    public function logout()
    {
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('logged');
        $this->session->sess_destroy();
        redirect('/');
    }

    public function username_exists($key)
    {
        $this->load->model('inscription_model');
        return $this->inscription_model->check_pseudo($key);
    }

    public function email_exists($key)
    {
        $this->load->model('inscription_model');
        return $this->inscription_model->check_email($key);
    }
}
