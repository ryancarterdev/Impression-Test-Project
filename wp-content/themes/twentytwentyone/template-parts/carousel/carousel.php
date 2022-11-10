<?php
$carousel_title = get_field('carousel_title');
$carousel_text = get_field('carousel_text');
$carousel_primary_button_label = get_field('carousel_primary_button_label');
$carousel_primary_button_url = get_field('carousel_primary_button_url');
$carousel_secondary_button_label = get_field('carousel_secondary_button_label');
$carousel_secondary_button_url = get_field('carousel_secondary_button_url');
$carousel_image = get_field('carousel_image');
$carousel_show_roundal = get_field('carousel_show_roundal');
?>



<div class="carousel">
    <div class="carousel__items js-carousel">
        <div class="carousel__item">
            <div class="carousel__background">
                <video class="carousel__background-image" autoplay muted loop>
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
        <div class="carousel__item">
            <div class="carousel__background">
                <div class="carousel__background-image" style="background-image: url(../wp-content/themes/twentytwentyone/assets/images/header-min.png);"></div>
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
        <div class="carousel__item">
            <div class="carousel__background">
                <div class="carousel__background-image" style="background-image: url(../wp-content/themes/twentytwentyone/assets/images/header-min.png);"></div>
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
        <div class="carousel__item">
            <div class="carousel__background">
                <div class="carousel__background-image" style="background-image: url(../wp-content/themes/twentytwentyone/assets/images/header-min.png);"></div>
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
    </div>
    <?php if($carousel_show_roundal): ?>
        <div class="carousel__roundal">
            <div class="carousel__roundal-wrapper">
                <div class="carousel__roundal-value">
                    <span>20</span>
                    <div class="carousel__roundal-value-wrapper">
                        <span>%</span>
                        <span>off</span>
                    </div>
                </div>
                <div class="carousel__roundal-bottom-wrapper">
                    <span>all attractions</span>
                </div>
            </div>
        </div>
    <?php endif;?>
</div>