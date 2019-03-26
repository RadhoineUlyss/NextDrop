<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sneaker extends CI_Controller
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

    public function get_one($id)
    {
        if($id == '')
            redirect('_404');

            $this->load->model('articles_model');
        $data['article'] = $this->articles_model->getArticleByRef($id);
        if($data['article'] == null)
            redirect('_404');
        $this->session->set_flashdata('current_url', current_url());
        $page = $this->load->view('article_view', $data, true);
        $this->dynamic_navbar->verification($page,'','');

    }
}
