<div class="row">
    <div class="span12">
        <h1 class="featured"><?php print $this->lang->line("Catalog")?></h1>
    </div>
    <!-- /.span12 -->
</div>
<!-- /.row -->
<div class="row products masonry">
	<?php foreach($CATEGORY_LIST as $row):?>
<div class="masonry-item product span3">
    <div class="image">
        <a href="<?php print $PREDATA['base_url']?>category/<?php print $row['rid']?>/<?php print $row['name']?>" title="<?php print $row['name']?>">
            <img src="<?php print $PREDATA['imageUpload']?>thumbx/<?php print $row['images']?>" alt="shirt"/>
        </a>
    </div>
    <!-- /.image -->
    <div class="details">
        <a href="<?php print $PREDATA['base_url']?>category/<?php print $row['rid']?>/<?php print $row['name']?>">
            <h4 class="title"><?php print $row['name']?></h4>
        </a>
    </div>
    <!-- /.details -->
</div>	    					
<?php endforeach;?>
<?php print $PAGINATION_STRING ?>
</div>       

     