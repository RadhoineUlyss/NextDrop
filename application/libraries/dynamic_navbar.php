<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dynamic_navbar
{

    public function verification($page = '', $script='', $style='')
    {
        
        $view_data = array();
        $CI = &get_instance();
        if ($page == '') {
            $page = $CI->load->view('accueil_view', '', true);
        }

        if ($CI->session->userdata('login') || $CI->session->userdata('logged')) {
            $navbar = $CI->load->view('Template/logged_button_inc_view', '', true);
            $data = [
                'page' => $page,
                'navbar' => $navbar,
                'script' => $script,
                'style' => $style
            ];
            $data_merge = array_merge($data, $view_data);
            $CI->load->view('Template/template', $data_merge);
        } else {
            $navbar = $CI->load->view('Template/signin_button_inc_view', '', true); /* $navbar correspond aux boutons présents à droite de la navbar */
            $formulaire = $CI->load->view('Template/signin_modal_inc_view', '', true);
            $data = [
                'page' => $page,
                'navbar' => $navbar,
                'script' => $script,
                'style' => $style,
                'formulaire' => $formulaire
            ];
            $data_merge = array_merge($data, $view_data);
            $CI->load->view('Template/template', $data_merge);
        }
    }
}

/* End of file Dynamic_navbar.php */
