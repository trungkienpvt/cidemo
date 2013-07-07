<link href="<?php print $PREDATA['cssPath']?>stickytooltip.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php print $PREDATA['cssPath']?>Tianyon.css"/>
<script src="<?php print $PREDATA['jsPath']?>ajax.js"></script>
<script src="<?php print $PREDATA['jsPath']?>ajax-dynamic-content.js"></script>
<script src="<?php print $PREDATA['jsPath']?>ajax-tooltip.js"></script>
<?php echo form_open('',array('name'=>'formPreview','id'=>'formPreview'));?>
<div id="primary">
<div class="span12">
            <ul style="list-style:circle outside none;margin:10px;padding:0px">
            <?php print $ARTICLE?>
            </ul>
        </div>
</div>
<?php echo form_close()?>        
        
        