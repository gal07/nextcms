<small><nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>blog">Tips & Trik</a></li>
  </ol>
</nav></small>
<div class="container">
<div class="normal_blog">
<h3 style="text-align:center;border-bottom:2px solid black; padding:5px;">ALB Tips & Trik</h3><br>
<div class="row">
  <div class="col sm-8">
    <?php foreach ($data as $key): ?>
      <div class="card">
        <div class="card-header">
          <h4 style="text-align:center;"><?php echo $key['title'];?></h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <img class="normal_blog_picture" src="<?php echo base_url();?>assets/picture_blog/<?php echo $key['thumb'];?>" alt="" height="120" width="170">
            </div>
            <div class="col-sm-9">
              <small class="description"><?php echo ' '.$key['description'];?></small><br>
              <br>
              <?php
                $bingung = sha1($key['id']).$key['id'];
                ?>
              <a href="<?php echo site_url('/blog/view/qTXrstu'.$bingung.'/'.url_title($key['title']));?>" class="btn btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
<div class="small_blog">
<h3 style="text-align:center;border-bottom:2px solid black; padding:5px;">ALB Tips & Trik</h3><br>
<div class="row">
  <div class="col sm-8">
    <?php foreach ($data as $key): ?>
      <div class="card">
        <div class="card-header">
          <h6 style="text-align:center;"><?php echo $key['title'];?></h6>
        </div>
        <div class="card-body">
          <img class="normal_blog_picture" src="<?php echo base_url();?>assets/picture_blog/<?php echo $key['thumb'];?>" alt="" height="120" width="170"><br>
          <p class="card-text"><small><?php echo word_limiter($key['description'],25);?></small></p>
          <?php
            $bingung = sha1($key['id']).$key['id'];
            ?>
          <a href="<?php echo site_url('/blog/view/qTXrstu'.$bingung.'/'.url_title($key['title']));?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
</div>
