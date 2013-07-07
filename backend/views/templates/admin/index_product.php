<div class="title_page"><h1><?php print $this->lang->line("INDEX_PAGE_TITLE")?></h1></div >
<div class="">
<a href="<?php print $PREDATA['base_url']?>product/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a> |
<a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
<form class="form-inline" action="<?php print $PREDATA['base_url']?>product/" method="post" name="frmsearch">
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
<form name="adminForm" id="adminForm" action="<?php print $PREDATA['base_url']?>product/delete" method="post">                    
<table class="table table-striped">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['name']) && $arrOrder['name']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=name&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("NAME_TITLE") . '</a>';
	            elseif(isset($arrOrder['name']) && $arrOrder['name']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=name&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("NAME_TITLE") . '</a>';
	            else 
	            	print $this->lang->line("NAME_TITLE")
	        ?>
			</th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['description']) && $arrOrder['description']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=description&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("DESCRIPTION_TITLE") . '</a>';
	            elseif(isset($arrOrder['description']) && $arrOrder['description']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=description&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("DESCRIPTION_TITLE") . '</a>';
	            else 
	            	print $this->lang->line("DESCRIPTION_TITLE")
	        ?>
            </th>
            <th scope="col" class="rounded"><?php print $this->lang->line("IMAGE_TITLE")?></th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['createdate']) && $arrOrder['createdate']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=createdate&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("DATE_CREATE_TITLE") . '</a>';
	            elseif(isset($arrOrder['createdate']) && $arrOrder['createdate']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=createdate&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("DATE_CREATE_TITLE") . '</a>';
	            else 
	            	print $this->lang->line("DATE_CREATE_TITLE")
	        ?>
	        </th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['price']) && $arrOrder['price']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=price&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("PRICE_TITLE") . '</a>';
	            elseif(isset($arrOrder['price']) && $arrOrder['price']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=price&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("PRICE_TITLE") . '</a>';
	            else 
	            	print $this->lang->line("PRICE_TITLE")
	        ?>
	        </th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['ordering']) && $arrOrder['ordering']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=ordering&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("ORDERING_TITLE") . '</a>';
	            elseif(isset($arrOrder['ordering']) && $arrOrder['ordering']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=ordering&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("ORDERING_TITLE") . '</a>';
	            else 
	            	print $this->lang->line("ORDERING_TITLE")
	        ?>
	            </th>
            <th scope="col" class="rounded">
            <?php 
	            if(isset($arrOrder['category']) && $arrOrder['category']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=category&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("CATEGORY_TITLE") . '</a>';
	            elseif(isset($arrOrder['category']) && $arrOrder['category']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'product/?order_name=category&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("CATEGORY_TITLE") . '</a>';
	            else 
	            	print $this->lang->line("CATEGORY_TITLE")
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
    if(!empty($product_list)):
    $count = 1;
    foreach($product_list as $item):
    
    ?>
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_<?php print $count?>" value="<?php print $item['id']?>" onclick='isChecked(this);' /></td>
            <td><?php print $item['name']?></td>
            <td><?php print $item['description']?></td>
            <td>
            <?php if($item['images']==''):?>
            <img src="<?php print $PREDATA['imagePath']?>no-image.png"/>
            <?php else:?>
            <img src="<?php print $PREDATA['imageUpload'] . 'thumb/' .$item['images']?>"/>
            <?php endif;?>
            </td>
            <td><?php print date('d-m-Y',$item['createdate'])?></td>
            <td><?php print $item['price']?></td>
            <td><?php print $item['ordering']?></td>
            <td><?php print $item['cat_name']?></td>
            <td><?php print ($item['language']!=null?$item['language']:$default_language)?></td>
    		<td>
    		<?php if(!$item['translated']):
    		print $this->lang->line("Translated");
    		else:?>
    		<a href='<?php print $PREDATA['base_url']?>product/add/id/<?php print $item['id']?>/translate/1'><?php print $this->lang->line('TRANSLATE')?></a>
    		<?php endif?>
    		</td>
            <td><a href="<?php print $PREDATA['base_url']?>product/add/id/<?php print $item['id']?>" class=""><img src="<?php print $PREDATA['imagePath']?>edit-icon.png"" alt="" title="" border="0" /></a></td>
            <td><a href="<?php print $PREDATA['base_url']?>product/delete/id/<?php print $item['id']?>" class="deleted"><img src="<?php print $PREDATA['imagePath']?>delete-icon.png"" alt="" title="" border="0" /></a></td>
        </tr>
        <?php 
        $count ++;
        endforeach;?>
        <?php endif;?>
    </tbody>
</table>
	 <a href="<?php print $PREDATA['base_url']?>product/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a> |
     <a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php print $NUM_ROW ?>"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
    <div class="pagination">
 
        <?php print $pagination_string?>
        </div> 
     