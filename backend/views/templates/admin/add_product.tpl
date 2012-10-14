<script src="{$basePath}assets/ckeditor/ckeditor.js"></script>
<script src="{$basePath}assets/ckfinder/ckfinder.js"></script>
<script src="{$jsPath}admin/ajaxupload.js"></script>
{$SCRIPT_PREVIEW}
<h2>{$PRODUCT_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}product/save" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title">{$NAME_TITLE} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" tabindex="1" id="name" size="54" value="{if $PRODUCT_DATA ne 0}{$PRODUCT_DATA.name}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="description">{$DESCRIPTION_TITLE} :</label></dt>
                        <dd>
                        {$DESCRIPTION_DATA}
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="description">{$CONTENT_TITLE} :</label></dt>
                        <dd>
                        {$CONTENT_DATA}
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="price">{$PRICE_TITLE} :</label></dt>
                        <dd>
                        <input type="text" name="price" tabindex="4"   id="price" value="{if $PRODUCT_DATA ne 0}{$PRODUCT_DATA.price}{/if}"/>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="ordering">{$ORDERING_TITLE} :</label></dt>
                        <dd>
                        <input type="text" name="ordering" tabindex="5" id="ordering" value="{if $PRODUCT_DATA ne 0}{$PRODUCT_DATA.ordering}{/if}" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="category">{$CATEGORY_TITLE} :</label></dt>
                        <dd>
                        {html_options values=$LIST_CATGORY_VALUE output=$LIST_CATGORY_TEXT name=category selected=$MY_SELECT tabindex="6" }
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="image">{$IMAGE_TITLE}:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" tabindex="7" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        {if $PRODUCT_DATA ne 0}
                        <img src="{$basePath}data/images/thumb/{$PRODUCT_DATA.images}"/>
                        {/if}
                        </div>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="{$SUBMIT_TITLE}" tabindex="8" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="{if $PRODUCT_DATA ne 0}{$PRODUCT_DATA.id}{else}0{/if}"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="{if $PRODUCT_DATA ne 0}{$PRODUCT_DATA.rid}{else}0{/if}"/>
                <input type="hidden" name="image_link" value="{if $PRODUCT_DATA ne 0}{$PRODUCT_DATA.images}{/if}"/>
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