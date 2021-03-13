<!-- block-wrapper-section -->
        <section class="block-wrapper">
			<div class="container">

                <?php if($bycategory != NULL): ?>
				<!-- block content -->
				<div class="block-content non-sidebar">

					<!-- grid box -->
					<div class="grid-box">
						<div class="title-section">
							<h1><span class="fashion">Topics</span></h1>
						</div>

						<div class="row">
                        <?php
                        $count = 1;
                        foreach($bycategory as $value): ?>
                            <?php if($count <= 6): ?>
							<div class="col-md-4">
								<div class="news-post standard-post2">
									<div class="post-gallery">
									    <img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
                                        <a class="category-post <?= $value->color ?>" href="world.html"><?= $value->namakategori ?></a>
									</div>
									<div class="post-title">
                                        <h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
										<ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
                                            <li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
										</ul>
									</div>
									<div class="post-content">
										<p><?= $value->description ?></p>
										<a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
									</div>
								</div>
							</div>
                            <?php endif; ?>
                        <?php
                        $count++;
                        endforeach; ?>
						</div>
					</div>
					<!-- End grid box -->


					<!-- grid box -->
					<div class="grid-box">
						<div class="row">
                        <?php
                        $count = 1;
                        foreach($bycategory as $value): ?>
							 <?php if($count > 6): ?>
                                <div class="col-md-4">
                                    <div class="news-post standard-post2">
                                        <div class="post-gallery">
                                            <img src="<?= base_url().$value->path.'/'.$value->imagename ?>" alt="">
                                            <a class="category-post <?= $value->color ?>" href="world.html"><?= $value->namakategori ?></a>
                                        </div>
                                        <div class="post-title">
                                            <h2><a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>"><?= $value->title ?></a></h2>
                                            <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i><?php $date=date_create($value->time_create); echo date_format($date,"d M Y") ?></li>
                                                <li><i class="fa fa-user"></i>by <a href="#"><?= $value->create_by ?></a></li>
                                            </ul>
                                        </div>
                                        <div class="post-content">
                                            <p><?= $value->description ?></p>
                                            <a href="<?= base_url().'post/'.$value->id.'/'.$value->slug ?>" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php
                        $count++;
                        endforeach; ?>
						</div>
					</div>
					<!-- End grid box -->


				</div>
				<!-- End block content -->
                <?php else: ?>
                    <h5 class="text-center">No Data</h5>
                <?php endif; ?>

			</div>
		</section>
<!-- End block-wrapper-section -->