<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Login extends CI_Controller {

    private $_process;
    private $_result;

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('alerta', 'complement', 'session_manager', 'mantenimiento', 'session');
        $helper = array('url', 'captcha');
        $model = array('m_empleado', 'm_captcha', 'm_access_logs');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->config->load('exportando', TRUE, TRUE);
        $this->_session = $this->session_manager->datos_usuario('user_data');
        $this->_items['entity'] = '';
    }

    public function ingresar() {
        //   echo 'sas';EXIT;
        $username = $this->input->post('login_username');
        $password = $this->input->post('login_password');
      //  $captcha = $this->input->post('login_captcha');
        
        //  echo $username;EXIT;
        $error = '';
        //mantenimiento 

        $error .= $this->mantenimiento->validacion($username, 'required|trim|alphanumeric|minlenght[3]|maxlenght[15]', 'Usuario');
        $error .= $this->mantenimiento->validacion($password, 'required|trim|minlenght[5]|maxlenght[15]|alphaspecial', 'Contraseña');
       // $error .= $this->mantenimiento->validacion($captcha,  'required', 'Codigo de seguridad');


        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        } elseif ($this->m_empleado->existe_usuario($username) === FALSE) {
            echo $this->alerta->mensaje_error('El usuario no existe.');
            EXIT;
        }

        $info = $this->m_empleado->success_employee($username, md5($password));
        if ($info !== NULL) {
            $data = array(
                'user_data' => array(
                    'sys_id' => $info->e_id,
                    'sys_grade' => $info->e_grade,
                    'sys_username' => $info->e_username,
                    'sys_password' => $info->e_password
                )
            );
            $this->session->set_userdata($data);
        } else {
            echo $this->alerta->mensaje_error('Datos incorrectos.');
            EXIT;
        }
        echo $this->alerta->location_href(base_url() . 'manager/home');
        EXIT;
    }

    public function salir() {
        $this->m_empleado->update_disconnect($this->_session->sys_id);
        $this->session_manager->destruir_session('user_data');
        echo $this->alerta->location_href(base_url() . 'manager/login', TRUE);
        EXIT;
    }

}
