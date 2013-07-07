<?php /* Smarty version Smarty 3.1.4, created on 2013-03-18 06:05:41
         compiled from "../backend/views/templates/admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175865147112589fa95-67357505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9679457b60353d6635e0dc4d8867dd1a13d4f53' => 
    array (
      0 => '../backend/views/templates/admin\\index.tpl',
      1 => 1363114860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175865147112589fa95-67357505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU_TOP' => 1,
    'LEFT_CONTENT' => 1,
    'MESSAGE_SYSTEM_CONTENT' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5147112595dad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5147112595dad')) {function content_5147112595dad($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>'foo'), 0);?>


<body>
<div id="main">

	<!-- Tray -->
	<div id="tray" class="box">

		<p class="f-left box">

			<!-- Switcher -->
			<span class="f-left" id="switcher">
				<a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a>
				<a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="2 Columns" /></a>
			</span>

			Project: <strong>Your Project</strong>

		</p>

		<p class="f-right">User: <strong><a href="#">Administrator</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="#" id="logout">Log out</a></strong></p>

	</div> <!--  /tray -->

	<hr class="noscreen" />

	<!-- Menu -->
	<?php echo '/*%%SmartyNocache:175865147112589fa95-67357505%%*/<?php echo $_smarty_tpl->tpl_vars[\'MENU_TOP\']->value;?>
/*/%%SmartyNocache:175865147112589fa95-67357505%%*/';?>

	 <!-- /header -->

	<hr class="noscreen" />

	<!-- Columns -->
	<div id="cols" class="box">

		<!-- Aside (Left Column) -->
		<?php echo '/*%%SmartyNocache:175865147112589fa95-67357505%%*/<?php echo $_smarty_tpl->tpl_vars[\'LEFT_CONTENT\']->value;?>
/*/%%SmartyNocache:175865147112589fa95-67357505%%*/';?>
		

		<hr class="noscreen" />

		<!-- Content (Right Column) -->
		<div id="content" class="box">
		<?php echo '/*%%SmartyNocache:175865147112589fa95-67357505%%*/<?php if ($_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value!=\'\'){?>/*/%%SmartyNocache:175865147112589fa95-67357505%%*/';?>

		<p class="msg warning"><?php echo '/*%%SmartyNocache:175865147112589fa95-67357505%%*/<?php echo $_smarty_tpl->tpl_vars[\'MESSAGE_SYSTEM_CONTENT\']->value;?>
/*/%%SmartyNocache:175865147112589fa95-67357505%%*/';?>
</p>
	    <?php echo '/*%%SmartyNocache:175865147112589fa95-67357505%%*/<?php }?>/*/%%SmartyNocache:175865147112589fa95-67357505%%*/';?>

    	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['layout_content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			
		</div> <!-- /content -->

	</div> <!-- /cols -->

	<hr class="noscreen" />

	<!-- Footer -->
	<div id="footer" class="box">

		<p class="f-left">&copy; 2009 <a href="#">Your Company</a>, All Rights Reserved &reg;</p>

		<p class="f-right">Templates by <a href="http://www.adminizio.com/">Adminizio</a></p>

	</div> <!-- /footer -->

</div> <!-- /main -->
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});

</body>
</html><?php }} ?>