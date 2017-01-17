<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Empleado extends CI_Controller {

    private $_result;

    public function __construct() {
        parent::__construct();

        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'url_comp', 'mantenimiento', 'documento', 'fecha', 'archivo');
        $helper = array('url');
        $model = array('m_empleado', 'm_nivel_usuario', 'm_empleado_info');
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
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Listar empleados';
        /* ------------------------------------------------------------ */
        $this->load->library("pagination");
        $segmento = 4;
        $items = 5;
        $lista = $this->m_empleado->mostrar_todo($items, $this->uri->segment(4));
        $total = count($this->m_empleado->mostrar_todo());
        $data['paginacion'] = $this->pagination->generate_pagination(base_url() . "manager/empleado/listar", $items, $total, $segmento);
        /* ------------------------------------------------------------ */
        if (!empty($lista)) {
            $i = 1;
            foreach ($lista AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'empleado', $items['oculto']);
                $empledo_info = $this->m_empleado_info->mostrar(array('empleado_id' => $items['id']));
                $data['lista'][] = array(
                    'numero' => $i,
                    'nombre' => $empledo_info['nombres'] . ' ' . $empledo_info['apellidos'],
                    'usuario' => $items['usuario'],
                    'cargo' => $items['d_nivel'],
                    'telefono' => $empledo_info['telefono'],
                    'f_registro' => $items['fecha_registro'],
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
        $this->smarty_tpl->view('manager/page/listar_empleado', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function agregar() {
        $login = $this->session_manager->datos_usuario_logueado();
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Agregar empleado';
        $data['tipo'] = 'agregar';
        
        /* ---------------------la lista despegable--------------------------------------- */
        foreach ($this->m_nivel_usuario->mostrar_activos() as $items) {
            $this->_result[$items['grado']] = $items['descripcion'];
        }
        $data['niveles'] = $this->documento->generar_dropdown($this->_result, 'nivel', '', 'Seleccione una opción');
        unset($this->_result);
        /* ------------------------------------------------------------ */
         
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_empleado', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function editar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Editar empleado';
        $data['tipo'] = 'editar';
        /* ------------------------------------------------------------ */
        $where = array('e.id' => $id, 'e.oculto' => 0);
        $empleado = $this->m_empleado->mostrar($where);
        if (!empty($empleado)) {
            $data['id'] = $empleado['id'];
            $data['usuario'] = $empleado['usuario'];
            $data['nombre'] = $empleado['nombres'];
            $data['apellido'] = $empleado['apellidos'];
            $data['correo'] = $empleado['correo'];
            $data['documento'] = $empleado['documento'];
            $data['telefono'] = $empleado['telefono'];
            $data['celular'] = $empleado['celular'];
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        /* ------------------------------------------------------------ */
        foreach ($this->m_nivel_usuario->mostrar_activos() as $items) {
            $this->_result[$items['grado']] = $items['descripcion'];
        }
        $data['niveles'] = $this->documento->generar_dropdown($this->_result, 'nivel', $empleado['nivel'], 'Seleccione una opción');
        unset($this->_result);
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_empleado', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    public function observar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Observar empleado';
        /* ------------------------------------------------------------ */
        $where = array('e.id' => $id);
        $empleado = $this->m_empleado->mostrar($where);
        if (!empty($empleado)) {
            $data['id'] = $empleado['id'];
            $data['usuario'] = $empleado['usuario'];
            $data['nombre'] = $empleado['nombres'];
            $data['apellido'] = $empleado['apellidos'];
            $data['email'] = $empleado['correo'];
            $data['documento'] = $empleado['documento'];
            $data['telefono'] = $empleado['telefono'];
            $data['celular'] = $empleado['celular'];
            $data['correo'] = $empleado['correo'];
            $data['nivel'] = $empleado['nivel'];
            //IMAGEN
            $image = ($empleado['imagen'] != '') ? $empleado['imagen'] : 'empty.png';
            $data['imagen'] = '<img src="' . base_url() . 'thumbs/200/200/empleado-' . $image . '"/>';
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        /* ------------------------------------------------------------ */
        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/ver_empleado', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

    /* ---- ACCIONES ---- */

    public function accion() {
        $id = $this->input->post('id');
        $usuario = $this->input->post('usuario');
        $contrasena = $this->input->post('contrasena');
        $re_contrasena = $this->input->post('re_contrasena');
        $nivel = $this->input->post('nivel');
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $documento = $this->input->post('documento');
        $email = $this->input->post('correo');
        $telefono = $this->input->post('telefono');
        $celular = $this->input->post('celular');
        $imagen = $this->archivo->archivo_1('imagen', 'single');
        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($usuario, 'required|alphanumeric|maxlenght[200]', 'Usuario');
        $error .= $this->mantenimiento->validacion($contrasena, 'alphaspecial|minlenght[8]|maxlenght[20]', 'Contraseña');
        $error .= $this->mantenimiento->validacion($re_contrasena, 'minlenght[8]|maxlenght[20]|matched[Contraseña%' . $contrasena . ']', 'Confirmar contraseña');
        $error .= $this->mantenimiento->validacion($nivel, 'required', 'Nivel');
        $error .= $this->mantenimiento->validacion($nombre, 'required|alphaspecial|maxlenght[200]', 'Nombre');
        $error .= $this->mantenimiento->validacion($apellido, 'required|alphaspecial|maxlenght[200]', 'Apellido');
        $error .= $this->mantenimiento->validacion($documento, 'required|numeric|size[8]', 'Documento');
        $error .= $this->mantenimiento->validacion($email, 'required|email|minlenght[10]|maxlenght[200]', 'Correo electronico');
        $error .= $this->mantenimiento->validacion($telefono, 'numeric|maxlenght[7]', 'Teléfono');
        $error .= $this->mantenimiento->validacion($celular, 'numeric|maxlenght[9]', 'Celular');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        if ($id == '') { //AGREGAR
            if ($this->m_empleado->existe_usuario($usuario) === TRUE) {
                echo $this->alerta->mensaje_error('El usuario existe.', FALSE);
                EXIT;
            } elseif ((isset($contrasena)) && ($re_contrasena == '')) {
                echo $this->alerta->mensaje_error('Es necesario ingresar una contraseña.');
                EXIT;
            } else {
                if ($imagen !== FALSE) {
                   $marca = array('marca' => '', 'tipo' => 'string');
                   $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/empleado', $marca, 1024, $this->items['proyecto']);
                } else {
                    $n_imagen = '';
                }
                $data = array(
                    'usuario' => $usuario,
                    'clave' => md5($contrasena),
                    'nivel' => $nivel,
                    'conectado' => date("Y-m-d H:i:s"),
                    'desconectado' => date("Y-m-d H:i:s"),
                    'fecha_registro' => date("Y-m-d H:i:s"),
                    'fecha_modificacion' => date("Y-m-d H:i:s"),
                    'oculto' => 0
                );
                $resultSet = $this->m_empleado->insertar($data);
                $emp = $this->m_empleado->empleado_data($usuario);
                if ($resultSet === TRUE) {
                    $data_info = array(
                        'nombres' => $nombre,
                        'apellidos' => $apellido,
                        'documento' => $documento,
                        'correo' => $email,
                        'telefono' => $telefono,
                        'celular' => $celular,
                        'imagen' => $n_imagen,
                        'empleado_id' => $emp->e_id
                    );
                    $this->m_empleado_info->insertar($data_info);
                    echo $this->alerta->mensaje_exito('Se ha registrado correctamente...');
                    echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/empleado/listar', '1000');
                    EXIT;
                }
            }
        } else { //EDITAR
            $where = array('e.id' => $id, 'e.oculto' => 0);
            if ($this->m_empleado->exists($where) !== FALSE) {
                if ($this->m_empleado->existe_usuario($usuario, $id) === TRUE) {
                    echo $this->alerta->mensaje_error('El usuario ingresado ya existe');
                    EXIT;
                } else {
                    $emp = $this->m_empleado_info->mostrar(array('empleado_id' => $id));
                    if ($imagen !== FALSE) {
                        $marca = array('marca' => '', 'tipo' => 'string');
                        $n_imagen = $this->archivo->guardar_imagen($imagen, 'public/imagen/empleado', $marca, 1024, $this->items['proyecto']);
                        $this->archivo->eliminar_imagen($emp['imagen'],'public/imagen/empleado', $marca, 1024, $this->items['proyecto']);
                    } else {
                        $n_imagen = $emp['imagen'];
                    }
                    $data = array(
                        'usuario' => $usuario,
                        'clave' => isset($contrasena) ? md5($contrasena) : $emp->e_clave,
                        'nivel' => $nivel,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                    );
                    $resultSet = $this->m_empleado->actualizar($data, 'id', $id);
                    if ($resultSet === TRUE) {
                        $data_info = array(
                            'nombres' => $nombre,
                            'apellidos' => $apellido,
                            'documento' => $documento,
                            'correo' => $email,
                            'telefono' => $telefono,
                            'celular' => $celular,
                            'imagen' => $n_imagen,
                        );
                        $resultSet = $this->m_empleado_info->actualizar($data_info, 'empleado_id', $id);
                        echo $this->alerta->mensaje_exito('Se ha editado correctamente...');
                        echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/empleado/editar/' . $id);
                        EXIT;
                    }
                }
            } else {
                echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
                EXIT;
            }
        }
        if ($resultSet === FALSE):
            echo $this->alerta->mensaje_error('Hubo algunos errores.');
            EXIT;
        endif;
    }

    public function accion_denegar($id = '') {
        if ($id == '' || $this->_session->sys_id == $id) {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $where = array('e.id' => $id, 'e.oculto' => 0);
        $resultSet = $this->m_empleado->exists($where);
        if ($resultSet === FALSE) {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $empleado = $this->m_empleado->mostrar('e.id', $id);
        $emp = $this->m_empleado->mostrar('e.id', $this->_session->sys_id);
        if ($empleado['nivel'] < $emp['nivel']) {
            $this->m_empleado->ocultar($id);
        }
        echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
    }

    public function accion_permitir($id = '') {
        if ($id == '' || $this->_session->sys_id == $id) {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $where = array('e.id' => $id, 'e.oculto' => 1);
        $resultSet = $this->m_empleado->exists($where);
        if ($resultSet === FALSE) {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $empleado = $this->m_empleado->mostrar('e.id', $id);
        $emp = $this->m_empleado->mostrar('e.id', $this->_session->sys_id);
        if ($empleado['nivel'] < $emp['nivel']) {
            $this->m_empleado->permitir($id);
        }
        echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
    }

    public function accion_eliminar($id = '') {
        if ($id == '' || $this->_session->sys_id == $id) {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $where = array('e.id' => $id, 'e.oculto' => 1);
        $resultSet = $this->m_empleado->exists($where);
        if ($resultSet === FALSE) {
            echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
            EXIT;
        }
        $empleado = $this->m_empleado->mostrar('e.id', $id);
        $emp = $this->m_empleado->mostrar('e.id', $this->_session->sys_id);
        if ($empleado['nivel'] < $emp['nivel']) {
            $this->archivo->eliminar_imagen($empleado['imagen'], 'public/imagen/empleado');
            $this->m_empleado->eliminar($id);
            $where = array('ei.empleado_id' => $id);
            $this->m_empleado_info->eliminar($id);
        }
        echo $this->url_comp->direccionar(base_url() . 'manager/empleado/listar', TRUE);
    }

    public function filtrar() {
        $filt = $this->input->post('filtro');
        $like = array('ei.nombres' => $filt, 'ei.apellidos' => $filt, 'e.usuario' => $filt, 'e.fecha_registro' => $filt);
        $empleado = $this->m_empleado->buscar($like);
        if (!empty($empleado)) {
            $i = 1;
            foreach ($empleado as $e) {
                $estado = $this->mantenimiento->estado($e['oculto']);
                $accion = $this->mantenimiento->accion($e['id'], 'ver|editar|denegar|permitir', 'empleado', $e['oculto']);
                $data[] = array(
                    'numero' => $i,
                    'id' => $e['id'],
                    'nombre' => $e['nombres'] . ' ' . $e['apellidos'],
                    'usuario' => $e['usuario'],
                    'cargo' => $e['nivel'],
                    'telefono' => $e['telefono'],
                    'f_registro' => $e['fecha_registro'],
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
