<?php /* Smarty version 3.1.27, created on 2016-12-24 13:15:36
         compiled from "/home/investiguemos25/public_html/application/views/templates/manager/structure/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1146091165585e74f843e229_30737320%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f9b3f5d4cca532cb7d285b6f425d474baa6562f' => 
    array (
      0 => '/home/investiguemos25/public_html/application/views/templates/manager/structure/footer.tpl',
      1 => 1482470226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146091165585e74f843e229_30737320',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_585e74f845bad7_06315579',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_585e74f845bad7_06315579')) {
function content_585e74f845bad7_06315579 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1146091165585e74f843e229_30737320';
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