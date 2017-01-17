<?php

class M_libro extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('libro');
        parent::setAlias('libro');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("libro.id, libro.nombre, libro.descripcion, libro.link, libro.correo, libro.fecha_modificacion, libro.imagen, libro.oculto");
        $this->CI->db->from($this->tabla . " libro");
    }

    public function existe_libro($nombre, $id = '') {
        if ($id == '') {
            $resultSet = $this->CI->db->select()
                    ->from('libro')
                    ->where('libro.nombre', $nombre)
                    ->get()
                    ->result();
        } else {
            $stm = $this->CI->db->select(''
                            . 'libro.nombre AS libro_nombre')
                    ->from('libro')
                    ->where('libro.id', $id)
                    ->get()
                    ->result();
            $resultSet = $this->CI->db->select()
                    ->from('libro')
                    ->where('libro.nombre !=', $stm[0]->libro_nombre)
                    ->where('libro.nombre', $nombre)
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
