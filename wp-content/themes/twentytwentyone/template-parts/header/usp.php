<?php
$usp_show = get_field('usp_show');
$usp_text = get_field('usp_text');
$usp_button_text = get_field('usp_button_text');
$usp_button_link = get_field('usp_button_link');
?>

<?php if($usp_show): ?>
	<div class="usp">
		<div class="usp__wrapper">
			<p class="usp__text"><?php echo $usp_text; ?></p>
			<a class="button--inline" href="<?php echo $usp_button_link; ?>"><?php echo $usp_button_text; ?></a>
		</div>
	</div>
<?php endif;?>