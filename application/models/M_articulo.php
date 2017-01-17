<?php

require_once APPPATH . 'libraries/Modelo_DB.php';

class M_articulo extends Modelo_DB {

    public function __construct() {
        parent::__construct();
        parent::setTabla('articulo');
        parent::setAlias('articulo');
        parent::setTabla_id('id');
    }

    public function get_query() {
        $this->CI->db->select("articulo.id,articulo.url, articulo.titulo,articulo.categoria_id, articulo.fecha, articulo.visto, articulo.descripcion, articulo.imagen, articulo.video, articulo.fecha_modificacion, articulo.oculto, "
                . "articulo.autor_id, autor.nombre AS autornombre, autor.apellido_paterno AS autorapellidopat, autor.apellido_materno AS autorapellidomat, autor.descripcion AS autordescripcion,"
                . "autor.correo AS autorcorreo, autor.web AS autorweb, categoria.nombre  as catnom, categoria.url as caturl");
        $this->CI->db->from($this->tabla . " articulo");
        $this->CI->db->join('autor autor', 'articulo.autor_id = autor.id', 'inner');
          $this->CI->db->join('categoria categoria', 'categoria.id = articulo.categoria_id', 'inner');
        $this->CI->db->order_by("articulo.id", "desc");
    }

    public function existe_titulo($titulo, $id = '') {
        if ($id == '') {
            $resultSet = $this->CI->db->select()
                    ->from('articulo')
                    ->where('articulo.titulo', $titulo)
                    ->get()
                    ->result();
        } else {
            $stm = $this->CI->db->select(''
                            . 'articulo.titulo AS articulo_titulo')
                    ->from('articulo')
                    ->where('articulo.id', $id)
                    ->get()
                    ->result();
            $resultSet = $this->CI->db->select()
                    ->from('articulo')
                    ->where('articulo.titulo !=', $stm[0]->a_titulo)
                    ->where('articulo.titulo', $titulo)
                    ->get()
                    ->result();
        }
        if (count($resultSet) > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function mas_visitados($limit) {
        $resultSet = $this->CI->db->select(''
                        . 'articulo.id AS articulo_id, '
                        . 'articulo.titulo AS articulo_titulo, '
                        . 'articulo.imagen AS articulo_imagen, '
                        . 'articulo.visto AS visto, '
                        . 'articulo.fecha AS articulo_fecha, '
                        . 'articulo.descripcion AS articulo_descripcion, '
                        . 'articulo.url AS articulo_url')
                ->from('articulo')
                ->where('articulo.oculto', '0')
                ->order_by('articulo.visto', 'desc')
                ->limit($limit)
                ->get()
                ->result();
        if (count($resultSet) > 0) {
            return $resultSet;
        } else {
            return FALSE;
        }
    }

    public function slider() {
        $resultSet = $this->CI->db->select(''
                        . 'articulo.id AS articulo_id, '
                        . 'articulo.titulo AS articulo_titulo, '
                        . 'articulo.fecha AS articulo_fecha, '
                        . 'articulo.imagen AS articulo_imagen, '
                        . 'articulo.visto AS visto, '
                        . 'articulo.descripcion AS articulo_descripcion, '
                        . 'articulo.url AS articulo_url')
                ->from('articulo')
                ->where('articulo.oculto', '0')
                ->group_by('articulo.categoria_id')
                ->order_by('articulo.id', 'desc')
                ->limit(4)
                ->get()
                ->result();
        if (count($resultSet) > 0) {
            return $resultSet;
        } else {
            return FALSE;
        }
    }

    public function agregar_visita($id) {
        $stm = $this->CI->db->select(''
                        . 'articulo.visto AS p_visit')
                ->from('articulo')
                ->where('articulo.id', $id)
                ->get()
                ->result();
        $data = array(
            'visto' => $stm[0]->p_visit + 1
        );
        if ($this->CI->db->where('articulo.id', $id)->update('articulo', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
