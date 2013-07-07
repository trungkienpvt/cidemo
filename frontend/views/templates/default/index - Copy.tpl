{include file="header.tpl" title=foo}
<script language="javascript" type="text/javascript" src="{$jsPath}admin/niceforms.js"></script>
<script type="text/javascript" src="{$jsPath}admin/test.js"></script>
{literal}
<script type="text/javascript">
	
	$(document).ready(function() {

	});
	
</script>
{/literal}
</head>
<body>

	<div id="page">
		{include file="headerTop.tpl" title=foo}
		{if $MENU_LEFT eq 1}	
		<div id="productPage" class="contentWrap">
    <div id="innerWrap" class="clearFix">
    
    {include file="$layout_content"}
    {else}
    <div id="categoryPage" class="contentWrap">
    
    {if $MESSAGE_SYSTEM_CONTENT neq '' }            
    <div id="messageSystem" class="{$MESSAGE_SYSTEM_TYPE}">{$MESSAGE_SYSTEM_CONTENT}</div>    
    {/if}
    
<h1>{$PAGE_TITLE}</h1>
    <div id="innerWrap" class="clearFix">
    <div id="primary">
    {if $BANNER_TOP eq 1}
    {include file="banner-detail.tpl"}
    {/if}
    {include file="$layout_content"}
    </div>
    {$LEFT_CONTENT}
    
    {/if}
    
    </div>
</body></html>