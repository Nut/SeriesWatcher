<?php /* Smarty version Smarty-3.1.19, created on 2014-10-08 16:09:13
         compiled from "smarty/templates/default/pages/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:741885467542ae805934918-38238160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271bb2d1b408cd77b62f495b16ea970757a1b3d3' => 
    array (
      0 => 'smarty/templates/default/pages/home.tpl',
      1 => 1412703066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '741885467542ae805934918-38238160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542ae80593cd99_75424924',
  'variables' => 
  array (
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ae80593cd99_75424924')) {function content_542ae80593cd99_75424924($_smarty_tpl) {?><p>Homee</p>
<?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<br>
<a href="#" class="logina">Login</a>

<br><br>

<label><input type="checkbox" name="mails" value="1"> Mail 1</label>
<label><input type="checkbox" name="mails" value="2"> Mail 2</label>
<label><input type="checkbox" name="mails" value="3"> Mail 3</label>
<label><input type="checkbox" name="mails" value="4"> Mail 4</label>

 <br>

<span class="checkall">Alles markieren</span>

<script>
	$(document).ready(function() {
    $(".checkall").click(function() {
        var cblist = $("input[name=mails");
        cblist.attr("checked", !cblist.attr("checked"));
    });                 
});
</script><?php }} ?>
