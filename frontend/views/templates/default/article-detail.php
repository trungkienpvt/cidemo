<link href="<?php print $PREDATA['cssPath']?>stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php print $PREDATA['cssPath']?>Tianyon.css"/>
<script src="<?php print $PREDATA['jsPath']?>ajax.js"></script>
<script src="<?php print $PREDATA['jsPath']?>ajax-dynamic-content.js"></script>
<script src="<?php print $PREDATA['jsPath']?>ajax-tooltip.js"></script>
<script type="text/javascript" src="<?php print $PREDATA['jsPath']?>stickytooltip.js"></script>
<div id="primary">

<div class="span12">
            <div align="justify"><?php print $ARTICLE['content']?></div>
			<div id="primaryFooter">
                <a class="icon upArrow" href="#">More article</a>
            </div>			      
                    <ul style="list-style:circle outside none;margin:10px;padding:0px">
                                
            	<?php print $MORE_ARTICLE?>
            </ul>
 	</div>
 	
</div>
        
        