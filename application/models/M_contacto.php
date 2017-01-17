<?php

class M_contacto extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('contacto');
        parent::setAlias('contacto');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("contacto.id, contacto.nombre, contacto.correo, contacto.asunto, contacto.mensaje, contacto.fecha_modificacion, contacto.oculto");
        $this->CI->db->from($this->tabla . "contacto");
    }

}
