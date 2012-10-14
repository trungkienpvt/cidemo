<ul>
	<li><a href="<?php echo $base_url ?>"><?php echo $objLang->line("HOME")?></a></li>
	<li ><a  href="<?php echo $base_url  ?>about-us"><?php echo $objLang->line("ABOUT_US")?></a></li>
    <li ><a  href="<?php echo $base_url  ?>contacts"><?php echo $objLang->line("CONTACT_US")?></a></li>
    <li ><a class="" href="<?php echo $base_url  ?>albums"><?php echo $objLang->line("ALBUM")?></a></li>
    <li >
						<div id="navBrands" class="active">
							<a  href="<?php echo $base_url ?>catalog" class="downArrow"><?php echo $objLang->line("CATALOG")?></a>
							<div class="nested">
								<div class="replace">
									<a href="<?php echo $base_url ?>catalog"><?php echo $objLang->line("CATALOG")?></a>
								</div>
								<ul>	
    <?php foreach($data as $row){
    	$catName = $obj_string->removeunicode($row['catName']);
 		$catName = str_replace(' ',"-",$catName).'.html'; 
    	?>
			<li><a href="<?php echo $base_url . 'category/' .  $row['rid']?>/<?php print $catName?>"><?php print $row['catName']?></a></li>
		<?php }?>
		
		</ul>
		</div>
		</div>
    
    </li>
    <li ><a  href="<?php echo $base_url ; ?>article"><?php echo $objLang->line("NEWS")?></a></li>
	
</ul>
                    