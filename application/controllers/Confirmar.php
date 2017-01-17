<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Confirmar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('alerta', 'mantenimiento','session_web','session');
        $helper = array('url', 'captcha');
        $model = array('m_cliente','m_cliente_info');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->config->load('exportando', TRUE, TRUE);
        $this->_session = $this->session_web->datos_usuario('cliente_data');
    }

    public function email($codigo) {
        $data = $this->m_cliente->confirm($codigo);
        if ($data === FALSE) {
            echo '<script>alert("hubo errores");</script>';
            exit;
        } else {
            $client = $this->m_cliente->select_confirm($codigo);
            if($client ===FALSE){
                $this->session_web->destruir_session('cliente_data');
                echo '<script>alert("ya se encuentra activada su cuenta");</script>';
                echo $this->alerta->location_href(base_url());
                EXIT;
            }else{
            $info = $this->m_cliente->success_loggued($client->cli_username, $client->cli_password);
            if ($info === FALSE) {
                echo '<script>alert("ya se encuentra activada su cuenta");</script>';
                echo $this->alerta->location_href(base_url());
                EXIT;
            } else {
                $data = array('cliente_data' =>
                    array(
                        'sys_id' => $info->cli_id,
                        'sys_email' => $info->cli_username,
                        'sys_password' => $info->cli_password
                    )
                );
                $this->session->set_userdata($data);
                $newcode = $this->mantenimiento->aleatorio(20);
                $this->m_cliente->updatecode($newcode, $info->cli_id);
                echo $this->alerta->location_href(base_url());
                EXIT;
            }
            }
        }
    }

}


