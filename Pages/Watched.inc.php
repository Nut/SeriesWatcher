<form action="?page=watched" method="post">
<table width="300px" border="1">

<?php
	$TVDB = new TVDB();
	$TVDB->ListAll();
?>

</table>
<input type="submit" value="Speichern" name="save">
</form>

<?php
	if($_POST['save']) {
		$TVDB->SaveList();
	}
?>