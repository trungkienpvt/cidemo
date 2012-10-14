<script src="{$basePath}assets/ckeditor/ckeditor.js"></script>
<script src="{$basePath}assets/ckfinder/ckfinder.js"></script>
<script src="{$jsPath}admin/ajaxupload.js"></script>
<link href="{$cssPath}selectbox.css" rel="stylesheet" type="text/css"/>
{literal}
<script type="text/javascript">
	$(document).ready(function(){	

		if (!$.browser.opera) {
    
			// select element styling
			$('select.select').each(function(){
				var title = $(this).attr('title');
				if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
				$(this)
					.css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
					.after('<span class="select">' + title + '</span>')
					.change(function(){
						val = $('option:selected',this).text();
						$(this).next().text(val);
						})
			});

		};
		
	});
</script>
{/literal}
{$SCRIPT_PREVIEW}
<h2>{$ARTICLE_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}articles/save" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title">{$ARTICLE_TITLE} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="title" tabindex="1" id="title" size="54" value="{if $ARTICLE_DATA ne 0}{$ARTICLE_DATA.title}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="description">{$DESCRIPTION_TITLE} :</label></dt>
                        <dd>
                        <textarea type="text" name="description" tabindex="2"   id="description" size="54" >{if $ARTICLE_DATA ne 0}{$ARTICLE_DATA.description}{/if}</textarea>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="parent">{$CATEGORY_TITLE} :</label></dt>
                        <dd>
                        <div id="category">
                        {html_options values=$LIST_CATGORY_VALUE output=$LIST_CATGORY_TEXT name=category  selected=$MY_SELECT class='select' tabindex="3" }
                        </div>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="content">{$CONTENT_TITLE} :</label></dt>
                    </dl>
                    <dl>
                        <dd style="width:100%">
                       {$CONTENT_DATA} 
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="color">{$SELECT_STATUS_TITLE} <span class="require">*</span> :</label></dt>
                        <dd>
                        {if $ARTICLE_DATA ne 0}
                        {if $ARTICLE_DATA.status eq 1}
                            <input type="radio" name="status" checked="checked" id="active" tabindex="5" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" id="unactive" tabindex="6" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {else}
                         	<input type="radio" name="status" id="active" tabindex="5" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" checked="checked" tabinded="6" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {/if}
                         {else}
                         <input type="radio" name="status"  id="active" tabindex="5" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" id="unactive" tabindex="6" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                          {/if}
                        </dd>
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
                        {if $ARTICLE_DATA ne 0}
                        <img src="{$basePath}data/images/thumb/{$ARTICLE_DATA.image}"/>
                        {/if}
                        </div>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="{$SUBMIT_TITLE}" tabindex="8" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="{if $ARTICLE_DATA ne 0}{$ARTICLE_DATA.idArticle}{else}0{/if}"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                <input type="hidden" name="rid" value="{if $ARTICLE_DATA ne 0}{$ARTICLE_DATA.rid}{else}0{/if}"/>
                <input type="hidden" name="image_link" value="{if $ARTICLE_DATA ne 0}{$ARTICLE_DATA.image}{/if}"/>
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