<?php /* Smarty version Smarty-3.1.12, created on 2012-11-28 18:18:47
         compiled from "/var/www/html/library/view/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160886517750b5d6f7c79195-32186801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e05a6e621ac5eeb6124ad15ed355e231ca5ae8ce' => 
    array (
      0 => '/var/www/html/library/view/templates/index.tpl',
      1 => 1354063366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160886517750b5d6f7c79195-32186801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50b5d6f7c96084_54655062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50b5d6f7c96084_54655062')) {function content_50b5d6f7c96084_54655062($_smarty_tpl) {?><div id="main">
	<div class="clearfix">
		<section id="profile_area">
			<div class="image">
				<img class="frofile_image" src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileImagePath(1);?>
">
				<div class="button">image変更</div>
			</div>
			<div class="text">
				<h2 class="user_name"><?php echo $_smarty_tpl->tpl_vars['user']->value->getName(1);?>
</h2>
				<p class="user_comment">
					<?php echo $_smarty_tpl->tpl_vars['user']->value->getProfileText(1);?>

				</p>
			</div>
		</section>
		<section id="img_upload_area">
			<form action="" method="post">
				<div id="file_drop_area">
					<p>ここに画像をドロップ<br><span>もしくは</span></p>
					<input id="file_input" type="file">
				</div>
				<dl id="add_tag_area">
					<dt>タグ登録</dt>
					<dd>
						<div class="tag_input_wrapper">
							<input id="tag_input" class="input_text" type="text" size="40"><input id="tag_add_btn" class="button" type="button" value="追加">
						</div>
						<ul class="add_tag_list">
							<li><img class="cancel_btn" src="/images/spacer.gif" alt="x">tag</li>
							<li><img class="cancel_btn" src="/images/spacer.gif" alt="x">タグ</li>
							<li><img class="cancel_btn" src="/images/spacer.gif" alt="x">たぐ</li>
							<li><img class="cancel_btn" src="/images/spacer.gif" alt="x">田具</li>
							<li><img class="cancel_btn" src="/images/spacer.gif" alt="x">だず</li>
						</ul>
						<p id="select_from_tag_btn">よく使われるタグから選ぶ</p>
					</dd>
				</dl>
				<ul id="tag_cloud">
					<li>css</li>
					<li>JavaScript</li>
					<li>PHP</li>
					<li>WordPress</li>
					<li>Objective C</li>
					<li>mySQL</li>
					<li>同窓会</li>
				</ul>
				<input id="img_submit" class="button" type="submit" value="アップロード">
			</form>
		</section>
	</div>
	<section id="library">
		<ul class="library_field">
			
		</ul>
		<div class="loading_image_wrapper">
			<img src="/images/loading.gif" alt="now loading...">
		</div>
	</section>
</div><?php }} ?>