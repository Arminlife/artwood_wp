<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description') ?>" />

	<?php wp_head(); ?>

</head>

<body>
	<header class="header headerJs">
		<div class="header__in">
			<?php if (get_field('logo_header')) { ?>
				<a class="logo header__logo" href="<?php echo home_url(); ?>">
					<img class="logo__img" src="<?php the_field('logo_header'); ?>" alt="logo" />
				</a>
			<?php } ?>
			<div class="header__tagline">Design del legno e<br>falegnameria contemporanea</div>
			<div class="mobile_menu header__mobile_menu mobileMenu">
				<div class="mobile_menu__in">
					<nav class="nav mobile_menu__nav">
					<?php
						wp_nav_menu(array(
							'theme_location'  => 'header_menu',
							'menu'            => 'Main menu',
							'container'       => '',
							'container_class' => '',
							'menu_class'      => 'nav__list',
							'walker'          => new Custom_Nav_Walker()
						));
					?>
					</nav>
				</div>
			</div>
		</div>
		

	</header>

	<div class="wrapper">
		<div class="base">