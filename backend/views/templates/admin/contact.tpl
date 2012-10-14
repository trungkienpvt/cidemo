<script src="{$basePath}assets/ckeditor/ckeditor.js"></script>
<script src="{$basePath}assets/ckfinder/ckfinder.js"></script>
<h2>{$CONTACT_INFO_TITLE}</h2>
     
         <div class="form">
         <form action="{$baseUrl}contacts/sendmail" method="post" class="niceform1" enctype="multipart/form-data">
         
                <fieldset>
                	<dl>
                        <dt><label for="emailfrom">{$EMAIL_FROM_TITLE} <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="emailfrom" id="emailfrom" size="54" value="" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="emailto">{$EMAIL_TO_TITLE} :</label></dt>
                        <dd>
                        <input type="text" name="emailto"   id="emailto" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="subject">{$SUBJECT_TITLE} :</label></dt>
                        <dd>
                        <input type="text" name="subject"   id="subject" size="54" value="" />
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message">{$MESSAGE_TITLE} :</label></dt>
                        <dd>
                        {$MESSAGE_DATA}
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message">{$CAPTCHA_TITLE} :</label></dt>
                        <dd>
                        <img src="{$baseUrl}captcha/getimage2/" id="captcha" /> <a href= "javascript:void()" onclick="new_captcha('{$baseUrl}captcha/getimage2/')"> <img src="{$basePath}assets/images/refresh.png" /></a>
                        </dd>
                        
                    </dl>
                    <dl>
                        <dt><label for="message"></label></dt>
                        <dd>
                        <input type="text" name="captcha" id="captcha" />
                        </dd>
                        
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="{$SUBMIT_TITLE}" />
                     </dl>
                     
                </fieldset>
                
         </form>
         </div>  