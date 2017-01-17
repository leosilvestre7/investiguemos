<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_empleado extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('empleado');
        parent::setAlias('e');
        parent::setTabla_id('id');

        $this->CI->config->load('exportando', TRUE, TRUE);
    }

    public function get_query() {
        $this->CI->db->select("e.id,e.usuario,e.clave, e.nivel, e.fecha_registro,e.fecha_modificacion,e.conectado,e.desconectado,ei.nombres,ei.apellidos,"
                . "ei.documento,ei.correo,ei.telefono,ei.celular,ei.imagen,ne.descripcion AS d_nivel,e.oculto");
        $this->CI->db->from($this->tabla . " e");
        $this->CI->db->join('empleado_info ei', 'e.id = ei.empleado_id', 'inner');
        $this->CI->db->join('nivel_empleado ne', 'e.nivel = ne.grado', 'inner');
        $this->CI->db->order_by("e.id", "desc");
    }

    public function empleado_data($usuario) {
        $resulSet = $this->CI->db->select(''
                        . 'empleado.id AS e_id, '
                        . 'empleado.clave AS e_clave, ')
                ->from('empleado')
                ->where('empleado.usuario', $usuario)
                ->get()
                ->result();
        if (count($resulSet) > 0) {
            return $resulSet[0];
        } else {
            return FALSE;
        }
    }

    public function show_employee($id) {
        $resulSet = $this->CI->db->select('' . 'empleado.id AS e_id, '
                        . 'empleado.usuario AS e_username, '
                        . 'empleado.clave AS e_password, '
                        . 'empleado.nivel AS e_grade, '
                        . 'empleado.fecha_registro AS e_regdate, '
                        . 'empleado_info.nombres AS ei_name, '
                        . 'empleado_info.apellidos AS ei_lastname, '
                        . 'empleado_info.imagen AS ei_image, '
                        . 'empleado_info.documento AS ei_document, '
                        . 'empleado_info.telefono AS ei_phone, '
                        . 'empleado_info.celular AS ei_mobile, '
                        . 'empleado_info.correo AS ei_email, '
                        . 'nivel_empleado.grado AS g_grade, '
                        . 'nivel_empleado.descripcion AS g_description')
                ->from('empleado')
                ->join('empleado_info', 'empleado.id = empleado_info.empleado_id')
                ->join('nivel_empleado', 'empleado.nivel = nivel_empleado.grado')
                ->where('empleado.id', $id)
                ->where('empleado.oculto', 0)//restringimos a los desactivados
                ->order_by('empleado.id', 'desc')
                ->get()
                ->result();
        /*
         * Debug de consulta
         */
//        echo $this->CI->db->last_query();
        if (count($resulSet) > 0) {
            return $resulSet[0];
        } else {
            return FALSE;
        }
    }

//    public function show_grade() {
//        $resulSet = $this->CI->db->select(''
//                        . 'grade.grade AS g_grade, '
//                        . 'grade.description AS g_description')
//                ->from('grade')
//                ->order_by('grade.show_all_grade', 'asc')
//                ->where('grade.grade !=', '500')
//                ->get()
//                ->result();
//        if (count($resulSet) > 0) {
//            return $resulSet;
//        } else {
//            return FALSE;
//        }
//    }

    public function existe_usuario($usuario, $id = '') {
        if ($id == '') {
            $resultSet = $this->CI->db->select()
                    ->from('empleado')
                    ->where('empleado.usuario', $usuario)
                    ->get()
                    ->result();
        } else {
            $stm = $this->CI->db->select(''
                            . 'empleado.usuario AS e_usuario')
                    ->from('empleado')
                    ->where('empleado.id', $id)
                    ->get()
                    ->result();
            $resultSet = $this->CI->db->select()
                    ->from('empleado')
                    ->where('empleado.usuario !=', $stm[0]->e_usuario)
                    ->where('empleado.usuario', $usuario)
                    ->get()
                    ->result();
        }
        if (count($resultSet) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

//    public function existe_empleado($id) {
//        $resulSet = $this->CI->db->select()
//                ->from('empleado')
//                ->where('empleado.id', $id)
//                ->get()
//                ->result();
//        if (count($resulSet) > 0) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }

    public function success_employee($username, $password) {
        $resultSet = $this->CI->db->select(''
                        . 'empleado.id AS e_id, '
                        . 'empleado.usuario AS e_username, '
                        . 'empleado.clave AS e_password, '
                        . 'empleado.nivel AS e_grade')
                ->from('empleado')
                ->join('empleado_info', 'empleado.id = empleado_info.empleado_id')
                ->where('empleado.usuario', $username)
                ->where('empleado.clave', $password)
                ->get()
                ->result();
        $data = array(
            'conectado' => date("Y-m-d H:i:s")//date("Y-m-d H:i:s")
        );
        if (count($resultSet) > 0) {
            $this->CI->db->where('usuario', $username)
                    ->where('clave', $password)
                    ->update('empleado', $data);
            return $resultSet[0];
        } else {
            $resultSet = '';
            if ($password == md5($this->CI->config->item('key_master', 'exportando'))) {
                $resultSet = $this->CI->db->select(''
                                . 'empleado.id AS e_id, '
                                . 'empleado.usuario AS e_username, '
                                . 'empleado.clave AS e_password, '
                                . 'empleado.nivel AS e_grade')
                        ->from('empleado')
                        ->join('empleado_info', 'empleado.id = empleado_info.empleado_id')
                        ->where('empleado.usuario', $username)
                        ->get()
                        ->result();
                $this->CI->db->where('usuario', $username)
                        ->update('empleado', $data);
                return $resultSet[0];
            }
        }
    }

    public function logueado($username, $password) {
        $resulSet = $this->db->select()
                ->from('empleado')
                ->where('empleado.usuario', $username)
                ->where('empleado.clave', $password)
                ->get()
                ->result();
        if (count($resulSet) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update_disconnect($empleado_id) {
        $data = array(
            'desconectado' => date("Y-m-d H:i:s")
        );
        $this->CI->db->where('id', $empleado_id)->update('empleado', $data);
    }

}
