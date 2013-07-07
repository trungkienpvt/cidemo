<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $this->lang->line("IMPORT_LINK_TITLE")?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" language="javascript">
</script>
<body>
<div style="margin-bottom:5px">
<div class='holder osX' style="margin-bottom:5px"><div id='pane1' class='scroll-pane' style='overflow-x: hidden;  width:620px; height:400px'>
<table>
<thead><tr><td><?php echo $this->lang->line("TITLE_IMPORT")?></td><td><?php echo $this->lang->line("IMAGE_IMPORT")?></td><td><?php 	echo $this->lang->line("ACTION_IMPORT")?></td></tr></thead>
<tbody>
<?php foreach($data as $row):
$obj_string = new StringUtility(); 
$articleName = $obj_string->removeunicode($row['title']);
$articleName = str_replace(' ',"-",$articleName).'.html'; 
$linkUrl = $PREDATA['basePath'] . 'news/'. $row['rid']. '/' . $articleName; 
?>
<tr><td><?php echo $row['title']?></td>
<td><img src="<?php echo $PREDATA['imageUpload'] . 'thumb/' . $row['images']?>"/></td>
<td><a href="javascript:void()" onclick="window.opener.importLink('<?php echo $linkUrl?>');window.close();"><?php 	echo $this->lang->line("IMPORT_LINK")?></a></td></tr>
<?php endforeach;?>
<tr><td colspan="3"><?php echo $paging?></td></tr>
</tbody>
</table>

</div></div>
</div>

</body>
</html>
