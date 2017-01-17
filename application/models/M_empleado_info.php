<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_empleado_info extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('empleado_info');
        parent::setAlias('ei');
        parent::setTabla_id('id');
        /*
         * Configuraci�n de informaci�n
         */
    }

    public function get_query() {
        $this->CI->db->select("*");
        $this->CI->db->from($this->tabla . " ei");
        $this->CI->db->order_by("ei.id", "desc");
    }

}
