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
        $page = $this->load->view('test_view', '', true);
        // On affiche notre page avec le template
        if($this->session->userdata('login') || $this->session->userdata('logged'))
          {
            $navbar = $this->load->view('Template/logged_button_inc_view', '', true);
            $this->load->view('Template/template', ['page' => $page, 'navbar'=>$navbar]);
          }
        else{
            $navbar = $this->load->view('Template/signin_button_inc_view', '', true); /* $navbar correspond aux boutons présents à droite de la navbar */
            $formulaire = $this->load->view('Template/signin_modal_inc_view','', true);
            $this->load->view('Template/template', ['page' => $page, 'navbar'=>$navbar, 'formulaire'=>$formulaire]);
        }
       
    }

    public function inscription(){

        $this->load->model('inscription_model');
        
        $this->form_validation->set_message('email_exists', 'L\'email\' est déjà utilisé');
        $this->form_validation->set_message('username_exists', 'Le nom d\'utilisateur est déjà utilisé');
        $this->form_validation->set_message('min_length', 'Le minimum est de 5 caractères');

        $this->form_validation->set_rules('nom','Nom','trim|required');
        $this->form_validation->set_rules('prenom','Prénom','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|callback_email_exists');
        $this->form_validation->set_rules('username','Pseudo','trim|required|callback_username_exists');
        $this->form_validation->set_rules('password','Mot de passe','trim|required|min_length[5]');

        if($this->form_validation->run())
        {
          $data = array(
            'nom'=>$this->input->post('nom'),
            'prenom'=>$this->input->post('prenom'),
            'email'=>$this->input->post('email'),
            'username'=>$this->input->post('username'),
            'password'=>sha1($this->input->post('password'))
          );
          $this->inscription_model->signup($data);
          redirect("/test");
        }
        else{
            $page = $this->load->view('test_view', '', true);
            $navbar = $this->load->view('Template/signin_button_inc_view', '', true); /* $navbar correspond aux boutons présents à droite de la navbar */
            $formulaire = $this->load->view('Template/signin_modal_inc_view','', true);
            $this->load->view('Template/template', ['page' => $page, 'navbar'=>$navbar, 'formulaire'=>$formulaire,'register_script' => true]);

            
    }
}

function connection()
{
    $this->load->model('connection_model');

  $this->form_validation->set_rules('username','Pseudo','trim|required');
  $this->form_validation->set_rules('password','Mot de passe','trim|required');
  
  if($this->form_validation->run())
  {
    if($this->connection_model->check_id($this->input->post('username'), $this->input->post('password')))
    {
      $data = array('login'=>$this->input->post('username'), 'logged'=>true);
      $this->session->set_userdata($data);
      redirect('/test');
    }
    else
    {
      $page = $this->load->view('test_view', '', true);
      $navbar = $this->load->view('Template/signin_button_inc_view', '', true); /* $navbar correspond aux boutons présents à droite de la navbar */
      $formulaire = $this->load->view('Template/signin_modal_inc_view', ['error_ident' => 'Mauvais identifiants'], true);
      $this->load->view('Template/template', ['page' => $page, 'navbar'=>$navbar, 'formulaire'=>$formulaire, 'login_script' => true]);
    }
  }
}

public function logout()
{
  $this->session->unset_userdata('login');
  $this->session->unset_userdata('logged');
  $this->session->sess_destroy();
  redirect('/test');
}

function username_exists($key)
{
    $this->load->model('inscription_model');
    return $this->inscription_model->check_pseudo($key);
}

function email_exists($key)
{
    $this->load->model('inscription_model');
    return $this->inscription_model->check_email($key);
}
}
