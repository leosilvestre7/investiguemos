<?php

class M_comentario extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('comentario');
        parent::setAlias('comentario');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("comentario.id, comentario.descripcion, comentario.nombre, comentario.correo,comentario.web, comentario.fecha_modificacion, comentario.oculto, "
                . "comentario.articulo_id, articulo.id AS articulo");
        $this->CI->db->from($this->tabla . " comentario");
        $this->CI->db->join('articulo articulo', 'comentario.articulo_id = articulo.id', 'inner');
    }

  

}
