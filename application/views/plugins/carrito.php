<!DOCTYPE html>
<html>
    <head>
        <title>Rock DV</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <style>
            body{
                font-family: "Century Gothic";
            }
        </style>
    </head>

    <body style="width:730px;margin: auto;">

        <table align="center" width="700" style="margin-top: 15px;border-bottom: 10px solid #FFE4EF;border-top: 10px solid #FFE4EF;">
            <tr>
                <th colspan="3">
            <p style="text-align: left;">
                <a href="http://rockdvboutique.com/">
                    <img src="http://rockdvboutique.com/test/public/img-email/carrito_compra/logorockdv.png">
                </a>
            </p>
        </th>
        <th colspan="2">
        <p style="text-align: right;font-size: 18px;">
            <img src="http://rockdvboutique.com/test/public/img-email/carrito_compra/telefono.png"> T.(+51 1) 311-6700
        </p>
    </th>
    <th>
        <img src="http://rockdvboutique.com/test/public/img-email/carrito_compra/bolsita.png">
    </th>
</tr>
</table>
<table align="center" width="700">
    <tr>
        <td colspan="4">
            <p style="margin-top: 2px;font-size: 20px;"><b>DATOS DEL COMPRADOR</b></p>
            <p style="margin-bottom: 2px;margin-top: 2px;">Nombres del cliente: {user_name} {user_lastname}</p>
            <p style="margin-bottom: 2px;margin-top: 2px;">DNI: {user_dni}</p>
            <p style="margin-bottom: 2px;margin-top: 2px;">Dirección: {user_direccion}</p>
            <p style="margin-bottom: 2px;margin-top: 2px;">Teléfono / celular: {user_telefono} / {user_celular}</p>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <p style="font-size: 18px;">Por favor, revisa y conserva la siguiente información de tu compra.</p>
        </td>
    </tr>
</table>
<table border="1" align="center" width="700">
    <tr style="background: #FFC9DA;color:#000;">
        <td colspan="5" style="padding: 15px;">
            <label style="font-weight:bold;">RESUMEN PEDIDO</label>
        </td>
    </tr>
    <tr>
        <td colspan="1" width="230" style="text-align: center;">Nom. del Producto</td>
        <td colspan="1" width="118" style="text-align: center;">Cantidad</td>
        <td colspan="1" width="140" style="text-align: center;">Precio Unit.</td>
        <td colspan="1" width="198" style="text-align: center;">Valor Total</td>
    </tr>
    {cart_items} 
    <tr>
        <td colspan="3" style="padding: 0px 0px 0px 15px;">
            <p style="text-align:right;margin-top:5px;margin-bottom: 5px;">Costo de envío</p>
        </td>
        <td colspan="1" style="padding: 0px 0px 0px 15px;">
            <p style="text-align:center;margin-top:5px;margin-bottom: 5px;">S/ {cart_costo_envio}</p>
        </td>
    </tr>
    <tr style="background: #C8C8C8;">
        <td colspan="3" style="padding: 0px 0px 0px 15px;">
            <p style="text-align:right;margin-top:5px;margin-bottom: 5px;">TOTAL PEDIDO</p>
        </td>
        <td colspan="1" style="padding: 0px 0px 0px 15px;">
            <p style="text-align:center;margin-top:5px;margin-bottom: 5px;">S/ {cart_total}</p>
        </td>
    </tr>
</table>
<table align="center" width="700">
    <tr>
        <td colspan="4">
            <p style="text-align: right;padding-right: 20px;font-size: 28px;margin-top: 10px;margin-bottom: 10px;color: #FE5590;">
                GRACIAS POR TU COMPRA!
            </p>
        </td>
    </tr>
</table>
<table align="center" width="700" style="background: #464646;color: #fff;border-top: 2px solid #FE5590;height: 157px;">
    <tr>
        <td colspan="4" style="padding-left: 25px;padding-right: 25px;">
            <p style="font-size: 20px;margin-bottom: 5px;">Métodos de pago:</p>
            <p style="text-align:center;font-size: 20px;margin-top: 5px;margin-bottom: 5px;">Cuenta de ahorros BCP<span style="font-size: 30px;color: #FE5590;">191-32734892-0-45</span></p>
            <p style="text-align:center;font-size: 20px;margin-top: 5px;margin-bottom: 5px;">Cuenta de ahorros InterBank <span style="font-size: 30px;color: #FE5590;">167-3050012789</span></p>
        </td>
    </tr>
    <tr style="background: #1C1B1B;">
        <td colspan="4" style="padding-left: 25px;padding-right: 25px;">
            <p style="text-align:center;height: 21px;">Copyright © rockdvboutique.com - Todos los derechos reservados</p>
        </td>
    </tr>
</table>
</body>
</html>