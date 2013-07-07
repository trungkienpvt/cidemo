<div class="title_page">
<h1><?php print $this->lang->line("USER_PAGE_TITLE")?></h1></div >
<div class="">
<a href="<?php print $PREDATA['base_url']?>users/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a> |
<a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
<form class="form-inline" action="<?php print $PREDATA['base_url']?>users/" method="post" name="frmsearch">
<input type="text" name="keysearch" id="keysearch" class="input-medium search-query"/>
<button type="submit" class="btn">Search</button>
</form>
<div class="clear-div"></div>  
<form name="adminForm" action="<?php print $PREDATA['base_url']?>users/delete" method="post">                    
<table class="table table-striped">    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" class="checkall" id="checkall" style='float:left' /></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("FULL_NAME_TITLE")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("USER_NAME_TITLE")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("IMAGE_TITLE")?></th>
            <th scope="col" class="rounded"><?php print $this->lang->line("EDIT_TITLE")?></th>
            <th scope="col" class="rounded-q4"><?php print $this->lang->line("DELETE_TITLE")?></th>
        </tr>
    </thead>
    <tbody>
	<?php 
	$count = 1;
	foreach($USER_LIST as $item):?>    
    	<tr>
        	<td><input class="checkitem" type="checkbox" name="id[]" id="c_<?php print $count?>" value="<?php print $item['id']?>" /></td>
            <td><?php print $item['fullname']?></td>
            <td><?php print $item['username']?></td>
            <td>
            <?php if($item['images']==''):?>
            <img width="100" height="75" src="<?php print $PREDATA['imagePath']?>user.png"/>
            <?php else:?>
            <img src="<?php print $PREDATA['imageUpload']?>thumb/<?php print $item['images']?>"/>
            <?php endif?>
            </td>
            <td><a href="<?php print $PREDATA['base_url']?>users/add/id/<?php print $item['id']?>"><img src="<?php print $PREDATA['imagePath']?>edit-icon.png" alt="" title="" border="0" /></a></td>
            <td><a onclick="return confirm('Do you want to delete it now')" href="<?php print $PREDATA['base_url']?>users/delete/id/<?php print $item['id']?>" class="ask"><img src="<?php print $PREDATA['imagePath']?>delete-icon.png" alt="" title="" border="0" /></a></td>
        </tr>
    <?php 
    $count++;
    endforeach;?>       
    </tbody>
</table>
	 <a href="<?php print $PREDATA['base_url']?>users/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a> |
     <a href="#" class="bt_red" onclick="validateDelete('<?php print $this->lang->line("PLEASE_SELECT")?>');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="<?php print $NUM_ROW ?>"/>
     <input type="hidden" value="0" name="boxchecked" id="boxchecked"> 
 </form>    
        <div class="pagination">
        <?php print $PAGINATION_STRING ?>
        
        </div> 
</div>     