<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Libro  extends CI_Controller{
    
    private $_result;
     public function __construct() {
        parent::__construct();

        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'url_comp', 'mantenimiento', 'documento', 'fecha', 'archivo');
        $helper = array('url');
        $model = array('m_libro');
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
        $this->items['libro_activo'] = 'active';
    }

    	//---------------------------------------------

    public function listar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Listar libro';
        /* ------------------------------------------------------------ */
        $this->load->library("pagination");
        $segmento = 4;
        $items = 5;
        $lista = $this->m_libro->mostrar_todo($items, $this->uri->segment(4));
        $total = count($this->m_libro->mostrar_todo());
        $data['paginacion'] = $this->pagination->generate_pagination(base_url() . "manager/libro/listar", $items, $total, $segmento);
        /* ------------------------------------------------------------ */
        if (!empty($lista)) {
            $i = 1;
            foreach ($lista AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'libro', $items['oculto']);
                $libro = $this->m_libro->mostrar(array('id' => $items['id']));
                $data['lista'][] = array(
                    'numero' => $i,
                    'nombre' => $libro ['nombre'],
                    'descripcion' => $items['descripcion'],
                    'imagen' => $items['imagen'],
                    'link' => $items['link'],
                    'correo' => $items['correo'],
                    'fecha_modificacion' => $items['fecha_modificacion'],
                    'accion' => $accion
                );
                $i++;
            }
        }
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data,$login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/listar_libro', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }



     public function agregar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Agregar libro';
        $data['tipo'] = 'agregar';
        
        
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_libro', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    //-----------------------------------------------------------

    public function observar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Observar libro';
        /* ------------------------------------------------------------ */
       $where = array('libro.id' => $id);
        $libro = $this->m_libro->mostrar($where);
        if (!empty($libro)) {
            $data['id'] = $libro['id'];
            $data['nombre'] = $libro['nombre'];
            $data['descripcion'] = $libro['descripcion'];
            $data['link'] = $libro['link'];
            $data['correo'] = $libro['correo'];
            $data['fecha_modificacion'] = $libro['fecha_modificacion'];
            $data['imagen'] = $libro['imagen'];
            //IMAGEN
            $imagen = ($libro['imagen'] != '') ? $libro['imagen'] : 'empty.png';
            $data['imagen'] = '<img src="' . base_url() . 'thumbs/200/200/libro-' . $imagen . '"/>';
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/ver_libro', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    	//----------------------------------------------------------

     public function editar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Editar libro';
        $data['tipo'] = 'editar';
        /* ------------------------------------------------------------ */
        $where = array('libro.id' => $id, 'libro.oculto' => 0);
        $libro = $this->m_libro->mostrar($where);
        if (!empty($libro)) {
            $data['id'] = $libro['id'];
            $data['nombre'] = $libro['nombre'];
            $data['descripcion'] = $libro['descripcion'];
            $data['link'] = $libro['link'];
            $data['correo'] = $libro['correo'];
            
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
       
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_libro', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }
    
     public function accion() {
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $imagen = $this->archivo->archivo_1('imagen','single');
        $link = $this->input->post('link');
        $correo = $this->input->post('correo');
        //VALIDACION DE CAMPOS
        $error = '';
//        $error .= $this->mantenimiento->validacion($nombre, 'required|alphaspecial|maxlenght[110]', 'Nombre');
//        $error .= $this->mantenimiento->validacion($descripcion, 'alphaspecial|minlenght[5]|maxlenght[100]', 'Descripcion');
        $error .= $this->mantenimiento->validacion($link, 'minlenght[5]|maxlenght[200]|url', 'Link');
        $error .= $this->mantenimiento->validacion($correo, 'required|email|minlenght[10]|maxlenght[100]', 'Correo');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        if ($id == '') { //AGREGAR
            if ($this->m_libro->existe_libro($nombre) === TRUE) {
                echo $this->alerta->mensaje_error('El libro existe.', FALSE);
                EXIT;
            } else {
                if ($imagen !== FALSE) {
                    $marca = array('marca' => '', 'tipo' => 'string');
                    $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/libro', $marca, 1024, $this->items['proyecto']);
                } else {
        
                    $n_imagen = '';
                }
                $data = array(
                    'nombre' => $nombre,
                    'descripcion' => $descripcion,
                    'imagen' => $n_imagen,
                    'link' => $link,
                    'correo' => $correo,
                    'oculto' => 1
                );

                $resultSet = $this->m_libro->insertar($data);
                
                    echo $this->alerta->mensaje_exito('Se ha registrado correctamente...');
                    echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/libro/listar', '1000');
                    EXIT;
                }
        } else { //EDITAR
            $where = array('libro.id' => $id, 'libro.oculto' => 0);
            if ($this->m_libro->exists($where) !== FALSE) {
                if ($this->m_libro->existe_libro($nombre,$id) === TRUE) {
                    echo $this->alerta->mensaje_error('El libro ingresado ya existe');
                    EXIT;
                } else {
                    $lib = $this->m_libro->mostrar(array('libro.id' => $id));
                    if ($imagen !== FALSE) {
                        $marca = array('marca' => '', 'tipo' => 'string');
                        $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/libro', $marca, 1024, $this->items['proyecto']);
                        $this->archivo->eliminar_imagen($lib['imagen'],'public/imagen/libro', $marca, 1024, $this->items['proyecto']);
                    } else {
                        $n_imagen = $lib['imagen'];
                    }
                    $data = array(
                        'nombre' => $nombre,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                    );
                    $resultSet = $this->m_libro->actualizar($data,'id', $id);
                    if ($resultSet === TRUE) {
                        $data_info = array(
                            'nombre' => $nombre,
                            'descripcion' => $descripcion,
                            'imagen' => $n_imagen,
                            'link' => $link,
                            'correo' => $correo,
                            
                        );
                        $resultSet = $this->m_libro->actualizar($data_info, 'id', $id);
                        echo $this->alerta->mensaje_exito('Se ha editado correctamente...');
                        echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/libro/listar/', '1000');
                        EXIT;
                    }
                }
            } else {
                echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
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
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        $where = array('libro.id' => $id, 'libro.oculto' => 0);
        if ($this->m_libro->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        } else {
            $this->m_libro->ocultar($id);
            echo $this->alerta->mensaje_exito('Se bloqueó correctamente...');
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
        }
    }

    public function accion_permitir($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        $where = array('libro.id' => $id, 'libro.oculto' => 1);
        
        if ($this->m_libro->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        $this->m_libro->permitir($id);
        echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
    }

    public function accion_eliminar($id = '') {
        if ($id == '' || $this->_session->sys_id == $id) {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        $where = array('libro.id' => $id, 'libro.oculto' => 1);
        $resultSet = $this->m_libro->exists($where);
        if ($resultSet === FALSE) {
            echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
            EXIT;
        }
        $libro = $this->m_libro->mostrar('libro.id', $id);
        //$autor = $this->m_autor->mostrar('atr.id', $this->_session->sys_id);
        if ($libro['id']) {
            $this->m_libro->eliminar($id);
            $where = array('libro.id' => $id);
            $this->m_libro->eliminar($id);
        }
        echo $this->url_comp->direccionar(base_url() . 'manager/libro/listar', TRUE);
    }

    public function filtrar() {
        $filt = $this->input->post('filtro');
        $like = array('libro.nombre' => $filt);
        $libro = $this->m_libro->buscar($like);
        if (!empty($libro)) {
            $i = 1;
            foreach ($libro as $l) {
                $estado = $this->mantenimiento->estado($l['oculto']);
                $accion = $this->mantenimiento->accion($l['id'], 'ver|editar|denegar|permitir', 'libro', $l['oculto']);
                $data[] = array(
                    'numero' => $i,
                    'id' => $l['id'],
                    'nombre' => $l['nombre'],
                    'descripcion' => $l['descripcion'],
                    'imagen'=>$l['imagen'],
                    'link' => $l['link'],
                    'correo' => $l['correo'],
                    'f_modificacion' => $l['fecha_modificacion'],
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