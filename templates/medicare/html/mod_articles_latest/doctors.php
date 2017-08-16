   <section class="section team-area pt-80 pb-40 bg-gray">
                <div class="container">
                    <div class="team-members row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <h2 class="font-22 t-uppercase mb-15">Bác sĩ đầu ngành</h2>
                                <div class="heart-line mb-15">
                                    <img src="images/icon.png" alt="Awesome Image">
                                </div>
                                <div class="color-mid mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae recusandae iste delectus tempore provident aperiam.
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi neque laudantium, id vero facere quidem!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, .</p>
                                </div>
                                <a href="#" class="btn btn-o btn-rounded">Xem tất cả bác sĩ</a>
                            </div>
                        </div>
						<?php foreach ($list as $item) : ?>
							<?php $images  = json_decode($item->images);?>
							<div class="col-md-3 col-sm-6">
								<div class="single-member">
									<div class="single-member-header">
										<img src="<?php echo $images->image_intro;?>" alt="<?php echo $item->title ?>">
									   
									</div>
									<div class="single-member-content">
										<h5 class="mb-10 font-15 t-uppercase"><?php echo $item->title ?></h5>
										<h6 class="color-mid font-12 t-uppercase mb-5"><?php echo strip_tags($item->introtext);?></h6>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
                    
                    </div>
                </div>
            </section>