<?php

class Alerta {

    public function mensaje_error($mensaje, $opcion = FALSE) {
        $string = '<div class="alert alert-warning alert-dismissable">';
        $string .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        if ($opcion === TRUE) {
            $string .= '<strong>Error </strong>' . $mensaje;
        } else {
            $string .= '<strong>Error </strong><li style="margin-left: 12px;">' . $mensaje . '</li>';
        }
        $string .= '</div>';
        return $string;
    }

    public function mensaje_exito($mensaje, $opcion = FALSE) {
        $string = '<div class="alert alert-success alert-dismissable">';
        $string .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        if ($opcion === TRUE) {
            $string .= '<strong>EXITO: </strong>' . $mensaje;
        } else {
            $string .= '<strong>EXITO: </strong><li style="margin-left: 12px;">' . $mensaje . '</li>';
        }
        $string .= '</div>';
        return $string;
    }
    
    public function alerta_error($mensaje) {
        $string = '<script>';
        $string .= 'if(!alertify.errorAlert){';
        $string .= 'alertify.dialog("errorAlert",function factory(){';
        $string .= 'return{';
        $string .= 'build:function(){';
        $string .= "var errorHeader = ".'"'."<span class='fa fa-times-circle fa-2x text-red' style='vertical-align:middle;'></span> ¡¡ERROR!!".'"'.";";
        $string .= 'this.setHeader(errorHeader);';
        $string .= '}};},true, "alert");}';
        $string .= 'alertify.errorAlert(\''.$mensaje.'\');';
        $string .= '</script>';
        return $string;
    }

    public function alerta_exito($mensaje) {
        $string = '<script>';
        $string .= 'if(!alertify.successAlert){';
        $string .= 'alertify.dialog("successAlert",function factory(){';
        $string .= 'return{';
        $string .= 'build:function(){';
        $string .= "var errorHeader = ".'"'."<span class='fa fa-check-circle fa-2x text-green' style='vertical-align:middle;'></span> ¡¡SUCCESS!!".'"'.";";
        $string .= 'this.setHeader(errorHeader);';
        $string .= '}};},true, "alert");}';
        $string .= 'alertify.successAlert(\''.$mensaje.'\');';
        $string .= '</script>';
        return $string;
    }
    
    public function mensaje($mensaje){
        $string = '<div class="container row"><div class="row col-md-12"><div class="row col-md-6"><div class="box box-success box-solid">';
        $string .= '';
        $string .= '<div class="box-body">';
        $string .= $mensaje;
        $string .= '</div></div></div></div></div>';
        return $string;
    }
    
    public function location_href($url){
        $string = '<script>location.href="';
        $string .= $url;
        $string .= '"</script>';
        return $string;
    }
    
       
    public function refrescar_tiempo($time = 3000){
        $string = '<script>';
        $string .= 'setTimeout(function(){ parent.location.reload() }, '.$time.');';
        $string .= '</script>';
        return $string;
    }

}
