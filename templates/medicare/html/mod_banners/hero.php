  <section class="section hero-area" data-bg-img="assets/images/slider/05.jpg">
                <div class="hero-slider owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000">
					<?php foreach ($list as $item) : ?>
						<?php $imageurl = $item->params->get('imageurl'); ?>
						<?php $baseurl = strpos($imageurl, 'http') === 0 ? '' : JUri::base(); ?>
						<div class="hero-slider-item" data-bg-img="<?php echo $baseurl . $imageurl; ?>">
							<div class="hero-overlay">
								<div class="hero-overlay-wrapper">
									<div class="pos-tb-center hero-overlay-inner">
										<div class="container t-xs-center t-md-left">
											<div class="row row-tb-20">
												<div class="col-md-8">
													<h3 class="mb-10"><?php echo $item->name?></h3>
													<?php echo $item->description?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach;?>
                    
                  
                </div>
            </section>