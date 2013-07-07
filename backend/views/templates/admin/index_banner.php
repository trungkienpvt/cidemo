<div class="title_page"><h1><?php print $this->lang->line("MANAGE ALBUM")?></h1></div >
<div class="">
<a href="<?php print $PREDATA['base_url']?>banner/add" class="bt_green"><span class="bt_green_lft"></span><strong><?php print $this->lang->line("ADD NEW ITEM")?></strong><span class="bt_green_r"></span></a> |
<a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong><?php print $this->lang->line("DELETE ITEM")?></strong><span class="bt_red_r"></span></a>
<form class="form-inline" action="<?php print $PREDATA['base_url']?>banner/" method="post" name="frmsearch">
<span><?php print($this->lang->line("Language"))?></span>
<select name=language_search><option value=""><?php print $this->lang->line("CHOICE_TITLE")?></option>
<?php foreach($arr_lang as $row):?>
<option <?php echo(isset($filterArray['language_search']) && $filterArray['language_search']==$row? 'selected':"")?> value="<?php print $row?>"><?php print $row?></option>
<?php endforeach;?>
</select>

<span><?php print($this->lang->line("Category"))?><?php print($this->lang->line('Category'))?></span>
<select name="category_search"><option value=""><?php print $this->lang->line("PLEASE_SELECT")?></option>
<?php foreach($list_category as $row):?>
<option <?php echo(isset($filterArray['category_search']) && $filterArray['category_search']==$row['id']? 'selected':"")?> value="<?php print $row['id']?>"><?php print $row['name']?></option>
<?php endforeach;?>
</select>
<input type="text" name="key_search" id="keysearch" value="<?php echo(isset($filterArray['name_search'])? $filterArray['name_search']:"")?>" class="input-medium search-query"/>
<button type="submit" class="btn">Search</button>
</form>
<div class="clear-div"></div>  
<form name="adminForm" id="adminForm" action="<?print $PREDATA['base_url']?>banner/delete" method="post">                    
<table class="table table-striped">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['title']) && $arrOrder['title']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=title&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("TITLE") . '</a>';
	            elseif(isset($arrOrder['title']) && $arrOrder['title']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=title&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("TITLE") . '</a>';
	            else 
	            	print $this->lang->line("TITLE")
	        ?>
			</th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['link']) && $arrOrder['link']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=description&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("LINK") . '</a>';
	            elseif(isset($arrOrder['link']) && $arrOrder['link']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=description&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("LINK") . '</a>';
	            else 
	            	print $this->lang->line("LINK")
	        ?>
            </th>
            <th scope="col" class="rounded"><?php print $this->lang->line("IMAGE")?></th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['ordering']) && $arrOrder['ordering']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=ordering&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("ORDERING") . '</a>';
	            elseif(isset($arrOrder['ordering']) && $arrOrder['ordering']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=ordering&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("ORDERING") . '</a>';
	            else 
	            	print $this->lang->line("ORDERING")
	        ?>
	            </th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['category']) && $arrOrder['category']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=category&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("CATEGORY") . '</a>';
	            elseif(isset($arrOrder['category']) && $arrOrder['category']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'banner/?order_name=category&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("CATEGORY") . '</a>';
	            else 
	            	print $this->lang->line("CATEGORY")
	        ?>
            </th>
            <th scope="col" class="rounded"><?php print $this->lang->line("LANGUAGE")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("TRANSLATE")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("EDIT_TITLE")?></th>
            <th scope="col" class="rounded-q4"><?php print $this->lang->line("DELETE_TITLE")?></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    if(!empty($banner_list)):
    $count = 1;
    foreach($banner_list as $item):
    
    ?>
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php print $count?>" value="<?php print $item['id']?>" onclick='isChecked(this);' /></td>
            <td><?php print $item['title']?></td>
            <td><?php print $item['links']?></td>
            <td>
            <?php if($item['images']==''):?>
            <img src="<?php print $PREDATA['imagePath']?>no-image.png"/>
            <?php else:?>
            <img src="<?php print $PREDATA['imageUpload'] . 'thumb/' .$item['images']?>"/>
            <?php endif;?>
            </td>
            <td>
            <input type="text"  name="<?php print($item['id'])?>" value="<?php print $item['ordering']?>" class="input-mini submit_order"/>
    <input type="hidden" name="orderid[]" value="<?php print $item['id']?>"/>
            </td>
            <td><?php print $item['cat_name']?></td>
            <td><?php print ($item['language']!=null?$item['language']:$default_language)?></td>
    		<td>
    		<?php if(!$item['translated']):
    		print $this->lang->line("Translated");
    		else:?>
    		<a href='<?php print $PREDATA['base_url']?>banner/add/id/<?php print $item['id']?>/translate/1'><?php print $this->lang->line('TRANSLATE')?></a>
    		<?php endif?>
    		</td>
            <td><a href="<?php print $PREDATA['base_url']?>banner/add/id/<?php print $item['id']?>" class=""><img src="<?php print $PREDATA['imagePath']?>edit-icon.png"" alt="" title="" border="0" /></a></td>
            <td><a href="<?php print $PREDATA['base_url']?>banner/delete/id/<?php print $item['id']?>" class="deleted"><img src="<?php print $PREDATA['imagePath']?>delete-icon.png"" alt="" title="" border="0" /></a></td>
        </tr>
        <?php 
        $count ++;
        endforeach;?>
        <?php endif;?>
    </tbody>
</table>
	 <a href="<?php print $PREDATA['base_url']?>banner/add" class="bt_green"><span class="bt_green_lft"></span><strong><?php print $this->lang->line("ADD NEW ITEM")?></strong><span class="bt_green_r"></span></a> |
 	 <a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong><?php print $this->lang->line("DELETE ITEM")?></strong><span class="bt_red_r"></span></a>

     <input type="hidden" id="number_row" name="number_row" value="<?php print $NUM_ROW ?>"/>
     <input type="hidden" value="0" name="boxchecked">
     <input type="hidden" id="action_form" value="<?php print $PREDATA['base_url']?>banner/updateorder" name="action_form"/>
 </form>    
     
    <div class="pagination">
 
        <?php print $pagination_string?>
        </div> 
     