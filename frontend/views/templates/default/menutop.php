<section id="nav" class="row">
    <div class="span12">
        <nav class="main">
            <ul class="horizontal unstyled clearfix">
	<li><a href="<?php echo $base_url ?>"><?php echo $objLang->line("HOME")?></a></li>
	<li ><a  href="<?php echo $base_url  ?>about-us"><?php echo $objLang->line("ABOUT_US")?></a></li>
    <li ><a  href="<?php echo $base_url  ?>contacts"><?php echo $objLang->line("CONTACT_US")?></a></li>
    <li ><a class="" href="<?php echo $base_url  ?>albums"><?php echo $objLang->line("ALBUM")?></a></li>
    <li class="dropdown">
    <a href="catalog"><span>Catalog</span></a>
		<ul class="dropdown">	
    <?php foreach($data as $row){
    	$catName = $obj_string->removeunicode($row['name']);
 		$catName = str_replace(' ',"-",$catName).'.html'; 
    	?>
			<li><a href="<?php echo $base_url . 'category/' .  $row['rid']?>/<?php print $catName?>"><?php print $row['name']?></a></li>
		<?php }?>
		</ul>
    </li>
    <li ><a  href="<?php echo $base_url ; ?>article"><?php echo $objLang->line("NEWS")?></a></li>
	
</ul>
</nav>
        <!-- /.main -->
    </div>
    <!-- /.span12 -->
</section>		
