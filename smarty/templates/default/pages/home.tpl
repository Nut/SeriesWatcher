<p>Homee</p>
{$var}
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
</script>