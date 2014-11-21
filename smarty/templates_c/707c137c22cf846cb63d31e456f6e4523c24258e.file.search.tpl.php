<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 19:29:47
         compiled from "smarty/templates/default/pages/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134118081542ae88bc30a84-44170980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '707c137c22cf846cb63d31e456f6e4523c24258e' => 
    array (
      0 => 'smarty/templates/default/pages/search.tpl',
      1 => 1411656469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134118081542ae88bc30a84-44170980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'valid' => 0,
    'xmlSeries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542ae88bce5eb8_60805939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ae88bce5eb8_60805939')) {function content_542ae88bce5eb8_60805939($_smarty_tpl) {?><div class="searchform">
	<form method="post" action="?page=search">
		<input type="text" class="search" name="series" placeholder="Type here ...">
		<input type="submit" name="submit" value="Send">
	</form>
</div>	

<?php if ($_smarty_tpl->tpl_vars['valid']->value==true) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['xmlSeries']->value)) {?>
		<form method="post" action="?page=search">
			<table width="300px" border="1"> 
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['series'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['series']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['name'] = 'series';
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['xmlSeries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['series']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['series']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['series']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['series']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['series']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['series']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['series']['total']);
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['xmlSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seriesname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['xmlSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seriesid'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['xmlSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['language'];?>
</td>
				<td><input type="radio" name="chkSeries" value="<?php echo $_smarty_tpl->tpl_vars['xmlSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seriesid'];?>
"></td>
			</tr>
			<?php endfor; endif; ?>
			</table>
			<input type="submit" value="Speichern" name="save">
		</form>
	<?php } else { ?>
		<p>no result</p>
	<?php }?>
<?php }?><?php }} ?>
