<div class="title_page"><h2>{$PAGE_TITLE}</h2></div ><div class="">
<a href="{$baseUrl}aclrole/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a></div>
<div class="clear-div"></div>  
<form name="adminForm" action="{$baseUrl}aclrole/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">{$ROLE_NAME}</th>
            <th scope="col" class="rounded">{$ROLE_ORDER}</th>
            <th scope="col" class="rounded">{$EDIT_TITLE}</th>
            <th scope="col" class="rounded-q4">{$DELETE_TITLE}</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="4" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    
    {section name=i loop=$ROLE_LIST}
    {$START_LOOP=$START_LOOP+1}
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_{$START_LOOP}" value="{$ROLE_LIST[i].id}" onclick='isChecked(this);' /></td>
            <td>{$ROLE_LIST[i].name}</td>
            <td>{$ROLE_LIST[i].roleorder}</td>
            <td><a href="{$baseUrl}aclrole/add/id/{$ROLE_LIST[i].id}"><img src="{$imagePath}images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="{$baseUrl}aclrole/delete/id/{$ROLE_LIST[i].id}" class="ask"><img src="{$imagePath}images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        {/section}
    </tbody>
</table>
	 <a href="{$baseUrl}aclrole/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="{$NUM_ROW}"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        {$PAGINATION_STRING}
        
        </div> 
     