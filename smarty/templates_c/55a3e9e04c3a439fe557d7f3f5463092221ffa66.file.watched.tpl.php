<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 23:09:48
         compiled from "smarty/templates/default/pages/watched.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1806465816542ae88cf07d74-31239796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a3e9e04c3a439fe557d7f3f5463092221ffa66' => 
    array (
      0 => 'smarty/templates/default/pages/watched.tpl',
      1 => 1412802586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1806465816542ae88cf07d74-31239796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542ae88d04a9f3_83130618',
  'variables' => 
  array (
    'seriesLink' => 0,
    'valid' => 0,
    'currentSelection' => 0,
    'completeSeries' => 0,
    'i' => 0,
    'reload' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ae88d04a9f3_83130618')) {function content_542ae88d04a9f3_83130618($_smarty_tpl) {?><div class="series_link">
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
	<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
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
		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seasonnumber'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==$_smarty_tpl->tpl_vars['i']->value) {?>
		<thead>
			<tr>
				<th scope="rowgroup" colspan="1"><input class="bla" type="checkbox" name="check_all_s<?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seasonnumber'];?>
"></th>
				<th scope="rowgroup" colspan="3">Season <?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seasonnumber'];?>
</th> 
			</tr>
		</thead>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
		<?php }?>
		<tr>
			<td class="seriesid_checkbox"><input class="sn<?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['seasonnumber'];?>
" name="check[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['completeSeries']->value[$_smarty_tpl->getVariable('smarty')->value['section']['series']['index']]['id'];?>
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

<script type="text/javascript">
	$(document).ready(function() {
		var foo = $(".bla").attr("name");
		var foo2 = $(".bla").attr("name");
		console.log(foo, foo2);
	});

  $(document).ready(function() {
    $("input[name='check_all']").click(function(){
      if($(this).val()==0){
        $(this).parents("table")
               .find("input:checkbox")
               .attr("checked","checked")
               .val("1");
      }
      else{
        $(this).parents("table")
               .find("input:checkbox")
               .attr("checked","")
               .val("0");
      }
    });
  });
</script>

<?php if ($_smarty_tpl->tpl_vars['reload']->value==true) {?>
	<script type="text/javascript">window.location.reload();</script>
<?php }?><?php }} ?>
