<?php

class M_categoria extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('categoria');
        parent::setAlias('categoria');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("categoria.id, categoria.nombre,categoria.url, categoria.oculto");
        $this->CI->db->from($this->tabla . " categoria");
       
    }


}
