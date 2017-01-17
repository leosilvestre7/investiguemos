<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Recuperar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('alerta', 'mantenimiento','session_web','session','sendmail','fecha');
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
        $this->items['base_url'] = base_url();
        $this->_session = $this->session_web->datos_usuario('cliente_data');
    }
    
    public function password(){
    	/* DATOS DE AJAX PRE PROCESADOS */
                $email = $this->input->post('email');

                /* VALIDACIONES DE CAMPOS */
                $error = '';
                $error .= $this->mantenimiento->validacion($email, 'required|trim|email|minlenght[5]|maxlenght[60]', 'Correo electrónico');
                if ($error != '') {
                    echo $this->alerta->mensaje_error($error, TRUE);
                    EXIT;
                }
                /* VALIDACIONES */
                if ($this->m_cliente->existe_cliente($email) !== TRUE) {
                    echo $this->alerta->mensaje_error('el correo no se encuentra registrado', TRUE);
                    EXIT;
                } else {
                    $info = $this->m_cliente->select_code($email);
                    if ($info !== FALSE) {
                        $data = array(
                            'name' => 'RockDv Boutique',
                            'email' => 'administrador@rockdvboutique.com',
                            'subject' => 'Recuperación de contraseña: ' . $this->fecha->convertir_tiempo_fecha(time(), 2),
                            /* Datos SMTP: en caso se necesiten */
                            'smtp_secure' => 'ssl', // ssl - tls
                            'smtp_host' => 'smtp.gmail.com',
                            'smtp_port' => 465, // ssl: 465 - tls: 587
                            'smtp_username' => '',
                            'smtp_password' => '',
                            /* Datos adicionales */
                            'user_name' => $email,
                            'user_message' => $this->items['base_url'] . 'recuperar/newpassword/' . $info->cli_code
                        );
                        /* ------MAIL DE ATERRIZAJE------- */
                        $list_email = array(
                            'name' => $email, // ----> Correo principal
                        );
                        $this->sendmail->load($data, 'contrasena');
                        $this->sendmail->success_sendmail($list_email);
                        $message = 'Se le envio un correo de recuperacion';
                        echo $this->alerta->mensaje_exito($message, TRUE);
                    } else {
                        echo $this->alerta->mensaje_error('hubo problemas', TRUE);
                    }
                }
    }
    
    public function newpassword($codigo){
        $cliente = $this->m_cliente->select_confirm($codigo);
        if ($cliente === FALSE) {
            $this->session_web->destruir_session('cliente_data');
            echo '<script>alert("ya se recupero su contraseña, vuelva a intentarlo");</script>';
            echo $this->alerta->location_href(base_url());
            EXIT;
        } else {
            echo $this->alerta->location_href(base_url() . 'newpassword/' . $codigo);
            EXIT;
        }
    }
    
}
