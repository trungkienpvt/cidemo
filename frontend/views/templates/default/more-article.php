<?php 
foreach($article_list as $article):
	$articleName = $obj_string->removeunicode($article['title']);
	$articleName = str_replace(' ',"-",$articleName).'.html'; 
?>
            <li>
			<a target="_self" href="<?php print $baseUrl . 'news/' . $article['rid'] .'/' . $articleName?>" onmouseover="VietAd_ShowTooltip('<?php print $baseUrl . 'article/preview/rid/' . $article['rid']?>'); return false" onmouseout="VietAd_HideTooltip();" class="fontsize12 color5">
                        <?php print $article['title']?>
                    </a>            
			</li>

<?php endforeach?>