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

        if ($this->session->userdata('login_User')) {
            $this->session->set_flashdata('current_url', current_url());
            $user    = $this->getData();
            $adresse = $this->getAdresse($this->getId());
            if ($user->superadmin) {
                $data               = $this->session->userdata('login_User');
                $data['superadmin'] = $user->superadmin;
                $this->session->set_userdata('login_User', $data);
            }
            $user->adresse = $adresse;
            $page          = $this->load->view('profil_view', $user, true);
            $this->dynamic_navbar->verification($page, 'profil_script', 'profil_style');
        } else {
            redirect($this->session->flashdata('current_url'));
        }
    }


    private function getId()
    {
        $this->load->model('connection_model');

        return $this->connection_model->getId($this->session->userdata('login_User')['login']);
    }

    private function getData()
    {
        $this->load->model('connection_model');

        return $this->connection_model->getData($this->session->userdata('login_User')['login']);
    }

    private function getAdresse($id)
    {
        $this->load->model('connection_model');

        return $this->connection_model->getAdresse($id);
    }

    public function modifierCompte()
    {
        $this->load->model('connection_model');

        $this->form_validation->set_message('is_unique', 'L\'email est déjà utilisé');
        $this->form_validation->set_message('valid_email', 'L\'adresse email doit être valide');

        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[membres.email]|required');

        if ($this->form_validation->run()) {
            $data = $this->input->post();

            $this->connection_model->modifyCte($this->session->userdata('login_User')['login'], $data);
            $json = [
                'status' => 'succes'
            ];
        } else {
            $json = [
                'erreur' => validation_errors()
            ];
        }

        header("Content-type:application/json");
        echo json_encode($json);
    }

    public function modifierPerso()
    {
        $this->load->model('connection_model');

        $this->form_validation->set_message('min_length', 'Minimum 5 caractères pour le %s');

        $this->form_validation->set_rules('prenom', 'Prénom', 'trim|required');
        $this->form_validation->set_rules('nom', 'Nom', 'trim|required');

        if ($this->form_validation->run()) {
            $data = $this->input->post(['nom', 'prenom']);
            $add  = $this->input->post(['code_postal', 'ville', 'ligne_adresse']);
            $this->connection_model->modifyPers($this->session->userdata('login_User')['login'], $data, $add);
            $json = [
                'status' => 'succes'
            ];
        } else {
            $json = [
                'erreur' => validation_errors()
            ];
        }

        header("Content-type:application/json");
        echo json_encode($json);
    }

    public function recuperationPassword()
    {

        $this->session->set_flashdata('message_error', 'Email inexistant, veuillez réessayer !');
        redirect('home');

    }

}

