<?php /* Smarty version 3.1.27, created on 2016-12-22 12:10:25
         compiled from "C:\wamp\www\Blog_V2\application\views\templates\manager\structure\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:939585bb4a10663a4_74959537%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56bfc5a8dd6b40d306e2de9836e4ee827fb354df' => 
    array (
      0 => 'C:\\wamp\\www\\Blog_V2\\application\\views\\templates\\manager\\structure\\footer.tpl',
      1 => 1482305349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939585bb4a10663a4_74959537',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585bb4a16dd926_17131826',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585bb4a16dd926_17131826')) {
function content_585bb4a16dd926_17131826 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '939585bb4a10663a4_74959537';
?>


<!-- Bootstrap 3.3.5 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/theme/style/js/app.min.js"><?php echo '</script'; ?>
>
<!-- jvectormap 
<?php echo '<script'; ?>
 src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>-->


<!-- ChartJS 1.0.1 
<?php echo '<script'; ?>
 src="plugins/chartjs/Chart.min.js"><?php echo '</script'; ?>
>-->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/theme/style/js/pages/dashboard2.js"><?php echo '</script'; ?>
>
<!-- AdminLTE for demo purposes -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/theme/style/js/demo.js"><?php echo '</script'; ?>
>

<!-- ############# ALERTIFY ############# -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertifyJS/alertify.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jqueryui/1.11.2/jquery-ui.js"><?php echo '</script'; ?>
>

<!-- SCRIPT -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/js/process.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/manager/js/scripts.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/datepicker/jquery-ui-timepicker-addon.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
        $('.datepicker12').datetimepicker({
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