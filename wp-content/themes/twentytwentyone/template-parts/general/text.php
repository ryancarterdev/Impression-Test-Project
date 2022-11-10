
<?php
$text_block_text = get_field('text_block_text');
?>

<?php if($text_block_text): ?>
<div class="text-block">
    <div class="text-block__wrapper">
        <h2 class="text-block__text"><?php echo $text_block_text; ?></h2>
    </div>
</div>
<?php endif;?>