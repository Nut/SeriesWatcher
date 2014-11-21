<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 19:29:15
         compiled from "smarty/templates/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1051889585542ae805873b78-70178154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d05041cc12c9ad12a504ee144451cf956268f07' => 
    array (
      0 => 'smarty/templates/default/index.tpl',
      1 => 1412098154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1051889585542ae805873b78-70178154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542ae8059262c3_27760913',
  'variables' => 
  array (
    'bla' => 0,
    'tpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542ae8059262c3_27760913')) {function content_542ae8059262c3_27760913($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="sidebar_left">
	<nav id="sidebar_nav">
		<h1>Menu</h1>
		<table id="nav_table">
			<tr>
				<td><img src="smarty/templates/default/style/img/home.png" width="40" height="40" alt="Home"></td>
				<td><a href="?page=start">Home</a></td>
			</tr>
			<tr>
				<td><img src="smarty/templates/default/style/img/search.png" width="40" height="40" alt="Search"></td>
				<td><a href="?page=search">Search</a></td>
			</tr>
			<tr>
				<td><img src="smarty/templates/default/style/img/oldtv.png" width="40" height="40" alt="Series"></td>
				<td><a href="?page=watched">Series</a></td>
			</tr>
			<tr>
				<td><img src="smarty/templates/default/style/img/envelope.png" width="40" height="40" alt="Content"></td>
				<td><a href="?page=test">Contact</a></td>
			</tr>
		</table>
	</nav>
	<p class="version">version 0.1 alpha</p>
</section>

<section id="main">
	<header>
		<h1>Headline</h1>
	</header>
     
	<div id="content">
		<p><?php echo $_smarty_tpl->tpl_vars['bla']->value;?>
</p>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
