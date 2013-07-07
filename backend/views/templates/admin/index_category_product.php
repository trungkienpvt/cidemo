<div class="title_page"><h1><?php print $this->lang->line("INDEX_CATEGORY_PRODUCT_PAGE_TITLE")?></h1></div ><div class="">
<a href="<?php print $PREDATA['base_url']?>category_product/add" class="bt_green"><span class="bt_green_lft"></span><strong><?php print $this->lang->line("ADD NEW ITEM")?></strong><span class="bt_green_r"></span></a> |
<a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong><?php print $this->lang->line("DELETE ITEM")?></strong><span class="bt_red_r"></span></a>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php print $PREDATA['base_url']?>category_product/delete" method="post">                    
<table class="table table-striped">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input class="checkall" id="checkall" type="checkbox" style='float:left' /></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("CATEGORY_NAME")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("CATEGORY_STATUS")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("CATEGORY_IMAGE")?></th>
            <th scope="col" class="rounded">
			<?php 
	            if(isset($arrOrder['ordering']) && $arrOrder['ordering']=='asc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'category_product/?order_name=ordering&order_value=desc'.'" title="asc" ><i class="icon-chevron-up"></i>' . $this->lang->line("ORDERING") . '</a>';
	            elseif(isset($arrOrder['ordering']) && $arrOrder['ordering']=='desc')
	            	echo '<a class="order" href="'.$PREDATA['base_url'] .'category_product/?order_name=ordering&order_value=asc'.'" title="desc" ><i class="icon-chevron-down"></i>' . $this->lang->line("ORDERING") . '</a>';
	            else 
	            	print $this->lang->line("ORDERING")
	        ?>
			</th>
            <th scope="col" class="rounded"><?php print $this->lang->line("LANGUAGE")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("TRANSLATE")?></th>
            <th scope="col" class="rounded-q4"><?php print $this->lang->line("EDIT_TITLE")?></th>
            <th scope="col" class="rounded-q4"><?php print $this->lang->line("DELETE_TITLE")?></th>
        </tr>
    </thead>
    <tbody>
    <?php $count = 1?>
    <?php 
    //generate list category
		foreach ($list as $key => $val):
 				$id 		= $val['id'];
 				$parents 	= $val['parents'];
 				$level 		= $val['level'];
 				$lft 		= $val['lft'];
 				$rgt 		= $val['rgt'];
 				
 				$levelCss = '';
 				if($val['level'] == 0){
 					$name = '<b style="color:red">' . $val['name'] . '</b>';
 				}else if($val['level'] == 1){
	 				$name = '<b> + ' . $val['name'] . '</b>';
	 			}else{
	 				$name = '<b> - - ' . $val['name'] . '</b>';
	 				$levelCss =  'padding-left: ' . (20 * $val['level']) . 'px;';
	 			}
	 			$orderName	= 'ordering[' . $val['lft'] . ']';
	 			$modelCategory = new Model_Category_Product();
	 			$orderValue	= $modelCategory->getNodeOrdering($val['parents'],$val['lft']);
	 			$ordering	= '<input type="text" name="' . $orderName .'" 
	 							id="' . $orderName .'" 
	 							value="' . $orderValue . '" style ="width:50px; text-align: center;" />';
		?>
    <tr>
    <td><input class="checkitem" type="checkbox" name="id[]" id="c_<?php print $count?>" value="<?php print $val['id']?>" /></td>
    <td class="textLeft" style="<?php echo $levelCss;?>"><?php echo $name;?></td>
    <td><?php print $val['status']?></td>
    <td>
    <?php if($val['images']==''):?>
            <img width="100px" height="75" src="<?php print $PREDATA['imagePath']?>no-image.png"/>
            <?php else:?>
            <img src="<?php print $PREDATA['imageUpload'] . 'thumb/' .$val['images']?>"/>
            <?php endif;?>
    </td>
    <td><input type="text"  name="<?php print($id)?>" value="<?php print $val['ordering']?>" class="input-mini submit_order"/>
    <input type="hidden" name="orderid[]" value="<?php print $val['id']?>"/>
    </td>
    <td><?php print ($val['language']!=null?$val['language']:$default_language)?></td>
    <td>
    <?php if(!$val['translated']):
    	print ("Translated");
    else:?>
    <a href='<?php print $PREDATA['base_url']?>category_product/add/id/<?php print $val['id']?>/translate/1'><?php print $this->lang->line('TRANSLATE')?></a>
    <?php endif?>
    </td>
    <td><a href="<?php print $PREDATA['base_url']?>category_product/add/id/<?php print $val['id']?>"><img src="<?php print $PREDATA['imagePath']?>edit-icon.png"" alt="" title="" border="0" /></a></td>
    <td><a href="<?php print $PREDATA['base_url']?>category_product/delete/id/<?php print $val['id']?>" class="deleted"><img src="<?php print $PREDATA['imagePath']?>delete-icon.png"" alt="" title="" border="0" /></a></td>
    </tr>
    <?php 
    $count++;
    endforeach;?>
    </tbody>
</table>
	 <a href="<?php print $PREDATA['base_url']?>category_product/add" class="bt_green"><span class="bt_green_lft"></span><strong><?php print $this->lang->line("ADD NEW ITEM")?></strong><span class="bt_green_r"></span></a> |
	<a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong><?php print $this->lang->line("DELETE ITEM")?></strong><span class="bt_red_r"></span></a>
<input type="hidden" id="number_row" name="number_row" value="<?php print $NUM_ROW?>"/>
     <input type="hidden" value="0" name="boxchecked" id="boxchecked">
     <input type="hidden" id="action_form" value="<?php print $PREDATA['base_url']?>category_product/updateorder" name="action_form"/> 
 </form>    
     
        <div class="pagination">
        <?php print $pagination_string?>
        
        </div> 
     