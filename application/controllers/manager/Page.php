<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Page extends CI_Controller {

    private $items = array();

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'parser', 'complement');
        $helper = array('url', 'captcha', 'captcha_helper', 'string_helper');
        $model = array('m_access_logs', 'm_captcha');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        $this->rand = random_string('alnum', 6);
        /*
         * Configuración personalizada
         */
        $this->config->load('exportando', TRUE, TRUE);
        $this->items['proyecto'] = $this->config->item('project_name', 'exportando');
        $this->items['favicon'] = $this->config->item('url_favicon', 'exportando');
        $this->items['base_url'] = base_url();
    }

    public function captcha() {

        //configuramos el captcha

        $conf_captcha = array(
            'word' => $this->rand,
            'img_path' => './public/captcha/',
            'img_url' => base_url() . 'public/captcha/',
            'font_path' => './public/fonts/Skranji-Regular.ttf',
            'img_width' => '250',
            'img_height' => '60',
            //decimos que pasados 10 minutos elimine todas las imágenes
            //que sobrepasen ese tiempo
            'expiration' => 600
        );

        //guardamos la info del captcha en $cap

        $cap = create_captcha($conf_captcha);

        //pasamos la info del captcha al modelo para 
        //insertarlo en la base de datos

        $this->m_captcha->insert_captcha($cap);

        //devolvemos el captcha para utilizarlo en la vista

        return $cap;
    }

    public function login() {

        $login = $this->session_manager->verificar_logueo();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Login';
        /*
         * Contenido de la interna
         */
        $logs = $this->m_access_logs->show_info_logs($this->input->ip_address(), $this->config->item('blocked_time', 'exportando'));
        $uno = $this->captcha();
        $valor = $uno['image'];
        $data['html_captcha'] = $valor;
        /*
         * Impresión de páginas
         */
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/page/login', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function home() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Inicio';
        /*
         * Contenido de la interna
         */

        /*
         * Impresión de páginas
         */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/home', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }


}
