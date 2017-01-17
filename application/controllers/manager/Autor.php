<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Autor extends CI_Controller {

    private $_result;

    public function __construct() {
        parent::__construct();

        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'url_comp', 'mantenimiento', 'documento', 'fecha', 'archivo');
        $helper = array('url');
        $model = array('m_autor');
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
        $this->items['empleado_activo'] = 'active';
    }

    public function listar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Listar autor';
        /* ------------------------------------------------------------ */
        $this->load->library("pagination");
        $segmento = 4;
        $items = 5;
        $lista = $this->m_autor->mostrar_todo($items, $this->uri->segment(4));
        $total = count($this->m_autor->mostrar_todo());
        $data['paginacion'] = $this->pagination->generate_pagination(base_url() . "manager/autor/listar", $items, $total, $segmento);
        /* ------------------------------------------------------------ */
        if (!empty($lista)) {
            $i = 1;
            foreach ($lista AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'autor', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['id']));
                $data['lista'][] = array(
                    'numero' => $i,
                    'nombre' => $autor['nombre'] . ' ' . $autor['apellido_paterno'] . ' ' . $autor['apellido_materno'],
                    'descripcion' => $items['descripcion'],
                    'correo' => $items['correo'],
                    'f_modificacion' => $items['fecha_modificacion'],
                    'accion' => $accion
                );
                $i++;
            }
        }
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/listar_autor', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function agregar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Agregar autor';
        $data['tipo'] = 'agregar';

        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_autor', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function observar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Observar autor';
        /* ------------------------------------------------------------ */
        $where = array('atr.id' => $id);
        $autor = $this->m_autor->mostrar($where);
        if (!empty($autor)) {
            $data['id'] = $autor['id'];
            $data['nombre'] = $autor['nombre'];
            $data['apellido_paterno'] = $autor['apellido_paterno'];
            $data['apellido_materno'] = $autor['apellido_materno'];
            $data['imagen'] = $autor['imagen'];
            $data['descripcion'] = $autor['descripcion'];
            $data['correo'] = $autor['correo'];
            $data['web'] = $autor['web'];
            
            //IMAGEN
            $imagen = ($autor['imagen'] != '') ? $autor['imagen'] : 'empty.png';
            $data['imagen'] = '<img src="' . base_url() . 'thumbs/200/200/autor-' . $imagen . '"/>';
            
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/ver_autor', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function editar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Editar autor';
        $data['tipo'] = 'editar';
        /* ------------------------------------------------------------ */
        $where = array('atr.id' => $id, 'atr.oculto' => 0);
        $autor = $this->m_autor->mostrar($where);
        if (!empty($autor)) {
            $data['id'] = $autor['id'];
            $data['nombre'] = $autor['nombre'];
            $data['apellido_paterno'] = $autor['apellido_paterno'];
            $data['apellido_materno'] = $autor['apellido_materno'];
            $data['descripcion'] = $autor['descripcion'];
            $data['correo'] = $autor['correo'];
            $data['web'] = $autor['web'];
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_autor', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function accion() {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $apellido_paterno = $this->input->post('apellido_paterno');
        $apellido_materno = $this->input->post('apellido_materno');
        $descripcion = $this->input->post('descripcion');
        $imagen = $this->archivo->archivo_1('imagen', 'single');
        $correo = $this->input->post('correo');
        $web = $this->input->post('web');

        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|alphaspecial|maxlenght[100]', 'Nombre');
        $error .= $this->mantenimiento->validacion($apellido_paterno, 'alphaspecial|maxlenght[110]', 'Apellido Paterno');
        $error .= $this->mantenimiento->validacion($apellido_materno, 'alphaspecial|maxlenght[110]', 'Apellido Materno');
        $error .= $this->mantenimiento->validacion($correo, 'required|email|minlenght[10]|maxlenght[100]', 'Correo');
        $error .= $this->mantenimiento->validacion($web, 'maxlenght[200]', 'Web');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        if ($id == '') { //AGREGAR
            if ($this->m_autor->existe_autor($nombre, $apellido_paterno, $apellido_materno, $id = '') === TRUE) {
                echo $this->alerta->mensaje_error('El autor existe.', FALSE);
                EXIT;
            } else {
                if ($imagen !== FALSE) {
                    $marca = array('marca' => '', 'tipo' => 'string');
                    $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/autor', $marca, 1024, $this->items['proyecto']);
                } else {
                    $n_imagen = '';
                }

                $data = array(
                    'nombre' => $nombre,
                    'apellido_paterno' => $apellido_paterno,
                    'apellido_materno' => $apellido_materno,
                    'descripcion' => $descripcion,
                    'imagen' => $n_imagen,
                    'correo' => $correo,
                    'web' => $web,
                    'oculto' => 0
                );
                $resultSet = $this->m_autor->insertar($data);

                echo $this->alerta->mensaje_exito('Se ha registrado correctamente...');
                echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/autor/listar', '1000');
                EXIT;
            }
        } else { //EDITAR
            $where = array('atr.id' => $id, 'atr.oculto' => 0);
            if ($this->m_autor->exists($where) !== FALSE) {
                if ($this->m_autor->existe_nombre($id) === TRUE) {
                    echo $this->alerta->mensaje_error('El autor ingresado ya existe');
                    EXIT;
                } else {
                    $data = array(
                        'nombre' => $nombre,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                    );
                    $resultSet = $this->m_autor->actualizar($data, 'id', $id);
                    if ($resultSet === TRUE) {
                        $art = $this->m_autor->mostrar(array('atr.id' => $id));
                        if ($imagen !== FALSE) {
                            $marca = array('marca' => '', 'tipo' => 'string');
                            $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/autor', $marca, 1024, $this->items['proyecto']);
                            $this->archivo->eliminar_imagen($art['imagen'], 'public/imagen/autor', $marca, 1024, $this->items['proyecto']);
                        } else {
                            $n_imagen = $art['imagen'];
                        }
                        $data_info = array(
                            'nombre' => $nombre,
                            'apellido_paterno' => $apellido_paterno,
                            'apellido_materno' => $apellido_materno,
                            'imagen'=>$n_imagen,
                            'descripcion' => $descripcion,
                            'correo' => $correo,
                            'web' => $web
                        );
                        $resultSet = $this->m_autor->actualizar($data_info, 'id', $id);
                        echo $this->alerta->mensaje_exito('Se ha editado correctamente...');
                        echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/autor/listar/', '1000');
                        EXIT;
                    }
                }
            } else {
                echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
                EXIT;
            }
        }
        if ($resultSet === FALSE):
            echo $this->alerta->mensaje_error('Hubo algunos errores.');
            EXIT;
        endif;
    }

    public function accion_denegar($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        $where = array('atr.id' => $id, 'atr.oculto' => 0);
        if ($this->m_autor->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        } else {
            $this->m_autor->ocultar($id);
            echo $this->alerta->mensaje_exito('Se bloqueó correctamente...');
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
        }
    }

    public function accion_permitir($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        $where = array('atr.id' => $id, 'atr.oculto' => 1);

        if ($this->m_autor->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        $this->m_autor->permitir($id);
        echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
    }

    public function accion_eliminar($id = '') {

        if ($id == '' || $this->_session->sys_id == $id) {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        $where = array('atr.id' => $id, 'atr.oculto' => 1);
        $resultSet = $this->m_autor->exists($where);
        if ($resultSet === FALSE) {
            echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
            EXIT;
        }
        $autor = $this->m_autor->mostrar('atr.id', $id);
        //$autor = $this->m_autor->mostrar('atr.id', $this->_session->sys_id);
        if ($autor['id']) {
            $this->m_autor->eliminar($id);
            $where = array('atr.id' => $id);
            $this->m_autor->eliminar($id);
        }
        echo $this->url_comp->direccionar(base_url() . 'manager/autor/listar', TRUE);
    }

    public function filtrar() {
        $filt = $this->input->post('filtro');
        $like = array('atr.nombre' => $filt, 'atr.apellido_paterno' => $filt);
        $autor = $this->m_autor->buscar($like);
        if (!empty($autor)) {
            $i = 1;
            foreach ($autor as $a) {
                $estado = $this->mantenimiento->estado($a['oculto']);
                $accion = $this->mantenimiento->accion($a['id'], 'ver|editar|denegar|permitir', 'autor', $a['oculto']);
                $data[] = array(
                    'numero' => $i,
                    'id' => $a['id'],
                    'nombre' => $a['nombre'] . ' ' . $a['apellido_paterno'] . ' ' . $a['apellido_materno'],
                    'descripcion' => $a['descripcion'],
                    'correo' => $a['correo'],
                    'f_modificacion' => $a['fecha_modificacion'],
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
