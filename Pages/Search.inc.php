<form method="post" action="?page=search">
	<input name="series" placeholder="Suchen...">
	<input type="submit" name="submit">
</form>

<?php 
	$TVDB = new TVDB();
	$TVDB->DownloadSeries();
	if($_POST['submit'] && !empty($_POST['series'])) { 
?>   
<form method="post" action="?page=search">
    <table width="300px" border="1">
    <?php
		$TVDB->SearchSeries($_POST['series']);
	?>
    </table>
    <input type="submit" value="Speichern" name="save">
</form>
<?php } ?>