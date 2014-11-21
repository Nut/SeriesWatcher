{include file="header.tpl"}
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
		<p>{$bla}</p>
		{include file=$tpl}
	</div>
</section>

{include file="footer.tpl"}