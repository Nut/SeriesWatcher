<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 12:11:14
         compiled from "smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111352722654216e887c33f3-01560138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5303e0b04b614162032fbacafd4cbfa9d92176' => 
    array (
      0 => 'smarty/templates/index.tpl',
      1 => 1411985455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111352722654216e887c33f3-01560138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54216e88811735_64029755',
  'variables' => 
  array (
    'bla' => 0,
    'tpl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54216e88811735_64029755')) {function content_54216e88811735_64029755($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section id="sidebar_left">
	<nav id="sidebar_nav">
		<h1>Menu</h1>
		<table id="nav_table">
			<tr>
				<td><img src="smarty/templates/style/img/home.png" width="40" height="40" alt="Home"></td>
				<td><a href="?page=start">Home</a></td>
			</tr>
			<tr>
				<td><img src="smarty/templates/style/img/search.png" width="40" height="40" alt="Search"></td>
				<td><a href="?page=search">Search</a></td>
			</tr>
			<tr>
				<td><img src="smarty/templates/style/img/oldtv.png" width="40" height="40" alt="Series"></td>
				<td><a href="?page=watched">Series</a></td>
			</tr>
			<tr>
				<td><img src="smarty/templates/style/img/envelope.png" width="40" height="40" alt="Content"></td>
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
