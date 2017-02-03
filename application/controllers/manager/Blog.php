<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Blog  extends CI_Controller{

    private $_result;
     public function __construct() {
        parent::__construct();

        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'session_manager', 'url_comp', 'mantenimiento', 'documento', 'fecha', 'archivo');
        $helper = array('url');
        $model = array('m_blog');
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
        $this->items['blog_activo'] = 'active';
    }

    	//----------------------------------------------------------

     public function editar($id = '') {
        $login = $this->session_manager->datos_usuario_logueado();
        if ($id == '') {
            echo $this->url_comp->direccionar(base_url() . 'manager/blog/listar', TRUE);
            EXIT;
        }
        $data['titulo_pagina'] = $this->items['proyecto'] . ' | Editar blog';
        $data['tipo'] = 'editar';
        /* ------------------------------------------------------------ */
        $where = array('blog.id' => $id, 'blog.oculto' => 0);
        $blog = $this->m_blog->mostrar($where);
        if (!empty($blog)) {
            $data['id'] = $blog['id'];
            $data['descripcion'] = $blog['descripcion'];
        } else {
            echo $this->url_comp->direccionar(base_url() . 'manager/blog/listar', TRUE);
            EXIT;
        }

        $data = array_merge($data, $this->items);
        $data = array_merge($data, $login);
        $this->smarty_tpl->view('manager/structure/header', $data);
        $this->smarty_tpl->view('manager/structure/inter_header', $data);
        $this->smarty_tpl->view('manager/page/form_blog', $data);
        $this->smarty_tpl->view('manager/structure/inter_footer', $data);
        $this->smarty_tpl->view('manager/structure/footer', $data);
    }

     public function accion() {
        $id = $this->input->post('id');
        $descripcion = $this->input->post('descripcion');
        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($descripcion, 'minlenght[5]', 'Descripcion');
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        if ($id == '') { //AGREGAR
            echo $this->alerta->mensaje_exito('Este registro es solo para editar...');
            echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/blog/editar/1', '1000');
            EXIT;

        } else { //EDITAR
            $where = array('blog.id' => $id, 'blog.oculto' => 0);
            if ($this->m_blog->exists($where) !== FALSE) {

                    $data = array(
                        'descripcion' => $descripcion,
                    );
                    $resultSet = $this->m_blog->actualizar($data,'id', $id);
                    if ($resultSet === TRUE) {
                        $data_info = array(
                            'descripcion' => $descripcion,
                        );
                        $resultSet = $this->m_blog->actualizar($data_info, 'id', $id);
                        echo $this->alerta->mensaje_exito('Se ha editado correctamente...');
                        echo $this->url_comp->direccionar_tiempo(base_url() . 'manager/blog/editar/1', '1000');
                        EXIT;
                    }
            } else {
                echo $this->url_comp->direccionar(base_url() . 'manager/home', TRUE);
                EXIT;
            }
        }
        if ($resultSet === FALSE):
            echo $this->alerta->mensaje_error('Hubo algunos errores.');
            EXIT;
        endif;
    }
}
?>
