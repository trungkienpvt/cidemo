<script src="{$jsPath}admin/ajaxupload.js"></script>
{$SCRIPT_PREVIEW}
<h2>{$CATEGORY_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}category_article/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name">{$CATEGORY_NAME} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" tabindex="1" id="name" size="54" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.catName}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="parent">{$CATEGORY_PARENT} :</label></dt>
                        <dd>
                        <div id="category_parent">
                        {html_options values=$LIST_CATGORY_VALUE output=$LIST_CATGORY_TEXT name=parent  selected=$MY_SELECT tabindex="2" }
                        </div>
                        </dd>
                        
                    </dl>
                    
                    <dl>
                        <dt><label for="color">{$SELECT_STATUS_TITLE} <span class="require">*</span> :</label></dt>
                        <dd>
                        {if $CATEGORY_DATA ne 0}
                        {if $CATEGORY_DATA.status eq 1}
                            <input type="radio" name="status" tabindex="3" checked="checked" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="4" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {else}
                         	<input type="radio" name="status" tabindex="3"  id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="4" checked="checked" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {/if}
                         {else}
                         <input type="radio" name="status" tabindex="3"  id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="4" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                          {/if}
                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image">{$CATEGORY_TAB}:</label></dt>
                        <dd><input type="text" name="tab" tabindex="5" id="tab" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="image">{$IMAGE_TITLE}:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" tabindex="6" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        {if $CATEGORY_DATA ne 0}
                        <img src="{$basePath}data/images/thumb/{$CATEGORY_DATA.images}"/>
                        {/if}
                        </div>
                    </dl>
                     <dl class="submit">
                     
                    <input type="submit" name="submit" id="submit" value="{$SUBMIT_TITLE}" tabindex="7" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.idCategory}{else}0{/if}"/>
                <input type="hidden" name="lerver" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.lever}{else}0{/if}"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.rid}{else}0{/if}"/>
                <input type="hidden" name="image_link" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.images}{/if}"/>
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