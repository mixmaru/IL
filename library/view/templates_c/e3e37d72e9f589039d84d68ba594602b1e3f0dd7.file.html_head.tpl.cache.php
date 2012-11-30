<?php /* Smarty version Smarty-3.1.12, created on 2012-11-28 18:18:47
         compiled from "/var/www/html/library/view/templates/html_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9045251550b5d6f7bb1523-20269157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e37d72e9f589039d84d68ba594602b1e3f0dd7' => 
    array (
      0 => '/var/www/html/library/view/templates/html_head.tpl',
      1 => 1354063366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9045251550b5d6f7bb1523-20269157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b5d6f7c3b0e2_86947145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b5d6f7c3b0e2_86947145')) {function content_50b5d6f7c3b0e2_86947145($_smarty_tpl) {?><head>
<meta charset="UTF-8">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link type="text/css" rel="stylesheet" href="/css/base.css">
<?php if (isset($_smarty_tpl->tpl_vars['css']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['css']->value;?>

<?php }?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/base.js"></script>
<?php if (isset($_smarty_tpl->tpl_vars['js']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['js']->value;?>

<?php }?>
<?php }} ?>