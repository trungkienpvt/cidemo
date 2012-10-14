<script src="{$jsPath}admin/ajaxupload.js"></script>
{$SCRIPT_PREVIEW}
<h2>{$USER_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}users/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="fullname">{$FULLNAME_TITLE} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="fullname" id="fullname" size="54" tabindex="1" value="{if $USER_DATA ne 0}{$USER_DATA.fullname}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="ussername">{$USERNAME_TITLE} <span class="require">*</span> :</label></dt>
                        <dd>
                        <input type="text" name="username" id="username" size="54" tabindex="2" value="{if $USER_DATA ne 0}{$USER_DATA.username}{/if}" />
                        
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="email">{$EMAIL_TITLE} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="email" id="email" tabindex="3" size="54" value="{if $USER_DATA ne 0}{$USER_DATA.email}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">{$PASSWORD_TITLE} <span class="require">*</span> :</label></dt>
                        <dd><input type="password" name="password" id="password" tabindex="4" size="54" value="password" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="color">{$SELECT_STATUS_TITLE} <span class="require">*</span> :</label></dt>
                        <dd>
                        {if $USER_DATA ne 0}
                        {if $USER_DATA.status eq 1}
                            <input type="radio" name="status" tabindex="5" checked="checked" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="6" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {else}
                         	<input type="radio" name="status" tabindex="5" id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" tabindex="6" checked="checked" id="unactive" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                         {/if}
                         {else}
                         <input type="radio" name="status" tabindex="5"  id="active" value="1" /><label class="check_label">{$ACTIVE_TITLE}</label>
                            <input type="radio" name="status" id="unactive" tabindex="6" value="0" /><label class="check_label">{$UNACTIVE_TITLE}</label>
                          {/if}
                        </dd>
                        </dd>
                    </dl>
                    <dl>
                    <dt><label for="parent">{$ROLE_TITLE} :</label></dt>
                        <dd>
                        {html_options values=$LIST_ROLE_VALUE output=$LIST_ROLE_TEXT name=role selected=$MY_SELECT tabindex="7" }
                        </dd>
                    </dl>
                    <dl>
                        <dt><label for="image">{$UPLOAD_TITLE}:</label></dt>
                        <dd><input type="file" name="userfile" tabindex="8" id="userfile" /></dd>
                    </dl>
                    <dl>
                    <dt><label for="preview"></label></dt>
                    <div id="upload-div"></div>
                    <div id="loader_overlay" class="loader_overlay_BG"></div>
					<div id="loader" class="loading">Loading</div>
                    <div id='preview'>
                        {if $USER_DATA ne 0}
                        <img src="{$basePath}data/images/thumb/{$USER_DATA.images}"/>
                        {/if}
                        </div>
                </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" tabindex="9" value="{$SUBMIT_TITLE}" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="{if $USER_DATA ne 0}{$USER_DATA.idUser}{else}0{/if}"/>
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