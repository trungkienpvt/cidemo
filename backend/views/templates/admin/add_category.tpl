{$JS_SCRIPT}
<h2>{$CATEGORY_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseAdmin}category/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name">{$CATEGORY_NAME} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" id="name" tabindex="1" size="54" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.catName}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="type">{$CATEGORY_TYPE} :</label></dt>
                        <dd>
                        
                        {html_options values=$LIST_CATEGORY_TYPE_VALUE output=$LIST_CATEGORY_TYPE_TEXT name=category_type id=category_type tabindex="2" }
                        
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="parent">{$CATEGORY_PARENT} :</label></dt>
                        <dd>
                        <div id="category_parent">
                        {html_options values=$LIST_CATGORY_VALUE output=$LIST_CATGORY_TEXT name=parent  selected=$MY_SELECT tabindex="3" }
                        </div>
                        </dd>
                        
                    </dl>
                    
                    <dl>
                        <dt><label for="color">{$SELECT_STATUS_TITLE} <span class="require">*</span> :</label></dt>
                        <dd>
                        {if $CATEGORY_DATA ne 0}
                        {if $CATEGORY_DATA.status eq 1}
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
                        <dt><label for="image">{$CATEGORY_TAB}:</label></dt>
                        <dd><input type="text" name="tab" id="tab" tabindex="6" /></dd>
                    </dl>
                     <dl class="submit">
                     
                    <input type="submit" name="submit" id="submit" value="{$SUBMIT_TITLE}" tabindex="7" />
                     </dl>
                     
                </fieldset>
                <input type="hidden" name="id" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.idCategory}{else}0{/if}"/>
                <input type="hidden" name="lerver" value="{if $CATEGORY_DATA ne 0}{$CATEGORY_DATA.lever}{else}0{/if}"/>
                
         </form>
         </div>  