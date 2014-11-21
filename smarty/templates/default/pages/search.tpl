<div class="searchform">
	<form method="post" action="?page=search">
		<input type="text" class="search" name="series" placeholder="Type here ...">
		<input type="submit" name="submit" value="Send">
	</form>
</div>	

{if $valid == true}
	{if isset($xmlSeries)}
		<form method="post" action="?page=search">
			<table width="300px" border="1"> 
			{section name=series loop=$xmlSeries}
			<tr>
				<td>{$xmlSeries[series].seriesname}</td>
				<td>{$xmlSeries[series].seriesid}</td>
				<td>{$xmlSeries[series].language}</td>
				<td><input type="radio" name="chkSeries" value="{$xmlSeries[series].seriesid}"></td>
			</tr>
			{/section}
			</table>
			<input type="submit" value="Speichern" name="save">
		</form>
	{else}
		<p>no result</p>
	{/if}
{/if}