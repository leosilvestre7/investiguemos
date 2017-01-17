<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_nivel_usuario extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('nivel_empleado');
        parent::setAlias('ne');
        parent::setTabla_id('grado');
    }

    public function get_query() {
        $this->CI->db->select("ne.grado, ne.descripcion");
        $this->CI->db->from($this->tabla . " ne");
    }

}
