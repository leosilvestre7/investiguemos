<section>
    <div class="">
        <div class="container footer-bg">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <!--<h6 class="fotitluo-gas">Ultimos Artículos</h6>
                    <ul class="foot-ulli">
                        <li>
                            <a href="#">
                                Sobre mí
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Investigación Básica
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Investigación Aplicada
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tecnociencia
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contacto
                            </a>
                        </li>
                    </ul>-->
                </div>
                <div class="col-md-3">
                    <h6 class="fotitluo-gas">Categorias</h6>
                    <ul class="foot-ulli">
                        <!--  <li>
                              <a href="#">
                                  Sobre mí
                              </a>
                          </li>-->
                        <li>
                            <a href="{$base_url}categoria/ambiente">
                                Ambiente
                            </a>
                        </li>
                        <li>
                            <a href="{$base_url}categoria/educacion">
                                Educación
                            </a>
                        </li>
                        <li>
                            <a href="{$base_url}categoria/informacion">
                                Información
                            </a>
                        </li>

                        <li>
                            <a href="{$base_url}categoria/investigacion">
                                Investigacion
                            </a>
                        </li>
                        <li>
                            <a href="{$base_url}categoria/actividades">
                                Actividades
                            </a>
                        </li>
                        <li>
                            <a href="{$base_url}contacto">
                                Contacto
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h6 class="fotitluo-gas">Tags</h6>
                    <ul class="gropu-cust">
                        {if !empty($tema)}
                            {foreach $tema as $t}
                                <li>
                                    <a  class="btn boton-1gstag" href="{$base_url}tema/{$t.url}"><span class="fa fa-tag"></span>{$t.nombre}</a>

                                </li>
                            {/foreach}
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container footer-bgbot">
            <div class="row">
                <div class="col-md-12">
                    <p class="footer-copyp"><a href="#"><span class="fa fa-envelope-o"></span> sabinomunoz@yahoo.com </a> | © 2017 <b><a href="http://system-geek.com/" target="_blank">SYSTEM GEEK</a></b>. Todos los derechos reservados.</p>
                </div>  
            </div>
        </div>
    </div>
</section>