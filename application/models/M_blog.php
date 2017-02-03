<?php

class M_blog extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('blog');
        parent::setAlias('blog');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("blog.id, blog.descripcion, blog.oculto");
        $this->CI->db->from($this->tabla . " blog");
    }

}
