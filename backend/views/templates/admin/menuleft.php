<div id="aside" class="box">

			<div class="padding box">

				<!-- Logo (Max. width = 200px) -->
				<p id="logo"><a href="#"><img src="<?php print $imagePath?>logo.gif" alt="Our logo" title="Visit Site" /></a></p>
				<!-- Create a new project -->
				<p id="btn-create" class="box"><a href="#"><span>Menu</span></a></p>

			</div> <!-- /padding -->

			<ul class="box">
			<?php 
			foreach ($left_menu as $row):
			?>
				<li><?php print $row?></li>
				<?php endforeach;?>
			</ul>

		</div> <!-- /aside -->