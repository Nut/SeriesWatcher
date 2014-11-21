<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 13:32:36
         compiled from "smarty/templates/pages/watched.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184953509354216ef126a219-59609337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc1615ceb7b32f6045172e972952d7ca0d128d1b' => 
    array (
      0 => 'smarty/templates/pages/watched.tpl',
      1 => 1411990354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184953509354216ef126a219-59609337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54216ef12d0e39_76672574',
  'variables' => 
  array (
    'seriesLink' => 0,
    'valid' => 0,
    'currentSelection' => 0,
    'completeSeries' => 0,
    'reload' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54216ef12d0e39_76672574')) {function content_54216ef12d0e39_76672574($_smarty_tpl) {?><div class="series_link">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['series'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['series']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['name'] = 'series';
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['seriesLink']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
	<a href="?page=watched&series=<?php echo $_smarty_tpl->tpl_vars['seriesLink']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seriesid'];?>
"><?php echo $_smarty_tpl->tpl_vars['seriesLink']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seriesname'];?>
</a> 
<?php endfor; endif; ?>
</div>

<?php if ($_smarty_tpl->tpl_vars['valid']->value==true) {?>
<form id="list_form" action="?page=watched&series=<?php echo $_smarty_tpl->tpl_vars['currentSelection']->value;?>
" method="post">
	<table class="episodeList">
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['series'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['series']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['name'] = 'series';
$_smarty_tpl->tpl_vars['smarty']->value['section']['series']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['completeSeries']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
			<td class="seriesid_checkbox"><input name="check[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['checked'];?>
></td>
			<td class="episodenumber">S<?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seasonnumber'];?>
E<?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['episodenumber'];?>
</td>
			<td class="episodename"><?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['episodename'];?>
</td>
			<td class="seriesid"><?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['id'];?>
</td>
		</tr>
	<?php endfor; endif; ?>
	</table>
	<input type="submit" value="Speichern" name="save">
</form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['reload']->value==true) {?>
	<script type="text/javascript">window.location.reload();</script>
<?php }?><?php }} ?>
