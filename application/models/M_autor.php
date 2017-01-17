<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_autor extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('autor');
        parent::setAlias('atr');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("atr.id, atr.nombre,atr.imagen,atr.apellido_paterno, atr.apellido_materno, atr.descripcion, atr.correo, atr.web,"
                . "atr.oculto,atr.fecha_modificacion");
        $this->CI->db->from($this->tabla . " atr");
    }

    public function autor_data($nombre) {
        $resulSet = $this->CI->db->select(''
                        . 'autor.id AS atr_id, '
                        . 'autor.nombre AS atr_nombre,'
                        . 'autor.apellido_paterno AS atr_apellido_paterno,'
                        . 'autor.apellido_materno AS atr_apellido_materno,'
                        . 'autor.descripcion AS atr_descripcion,'
                        . 'autor.correo AS atr_correo,'
                        . 'autor.web AS atr_web, ')
                ->from('autor')
                ->where('autor.nombre', $nombre)
                ->get()
                ->result();
        if (count($resulSet) > 0) {
            return $resulSet[0];
        } else {
            return FALSE;
        }
    }

    public function existe_nombre($nombre, $id = '') {
        if ($id == '') {
            $resultSet = $this->CI->db->select()
                    ->from('autor')
                    ->where('autor.nombre', $nombre)
                    ->get()
                    ->result();
        } else {
            $stm = $this->CI->db->select(''
                            . 'autor.nombre AS atr_nombre')
                    ->from('autor')
                    ->where('autor.id', $id)
                    ->get()
                    ->result();
            $resultSet = $this->CI->db->select()
                    ->from('autor')
                    ->where('autor.nombre !=', $stm[0]->atr_nombre)
                    ->where('autor.nombre', $nombre)
                    ->get()
                    ->result();
        }
        if (count($resultSet) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function existe_autor($nombre,$apellido_paterno,$apellido_materno, $id = '') {
        if ($id == '') {
            $resultSet = $this->CI->db->select()
                    ->from('autor')
                    ->where('autor.nombre', $nombre)
                    ->where('autor.apellido_paterno', $apellido_paterno)
                    ->where('autor.apellido_materno', $apellido_materno)
                    ->get()
                    ->result();
        }

        if (count($resultSet) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
