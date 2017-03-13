

<form method="post">
	<?php wp_nonce_field('easy_sky_setting', '_easy_sky_setting_nonce')?>
	<p>メールアドレス</p>
	<input type="text" name="email" value="<?php echo $email?>" />
	<p>ご利用マウス</p>
	<input type="text" name="mouse" value="<?php echo $mouse?>" />
	<p>ご利用キーボード</p>
	<input type="text" name="keyboard" value="<?php echo $keyboard?>" />
	<input type="submit" name="submit" value="送信" />
</form>
