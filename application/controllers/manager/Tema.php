<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Tema  extends CI_Controller{
    
    private $_result;
     public function __construct() {
        parent::__construct();

        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'url_comp', 'mantenimiento', 'documento', 'fecha', 'archivo');
        $helper = array('url');
        $model = array('m_tema');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->config->load('exportando', TRUE, TRUE);
        $this->_session = $this->session_manager->datos_usuario('user_data');
        $this->items['proyecto'] = $this->config->item('project_name', 'exportando');
        $this->items['favicon'] = $this->config->item('url_favicon', 'exportando');
        $this->items['base_url'] = base_url();
        $this->items['tema_activo'] = 'active';
    }

    public function agregar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Agregar tema';
        $data['tipo'] = 'agregar';
        /* ------------------------------------------------------------ */
        $this->load->library("pagination");
        $segmento = 4;
        $items = 5;
        $lista = $this->m_tema->mostrar_todo($items, $this->uri->segment(4));
        $total = count($this->m_tema->mostrar_todo());
        $data['paginacion'] = $this->pagination->generate_pagination(base_url() . "manager/tema/agregar", $items, $total, $segmento);
        /* ------------------------------------------------------------ */
        if (!empty($lista)) {
            $i = 1;
            foreach ($lista AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'editar|denegar|permitir', 'tema', $items['oculto']);
                $data['lista'][] = array(
                    'id' => $items['id'],
                    'numero' => $i,
                    'nombre' => $items['nombre'],
                    'accion' => $accion
                );
                $i++;
            }
        }
        /* ------------------------------------------------------------ */
        
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_tema', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function editar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Editar tema';
        $data['tipo'] = 'editar';
        /* ------------------------------------------------------------ */
        $this->load->library("pagination");
        $segmento = 4;
        $items = 5;
        $lista = $this->m_tema->mostrar_activos($items, $this->uri->segment(5));
        $total = count($lista);
        $data['paginacion'] = $this->pagination->generate_pagination(base_url() . "manager/tema/agregar", $items, $total, $segmento);
        /* ------------------------------------------------------------ */
        if (!empty($lista)) {
            $i = 1;
            foreach ($lista AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir|eliminar', 'categoria', $items['oculto']);
                $data['lista'][] = array(
                    'id' => $items['id'],
                    'numero' => $i,
                    'nombre' => $items['nombre'],
                    'accion' => $accion
                );
                $i++;
            }
        }
        /* ------------------------------------------------------------ */
        $where = array('tema.id' => $id, 'tema.oculto' => 0);
        $tema = $this->m_tema->mostrar($where);
        if (!empty($tema)) {
            $data['id'] = $tema['id'];
            $data['nombre'] = $tema['nombre'];
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
      
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_tema', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function observar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Observar tema';
        /* ------------------------------------------------------------ */
        $where = array('tema.id' => $id, 'tema.oculto' => 0);
        $tema = $this->m_tema->mostrar($where);
        if (!empty($tema)) {
            $data['id'] = $tema['id'];
            $data['nombre'] = $tema['nombre'];
            $data['fecha_modificacion'] = $tema['fecha_modificacion'];
            $data['oculto'] = $this->mantenimiento->estado($tema['oculto']);
        }
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/ver_tema', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    /* ---- ACCIONES ---- */

    public function accion() {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
  
        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|alphaspecial|maxlenght[200]', 'Nombre');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        if ($id == '') { //AGREGAR
            if ($this->m_tema->existe_tema($nombre) === TRUE) {
                echo $this->alerta->mensaje_error('El nombre de la categoria existe');
                EXIT;
            } else {
                $session_id = $this->_session->sys_id;
                $data = array(
                    'nombre' => $nombre,
                    'url'=> $this->url_comp->convertir_url($nombre),
                    'fecha_modificacion' => date("Y-m-d H:i:s"),
                    'oculto' => 0
                );
                $resultSet = $this->m_tema->insertar($data);
                if ($resultSet === TRUE) {
                     echo $this->alerta->mensaje_exito('Se ha agregado correctamente...');
                    echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
                    EXIT;
                }
            }
        } else { //EDITAR
            $where = array('tema.id' => $id, 'tema.oculto' => 0);
            if ($this->m_tema->exists($where) !== FALSE) {
                if ($this->m_tema->existe_tema($nombre, $id) === TRUE) {
                    echo $this->alerta->mensaje_error('El nombre de la categoría existe');
                    EXIT;
                } else {
                    $session_id = $this->_session->sys_id;
                    $data = array(
                        'nombre' => $nombre,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                    );
                    $resultSet = $this->m_tema->actualizar($data, 'id', $id);
                    if ($resultSet === TRUE) {
                        echo $this->alerta->mensaje_exito('Se ha editado correctamente...');
                        echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/tema/agregar');
                        EXIT;
                    }
                }
            } else {
                echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
                EXIT;
            }
        }
        if ($resultSet === FALSE) {
            echo $this->alerta->mensaje_error('Ocurrieron algunos errores...');
            EXIT;
        }
    }

 public function accion_denegar($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
        $where = array('tema.id' => $id, 'tema.oculto' => 0);
        if ($this->m_tema->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        } else {
            $this->m_tema->ocultar($id);
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
        }
    }

    public function accion_permitir($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
        $where = array('tema.id' => $id, 'tema.oculto' => 1);
        if ($this->m_tema->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
        $this->m_tema->permitir($id);
        echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
    }

    public function accion_eliminar($id) {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
        $where = array('tema.id' => $id, 'tema.oculto' => 1);
        if ($this->m_tema->exists($id) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
            EXIT;
        }
        $this->m_tema->eliminar($id);
        echo $this->url_comp->direccionar(base_url() . 'manager/tema/agregar', TRUE);
    }
    
    public function filtrar() {
        $filt = $this->input->post('filtro');
        $like = array('tema.nombre' => $filt);
        $tema = $this->m_tema->buscar($like);
        if (!empty($tema)) {
            $i = 1;
            foreach ($tema as $t) {
                $estado = $this->mantenimiento->estado($t['oculto']);
                $accion = $this->mantenimiento->accion($t['id'], 'ver|editar|denegar|permitir', 'tema', $t['oculto']);
                $data[] = array(
                    'numero' => $i,
                    'id' => $t['id'],
                    'nombre' => $t['nombre'],
                    'accion' => $accion
                );
                $i++;
            }
        } else {
            $data[] = array();
        }
        echo json_encode($data);
    }
}
?>