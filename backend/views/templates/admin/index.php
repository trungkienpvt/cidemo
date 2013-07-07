<?php print $PREDATA['HEADER']
?>
<body>
<!-- Menu -->
	<?php print $PREDATA['MENU_TOP']?>

<div id="main">
	<!-- Tray -->
	<div id="tray" class="box">
		<p class="f-left box">
			<?php print $this->lang->line("Online shopping")?>: <strong>CMS</strong>
		</p>
		<p class="f-right">User: <strong><a href="#">Administrator</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="<?php print $PREDATA['base_url']?>users/logout" id="logout">Log out</a></strong></p>
	</div> <!--  /tray -->
	<hr class="noscreen" />
	
	 <!-- /header -->
	<hr class="noscreen" />
	<!-- Columns -->
	<div id="cols" class="box">
		<!-- Aside (Left Column) -->
		<?php print $PREDATA['LEFT_CONTENT']?>		
		<hr class="noscreen" />
		<!-- Content (Right Column) -->
		<div id="content" class="box">
		<?php if($PREDATA['MESSAGE_SYSTEM_CONTENT']!=''):?>
		<p class="msg warning">
		<?php print $PREDATA['MESSAGE_SYSTEM_CONTENT'] ?></p>
	    <?php endif?>
    	<?php print $layout_content?>
		</div> <!-- /content -->
	</div> <!-- /cols -->
	<hr class="noscreen" />
	<!-- Footer -->
	<div id="footer" class="box">
		<p class="f-left">&copy; 2009 <a href="#">Your Company</a>, All Rights Reserved &reg;</p>
		<p class="f-right">Templates by <a href="http://www.adminizio.com/">Adminizio</a></p>
	</div> <!-- /footer -->
</div> <!-- /main -->

	
</body>
</html>