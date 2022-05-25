<section class="hero">
	<div class="hero__in">
		<div class="hero_bg">
			<div class="hero_bg_slider__wrap">
				<div class="hero_bg_slider heroSlider">
					<div class="swiper-wrapper">
						<?php 

							$slider = get_field("slider");
							$size = 'full'; // (thumbnail, medium, large, full или произвольный размер)

							if( $slider ): ?>
								<?php foreach( $slider as $slide ): ?>
									<div class="hero_bg_slider__item swiper-slide">
										<picture class="hero_bg_img">
                      <source srcset="<?php echo $slide['mobile_image']; ?>" type="image/webp">
											<img class="hero_bg_img__in" src="<?php echo $slide['image']; ?>" alt="" />
                    </picture>
									</div>
								<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="hero_bg_slider__dots heroDots"></div>
			</div>
		</div>
		<div class="hero__content hero__content--index_mod">
			<h1 class="hero__title">Nelle tue mani la tradizione <span>diventa design.</span></h1>
			<div class="hero__undertitle">Entra alla Artwood Academy</div>
			<div class="hero__btn_wrap"><a class="hero__btn" href="#">Scopri tutti i corsi</a></div>
		</div>
	</div>
</section>