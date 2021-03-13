

		<!-- heading-news-section
			================================================== -->
		<section class="heading-news">

			<div class="iso-call heading-news-box">

				<!-- ontop News -->
				<?php if($ontopnews != NULL): ?>

					<?php
					$count = 1;
					foreach($ontopnews as $value): ?>
						
						<?php if($count < 3): ?>
						
						<div class="news-post image-post <?= ($count == 1 ? 'default-size':'') ?>">
							<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
							<div class="hover-box">
								<div class="inner-hover">
									<a class="category-post <?= $value->color ?>" href="<?= base_url().'category/'.$value->category ?>"><?= $value->namakategori ?></a>
									<h2><a style="font-size:12px;" href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
										<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
									</ul>
									<p>Donec sd odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
								</div>
							</div>
						</div>

						<?php endif; ?>

					<?php
					$count++;
					endforeach; ?>

				<?php else: ?>
					<h5>Data Not Found</h5>
				<?php endif; ?>
				
				<!-- ontop News -->


				<!-- Top series -->
				<?php if($topseries != NULL): ?>

					<div class="image-slider snd-size">
						<span class="top-stories">Hot Topics</span>
						<ul class="bxslider">

							<?php foreach($topseries as $value): ?>
							<li>
								<div class="news-post image-post">
									<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
									<div class="hover-box">
										<div class="inner-hover">
											<a class="category-post <?= $value->color ?>" href="<?= base_url().'category/'.$value->category ?>"><?= $value->namakategori ?></a>
											<h2><a style="font-size:20px;" href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
												<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<?php endforeach; ?>

						</ul>
					</div>

				<?php else: ?>
					<h5>Data Not Found</h5>
				<?php endif;?>
				
				<!-- Top series -->


				<!-- ontop News -->
				<?php if($ontopnews != NULL): ?>

				<?php
				$count = 1;
				foreach($ontopnews as $value): ?>
					
					<?php if($count > 3): ?>
					
					<div class="news-post image-post <?= ($count == 0 ? 'default-size':'') ?>">
						<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
						<div class="hover-box">
							<div class="inner-hover">
								<a class="category-post <?= $value->color ?>" href="<?= base_url().'category/'.$value->category ?>"><?= $value->namakategori ?></a>
								<h2><a style="font-size:12px;" href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
								<ul class="post-tags">
									<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
									<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
								</ul>
								<p>Donec sd odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
							</div>
						</div>
					</div>

					<?php endif; ?>

				<?php
				$count++;
				endforeach; ?>

				<?php else: ?>
				<h5>Data Not Found</h5>
				<?php endif; ?>

				<!-- ontop News -->

						
			</div>

		</section>
		<!-- End heading-news-section -->

		<!-- ticker-news-section
			================================================== -->
		<section style="" class="ticker-news">

			<div class="container">
				<div class="ticker-news-box">
					<span class="breaking-news">breaking news</span>
					<span class="new-news">New</span>
					<ul id="js-news">
						<li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</a> Donec odio. Quisque volutpat mattis eros... </li>
						<li class="news-item"><span class="time-news">12:40 pm</span>  <a href="#">Dëshmitarja Abrashi: E kam parë Oliverin në turmë,</a> ndërsa neve na shpëtoi “çika Mille” </li>
						<li class="news-item"><span class="time-news">11:36 pm</span>  <a href="#">Franca do të bashkëpunojë me Kosovën në fushën e shëndetësisë. </a></li>
						<li class="news-item"><span class="time-news">01:00 am</span>  <a href="#">DioGuardi, kështu e mbrojti Kosovën në Washington, </a> para serbit Vejvoda </li>
					</ul>
				</div>
			</div>

		</section>
		<!-- End ticker-news-section -->

		<!-- features-today-section
			================================================== -->
		<section class="features-today">
			<div class="container">

				<div class="title-section">
					<h1><span style="border-bottom: 1px solid #8c52ff !important">Trending Now</span></h1>
				</div>

				<?php if($featuredpost != NULL): ?>

					<div class="features-today-box owl-wrapper">
						<div class="owl-carousel" data-num="4">

							<?php foreach($featuredpost as $value): ?>

							<div class="item news-post standard-post">
								<div class="post-gallery">
									<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
									<a class="category-post <?= $value->color ?>" href="<?= base_url().'category/'.$value->category ?>"><?= $value->namakategori ?></a>
								</div>
								<div class="post-content">
									<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
									<ul class="post-tags">
										<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
										<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
									</ul>
								</div>
							</div>
							<?php endforeach; ?>

						</div>
					</div>

				<?php else: ?>
					<h5>Data Not Found</h5>
				<?php endif; ?>

				
			</div>
		</section>
		<!-- End features-today-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- carousel box -->
							<div class="carousel-box owl-wrapper">

								<div class="title-section">
									<h1><span class="fashion">KSCOOP Headline</span></h1>
								</div>

								<div class="owl-carousel" data-num="2">
									<?php if($world != NULL): ?>

										<?php
									 # total array
									 $ta = sizeof($world);
									 $kelipatan = 4;
									 for($i= 1; $i <= $ta; $i++): ?>

										<?php if($bagi = $i % $kelipatan == 0 ): ?>

											<div class="item">
												<?php
												$count = 1;
												foreach($world as $value): ?>

												<?php if($i - $count == 3): ?>
													<div class="news-post image-post2">
														<div class="post-gallery">
															<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
															<div class="hover-box">
																<div class="inner-hover">
																	<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																	<ul class="post-tags">
																		<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																		<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												<?php endif; ?>

												<?php if($i - $count == 2): ?>
													<ul class="list-posts">
														<li>
															<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
															<div class="post-content">
																<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																</ul>
															</div>
														</li>
													</ul>
												<?php endif; ?>

												<?php if($i - $count == 1): ?>
												<ul class="list-posts">
													<li>
														<img src="<?= $value->path.'/'.$value->imagename ?>" alt="">
														<div class="post-content">
															<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
															<ul class="post-tags">
																<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
															</ul>
														</div>
													</li>
												</ul>
												<?php endif; ?>

												<?php if($i - $count == 0): ?>
													<ul class="list-posts">
														<li>
															<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
															<div class="post-content">
																<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																</ul>
															</div>
														</li>
													</ul>
												<?php endif; ?>

												<?php
												$count++;
												endforeach; ?>							
											</div>

										<?php endif; ?>

									<?php endfor; ?>

									<?php else: ?>

										<h5>Data not found</h5>

									<?php endif; ?>
									
								


								</div>

							</div>
							<!-- End carousel box -->

							<!-- carousel box -->

								<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span style="border-bottom: 1px solid #8c52ff !important">Gallery</span></h1>
									</div>

									<?php if($gallery != NULL): ?>


									<div class="owl-carousel" data-num="3">
										
										<?php foreach($gallery as $value): ?>
										<div class="item news-post image-post3">
											<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
											<div class="hover-box">
												<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
												</ul>
											</div>
										</div>
										<?php endforeach; ?>

									</div>


									<?php else: ?>
										<h5>Data Not Found</h5>
									<?php endif; ?>

								</div>

							<!-- End carousel box -->

							<!-- grid box -->
							<div class="grid-box">
								<div class="row">

									<div class="col-md-6">
										<div class="title-section">
											<h1><span class="fashion">Focus On</span></h1>
										</div>
										<?php if($fcson != NULL): ?>
												<div class="image-post-slider">
													<ul class="bxslider">
													<?php foreach($fcson as $value): ?>
														<li>
															<div class="news-post image-post2">
																<div class="post-gallery">
																<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
																	<div class="hover-box">
																		<div class="inner-hover">
																		<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																			<ul class="post-tags">
																				<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																				<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<?php endforeach; ?>
													</ul>
												</div>

										<?php else: ?>

											<h5>Data not found</h5>

										<?php endif; ?>
										
									</div>

									<div class="col-md-6">
										<div class="title-section">
											<h1><span class="fashion">Lifestyle</span></h1>
										</div>

										<div class="owl-wrapper">
											<div class="owl-carousel" data-num="1">

											<?php if($lifestyle != NULL): ?>

												<?php
												# total array
												$ta = sizeof($lifestyle);
												$kelipatan = 3;
												for($i= 1; $i <= $ta; $i++): ?>

													<?php if($bagi = $i % $kelipatan == 0 ): ?>
														<div class="item">
															<ul class="list-posts">
															<?php
															$count = 1;
															foreach( $lifestyle as $value ): ?>
																	<?php if($i - $count == 2): ?>

																		<li>
																			<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
																			<div class="post-content">
																				<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																				<ul class="post-tags">
																					<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																				</ul>
																			</div>
																		</li>
																	
																	<?php endif; ?>

																	<?php if($i - $count == 1): ?>

																		<li>
																			<img src="<?= $value->path.'/'.$value->imagename ?>" alt="">
																			<div class="post-content">
																				<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																				<ul class="post-tags">
																					<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																				</ul>
																			</div>
																		</li>

																	<?php endif; ?>

																	<?php if($i - $count == 0): ?>

																		<li>
																			<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
																			<div class="post-content">
																				<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																				<ul class="post-tags">
																					<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																				</ul>
																			</div>
																		</li>

																	<?php endif; ?>


																<?php
																$count++;
																endforeach; ?>
															</ul>
														</div>

													<?php endif;?>

												<?php endfor;?>
												

											<?php else: ?>
												<h5>Data not found</h5>
											<?php endif; ?>

											</div>
										</div>

									</div>

								</div>
							</div>
							<!-- End grid box -->


						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">

							<div class="widget social-widget">
								<div class="title-section">
									<h1><span style="border-bottom: 1px solid #8c52ff !important">Stay Connected</span></h1>
								</div>
								<ul class="social-share">
									<li>
										<a href="#" class="rss"><i class="fa fa-rss"></i></a>
										<span class="number">9,455</span>
										<span>Subscribers</span>
									</li>
									<li>
										<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
										<span class="number">56,743</span>
										<span>Fans</span>
									</li>
									<li>
										<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
										<span class="number">43,501</span>
										<span>Followers</span>
									</li>
									<li>
										<a href="#" class="google"><i class="fa fa-google-plus"></i></a>
										<span class="number">35,003</span>
										<span>Followers</span>
									</li>
								</ul>
							</div>

							<div class="widget features-slide-widget">
								<div class="title-section">
									<h1><span style="border-bottom: 1px solid #8c52ff !important">Featured Posts</span></h1>
								</div>
								<div class="image-post-slider">
									<ul class="bxslider">
										<?php if($fpost != NULL): ?>
										
											<?php foreach($fpost as $value): ?>
											<li>
												<div class="news-post image-post2">
													<div class="post-gallery">
														<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
														<div class="hover-box">
															<div class="inner-hover">
																<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
																<ul class="post-tags">
																	<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
																	<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<?php endforeach; ?>

										<?php else: ?>
											<h5>Data Not Found</h5>
										<?php endif; ?>

									
									</ul>
								</div>
							</div>

							<div class="widget subscribe-widget">
								<form class="subscribe-form">
									<h1>Subscribe to RSS Feeds</h1>
									<input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
									<button id="submit-subscribe">
										<i class="fa fa-arrow-circle-right"></i>
									</button>
									<p>Get all latest content delivered to your email a few times a month.</p>
								</form>
							</div>

						

						</div>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- masonry box -->
							<div class="masonry-box">

								<div class="title-section">
									<h1><span style="border-bottom: 1px solid #8c52ff !important">Latest Articles</span></h1>
								</div>

								<div class="latest-articles iso-call">

									<?php if($latestpost != NULL): ?>

										<?php 
										$count = 1;	
										foreach($latestpost as $value): ?>

											<?php if($count == 1): ?>

												<div class="news-post standard-post2 default-size">
													<div class="post-gallery">
														<img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
													</div>
													<div class="post-title">
														<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
														</ul>
													</div>
												</div>

											<?php else: ?>

												<div class="news-post standard-post2">
													<div class="post-gallery">
														<img src="<?= $value->path.'/'.$value->imagename ?>" alt="">
													</div>
													<div class="post-title">
														<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
														<ul class="post-tags">
															<li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
															<li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
														</ul>
													</div>
												</div>

											<?php endif; ?>

										<?php 
										$count++;
										endforeach; ?>

									<?php else: ?>

										<h5>Data not found</h5>

									<?php endif; ?>

								</div>

							</div>
							<!-- End masonry box -->

						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">

							<div class="widget tags-widget">

								<div class="title-section">
									<h1><span style="border-bottom: 1px solid #8c52ff !important">Popular Tags</span></h1>
								</div>

								<ul class="tag-list">
									<?php if($category != NULL): ?>
										<?php foreach($category as $value): ?>
											<li><a href="#"><?= $value->category ?></a></li>
										<?php endforeach;?>
									<?php else: ?>
										<h5>Data not found</h5>
									<?php endif; ?>
								</ul>

							</div>

						
						</div>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->
