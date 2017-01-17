<?php

class M_tema extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('tema');
        parent::setAlias('tema');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("tema.id, tema.nombre, tema.fecha_modificacion, tema.oculto, tema.url");
        $this->CI->db->from($this->tabla . " tema");
       
    }

    public function existe_tema($nombre, $id = '') {
        if ($id == '') {
            $resultSet = $this->CI->db->select()
                    ->from('tema')
                    ->where('tema.nombre', $nombre)
                    ->get()
                    ->result();
        } else {
            $stm = $this->CI->db->select(''
                            . 'tema.nombre AS t_nombre')
                    ->from('tema')
                    ->where('tema.id', $id)
                    ->get()
                    ->result();
            $resultSet = $this->CI->db->select()
                    ->from('tema')
                    ->where('tema.nombre !=', $stm[0]->t_nombre)
                    ->where('tema.nombre', $nombre)
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
