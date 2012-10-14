<div class="title_page"><h2>{$USER_PAGE_TITLE}</h2></div ><div class="">
<a href="{$baseUrl}users/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
</div>
<div class="clear-div"></div>  
<form name="adminForm" action="{$baseUrl}users/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">{$FULL_NAME_TITLE}</th>
            <th scope="col" class="rounded">{$USER_NAME_TITLE}</th>
            <th scope="col" class="rounded">{$IMAGE_TITLE}</th>
            <th scope="col" class="rounded">{$EDIT_TITLE}</th>
            <th scope="col" class="rounded-q4">{$DELETE_TITLE}</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="5" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    
    {*foreach item=user from=$USER_LIST*}
    {section name=i loop=$USER_LIST}
    {$START_LOOP=$START_LOOP+1}
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_{$START_LOOP}" value="{$USER_LIST[i].idUser}" onclick='isChecked(this);' /></td>
            <td>{$USER_LIST[i].fullname}</td>
            <td>{$USER_LIST[i].username}</td>
            <td>
            {if $USER_LIST[i].images eq NULL}
            <img src="{$imagePath}no-image.jpg"/>
            {else}
            <img src="{$imageUpload}thumb/{$USER_LIST[i].images}"/>
            {/if}
            </td>
            <td><a href="{$baseUrl}users/add/id/{$USER_LIST[i].idUser}"><img src="{$imagePath}images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="{$baseUrl}users/delete/id/{$USER_LIST[i].idUser}" class="ask"><img src="{$imagePath}images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        {/section}
      {* /foreach*}           
    </tbody>
</table>
	 <a href="{$baseUrl}users/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="{$NUM_ROW}"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        {$PAGINATION_STRING}
        
        </div> 
     