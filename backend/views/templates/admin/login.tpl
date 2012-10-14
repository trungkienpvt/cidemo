{include file="header.tpl" title=foo}
<script type="text/javascript" src="{$jsPath}admin/test.js"></script>
<script language="javascript" type="text/javascript" src="{$jsPath}admin/niceforms.js"></script>
<script type="text/javascript" src="{$jsPath}admin/jconfirmaction.jquery.js"></script>

{literal}
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
{/literal}
</head>
<body>
<div id="main_container">

	<div class="header_login">
    <div class="logo"><a href="#"><img src="{$imagePath}images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    {if $MESSAGE_SYSTEM_CONTENT neq '' }    
    <div style="clear:both"></div>        
    <div id="messageSystem" class="{$MESSAGE_SYSTEM_TYPE}">{$MESSAGE_SYSTEM_CONTENT}</div>    
    {/if}
    </div>
	     <div class="login_form">
         <h3>Admin Panel Login</h3>
         <form action="{$baseUrl}users/submitlogin" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="username">Username <span class="require">*</span> :</label></dt>
                        <dd><input type="text" name="username" tabindex="1" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="password">Password <span class="require">*</span>:</label></dt>
                        <dd><input type="password" name="password" id=""tabindex="2" size="54" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" tabindex="3" id="submit" value="Enter" />
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  
          
	
    
    <div class="footer_login">
    
    	<div class="left_footer_login">IN ADMIN PANEL | Powered by <a href="#">INDEZINER</a></div>
    	<div class="right_footer_login"><a href=""><img src="{$imagePath}images_admin/indeziner_logo.gif" alt="" title="" border="0" /></a></div>
    
    </div>

</div>		
</body>
</html>