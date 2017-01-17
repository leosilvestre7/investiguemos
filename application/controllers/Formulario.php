<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Formulario extends CI_Controller {

    private $items = array();

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('parser', 'smarty_tpl', 'session', 'mantenimiento', 'alerta', 'sendmail', 'fecha', 'cart', 'url_comp');
        $helper = array('url', 'captcha_helper', 'string_helper');
        $model = array('m_captcha');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->config->load('exportando', TRUE, TRUE);
        $this->items['proyecto'] = $this->config->item('proyecto', 'exportando');
        $this->items['favicon'] = $this->config->item('url_favicon', 'exportando');
        $this->items['base_url'] = base_url();
    }

    public function contacto() {
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');
        $telefono = $this->input->post('telefono');
//        $servicios = $this->input->post('servicios');
        $mensaje = $this->input->post('mensaje');
        $captcha = $this->input->post('captcha');

        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|trim|alphaspace', 'Nombre');
        $error .= $this->mantenimiento->validacion($email, 'required|trim|email', 'E-mail');
        $error .= $this->mantenimiento->validacion($telefono, 'required|trim|numeric|minlenght[7]', 'Teléfono');

        $error .= $this->mantenimiento->validacion($mensaje, 'required|minlenght[3]|maxlenght[200]', 'Mensaje');
        $error .= $this->mantenimiento->validacion($captcha, 'required', 'Codigo de seguridad');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        if ($this->m_captcha->captcha_exists($captcha)) {
            $data = array(
                'name' => 'Perú Inmobiliarios',
                'email' => 'info@peruinmobiliarios.com',
                'subject' => 'Consulta',
                /* Datos SMTP: en caso se necesiten */
                'smtp_secure' => 'ssl', // ssl - tls
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 465, // ssl: 465 - tls: 587
                'smtp_username' => '',
                'smtp_password' => '',
                /* Datos adicionales */
                'user_name' => $nombre,
                'user_email' => $email,
                'user_phone' => $telefono,
//                'servicios' => $servicios,
                'message' => $mensaje
            );
            /* ------MAIL DE ATERRIZAJE------- */
            $list_email = array(
                'nombre' => 'consultas@peruinmobiliarios.com' // ----> Correo principal
            );
            $this->sendmail->load($data, 'plantilla1');
            $this->sendmail->success_sendmail($list_email);
            echo $this->alerta->mensaje_exito('Se envió correctamente su mensaje', TRUE);
            echo $this->alerta->refrescar_tiempo(1500);
            EXIT;
        } else {
            echo $this->alerta->mensaje_error('Código de seguridad incorrecto');
            //       echo $this->alerts->refresh_time(10000);
        }
    }
    public function contacto_ebook() {
        $nombre = $this->input->post('nombre');
        $email = $this->input->post('email');

        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|trim|alphaspace', 'Nombre');
        $error .= $this->mantenimiento->validacion($email, 'required|trim|email', 'E-mail');

        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }

        $data = array(
            'name' => 'Perú Inmobiliarios',
            'email' => 'info@peruinmobiliarios.com',
            'subject' => 'Consulta',
            /* Datos SMTP: en caso se necesiten */
            'smtp_secure' => 'ssl', // ssl - tls
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465, // ssl: 465 - tls: 587
            'smtp_username' => '',
            'smtp_password' => '',
            /* Datos adicionales */
            'user_name' => $nombre,
            'user_email' => $email,
        );
        /* ------MAIL DE ATERRIZAJE------- */
        $list_email = array(
            'nombre' => 'consultas@peruinmobiliarios.com' // ----> Correo principal
        );
        $this->sendmail->load($data, 'plantilla2');
        $this->sendmail->success_sendmail($list_email);
        echo $this->alerta->mensaje_exito('Se envió correctamente su mensaje', TRUE);
        echo $this->alerta->refrescar_tiempo(1500);
        EXIT;
    }

}
