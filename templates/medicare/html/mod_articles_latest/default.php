<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


	


  <section class="section latest-news-area ptb-60">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12 col-xs-center t-center mb-40">
                        
                            <h2 class="section-title mb-20 font-22 t-uppercase">Tin tức mới</h2>
                            <div class="heart-line">
                                <img src="images/icon.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 entry-details">
                            <figure class="entry-img">
                                <img src="assets/images/blog/news_01.jpg" alt="" />
                            </figure>
                            <div class="entry-content pt-30">
                                <span class="entry-info is-block mb-5">
                                    <span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2018</span>
                                <span><i class="fa fa-comment-o mr-5"></i> 23 Comments</span>
                                </span>
                                <h2 class="entry-title h3"><a href="blog-single.html">Get to know our staff and your Primary Care Provider</a></h2>
                            </div>
                        </div>
                        <div class="col-md-6 entry-list mb-30">
							<?php foreach ($list as $item) : ?>
								<div class="row row-rl-10 entry-list-item mb-20">
									<div class="col-xs-4">
										<figure class="entry-img">
											<img src="assets/images/blog/news_02.jpg" alt="" />
										</figure>
									</div>
									<div class="col-xs-8">
										<div class="entry-content">
											<span class="entry-info color-dark is-block mb-5">
												<span class="mr-10"><i class="fa fa-clock-o mr-5"></i> 21 Jan, 2018</span>
											<span><i class="fa fa-comment-o mr-5"></i> 23 Comments</span>
											</span>
											<h2 class="entry-title h5 mb-5"><a href="blog-single.html" class="color-theme">Praesent vitae ipsum sit amet</a></h2>
											<p class="color-mid">Pellentesque suscipit tincidunt suscipit. Nullam vestibulum...</p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>	
                      
                        </div>
                        <div class="col-xs-12 t-center">
                            <a href="blog-classic.html" class="btn btn-rounded">Xem các tin khác</a>
                        </div>
                    </div>
                </div>
            </section>