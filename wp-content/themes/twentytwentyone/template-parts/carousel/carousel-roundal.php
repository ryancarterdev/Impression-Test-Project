<?php
$carousel_show_roundal = get_field('carousel_show_roundal');
?>

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