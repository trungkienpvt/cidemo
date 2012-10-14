<style type="text/css">
{literal}
{/literal}
</style>
<script src="{$jsPath}admin/ajaxupload.js"></script>
{$SCRIPT_PREVIEW}
<h2>{$BANNER_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}banners/save" method="post" name ="formsubmit" id ="formsubmit" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="title">{$BANNER_TITLE} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="title" tabindex="1" id="title" size="54" value="{if $BANNER_DATA ne 0}{$BANNER_DATA.title}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="links">{$LINK} :</label></dt>
                        <dd>
                        <input type="text" name="link" tabindex="2"   id="link" size="54" value="{if $BANNER_DATA ne 0}{$BANNER_DATA.links}{/if}" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="parent">{$CATEGORY_TITLE} :</label></dt>
                        <dd>
                        <div id="category">
                        {html_options values=$LIST_CATGORY_VALUE output=$LIST_CATGORY_TEXT name=category  selected=$MY_SELECT tabindex="3" }
                        </div>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="color">{$SELECT_STATUS_TITLE} <span class="require">*</span> :</label></dt>
                        <dd>
                        {if $BANNER_DATA ne 0}
                        {if $BANNER_DATA.status eq 1}
                            <input type="radio" name="status" tabindex="4" checked="checked" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="5" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {else}
                         	<input type="radio" name="status" tabindex="4" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="5" checked="checked" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {/if}
                         {else}
                         <input type="radio" name="status" tabindex="4" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="5" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                          {/if}
                        </dd>
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image">{$UPLOAD_TITLE}:</label></dt>
                        <dd><input type="file" name="userfile" id="userfile" tabindex="6" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="preview"></label></dt>
                        <div id="upload-div"></div>
                        <div id="loader_overlay" class="loader_overlay_BG"></div>
						<div id="loader" class="loading">Loading</div>
                        <div id='preview'>
                        {if $BANNER_DATA ne 0}
                        <img src="{$basePath}data/images/thumb/{$BANNER_DATA.images}"/>
                        {/if}
                        
                        
                        </div>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="btnsubmit" id="btnsubmit" value="{$SUBMIT_TITLE}" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="{if $BANNER_DATA ne 0}{$BANNER_DATA.id}{else}0{/if}"/>
                <input type="hidden" name="previewphoto" id="previewphoto" value=""/>
                
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