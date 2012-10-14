<div class="title_page"><h2>{$ARTICLE_PAGE_TITLE}</h2></div ><div class="">
<a href="{$baseUrl}articles/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
<a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>                    
</div>
<div class="clear-div"></div>  
<form name="adminForm" action="{$baseUrl}articles/delete" method="post">                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"><input type="checkbox" style='float:left'  onclick="checkAllRow(this);" /></th>
            <th scope="col" class="rounded">{$TITLE_TITLE}</th>
            <th scope="col" class="rounded">{$DESCRIPTION_TITLE}</th>
            <th scope="col" class="rounded">{$CATEGORY_TITLE}</th>
            <th scope="col" class="rounded">{$IMAGE_TITLE}</th>
            <th scope="col" class="rounded">{$DATE_CREATE_TITLE}</th>
            {foreach item=lang from=$ARR_LANG}
            <th scope="col" class="rounded">{$lang}</th>
            {/foreach}
            <th scope="col" class="rounded">{$EDIT_TITLE}</th>
            <th scope="col" class="rounded-q4">{$DELETE_TITLE}</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
    		{$COLSPAN = 8+ $COUNT_LANG}
        	<td colspan="{$COLSPAN}" class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    
    {*foreach item=user from=$ARTICLE_LIST*}
    {section name=i loop=$ARTICLE_LIST}
    {$START_LOOP=$START_LOOP+1}
    	<tr>
        	<td><input type="checkbox" name="id[]" id="c_{$START_LOOP}" value="{$ARTICLE_LIST[i].idArticle}" onclick='isChecked(this);' /></td>
            <td>{$ARTICLE_LIST[i].title}</td>
            <td>{$ARTICLE_LIST[i].description}</td>
            <td>{$ARTICLE_LIST[i].catName}</td>
            <td>
            {if $ARTICLE_LIST[i].image eq NULL}
            <img src="{$imagePath}no-image.jpg"/>
            {else}
            <img src="{$imageUpload}thumb/{$ARTICLE_LIST[i].image}"/>
            {/if}
            </td>
            <td>{$ARTICLE_LIST[i].datetime}</td>
            {foreach item=lang from=$ARR_LANG}
            <td>
            {if $ARTICLE_LIST[i][$lang] neq 0}
            {$TRANSLATED_STATUS}
            {else}
            <a href="{$baseUrl}articles/add/id/{$ARTICLE_LIST[i].idArticle}/translate/1/lang/{$lang}">{$TRANSLATE_STATUS}</a>
            {/if}
            </td>
            {/foreach}
            <td><a href="{$baseUrl}articles/add/id/{$ARTICLE_LIST[i].idArticle}"><img src="{$imagePath}images_admin/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="{$baseUrl}articles/delete/id/{$ARTICLE_LIST[i].idArticle}" class="ask"><img src="{$imagePath}images_admin/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
        {/section}
      {* /foreach*}           
    </tbody>
</table>
	 <a href="{$baseUrl}articles/add" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_red" onclick="validateDelete('{$PLEASE_SELECT}');"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>
     <input type="hidden" id="number_row" name="number_row" value="{$NUM_ROW}"/>
     <input type="hidden" value="0" name="boxchecked"> 
 </form>    
     
        <div class="pagination">
        {$PAGINATION_STRING}
        
        </div> 
     