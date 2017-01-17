<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Pragma: no-cache");

class Carrito extends CI_Controller {

    public function __construct() {
        parent::__construct();
        /*
         * Configuración para librerias, helpers y modelos
         */
        $library = array('url_comp', 'documento', 'cart', 'alerta', 'session_web', 'mantenimiento', 'sendmail');
        $helper = array('url');
        $model = array('m_producto_detalle', 'm_producto', 'm_costo_envio', 'm_compra', 'm_datos_envio', 'm_orden_detalle', 'm_producto_imagen');
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /*
         * Configuración personalizada
         */
        $this->_session = $this->session_web->datos_usuario('cliente_data');
        $this->config->load('exportando', TRUE, TRUE);
        $this->items['proyecto'] = $this->config->item('proyecto', 'exportando');
        $this->items['favicon'] = $this->config->item('url_favicon', 'exportando');
        $this->items['base_url'] = base_url();
    }

    public function precio() {
        $data = array();
        $producto = $this->input->post('producto');
        $talla = $this->input->post('talla');
        $color = $this->input->post('color');
        $precio = $this->m_producto_detalle->mostrar_por_talla($producto, $talla, $color);
        if ($precio !== FALSE) {
            foreach ($precio as $item) {
                $data = array(
                    'id' => (int) $item->talla_id,
                    'producto' => (string) $item->codigo,
                    'precio' => (string) $item->precio,
                    'oferta' => (string) $item->oferta
                );
            }
        } else {
            $data = array();
        }
        echo json_encode($data);
    }

    public function agregar() {
        $id = $this->input->post('id');
        $talla = $this->input->post('talla');
        $color = $this->input->post('color');
        $result = array();
        if(empty($color)){
            $result = array(
                    'total' => 'S/' . $this->cart->total(),
                    'mensaje' => $this->alerta->mensaje_error('Es necesario que seleccione un color'),
                    'items' => count($this->cart->contents())
                );
            echo json_encode($result, TRUE);
            EXIT;
        }
        $producto = $this->m_producto->carrito($id, $talla,$color);
        if ($producto->stock <= 0) {
            $result = array(
                'total' => 'S/' . $this->cart->total(),
                'mensaje' => $this->alerta->mensaje_error('No hay stock'),
                'items' => count($this->cart->contents())
            );
        } else {
            if (!empty($producto)) {
                $imagen = $this->m_producto_imagen->mostrar('pi.producto_id', $producto->id);
                $data = array(
                    'id' => $id,
                    'qty' => 1,
                    'price' => $producto->precio * (100 - $producto->oferta) / 100,
                    'name' => $producto->producto,
                    'options' => array('url' => $producto->url, 'talla_id' => $producto->talla_id, 'talla' => $producto->talla, 'color_id' => $producto->color_id, 'color' => $producto->color,'imagen' => $imagen['imagen'], 'oferta' => $producto->oferta, 'o_precio' => $producto->precio)
                );
                $this->cart->insert($data);
                $result = array(
                    'total' => 'S/' . $this->cart->total(),
                    'mensaje' => $this->alerta->mensaje_exito('Producto agregado al carrito'),
                    'items' => count($this->cart->contents())
                );
            }
        }
        echo json_encode($result, TRUE);
    }

    public function editar() {
        $id = $this->input->post('id');
        $rowid = $this->input->post('rowid');
        $talla = $this->input->post('talla');
        $color = $this->input->post('color');
        $qty = $this->input->post('quantity');
        $producto = $this->m_producto->carrito($id, $talla, $color);
        if ($producto->stock < $qty) {
            $result = array(
                'total' => 'S/' . $this->cart->total(),
                'mensaje' => $this->alerta->mensaje_error('No hay stock'),
                'items' => count($this->cart->contents())
            );
        } else {
            if (!empty($producto)) {
                $data = array(
                    'rowid' => $rowid,
                    'qty' => $qty
                );
                $this->cart->update($data);
                $result = array(
                    'total' => 'S/' . $this->cart->total(),
                    'mensaje' => $this->alerta->mensaje_exito('El producto se ah actualizado exitosamente'),
                    'items' => count($this->cart->contents())
                );
            }
        }
        echo json_encode($result, TRUE);
    }

    public function eliminar() {
        $rowid = $this->input->post('rowid');
        $this->cart->remove($rowid);
        $result = array(
            'total' => 'S/' . $this->cart->total(),
            'mensaje' => $this->alerta->mensaje_error('Producto eliminado'),
            'items' => count($this->cart->contents())
        );
        echo json_encode($result, TRUE);
    }

    public function costo_envio() {
        $id = $this->input->post('id');
        $costo = $this->m_costo_envio->mostrar('ce.id', $id);
        echo $costo['costo'];
    }

    public function pago() {
        if ($this->_session == NULL || count($this->cart->contents()) == 0) {
            echo $this->url_comp->direccionar(base_url());
            EXIT;
        }
        $id = $this->_session->sys_id;
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $dni = $this->input->post('dni');
        $telefono = $this->input->post('telefono');
        $celular = $this->input->post('celular');
        $envio = $this->input->post('envio');
        $zona = $this->input->post('zona');
        $direccion = $this->input->post('direccion');
        $referencia = $this->input->post('referencia');
        $comentario = $this->input->post('comentario');
        $factura = $this->input->post('factura');

        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|alphaspace|maxlenght[200]', 'Nombre');
        $error .= $this->mantenimiento->validacion($apellido, 'required|alphaspace|maxlenght[200]', 'Apellido');
        $error .= $this->mantenimiento->validacion($dni, 'required|numeric|size[8]', 'DNI');
        $error .= $this->mantenimiento->validacion($telefono, 'numeric|size[7]', 'Teléfono');
        $error .= $this->mantenimiento->validacion($celular, 'numeric|size[9]', 'Celular');
        if ($envio == 'on') {
            $razon_social = $this->input->post('razon_social');
            $ruc = $this->input->post('ruc');
            $direccion_empresa = $this->input->post('direccion_empresa');
            $error .= $this->mantenimiento->validacion($zona, '', 'Zona');
            $error .= $this->mantenimiento->validacion($direccion, 'required|alphaspecial|maxlenght[255]', 'Dirección de entrega');
            $error .= $this->mantenimiento->validacion($referencia, 'required|alphaspecial|maxlenght[255]', 'Referencia de entrega');
            $error .= $this->mantenimiento->validacion($comentario, 'alphaspecial', 'Comentario');
        }else{
            $zona = 0;
        }
        if ($error != '') {
            echo $this->alerta->mensaje_error($error, TRUE);
            EXIT;
        }
        $data = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'dni' => $dni,
            'direccion_entrega' => isset($direccion)?$direccion:'',
            'telefono' => $telefono, //1 = factura / 2 = boleta
            'celular' => $celular,
            'razon_social' => isset($razon_social) ? $razon_social : '',
            'ruc' => isset($ruc) ? $ruc : '',
            'direccion_empresa' => isset($direccion_empresa) ? $direccion_empresa : '',
            'referencia_entrega' => isset($referencia)?$referencia:'',
            'comentario' => isset($comentario)?$comentario:'',
            'registro' => date("Y-m-d H:i:s")
        );
        $this->m_datos_envio->insertar($data);
        $orden_datos = $this->m_datos_envio->ultima_compra($dni);
        $data1 = array(
            'total' => $this->cart->total(),
            'fecha_registro' => date("Y-m-d H:i:s"),
            'cliente_id' => $this->_session->sys_id,
            'datos_envio_id' => $orden_datos->id,
            'comprobante_id' => $factura == 'on' ? 1 : 2 //1 = factura / 2 = boleta
        );
        $this->m_compra->insertar($data1);
        $orden = $this->m_compra->ultima_compra($this->_session->sys_id);
        $cart = $this->cart->contents();
        if($zona >0){
            $costo_envio = $this->m_costo_envio->mostrar('ce.id', $zona);
            $cart_total = $this->cart->total() + $costo_envio['costo'];
            $costo_envio = $costo_envio['costo'];
        }else{
            $cart_total = $this->cart->total();
            $costo_envio = 0;
        }
        $cart_items = '';
        if ($cart !== FALSE) {
            foreach ($cart as $items) {
                $item = array(
                    'producto_nombre' => $items['name'],
                    'producto_codigo' => $items['id'],
                    'producto_precio' => $items['price'],
                    'cantidad' => $items['qty'],
                    'talla_id' => $items['options']['talla'],
                    'color_id' => $items['options']['color'],
                    'order_id' => $orden->id,
                );
                $this->m_orden_detalle->insertar($item);
                $cart_items .= '
                        <tr>
                            <td colspan="1" width="230" style="text-align: center;">' . $items['name'] . ' Talla: ' . $items['options']['talla'] . ' Color: ' . $items['options']['color'] . '</td>
                            <td colspan="1" width="118" style="text-align: center;">' . $items['qty'] . '</td>
                            <td colspan="1" width="140" style="text-align: center;">S/' . $items['price'] . '</td>
                            <td colspan="1" width="198" style="text-align: center;">S/' . $items['price'] * $items['qty'] . '</td>
                        </tr>';
            }
            $this->cart->destroy();
            /* -------------------------------------------------- */
            $cliente = $this->m_cliente->mostrar('id', $id);
            /* -------------------------------------------------- */
            $data2 = array(
                'name' => 'RockDv Boutique',
                'email' => 'ventas@rockdvboutique.com',
                'subject' => 'Información de compra para ' . $nombre . ' ' . $apellido,
                'ip' => $this->input->ip_address(),
                /* Datos SMTP: en caso se necesiten */
                'smtp_secure' => 'ssl', // ssl - tls
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 465, // ssl: 465 - tls: 587
                'smtp_username' => '',
                'smtp_password' => '',
                /* Datos adicionales */
                'message' => 'Información de los datos de registro.',
                'user_name' => $nombre,
                'user_lastname' => $apellido,
                'user_direccion' => $direccion,
                'user_dni' => $dni,
                'user_telefono' => $telefono,
                'user_celular' => $celular,
                'cart_items' => $cart_items,
                'cart_costo_envio' => $costo_envio,
                'cart_total' => $cart_total
            );
            /* ------MAIL DE ATERRIZAJE------- */
            $list_email = array(
                'nombre' => $cliente['usuario'] // ----> Correo principal
            );
            $this->sendmail->load($data2, 'carrito');
            $this->sendmail->success_sendmail($list_email);
            /* -------------FIN-------------- */
            echo $this->alerta->mensaje_exito('La compra fue un exito! Se ha enviado un correo con la informacion de su compra');
        } else {
            echo $this->alerta->location_href(base_url());
        }
    }

}
