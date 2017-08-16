<section class="section services-area ptb-10">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-10">
				<h2 class="section-title mb-20 font-22 t-uppercase"><?php echo $module->title?></h2>
				
			</div>
		</div>
		<div class="row">
			<?php foreach ($list as $item) : ?>
				<div class="col-md-2">
					<div class="service-single">
						<?php
							
							preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $item->introtext, $image);
						
						?>
						<div class="service-thumb"><a href="<?php echo $item->link; ?>"><img src="<?php echo $image['src'];?>" alt="<?php echo $item->title ?>" /></a></div>
						<div class="service-content">
							<h5 class="mb-10 t-uppercase color-theme"><a href="<?php echo $item->link; ?>"><?php echo $item->title ?></a></h5>
							<!--<p class="color-mid mb-15"><?php echo $item->introtext ?></p>-->
							
						</div>
					</div>
				</div>
			<?php endforeach; ?>	
		</div>
		<div class="text-center">
			<a href="#" class="btn btn-o btn-rounded">Xem thêm</a>
		</div>	
	</div>
</section>