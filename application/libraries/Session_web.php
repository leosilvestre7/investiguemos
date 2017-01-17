<?php

class Session_web {

    public function __construct() {
        $this->ci = & get_instance();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('session', 'alerta', 'fecha', 'url_comp');
        $helper = array();
        $model = array('m_cliente');
        $this->ci->load->library($library);
        $this->ci->load->helper($helper);
        $this->ci->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->_session = $this->datos_usuario('cliente_data');
    }

    public function datos_usuario_logueado() {
        /*
         * Información de la sesion
         */
        if (isset($this->_session->sys_id) === FALSE) {
            $this->destruir_session('cliente_data');
            echo $this->ci->alerta->location_href(base_url() . 'manager');
            EXIT;
        } else {
            /*
             * Información de la base de datos
             */
            $where = array('c.id' => $this->_session->sys_id, 'c.oculto' => 0);
            $info = $this->ci->m_cliente->mostrar($where);
            if (empty($info)) {
                $this->destruir_session('cliente_data');
                echo $this->ci->url_comp->direccionar(base_url(), TRUE);
                EXIT;
            }
            $data['cli_id'] = $this->_session->sys_id;
            $data['cli_email'] = $info['usuario'];
            $data['cli_regdate'] = $info['fecha_registro'];
            $data['cli_today'] = $this->ci->fecha->convertir_tiempo_fecha(time(), 4);
        }
        return $data;
    }

    public function verificar_logueo() {
        /*
         * Información de la sesion
         */
        if (isset($this->_session->sys_id) === TRUE) {
            echo $this->ci->alerta->location_href(base_url());
            exit;
        }
    }

    public function datos_usuario($array = 'cliente_data') {
        $session = $this->ci->session->all_userdata();
        if (isset($session[$array]) && is_array($session[$array])) {
            $data = new stdClass();
            foreach ($session[$array] as $key => $value) {
                $data->$key = $value;
            }
            return $data;
        } else {
            return FALSE;
        }
    }

    public function destruir_session($array = 'cliente_data') {
        $session = $this->ci->session->all_userdata();
        if (isset($session[$array]) && is_array($session[$array])) {
            $this->ci->session->unset_userdata($array);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /*
     * metodo para los niveles de usuario
     */
//    public function module_security($grade, $module, $element) {
//        $info_module = $this->ci->m_module->show_info_module($module, $grade);
//        switch ($element) {
//            case 'list':
//                if ($info_module->module_list == 1) {
//                    return TRUE;
//                } else {
//                    return FALSE;
//                }
//                break;
//            case 'add':
//                if ($info_module->module_add == 1) {
//                    return TRUE;
//                } else {
//                    return FALSE;
//                }
//                break;
//            case 'edit':
//                if ($info_module->module_edit == 1) {
//                    return TRUE;
//                } else {
//                    return FALSE;
//                }
//                break;
//            case 'view':
//                if ($info_module->module_view == 1) {
//                    return TRUE;
//                } else {
//                    return FALSE;
//                }
//                break;
//            case 'deny':
//                if ($info_module->module_deny == 1) {
//                    return TRUE;
//                } else {
//                    return FALSE;
//                }
//                break;
//            case 'allow':
//                if ($info_module->module_allow == 1) {
//                    return TRUE;
//                } else {
//                    return FALSE;
//                }
//                break;
//            case 'remove':
//                if ($info_module->module_remove == 1) {
//                    return TRUE;
//                } else {
//                    return FALSE;
//                }
//                break;
//        }
//    }

    /* metodo para las opciones del listado en tabla */
//     public function form_action($data, $entity_id, $entity_lock) {
//        if (is_array($data) && count($data) > 0) {
//            $this->_data = $data;
//        } else {
//            $this->_data = array(
//                'entity' => 'employee',
//                'route' => base_url() . 'sistema',
//                'option' => 'view|edit|deny|allow|delete'
//            );
//        }
//        $result = explode('|', $this->_data['option']);
//        $string = '';
//        foreach ($result as $items) {
//            switch (trim($items)) {
//                case 'view':
//                    if ($this->module_security($this->_session->sys_grade, $this->_data['entity'], 'view')) {
//                        if ($entity_lock == 0) {
//                            $string .= '<a href="' . $this->_data['route'] . '/' . $this->_data['entity'] . '/view/' . $entity_id . '">';
//                            $string .= '<i class="fa fa-search text-primary"></i> Observar</a>';
//                            $string .= '<br />';
//                        }
//                    }
//                    break;
//                case 'edit':
//                    if ($this->module_security($this->_session->sys_grade, $this->_data['entity'], 'edit')) {
//                        if ($entity_lock == 0) {
//                            $string .= '<a id="e_pro" href="' . $this->_data['route'] . '/' . $this->_data['entity'] . '/edit/' . $entity_id . '">';
//                            $string .= '<i class="fa fa-pencil text-primary"></i> Editar</a>';
//                            $string .= '<br />';
//                        }
//                    }
//                    break;
//                case 'deny':
//                    if ($this->module_security($this->_session->sys_grade, $this->_data['entity'], 'deny')) {
//                        if ($entity_lock == 0) {
//                            $string .= '<a href="' . $this->_data['route'] . '/process/' . $this->_data['entity'] . '/deny/' . $entity_id . '">';
//                            $string .= '<i class="fa fa-lock text-primary"></i> Denegar</a>';
//                            $string .= '<br />';
//                        }
//                    }
//                    break;
//                case 'allow':
//                    if ($this->module_security($this->_session->sys_grade, $this->_data['entity'], 'allow')) {
//                        if ($entity_lock == 1) {
//                            $string .= '<a href="' . $this->_data['route'] . '/process/' . $this->_data['entity'] . '/allow/' . $entity_id . '">';
//                            $string .= '<i class="fa fa-unlock text-primary"></i> Permitir</a>';
//                            $string .= '<br />';
//                        }
//                    }
//                    break;
//                case 'remove':
//                    if ($this->module_security($this->_session->sys_grade, $this->_data['entity'], 'remove')) {
//                        if ($entity_lock == 1) {
//                            $string .= '<a href="' . $this->_data['route'] . '/process/' . $this->_data['entity'] . '/delete/' . $entity_id . '">';
//                            $string .= '<i class="fa fa-minus text-primary"></i> Eliminar</a>';
//                            $string .= '<br />';
//                        }
//                    }
//                    break;
//                default:
//                    return FALSE;
//            }
//        }
//        return $string;
//    }
}
