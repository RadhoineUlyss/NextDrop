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
            $this->dynamic_navbar->verification($page, 'profil_script');
        } else {
            redirect($this->session->flashdata('current_url'));
        }
    }

    private function getData()
    {
        $this->load->model('connection_model');
        return $this->connection_model->getData($this->session->userdata('login'));
    }

    public function modifier()
    {
        $this->load->model('connection_model');
        //  $nom = $this->input->post('nom');
        // $this->connection_model->modify($this->session->userdata('login'),$nom);
        //  $this->session->set_flashdata('message', 'Modifications réalisées');
        //  echo "<script>console.log( 'Debug Objects: test' );</script>";
       // $this->form_validation->set_message('required', 'Le {field} est déjà utilisé');


       // if ($this->form_validation->run()) {
            $data = $this->input->post();

            $this->connection_model->modify($this->session->userdata('login'), $data);
            $json = array(
                'status' => 'succes',
                'var'=> current($data),
                //  'redirect_url' => $this->load->view('accueil_view', '', true),
            );

      //  } else {
        //    $json = validation_errors();
            
            /* $json = array(
        'nom' => form_error('nom'),
        'prenom' => form_error('prenom'),
        'ville' => form_error('ville'),
        );*/

    //    }
        header("Content-type:application/json");
        echo json_encode($json);
    }

}
