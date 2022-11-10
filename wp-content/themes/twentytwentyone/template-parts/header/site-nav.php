<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<div class="header">
		<div class="header__wrapper">
			<div class="header__mobile-button">
				<button class="header__navigation-open"></button>
			</div>
			<?php get_template_part( 'template-parts/header/site-branding' ); ?>
			<div class="navigation">
				<nav class="navigation__wrapper">
				<button class="navigation__close">close menu</button>
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'menu-wrapper',
							'container_class' => 'primary-menu-container',
							'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb'     => false,
						)
					);
					?>
					<div class="navigation__buttons">
						<a href="#" class="button button--primary">make a booking</a>
					</div>
				</nav>
			</div>
			<div class="header__mobile-options">
				<a class="button button--secondary" href="#">make a booking</a>
				<a class="header__button header__button--account">Account Area</a>
				<a class="header__button header__button--basket">Basket</a>
			</div>
		</div>
	</div>
	<?php
endif;
