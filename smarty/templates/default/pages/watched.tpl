<div class="series_link">
{section name=series loop=$seriesLink}
	<a href="?page=watched&series={$seriesLink[series].seriesid}">{$seriesLink[series].seriesname}</a> 
{/section}
</div>

{if $valid == true}
<form id="list_form" action="?page=watched&series={$currentSelection}" method="post">
	<table class="episodeList">
	{$i = 1}
	{section name=series loop=$completeSeries}	
		{if {$completeSeries[series].seasonnumber} == $i}
		<thead>
			<tr>
				<th scope="rowgroup" colspan="1"><input class="bla" type="checkbox" name="check_all_s{$completeSeries[series].seasonnumber}"></th>
				<th scope="rowgroup" colspan="3">Season {$completeSeries[series].seasonnumber}</th> 
			</tr>
		</thead>
			{$i = $i+1}
		{/if}
		<tr>
			<td class="seriesid_checkbox"><input class="sn{$completeSeries[series].seasonnumber}" name="check[]" type="checkbox" value="{$completeSeries[series].id}" {$completeSeries[series].checked}></td>
			<td class="episodenumber">S{$completeSeries[series].seasonnumber}E{$completeSeries[series].episodenumber}</td>
			<td class="episodename">{$completeSeries[series].episodename}</td>
			<td class="seriesid">{$completeSeries[series].id}</td>
		</tr>
	{/section}
	</table>
	<input type="submit" value="Speichern" name="save">
</form>
{/if}

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

{if $reload == true}
	<script type="text/javascript">window.location.reload();</script>
{/if}