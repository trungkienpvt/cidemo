<div class="title_page"><h2>{$CATEGORY_PAGE_TITLE}</h2></div ><div class="">
<a href="{$baseUrl}category_product/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
<div class="clear-div"></div>  
<form name="adminForm" action="{$baseUrl}category_product/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">{$CATEGORY_NAME}</th>
            <th scope="col" class="rounded">{$CATEGORY_STATUS}</th>
            <th scope="col" class="rounded">{$CATEGORY_IMAGE}</th>
            <th scope="col" class="rounded">{$CATEGORY_ORDER}</th>
            <th scope="col" class="rounded">{$CATEGORY_LANGUAGE}</th>
            {foreach item=lang from=$ARR_LANG}
            <th scope="col" class="rounded">{$lang}</th>
            {/foreach}
            <th scope="col" class="rounded">{$EDIT_TITLE}</th>
            <th scope="col" class="rounded-q4">{$DELETE_TITLE}</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    	{$COLSPAN = 7 + $COUNT_LANG}
        	<td colspan="{$COLSPAN}" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    {$STR_ROW}
    </tbody>
</table>
	 <a href="{$baseUrl}category_product/add/" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="{$NUM_ROW}"/>
     <input type="hidden" value="0" name="boxchecked">
     <input type="hidden" id="action_form" value="{$baseUrl}category_product/updateorder" name="action_form"/> 
 </form>    
     
        <div class="pagination">
        {$PAGINATION_STRING}
        
        </div> 
     