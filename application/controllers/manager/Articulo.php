<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Articulo extends CI_Controller {

    private $_result;

    public function __construct() {
        parent::__construct();

        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'url_comp', 'mantenimiento', 'documento', 'fecha', 'archivo');
        $helper = array('url');
        $model = array('m_articulo', 'm_autor', 'm_tema', 'm_articulo_detalle', 'm_categoria');
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
        //$this->items['empleado_activo'] = 'active';
    }

    public function listar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Listar articulo';
        /* ------------------------------------------------------------ */
        $this->load->library("pagination");
        $segmento = 4;
        $items = 5;
        $lista = $this->m_articulo->mostrar_todo($items, $this->uri->segment(4));
        $total = count($this->m_articulo->mostrar_todo());
        $data['paginacion'] = $this->pagination->generate_pagination(base_url() . "manager/articulo/listar", $items, $total, $segmento);
        /* ------------------------------------------------------------ */
        if (!empty($lista)) {
            $i = 1;
            foreach ($lista AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'f_creacion' => $items['fecha'],
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
        $this->smarty_tpl->view('manager/page/listar_articulo', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function agregar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Agregar articulo';
        $data['tipo'] = 'agregar';
        //Combobox de Autor
        $autor = $this->m_autor->mostrar_activos();
        if (!empty($autor)) {
            foreach ($this->m_autor->mostrar_activos() as $items) {
                $this->_result[$items['id']] = $items['nombre'];
            }
        } else {
            $this->_result = array();
        }
        $data['autor'] = $this->documento->generar_dropdown($this->_result, 'autor', '', 'Seleccione una opción');
        unset($this->_result);
        //Combobox de Categorias
        $categoria = $this->m_categoria->mostrar_activos();
        if (!empty($categoria)) {
            foreach ($this->m_categoria->mostrar_activos() as $items) {
                $this->_result[$items['id']] = $items['nombre'];
            }
        } else {
            $this->_result = array();
        }
        $data['categoria'] = $this->documento->generar_dropdown($this->_result, 'categoria', '', 'Seleccione una opción');
        unset($this->_result);
        //Combobox de Tema
        /* --------------------------------------------------------------------- */
        foreach ($this->m_tema->mostrar_activos() as $items) {
            $this->_result[$items['id']] = $items['nombre'];
        }

        $data['tema'] = $this->documento->generar_dropdown($this->_result, 'tema', '', 'Seleccione una opción');
        unset($this->_result);
        /* --------------------------------------------------------------------- */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_articulo', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function editar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Editar articulo';
        $data['tipo'] = 'editar';
        /* ------------------------------------------------------------ */
        $where = array('articulo.id' => $id, 'articulo.oculto' => 0);
        $articulo = $this->m_articulo->mostrar($where);
        if (!empty($articulo)) {
            $data['id'] = $articulo['id'];
            $data['titulo'] = $articulo['titulo'];
            $data['descripcion'] = $articulo['descripcion'];
            $data['fecha'] = $articulo['fecha'];
            $data['video'] = $articulo['video'];
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }

        //Combobox de Autor
        /* ---------------------------------------------------------------------- */
        foreach ($this->m_autor->mostrar_activos() as $items) {
            $this->_result[$items['id']] = $items['nombre'];
        }
        $data['autor'] = $this->documento->generar_dropdown($this->_result, 'autor', $articulo['autor_id'], 'Seleccione una opción');
        unset($this->_result);
        //Combobox de Tema
        /* --------------------------------------------------------------------- */
        foreach ($this->m_tema->mostrar_activos() as $items) {
            $this->_result[$items['id']] = $items['nombre'];
        }
        $data['tema'] = $this->documento->generar_dropdown($this->_result, 'tema', '', 'Seleccione una opción');
        unset($this->_result);
        //Combobox de Categorias
        $categoria = $this->m_categoria->mostrar_activos();
        if (!empty($categoria)) {
            foreach ($this->m_categoria->mostrar_activos() as $items) {
                $this->_result[$items['id']] = $items['nombre'];
            }
        } else {
            $this->_result = array();
        }
        $data['categoria'] = $this->documento->generar_dropdown($this->_result, 'categoria', $articulo['categoria_id'], 'Seleccione una opción');
        unset($this->_result);
        //LISTADO DE TEMAS
        $p_detalle = $this->m_articulo_detalle->detalle_articulo($id);
        if (!empty($p_detalle)) {
            foreach ($p_detalle as $items) {
                $accion = '<a href="" style="padding: 10px" class="eliminar_item" data-url="' . base_url() . 'manager/articulo/eliminar_item/' . $items->id . '"><i class="fa fa-close"></i></a>'
                        . '<a href="" style="padding: 10px" class="editar_item" data-url="' . base_url() . 'manager/articulo/editar_item/' . $items->id . '"><i class="fa fa-pencil"></i></a>';
                $data['lista_cart'][] = array(
                    'id' => $items->id,
                    'articulo_id'=>$items->articulo_id,
                    'tema_id' => $items->tema_id,
                    'tema' => $items->tema_nombre,
                    'tema_url'=> $items->tema_url,
                    'accion' => $accion
                );
            }
        }

        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_articulo', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    /* ------------------------------------------------------------------------------------------------- */

    public function observar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Observar articulo';
        /* ------------------------------------------------------------ */
        $where = array('articulo.id' => $id);
        $articulo = $this->m_articulo->mostrar($where);

        if (!empty($articulo)) {
            $data['id'] = $articulo['id'];
            $data['titulo'] = $articulo['titulo'];
            $data['descripcion'] = $articulo['descripcion'];
            $data['imagen'] = $articulo['imagen'];
            $data['video'] = $articulo['video'];
            $data['fecha'] = $articulo['fecha'];
            //$data['autor'] = $articulo['autor'];
            $data['fecha_modificacion'] = $articulo['fecha_modificacion'];
            //Imagen
            $image = ($articulo['imagen'] != '') ? $articulo['imagen'] : 'empty.png';
            $data['imagen'] = '<img src="' . base_url() . 'thumbs/200/200/articulo-' . $image . '"/>';
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }


        //LISTADO DE TEMAS

        $p_detalle = $this->m_articulo_detalle->detalle_articulo($articulo['id']);
        if (!empty($p_detalle)) {
            foreach ($p_detalle as $items) {
                $data['lista_cart'][] = array(
                    'id' => $items->id,
                    'tema_id' => $items->tema_id,
                    'tema' => $items->tema_nombre
                );
            }
        }

        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/ver_articulo', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    /* ---- ACCIONES ---- */

    public function accion() {
        $id = $this->input->post('id');
        $titulo = $this->input->post('titulo');
        $descripcion = $this->input->post('descripcion');
        $imagen = $this->archivo->archivo_1('imagen', 'single');
        $video = $this->input->post('video');
        $autor = $this->input->post('autor');
        $categoria = $this->input->post('categoria');
        $fecha = $this->input->post('fecha');

        $tema_a = $this->input->post('a_tema');
        $tema_e = $this->input->post('e_tema');
        $id_detalle = $this->input->post('e_id2');


        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($titulo, 'required|maxlenght[250]', 'Título');
        $error .= $this->mantenimiento->validacion($descripcion, 'required|minlenght[10]', 'Descripcion');
        $error .= $this->mantenimiento->validacion($fecha, 'required', 'Fecha de Publicación');
        $error .= $this->mantenimiento->validacion($autor, 'required|combo', 'Categoria');
        $error .= $this->mantenimiento->validacion($autor, 'required|combo', 'Autor');

        //$error .= $this->mantenimiento->validacion($tema_a,'required','Tema');


        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        if ($id == '') { //AGREGAR
            if ($this->m_articulo->existe_titulo($titulo) === TRUE) {
                echo $this->alerta->mensaje_error('El Articulo existe.', FALSE);
                EXIT;
            } else {
                if ($imagen !== FALSE) {
                    $marca = array('marca' => '', 'tipo' => 'string');
                    $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/articulo', $marca, 1024, $this->items['proyecto']);
                } else {
                    $n_imagen = '';
                }
                $columnas = array(
                    'titulo' => $titulo,
                    'fecha' => date("Y-m-d H:i:s"),
                    'descripcion' => $descripcion,
                    'categoria_id' => $categoria,
                    'visto' => 0,
                    'url' => $this->url_comp->convertir_url($titulo),
                    'imagen' => $n_imagen,
                    'video' => $video,
                    'fecha' => $fecha,
                    'autor_id' => $autor,
                    'oculto' => 0
                        //'fecha_modificacion' => date("Y-m-d H:i:s")
                );
                $lasrId = $this->m_articulo->insertar($columnas, TRUE);
                $total = count($tema_a);

                for ($i = 0; $i < $total; $i++) {
                    $detalle = array(
                        'articulo_id' => $lasrId,
                        'tema_id' => $tema_a[$i],
                        'oculto' => 0
                    );
                    $resultSet = $this->m_articulo_detalle->insertar($detalle);
                }

                if ($resultSet === TRUE) {
                    echo $this->alerta->mensaje_exito('Se ha registrado correctamente...');
                    echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/articulo/listar', '1000');
                    EXIT;
                }
            }
        } else { //EDITAR
            //Falta Cambiar valores
            $where = array('articulo.id' => $id, 'articulo.oculto' => 0);
            if ($this->m_articulo->exists($where) !== FALSE) {
                if ($this->m_articulo->existe_titulo($id) === TRUE) {
                    echo $this->alerta->mensaje_error('El articulo ingresado ya existe');
                    EXIT;
                } else {
                    $art = $this->m_articulo->mostrar(array('articulo.id' => $id));
                    if ($imagen !== FALSE) {
                        $marca = array('marca' => '', 'tipo' => 'string');
                        $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/articulo', $marca, 1024, $this->items['proyecto']);
                        $this->archivo->eliminar_imagen($art['imagen'], 'public/imagen/articulo', $marca, 1024, $this->items['proyecto']);
                    } else {
                        $n_imagen = $art['imagen'];
                    }
                    $data = array(
                        'titulo' => $titulo,
                        'fecha' => date("Y-m-d H:i:s"),
                        'descripcion' => $descripcion,
                        'categoria_id' => $categoria,
                        'imagen' => $n_imagen,
                        'url' => $this->url_comp->convertir_url($titulo),
                        'video' => $video,
                        'fecha' => $fecha,
                        'autor_id' => $autor,
                        'oculto' => 0,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                    );
                    $resultSet = $this->m_articulo->actualizar($data, 'id', $id);
                    if ($resultSet === TRUE) {
                        $total_u = count($id_detalle);
                        $total_a = count($tema_a);
                        if ($total_u != 0) {
                            for ($e = 0; $e < $total_u; $e++) {
                                $detalle_u = array(
                                    'articulo_id' => $id,
                                    'tema_id' => $tema_e[$e],
                                );
                                $this->m_articulo_detalle->actualizar($detalle_u, 'id', $id_detalle[$e]);
                            }
                        }
                        if ($total_a != 0) {
                            for ($z = 0; $z < $total_a; $z++) {
                                $detalle_a = array(
                                    'articulo_id' => $id,
                                    'tema_id' => $tema_a[$z],
                                    'oculto'=>0
                                );
                                $this->m_articulo_detalle->insertar($detalle_a);
                            }
                        }

                        echo $this->alerta->mensaje_exito('Se ha editado correctamente...');
                        echo $this->url_comp->actualizar_tiempo('1000');
                        EXIT;
                    }
                }
            } else {
                echo $this->url_comp->direccionar(base_url() . 'manager/articulo/agregar', TRUE);
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
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $where = array('articulo.id' => $id, 'articulo.oculto' => 0);
        if ($this->m_articulo->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        } else {
            $this->m_articulo->ocultar($id);
            echo $this->alerta->mensaje_exito('Se bloqueó correctamente el registro...');
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
        }
    }

    public function accion_permitir($id = '') {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $where = array('articulo.id' => $id, 'articulo.oculto' => 1);
        if ($this->m_articulo->exists($where) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $this->m_articulo->permitir($id);
        echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
    }

    public function accion_eliminar($id) {
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $where = array('articulo.id' => $id, 'articulo.oculto' => 1);
        if ($this->m_articulo->exists($id) == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $this->m_articulo->eliminar($id);
        echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
    }

    public function eliminar_item() {
        $id = $this->input->post('id');
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
            EXIT;
        }
        $where = array('articulo_detalle.id' => $id, 'articulo_detalle.oculto' => 0);
        $resultSet = $this->m_articulo_detalle->exists($where);
        if ($resultSet == 0) {
            echo $this->url_comp->direccionar(base_url() . 'manager/articulo/listar', TRUE);
        } else {
            $this->m_articulo_detalle->ocultar($id);
            echo $this->alerta->mensaje_exito('Se eliminó el registro correctamente...');
            echo $this->url_comp->actualizar_tiempo('1000');
            EXIT;
        }
    }

    public function filtrar() {
        $filt = $this->input->post('filtro');
        $like = array('articulo.titulo' => $filt);
        $articulo = $this->m_articulo->buscar($like);
        if (!empty($articulo)) {
            $i = 1;
            foreach ($articulo as $a) {
                $estado = $this->mantenimiento->estado($a['oculto']);
                $accion = $this->mantenimiento->accion($a['id'], 'ver|editar|denegar|permitir', 'articulo', $a['oculto']);
                $data[] = array(
                    'numero' => $i,
                    'id' => $a['id'],
                    'titulo' => $a['nombre'],
                    'autor' => $a['autor'],
                    'descripcion' => $a['descripcion'],
                    'imagen' => $a['imagen'],
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
