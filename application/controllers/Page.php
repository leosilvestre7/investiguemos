<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Page extends CI_Controller {

    private $items = array();

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('smarty_tpl', 'fecha', 'mantenimiento', 'archivo');
        $helper = array('url');
        $model = array('m_articulo', 'm_articulo_detalle', 'm_autor', 'm_libro', 'm_tema', 'm_categoria');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->config->load('exportando', TRUE, TRUE);
        $this->items['proyecto'] = $this->config->item('project_name', 'exportando');
        $this->items['project_favicon'] = $this->config->item('project_favicon', 'exportando');
        $this->items['get_url'] = base_url() . 'web/';
        $this->items['base_url'] = base_url();
        $this->items['fecha2'] = $this->fecha->convertir_tiempo_fecha(time(), 5);


        $lista5 = $this->m_tema->mostrar_activos(15);

        if (!empty($lista5)) {
            $i = 1;
            foreach ($lista5 AS $items) {
                $this->items['tema'][] = array(
                    'numero' => $i,
                    'nombre' => $items['nombre'],
                    'url' => $items['url'],
                );
                $i++;
            }
        }
    }

    public function home() {
        $data['page_title'] = $this->items['proyecto'] . ' | Inicio | Sabino Muñoz';
        $data['estado'] = 'current';
        $data['imagen'] = 'banner.jpg';
        $data['title']= "Blog - Sabino Muñoz";
        $data['descripcion']= "Scientific Research Consultant en TeachWithScience. Investigador Calificado por CONCYTEC - REGINA";
        /* ----------------LISTA DE SLIDER---------------------- */
        $h_articulo = $this->m_articulo->slider();
        $data['h_slider'] = array();
        if ($h_articulo !== FALSE) {
            $i = 1;
            foreach ($h_articulo as $items) {
                $data['slider'][] = array(
                    'numero' => $i,
                    'id' => $items->articulo_id,
                    'titulo' => $items->articulo_titulo,
                    'descripcion' => $this->archivo->cortar_texto($items->articulo_descripcion, 150),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items->articulo_fecha, 6, 3),
                    'imagen' => $items->articulo_imagen,
                    'visto' => $items->visto,
                    'url' => $items->articulo_url
                );
                $i++;
            }
        }
        /* ----------------LISTA DE ARTICULOS---------------------- */
        $lista2 = $this->m_articulo->mostrar_activos();

        if (!empty($lista2)) {
            $i = 1;
            foreach ($lista2 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_articulos'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'visto' => $items['visto'],
                    'f_creacion' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'accion' => $accion
                );
                $i++;
            }
        }
        /* ----------------ULTIMOS TRES ARTICULOS---------------------- */
        $lista3 = $this->m_articulo->mostrar_activos(3);

        if (!empty($lista3)) {
            $i = 1;
            foreach ($lista3 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_tres_ult'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'f_creacion' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'accion' => $accion
                );
                $i++;
            }
        }
        //    var_dump($data['lista_tres_ult']);
        /* ----------------LISTA DE ARTICULOS AMBIENTALES---------------------- */
        $limit = 4;
        $lista4 = $this->m_articulo->mostrar_cuando(array('articulo.categoria_id' => 1), $limit);
        // var_dump($lista4);
        if (!empty($lista4)) {
            $i = 1;
            foreach ($lista4 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_ambiente'][] = array(
                    'numero' => $i,
                    'titulo' => $this->archivo->cortar_texto($items['titulo'], 60),
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'visto' => $items['visto'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'url' => $items['url'],
                    'f_creacion' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'accion' => $accion
                );
                $i++;
            }
            //var_dump($data['lista_ambiente'][0]);
        }
        /* ----------------LISTA DE ARTICULOS EDUCACION---------------------- */
        $limit = 4;
        $lista5 = $this->m_articulo->mostrar_cuando(array('articulo.categoria_id' => 2), $limit);
        // var_dump($lista4);
        if (!empty($lista5)) {
            $i = 1;
            foreach ($lista5 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_educacion'][] = array(
                    'numero' => $i,
                    'titulo' => $this->archivo->cortar_texto($items['titulo'], 60),
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'f_creacion' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'accion' => $accion
                );
                $i++;
            }
            //var_dump($data['lista_ambiente'][0]);
        }
        /* ----------------LISTA DE ARTICULOS INFORMACION---------------------- */
        $limit = 4;
        $lista6 = $this->m_articulo->mostrar_cuando(array('articulo.categoria_id' => 3), $limit);
        // var_dump($lista4);
        if (!empty($lista6)) {
            $i = 1;
            foreach ($lista6 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_informacion'][] = array(
                    'numero' => $i,
                    'titulo' => $this->archivo->cortar_texto($items['titulo'], 60),
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'f_creacion' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'accion' => $accion
                );
                $i++;
            }
            //var_dump($data['lista_ambiente'][0]);
        }
        /* ----------------LISTA DE ARTICULOS MAS VISITADOS---------------------- */
        $vistos = $this->m_articulo->mas_visitados(5);
        $data['vistos'] = array();
        if ($vistos !== FALSE) {
            $i = 1;
            foreach ($vistos as $items) {
                $data['vistos'][] = array(
                    'numero' => $i,
                    'id' => $items->articulo_id,
                    'titulo' => $items->articulo_titulo,
                    'descripcion' => $this->archivo->cortar_texto($items->articulo_descripcion, 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items->articulo_fecha, 6, 3),
                    'imagen' => $items->articulo_imagen,
                    'visto' => $items->visto,
                    'url' => $items->articulo_url
                );
                $i++;
            }
        }





        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('web/structure/header', $data);
        $this->smarty_tpl->view('web/structure/inter_header', $data);
        $this->smarty_tpl->view('web/page/Home', $data);
        $this->smarty_tpl->view('web/structure/inter_footer', $data);
        $this->smarty_tpl->view('web/structure/footer', $data);
    }

    public function categoria($url = '') {
        $data['page_title'] = $this->items['proyecto'] . ' | Inicio';
        $data['estado'] = 'current';

        if ($url == '') {
            echo $this->url_comp->direccionar(base_url(), TRUE);
            EXIT;
        }
        /* ----------------LISTA DE 7 ARTICULOS ULTIMOS---------------------- */

        $where = array('categoria.url' => $url, 'categoria.oculto' => 0);
        $data['categoria'] = $this->m_categoria->mostrar($where);
        $data['nombre'] = $data['categoria']['nombre'];

        $lista3 = $this->m_articulo->mostrar_cuando(array('categoria_id' => $data['categoria']['id']), 7);

        if (!empty($lista3)) {
            $i = 1;
            foreach ($lista3 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_siete_ult'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'f_creacion' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'accion' => $accion
                );
                $i++;
            }
        }
        /* ----------------LISTA DE 3 ARTICULOS MAS VISTOS---------------------- */

        $vistos = $this->m_articulo->mas_visitados(3);
        $data['vistos'] = array();
        if ($vistos !== FALSE) {
            $i = 1;
            foreach ($vistos as $items) {
                $data['vistos'][] = array(
                    'numero' => $i,
                    'id' => $items->articulo_id,
                    'titulo' => $items->articulo_titulo,
                    'descripcion' => $this->archivo->cortar_texto($items->articulo_descripcion, 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items->articulo_fecha, 6, 3),
                    'imagen' => $items->articulo_imagen,
                    'visto' => $items->visto,
                    'url' => $items->articulo_url
                );
                $i++;
            }
        }
        /* ----------------LISTA DE 6 ARTICULOS ULTIMOS---------------------- */
        $lista3 = $this->m_articulo->mostrar_activos(6);
        if (!empty($lista3)) {
            $i = 1;
            foreach ($lista3 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_seis'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'accion' => $accion
                );
                $i++;
            }
        }

        /* ---------------temas----------------------------- */
        $lista5 = $this->m_tema->mostrar_activos(15);

        if (!empty($lista5)) {
            $i = 1;
            foreach ($lista5 AS $items) {
                $data['tema'][] = array(
                    'numero' => $i,
                    'nombre' => $items['nombre'],
                    'url' => $items['url'],
                );
                $i++;
            }
        }

        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('web/structure/header', $data);
        $this->smarty_tpl->view('web/structure/inter_header', $data);
        $this->smarty_tpl->view('web/page/Categoria_noticia', $data);
        $this->smarty_tpl->view('web/structure/inter_footer', $data);
        $this->smarty_tpl->view('web/structure/footer', $data);
    }

    public function tema($url = '') {
        $data['page_title'] = $this->items['proyecto'] . ' | Tema Relacionado';
        $data['estado'] = 'current';

        if ($url == '') {
            echo $this->url_comp->direccionar(base_url(), TRUE);
            EXIT;
        }

        $where = array('tema.url' => $url, 'tema.oculto' => 0);
        $tema_art = $this->m_articulo_detalle->mostrar_cuando($where);
        if (!empty($tema_art)) {
            $data['nombre'] = $tema_art[0]['temanombre'];
        }

        foreach ($tema_art as $li) {
            $data['lista_rel'][] = array(
                'titulo' => $li['articulotitulo'],
                'descripcion' => $this->archivo->cortar_texto($li['articulodes'], 200),
                'url' => $li['articulourl'],
                'imagen' => $li['articuloimg'],
                'f_creacion' => $this->fecha->convertir_tiempo_fecha($li['f_creacion'], 6, 3),
                'visto' => $li['visto']
            );
        }

        // var_dump( $data['lista_rel']);
        /* ----------------LISTA DE 3 ARTICULOS MAS VISTOS---------------------- */

        $vistos = $this->m_articulo->mas_visitados(3);
        $data['vistos'] = array();
        if ($vistos !== FALSE) {
            $i = 1;
            foreach ($vistos as $items) {
                $data['vistos'][] = array(
                    'numero' => $i,
                    'id' => $items->articulo_id,
                    'titulo' => $items->articulo_titulo,
                    'descripcion' => $this->archivo->cortar_texto($items->articulo_descripcion, 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items->articulo_fecha, 6, 3),
                    'imagen' => $items->articulo_imagen,
                    'visto' => $items->visto,
                    'url' => $items->articulo_url
                );
                $i++;
            }
        }
        /* ----------------LISTA DE 6 ARTICULOS ULTIMOS---------------------- */
        $lista3 = $this->m_articulo->mostrar_activos(6);
        if (!empty($lista3)) {
            $i = 1;
            foreach ($lista3 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_seis'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'accion' => $accion
                );
                $i++;
            }
        }

        /* ---------------temas----------------------------- */
        $lista5 = $this->m_tema->mostrar_activos(15);

        if (!empty($lista5)) {
            $i = 1;
            foreach ($lista5 AS $items) {
                $data['tema'][] = array(
                    'numero' => $i,
                    'nombre' => $items['nombre'],
                    'url' => $items['url'],
                );
                $i++;
            }
        }

        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('web/structure/header', $data);
        $this->smarty_tpl->view('web/structure/inter_header', $data);
        $this->smarty_tpl->view('web/page/Tema', $data);
        $this->smarty_tpl->view('web/structure/inter_footer', $data);
        $this->smarty_tpl->view('web/structure/footer', $data);
    }

    public function buscar($palabra = '') {
        $data['page_title'] = $this->items['proyecto'] . ' | Buscar ' . $palabra;
        $palabra = str_replace("_", " ", $palabra);
        $palabra = str_replace("%C3%B1", "ñ", $palabra);
        $palabra = str_replace("%C3%A1", "á", $palabra);
        $palabra = str_replace("%C3%A9", "é", $palabra);
        $palabra = str_replace("%C3%AD", "í", $palabra);
        $palabra = str_replace("%C3%B3", "ó", $palabra);
        $palabra = str_replace("%C3%BA", "ú", $palabra);

        if ($palabra == '') {
            $data['titulo'] = 'Es necesario ingresar una palabra';

            $data['articulo'] = array();
        } else {
            $like = array(
                'articulo.titulo' => $palabra,
                'articulo.descripcion' => $palabra
            );

            $resultado = $this->m_articulo->buscar($like);
            //  var_dump($resultado);
            /* ------------------------------------------------------------ */
            if (!empty($resultado)) {
                foreach ($resultado as $r) {
                    $data['articulo'][] = array(
                        'id' => $r['id'],
                        'titulo' => $r['titulo'],
                        'url' => $r['url'],
                        'visto' => $r['visto'],
                        'imagen' => $r['imagen'],
                        'descripcion' => $this->archivo->cortar_texto($r['descripcion'], 150),
                        'f_creacion' => $this->fecha->convertir_tiempo_fecha($r['fecha'], 6, 3)
                    );
                }
            } else {
                $data['articulo'] = array();
                $data['titulo'] = 'Se encontraron ' . count($resultado) . ' coincidencias con "' . $palabra . '"';
            }
            // var_dump($data['articulo']);
            /* ------------------------------------------------------------ */
        }

        /* ---------------------------------------------- */
        $data['fecha2'] = $this->fecha->convertir_tiempo_fecha(time(), 5);

        /* ----------------LISTA DE 3 ARTICULOS MAS VISTOS---------------------- */

        $vistos = $this->m_articulo->mas_visitados(3);
        $data['vistos'] = array();
        if ($vistos !== FALSE) {
            $i = 1;
            foreach ($vistos as $items) {
                $data['vistos'][] = array(
                    'numero' => $i,
                    'id' => $items->articulo_id,
                    'titulo' => $items->articulo_titulo,
                    'descripcion' => $this->archivo->cortar_texto($items->articulo_descripcion, 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items->articulo_fecha, 6, 3),
                    'imagen' => $items->articulo_imagen,
                    'visto' => $items->visto,
                    'url' => $items->articulo_url
                );
                $i++;
            }
        }
        /* ----------------LISTA DE 6 ARTICULOS ULTIMOS---------------------- */
        $lista3 = $this->m_articulo->mostrar_activos(6);
        if (!empty($lista3)) {
            $i = 1;
            foreach ($lista3 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_seis'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'accion' => $accion
                );
                $i++;
            }
        }

        /* ---------------temas----------------------------- */
        $lista5 = $this->m_tema->mostrar_activos(15);

        if (!empty($lista5)) {
            $i = 1;
            foreach ($lista5 AS $items) {
                $data['tema'][] = array(
                    'numero' => $i,
                    'nombre' => $items['nombre'],
                    'url' => $items['url'],
                );
                $i++;
            }
        }


        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('web/structure/header', $data);
        $this->smarty_tpl->view('web/structure/inter_header', $data);
        $this->smarty_tpl->view('web/page/Buscar_noticia', $data);
        $this->smarty_tpl->view('web/structure/inter_footer', $data);
        $this->smarty_tpl->view('web/structure/footer', $data);
    }

    public function articulo($url = "") {
        $data['page_title'] = $this->items['proyecto'] . ' | Inicio';
        $data['estado'] = 'current';

        if ($url == '') {
            echo $this->url_comp->direccionar(base_url(), TRUE);
            EXIT;
        }
        /* ---------------------------LISTA DE ARTICULOS--------------------------- */
        $where = array('articulo.url' => $url, 'articulo.oculto' => 0);
        $data['articulo'] = $this->m_articulo->mostrar($where);

        if (empty($data['articulo'])) {
            echo $this->url_comp->direccionar(base_url(), TRUE);
            EXIT;
        }

        $autor = $this->m_autor->mostrar(array('id' => $data['articulo']['autor_id']));

        $data['nombreautor'] = $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'];
        $data['web'] = $autor['web'];
        $data['desautor'] = $autor['descripcion'];
        $data['imagenautor'] = $autor['imagen'];
        $data['fechanoticia'] = $this->fecha->convertir_tiempo_fecha($data['articulo']['fecha'], 6, 3);
        $data['catnombre'] = $data['articulo']['catnom'];
        $data['caturl'] = $data['articulo']['caturl'];
        $data['url']= $url;

        $this->m_articulo->agregar_visita($data['articulo']['id']);

        $p_detalle = $this->m_articulo_detalle->detalle_articulo($data['articulo']['id']);

        if (!empty($p_detalle)) {
            foreach ($p_detalle as $items) {
                $data['lista_cart'][] = array(
                    'id' => $items->id,
                    'tema_id' => $items->tema_id,
                    'tema' => $items->tema_nombre,
                    'tema_url' => $items->tema_url
                );
            }
        }
        $data['title'] = $data['articulo']['titulo'];
        $data['imagen'] = $data['articulo']['imagen'];
        $data['page_title'] = $this->items['proyecto'] . ' | Articulo- ' . $data['articulo']['titulo'];
        $data['descrip'] = $data['articulo']['descripcion'];
        $data['video'] = $data['articulo']['video'];
        $data['visto'] = $data['articulo']['visto'];
        $data['fecha2'] = $this->fecha->convertir_tiempo_fecha(time(), 5);
        $data['descrip_corto']= $this->archivo->cortar_texto($data['articulo']['descripcion'], 100);


        $vistos = $this->m_articulo->mas_visitados(3);
        $data['vistos'] = array();
        if ($vistos !== FALSE) {
            $i = 1;
            foreach ($vistos as $items) {
                $data['vistos'][] = array(
                    'numero' => $i,
                    'id' => $items->articulo_id,
                    'titulo' => $items->articulo_titulo,
                    'descripcion' => $this->archivo->cortar_texto($items->articulo_descripcion, 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items->articulo_fecha, 6, 3),
                    'imagen' => $items->articulo_imagen,
                    'visto' => $items->visto,
                    'url' => $items->articulo_url
                );
                $i++;
            }
        }
        /* ----------------LISTA DE 6 ARTICULOS ULTIMOS---------------------- */
        $lista3 = $this->m_articulo->mostrar_activos(6);
        if (!empty($lista3)) {
            $i = 1;
            foreach ($lista3 AS $items) {
                $accion = $this->mantenimiento->accion($items['id'], 'ver|editar|denegar|permitir', 'articulo', $items['oculto']);
                $autor = $this->m_autor->mostrar(array('id' => $items['autor_id']));
                $data['lista_seis'][] = array(
                    'numero' => $i,
                    'titulo' => $items['titulo'],
                    'autor' => $autor['nombre'] . " " . $autor['apellido_paterno'] . " " . $autor['apellido_materno'],
                    'imagen' => $items['imagen'],
                    'descripcion' => $this->archivo->cortar_texto($items['descripcion'], 200),
                    'fecha' => $this->fecha->convertir_tiempo_fecha($items['fecha'], 6, 3),
                    'url' => $items['url'],
                    'visto' => $items['visto'],
                    'accion' => $accion
                );
                $i++;
            }
        }

        $temas = $this->m_articulo_detalle->detalle_articulo($data['articulo']['id']);
        $data['temas'] = array();
        if ($temas !== FALSE) {
            $i = 1;
            foreach ($temas as $items) {
                $data['temas'][] = array(
                    'numero' => $i,
                    'articulo_id' => $items->articulo_id,
                    'tema_id' => $items->tema_id,
                    'tema_nombre' => $items->tema_nombre,
                    'tema_url' => $items->tema_url
                );
                $i++;
            }
        }

        /* ---------------temas----------------------------- */
        $lista5 = $this->m_tema->mostrar_activos(15);

        if (!empty($lista5)) {
            $i = 1;
            foreach ($lista5 AS $items) {
                $data['tema'][] = array(
                    'numero' => $i,
                    'nombre' => $items['nombre'],
                    'url' => $items['url'],
                );
                $i++;
            }
        }

        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('web/structure/header', $data);
        $this->smarty_tpl->view('web/structure/inter_header', $data);
        $this->smarty_tpl->view('web/page/Noticia_descripcion', $data);
        $this->smarty_tpl->view('web/structure/inter_footer', $data);
        $this->smarty_tpl->view('web/structure/footer', $data);
    }

    public function contacto() {
        $data['page_title'] = $this->items['proyecto'] . ' | Inicio';
        /*
         * Contenido de la interna
         */
        $data['estado'] = 'current';
        /*
         * Impresión de páginas
         */
        $data = array_merge($data, $this->items);
        $this->smarty_tpl->view('web/structure/header', $data);
        $this->smarty_tpl->view('web/structure/inter_header', $data);
        $this->smarty_tpl->view('web/page/Contacto', $data);
        $this->smarty_tpl->view('web/structure/inter_footer', $data);
        $this->smarty_tpl->view('web/structure/footer', $data);
    }

}
