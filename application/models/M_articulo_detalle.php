<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_articulo_detalle extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('articulo_detalle');
        parent::setAlias('articulo_detalle');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("articulo_detalle.id, articulo_detalle.articulo_id, articulo_detalle.tema_id, articulo_detalle.fecha_modificacion, articulo_detalle.oculto, "
                . " articulo.titulo AS articulotitulo, tema.nombre AS temanombre, articulo.url as articulourl, articulo.descripcion as articulodes, articulo.imagen as articuloimg,".
                "articulo.fecha as f_creacion, articulo.visto as visto");
        $this->CI->db->from($this->tabla . " articulo_detalle");
        $this->CI->db->join('articulo articulo', 'articulo_detalle.articulo_id = articulo.id', 'inner');
        $this->CI->db->join('tema tema', 'articulo_detalle.tema_id = tema.id', 'inner');
    }

    public function detalle_articulo($id) {
        $resultSet = $this->CI->db->select(''
                        . 'articulo_detalle.id AS id, '
                        . 'articulo_detalle.tema_id AS tema_id, '
                        . 'articulo.titulo As articulo, '
                        . 'articulo.id As articulo_id, '
                        . 'tema.nombre As tema_nombre, '
                        . 'tema.id As tema_id, '
                        . 'tema.url As tema_url, '
                        . 'articulo_detalle.oculto AS oculto')
                ->from('articulo_detalle')
                ->join('articulo', 'articulo.id = articulo_detalle.articulo_id')
                ->join('tema', 'tema.id = articulo_detalle.tema_id')
                ->where('articulo_detalle.articulo_id', $id)
                ->where('articulo_detalle.oculto', '0')
                ->get()
                ->result();
        if (count($resultSet) > 0) {
            return $resultSet;
        } else {
            return FALSE;
        }
    }

}
