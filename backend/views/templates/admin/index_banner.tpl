<div class="title_page"><h2>{$PAGE_TITLE}</h2></div ><div class="">
<a href="{$baseUrl}banners/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a></div>
<div class="clear-div"></div>  
<form name="adminForm" action="{$baseUrl}banners/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">{$BANNER_TITLE}</th>
            <th scope="col" class="rounded">{$BANNER_LINK}</th>
            <th scope="col" class="rounded">{$CATEGORY_TITLE}</th>
            <th scope="col" class="rounded">{$STATUS_TITLE}</th>
            <th scope="col" class="rounded">{$IMAGE_TITLE}</th>
            <th scope="col" class="rounded">{$EDIT_TITLE}</th>
            <th scope="col" class="rounded-q4">{$DELETE_TITLE}</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="7" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    
    {section name=i loop=$BANNER_LIST}
    {$START_LOOP=$START_LOOP+1}
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_{$START_LOOP}" value="{$BANNER_LIST[i].id}" onclick='isChecked(this);' /></td>
            <td>{$BANNER_LIST[i].title}</td>
            <td>{$BANNER_LIST[i].links}</td>
            <td>{$BANNER_LIST[i].catName}</td>
            <td>{$BANNER_LIST[i].status}</td>
            <td>
            {if $BANNER_LIST[i].images eq 'NULL'}
            <img src="{$imagePath}user-noimage.jpg"/>
            {else}
            <img src="{$imageUpload}thumb/{$BANNER_LIST[i].images}"/>
            {/if}
            </td>
            <td><a href="{$baseUrl}banners/add/id/{$BANNER_LIST[i].id}"><img src="{$imagePath}images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="{$baseUrl}banners/delete/id/{$BANNER_LIST[i].id}" class="ask"><img src="{$imagePath}images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        {/section}
    </tbody>
</table>
	 <a href="{$baseUrl}banners/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="{$NUM_ROW}"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        {$PAGINATION_STRING}
        
        </div> 
     