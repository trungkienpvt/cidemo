<h2>{$ROLE_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}aclrole/save" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="name">{$ROLE_NAME} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="name" id="name" size="54" value="{if $ROLE_DATA ne 0}{$ROLE_DATA.name}{/if}" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="parent">{$ROLE_ORDER} :</label></dt>
                        <dd>
                        <input type="text" name="order" id="order" size="54" value="{if $ROLE_DATA ne 0}{$ROLE_DATA.roleorder}{/if}" />
                        </dd>
                        
                    </dl>
                    
                     <dl class="submit">
                     
                    <input type="submit" name="submit" id="submit" value="{$SUBMIT_TITLE}" />
                     </dl>
                    </fieldset>
                <input type="hidden" name="id" value="{if $ROLE_DATA ne 0}{$ROLE_DATA.id}{else}0{/if}"/>
                
         </form>
         </div>  