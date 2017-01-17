<?php /* Smarty version 3.1.27, created on 2016-12-23 06:32:19
         compiled from "/home/investiguemos25/public_html/application/views/templates/web/structure/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1118223295585d0b43986bc3_38138422%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc3ac01079f6fbe06ac2e10e4a722ba0065edeb' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/web/structure/footer.tpl',
      1 => 1482470236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118223295585d0b43986bc3_38138422',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585d0b43996cc7_00538612',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585d0b43996cc7_00538612')) {
function content_585d0b43996cc7_00538612 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1118223295585d0b43986bc3_38138422';
?>
<!-- JQUERY -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<!-- JQUERY UI-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jqueryui/1.11.2/jquery-ui.js"><?php echo '</script'; ?>
>
<!-- BOOTSTRAP -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootsnav-master/js/bootsnav.js"><?php echo '</script'; ?>
>

<!-- SLICK-MASTER -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/slick-master/slick/slick.min.js"><?php echo '</script'; ?>
>
<!-- NIVO SLIDER-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/nivoslider/jquery.nivo.slider.js"><?php echo '</script'; ?>
>
<!-- FLEXSLIDER -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/woothemes/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

// Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    });
<?php echo '</script'; ?>
>


<!-- SCRIPT GENERAL -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/process.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/script.js"><?php echo '</script'; ?>
>

<!-- YOXVIEW -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/yoxview/yoxview-init.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
     LoadScript(yoxviewPath + "yoxview-nojquery.js");
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/datepicker/jquery-ui-timepicker-addon.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
        $('.datepicker').datetimepicker({
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm:ss',
            stepHour: 1,
            stepMinute: 1,
            stepSecond: 1,
            changeMonth: true,
            changeYear: true,
            showTimepicker:false,
            yearRange: '2010:2030'
         });
    
<?php echo '</script'; ?>
>





</body>
</html><?php }
}
?>