<script type="text/javascript" language="javascript">
</script>
<div style="margin-bottom:5px">
<div class='holder osX' style="margin-bottom:5px"><div id='pane1' class='scroll-pane' style='overflow-x: hidden;  width:620px; height:400px'>
<table>
<thead><tr><td>Title</td><td>Description</td><td>Image</td><td>Action</td></tr></thead>
<tbody>
{foreach item=content from=$data}
<tr><td>{$content.title}</td><td>{$content.description}</td><td>{$content.image}</td><td><a href="" onclick="importLink('{$basePath}{$index}/news/{$content.idArticle}/{$content}')">Import</a></td></tr>
{/foreach}

</tbody>
<caption>
</caption></table>
</div></div>
</div>

</body>
</html>
