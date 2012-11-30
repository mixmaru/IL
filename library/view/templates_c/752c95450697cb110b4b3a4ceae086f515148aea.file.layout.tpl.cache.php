<?php /* Smarty version Smarty-3.1.12, created on 2012-11-28 18:18:47
         compiled from "/var/www/html/library/view/templates/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144533409450b5d6f7b619d8-92201307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '752c95450697cb110b4b3a4ceae086f515148aea' => 
    array (
      0 => '/var/www/html/library/view/templates/layout.tpl',
      1 => 1353287989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144533409450b5d6f7b619d8-92201307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main_tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b5d6f7bad167_21311325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b5d6f7bad167_21311325')) {function content_50b5d6f7bad167_21311325($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate ('html_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<body>
	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	<div id="main_scroll">
		<div id="main_wrapper" class="clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['main_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ('side_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		</div>
	</div>
	
</body>
</html>
<?php }} ?>