<link href="{$cssPath}stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{$cssPath}Tianyon.css"/>
<script src="{$jsPath}ajax.js"></script>
<script src="{$jsPath}ajax-dynamic-content.js"></script>
<script src="{$jsPath}ajax-tooltip.js"></script>
<div id="primary">
            <ul style="list-style:circle outside none;margin:10px;padding:0px">
            {foreach item=article from= $ARTICLE_LIST}
            <li>
			<a target="_self" href="{$baseUrl}{$MIDDLE_LINK}article/detail/rid/{$article.rid}" onmouseover="VietAd_ShowTooltip('{$baseUrl}{$MIDDLE_LINK}article/preview/rid/{$article.rid}'); return false" onmouseout="VietAd_HideTooltip();" class="fontsize12 color5">
                        {$article.title}
                    </a>            
			</li>                    
            {/foreach}
            </ul>
        </div>
        
        