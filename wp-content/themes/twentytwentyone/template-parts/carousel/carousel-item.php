<?php
$carousel_title = get_field('carousel_title');
$carousel_text = get_field('carousel_text');
$carousel_primary_button_label = get_field('carousel_primary_button_label');
$carousel_primary_button_url = get_field('carousel_primary_button_url');
$carousel_secondary_button_label = get_field('carousel_secondary_button_label');
$carousel_secondary_button_url = get_field('carousel_secondary_button_url');
$carousel_image = get_field('carousel_image');
?>

<div class="carousel__item">
    <div class="carousel__background">
        <video class="carousel__background-image" style="background-image: url(../wp-content/themes/twentytwentyone/assets/images/header-min.png);" autoplay muted loop>
            <source src="../wp-content/themes/twentytwentyone/assets/images/homepage-video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="carousel__wrapper">
            <h1 class="carousel__header"><?php echo $carousel_title; ?></h1>
            <p class="carousel__text"><?php echo $carousel_text; ?></p>
            <div class="carousel__buttons">
                <a href="<?php echo $carousel_primary_button_url; ?>" class="button button--primary button--animate"><?php echo $carousel_primary_button_label; ?></a>
                <a href="<?php echo $carousel_secondary_button_url; ?>" class="button button--secondary"><?php echo $carousel_secondary_button_label; ?></a>
            </div>
        </div>
    </div>
</div>