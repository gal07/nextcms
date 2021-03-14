
		<!-- ticker-news-section
			================================================== -->
		<section class="ticker-news">

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

		<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- single-post box -->
							<div class="single-post-box">

								<div class="title-post">
									<h1><?= $detail->title ?></h1>
									<ul class="post-tags">
                                        <li><i class="fa fa-clock-o"></i><?php $date=date_create($detail->time_create); echo date_format($date,"d M Y") ?></li>
                                        <li><i class="fa fa-user"></i>by <a href="#"><?= $detail->create_by ?></a></li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<div class="post-gallery">
									<img src="<?php echo base_url().$detail->path.'/'.$detail->imagename ?>" alt="">
									<span class="image-caption"><?= $detail->title ?></span>
								</div>

								<div class="post-content">

                                    <!-- Content -->
                                        <?= $detail->body ?>
                                    <!-- Content -->
									
								</div>

								<div class="post-tags-box">
									<ul class="tags-box">
										<li><i class="fa fa-tags"></i><span>Tags:</span></li>
                                        <li><a href="#"><?= $detail->namakategori ?></a></li>
									</ul>
								</div>

								<div class="share-post-box">
									<ul class="share-box">
										<li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a></li>
										<li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a></li>
									</ul>
								</div>

								<br>

								<div class="about-more-autor">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#about-autor" data-toggle="tab">About The Autor</a>
										</li>
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="about-autor">
											<div class="autor-box">
												<img src="<?php echo base_url().'assets/resource/client/';?>upload/users/avatar1.jpg" alt="">
												<div class="autor-content">
													<div class="autor-title">
														<h1><?= $detail->create_by ?></h1>
														<ul class="autor-social">
															<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
															<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
															<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
													<p>
														Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. 
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- carousel box -->
								<div class="carousel-box owl-wrapper">
									<div class="title-section">
										<h1><span style="border-bottom: 1px solid #8c52ff !important">You may also like</span></h1>
									</div>
									<div class="owl-carousel" data-num="3">
                                        
                                        <?php if($latestpost != NULL): ?>
                                            <?php foreach($latestpost as $value): ?>
                                                <div class="item news-post image-post3">
                                                <img src="<?php echo base_url().$value->path.'/'.$value->imagename ?>" alt="">
                                                    <div class="hover-box">
														<h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <h5>Data not found</h5>
                                        <?php endif; ?>

										


									</div>
								</div>
								<!-- End carousel box -->

							

							</div>
							<!-- End single-post box -->

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

							<div class="widget tags-widget">

								<div class="title-section">
									<h1><span style="border-bottom: 1px solid #8c52ff !important">Popular Tags</span></h1>
								</div>

								<ul class="tag-list">
                                    <?php if($category != NULL): ?>
										<?php foreach($category as $value): ?>
											<li><a href="<?= base_url().'category/'.$value->id ?>"><?= $value->category ?></a></li>
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