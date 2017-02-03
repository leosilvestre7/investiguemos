<?php /* Smarty version 3.1.27, created on 2017-01-28 21:58:59
         compiled from "C:\wamp\www\investiguemos\application\views\templates\web\page\Descripcion.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20128588d5a73278201_91608200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab58670a254e3dc7dcf62fd6fbc249b357b2004f' => 
    array (
      0 => 'C:\\wamp\\www\\investiguemos\\application\\views\\templates\\web\\page\\Descripcion.tpl',
      1 => 1485658042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20128588d5a73278201_91608200',
  'variables' => 
  array (
    'base_url' => 0,
    'descrip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588d5a732c32c5_88213783',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588d5a732c32c5_88213783')) {
function content_588d5a732c32c5_88213783 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20128588d5a73278201_91608200';
?>
<section>
    <div class="container bg-todoh1m1">
        <div class="row" style="overflow: hidden;">
            <h5 style="margin-left:16px; font-size: 12px;"> <strong>Home</strong> > <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
descripcion">Descripción</a></h5>
            <div class="col-sm-12 col-md-12" style="padding-top: 15px; padding-bottom: 14px;">
                <h1 class="not-tita" style="padding-bottom: 5px;">¿Qué es Investiguemos.net?</h1>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['descrip']->value;?>

                </p>
            </div>
        </div>
    </div>
</section>
<?php }
}
?>