<script src="{$jsPath}admin/ajaxupload.js"></script>
{$SCRIPT_PREVIEW}
<h2>{$MENU_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}menu/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name">{$MENU_NAME} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" tabindex="1" id="name" size="54" value="{if $MENU_DATA ne 0}{$MENU_DATA.menuName}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="name">{$MENU_LINK} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="url" tabindex="2" id="url" size="54" value="{if $MENU_DATA ne 0}{$MENU_DATA.url}{/if}" />
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="name">&nbsp</dt>
                        <dd><input type="button" onclick="showListArticle('{$baseUrl}articles/loadlist')" name="submit" tabindex="3" id="submit" value="{$IMPORT_TITLE}" /></dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="parent">{$MENU_PARENT} :</label></dt>
                        <dd>
                        <div id="category_parent">
                        {html_options values=$LIST_CATGORY_VALUE output=$LIST_CATGORY_TEXT name=parent  selected=$MY_SELECT tabindex="4" }
                        </div>
                        </dd>
                        
                    </dl>
                    
                    <dl>
                        <dt><label for="color">{$SELECT_STATUS_TITLE} <span class="require">*</span> :</label></dt>
                        <dd>
                        {if $MENU_DATA ne 0}
                        {if $MENU_DATA.status eq 1}
                            <input type="radio" name="status" tabindex="5" checked="checked" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="6" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {else}
                         	<input type="radio" name="status" tabindex="5" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="6" checked="checked" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {/if}
                         {else}
                         <input type="radio" name="status" tabindex="5" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="6" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                          {/if}
                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image">{$MENU_TAB}:</label></dt>
                        <dd><input type="text" name="tab" tabindex="7" id="tab" value="{if $MENU_DATA ne 0}{$MENU_DATA.tab}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="image">{$IMAGE_TITLE}:</label></dt>
                        <dd><input type="file" name="userfile" tabindex="8" id="userfile"  /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        {if $MENU_DATA ne 0}
                        <img src="{$basePath}data/images/thumb/{$MENU_DATA.images}"/>
                        {/if}
                        </div>
                    </dl>
                     <dl class="submit">
                     
                    <input type="submit" name="submit" tabindex="9" id="submit" value="{$SUBMIT_TITLE}" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="{if $MENU_DATA ne 0}{$MENU_DATA.idMenu}{else}0{/if}"/>
                <input type="hidden" name="lerver" value="{if $MENU_DATA ne 0}{$MENU_DATA.lever}{else}0{/if}"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="{if $MENU_DATA ne 0}{$MENU_DATA.rid}{else}0{/if}"/>
                <input type="hidden" name="image_link" value="{if $MENU_DATA ne 0}{$MENU_DATA.images}{/if}"/>
                <input type="hidden" name="translate" value="{if $TRANSLATE_STATUS ne ""}{$TRANSLATE_STATUS}{else}0{/if}"/>
                <input type="hidden" name="lang_translate" value="{if $LANGUAGE_TRANSLATE ne ""}{$LANGUAGE_TRANSLATE}{else}{/if}"/>
                
         </form>
         </div>  
{literal} 
<script type="text/javascript">
	$(document).ready(
		function() {
			$('#loader_overlay').hide();
			$('#loader').hide();
		}
	);
</script>
{/literal}           