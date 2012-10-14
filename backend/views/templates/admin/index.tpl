{include file="header.tpl" title=foo}
<script language="javascript" type="text/javascript" src="{$jsPath}admin/niceforms.js"></script>
<script type="text/javascript" src="{$jsPath}admin/jconfirmaction.jquery.js"></script>
<script type="text/javascript" src="{$jsPath}admin/test.js"></script>
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

	<div class="header">
    <div class="logo"><a href="#"><img src="{$imagePath}images_admin/logo.gif" alt="" title="" border="0" /></a></div>
    {$RIGHT_HEADER}
    
    
    <div class="main_content">
    
                    <div class="menu">
                    {$MENU_TOP}
                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    
    
    <div class="right_content">
    {if $MESSAGE_SYSTEM_CONTENT neq '' }            
    <div id="messageSystem" class="{$MESSAGE_SYSTEM_TYPE}">{$MESSAGE_SYSTEM_CONTENT}</div>    
    {/if}
    {include file="$layout_content"}
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	<div class="footer">
    
    	{include file="footer.tpl"}
    
    </div>

</div>		</body>
</html>