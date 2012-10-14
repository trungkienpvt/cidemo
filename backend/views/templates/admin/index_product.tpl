<div class="title_page"><h2>{$PRODUCT_PAGE_TITLE}</h2></div ><div class="title_page_right">
<form name="frmsearch" action="{$baseUrl}product/search" method="post">
<input type="text" name="txtsearch" tabindex="1" id="txtsearch" placeholder="text search" />
<span>Category</span>    {html_options values=$LIST_CATGORY_VALUE output=$LIST_CATGORY_TEXT name=category tabindex="2"  }
</form>
</div>
<div style="float:right">
<a href="{$baseUrl}product/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
</div>
<div class="clear-div"></div>  
                    
<form name="adminForm" action="{$baseUrl}product/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">{$NAME_TITLE}</th>
            <th scope="col" class="rounded">{$DESCRIPTION_TITLE}</th>
            <th scope="col" class="rounded">{$IMAGE_TITLE}</th>
            <th scope="col" class="rounded">{$DATE_CREATE_TITLE}</th>
            <th scope="col" class="rounded">{$PRICE_TITLE}</th>
            <th scope="col" class="rounded">{$ORDERING_TITLE}</th>
            <th scope="col" class="rounded">{$CATEGORY_TITLE}</th>
            {foreach item=lang from=$ARR_LANG}
            <th scope="col" class="rounded">{$lang}</th>
            {/foreach}
            <th scope="col" class="rounded">{$EDIT_TITLE}</th>
            <th scope="col" class="rounded-q4">{$DELETE_TITLE}</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    	{$COLSPAN = 9+ $COUNT_LANG}
        	<td colspan="{$COLSPAN}" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    {section name=i loop=$PRODUCT_LIST}
    {$START_LOOP=$START_LOOP+1}
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_{$START_LOOP}" value="{$PRODUCT_LIST[i].id}" onclick='isChecked(this);' /></td>
            <td>{$PRODUCT_LIST[i].name}</td>
            <td>{$PRODUCT_LIST[i].description}</td>
            <td>
            {if $PRODUCT_LIST[i].images eq NULL}
            <img src="{$imagePath}no-image.jpg"/>
            {else}
            <img src="{$imageUpload}thumb/{$PRODUCT_LIST[i].images}"/>
            {/if}
            </td>
            <td>{$PRODUCT_LIST[i].createdate}</td>
            <td>{$PRODUCT_LIST[i].price}</td>
            <td>{$PRODUCT_LIST[i].ordering}</td>
            <td>{$PRODUCT_LIST[i].catName}</td>
            {foreach item=lang from=$ARR_LANG}
            <td>
            {if $PRODUCT_LIST[i][$lang] neq 0}
            {$TRANSLATED_STATUS}
            {else}
            <a href="{$baseUrl}product/add/id/{$PRODUCT_LIST[i].id}/translate/1/lang/{$lang}">{$TRANSLATE_STATUS}</a>
            {/if}
            </td>
            {/foreach}
            <td><a href="{$baseUrl}product/add/id/{$PRODUCT_LIST[i].id}"><img src="{$imagePath}images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="{$baseUrl}product/delete/id/{$PRODUCT_LIST[i].id}" class="ask"><img src="{$imagePath}images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        {/section}
    </tbody>
</table>
	 <a href="{$baseUrl}product/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="{$NUM_ROW}"/>
     <input type="hidden" value="0" name="boxchecked"> 
     
 </form>    
     
        <div class="pagination">
        {$PAGINATION_STRING}
        
        </div> 
     