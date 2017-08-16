<section class="section services-area ptb-60">
	<div class="container">
		<div class="row mb-30">
			<div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
				<h2 class="section-title mb-20 font-22 t-uppercase">Dịch vụ chính</h2>
				<div class="heart-line"><img src="images/icon.png" alt="Awesome Image" /></div>
			</div>
		</div>
		<div class="row">
			<?php foreach ($list as $item) : ?>
				<div class="col-md-4">
					<div class="service-single">
						<?php $images  = json_decode($item->images);?>
						<div class="service-thumb"><a href="<?php echo $item->link; ?>"><img src="<?php echo $images->image_intro;?>" alt="<?php echo $item->title ?>" /></a></div>
						<div class="service-content">
							<h5 class="mb-10 t-uppercase color-theme"><a href="<?php echo $item->link; ?>"><?php echo $item->title ?></a></h5>
							<!--<p class="color-mid mb-15"><?php echo $item->introtext ?></p>-->
							
						</div>
					</div>
				</div>
			<?php endforeach; ?>	
		</div>
		<div class="text-center">
			<a href="#" class="btn btn-o btn-rounded">Xem thêm các dịch vụ khác</a>
		</div>	
	</div>
</section>