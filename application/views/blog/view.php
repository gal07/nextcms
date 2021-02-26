<small><nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url();?>blog">Tips & Trik</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $title;?></li>
  </ol>
</nav></small>
<br>
<div class="container">
    <div class="row">
      <div class="col-md-9 view_normal">
        <?php foreach ($data as $key): ?>
        <small><?php echo $key['create_at'].' - '.$key['time'].' WIB - ';?></small>
        <?php foreach ($count as $var): ?>
          <small><?php echo 'Dilihat : '.number_format($var['readers']).' Kali';?></small>
        <?php endforeach; ?>
        <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?php echo $key['title'];?></h3>
          <img src="<?php echo base_url();?>assets/picture_blog/<?php echo $key['thumb'];?>" alt="<?php echo $key['title'];?>"  style="padding:20px;border:1px solid grey;" height="350" width="450"><br><br>
          <p class="card-text"><?php echo $key['text'];?></p>
        </div>
        </div>
      <?php endforeach; ?>
      </div>
      <div class="col-md-9 view_small">
        <?php foreach ($data as $key): ?>
        <div class="card">
        <div class="card-body">
            <small><?php echo $key['create_at'].' - '.$key['time'].' WIB  ';?></small><br>
          <?php foreach ($count as $var): ?>
            <small><?php echo 'Dilihat : '.number_format($var['readers']).' Kali';?></small>
          <?php endforeach; ?>
          <h5 class="card-title"><?php echo $key['title'];?></h5>
          <img src="<?php echo base_url();?>assets/picture_blog/<?php echo $key['thumb'];?>" alt="<?php echo $key['title'];?>" style="padding:20px;border:1px solid grey;" width="250" height="200"><br><br>
          <p class="card-text"><small><?php echo $key['text'];?></small></p>
        </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="col-md-3" >
        <?php echo br(1); ?>
        <h5 class="card-header list-group" style="text-align:center;border:1px solid #e0e0e0;">Tips Terbaru</h5>
        <ul class="list-group">
          <?php foreach ($update as $key):
            $bingung = sha1($key['id']).$key['id'];
            ?>
            <a href="<?php echo site_url('/blog/view/qTXrstu'.$bingung.'/'.url_title($key['title']));?>"><li class="list-group-item"><img src="<?php echo base_url();?>assets/picture_blog/<?php echo $key['thumb'];?>" height="40" width="60"><small><?php echo '  '.$key['title'];?></small></li></a>
          <?php endforeach; ?>
        </ul><br><br>
        <h5 class="card-header list-group" style="text-align:center;border:1px solid #e0e0e0;">Testimony Terbaru</h5>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://scontent-sea1-1.cdninstagram.com/vp/b27e936aeb856be73270e9b9c2d65afb/5B657F6D/t51.2885-15/e35/20225311_1923308047907159_4666771512324259840_n.jpg?se=7&ig_cache_key=MTU2NDUzNDk0OTg4NTA4OTUwNA%3D%3D.2" alt="First slide" height="350">
    </div>
    <?php foreach ($testi as $key): ?>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo $key['link'];?>" alt="Second slide" height="350">
      </div>
    <?php endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br><br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:50px;">
  Kritik dan Saran
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kritik Dan Saran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form name="myForm" action="<?php echo base_url();?>blog/KotakSuara" method="post" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="recipient-name" class="col-form-label">Email:</label>
        <input type="text" class="form-control" name="Email" id="Email">
        <div id="notif"><small>*Wajib di isi</small></div>
      </div>
      <div class="form-group">
        <label for="message-text" class="col-form-label">Saran / Kritik:</label>
        <textarea class="form-control"  name="saran" placeholder="................" id="saran"></textarea>
        <div id="notif1"><small>*Wajib di isi</small></div>
      </div>
      <div class="g-recaptcha" data-sitekey="6LdeP1QUAAAAAFD-8hZw4b0kRKModFRUqXniN4Rs"></div><br>
      </div>
      <div class="modal-footer">
        <input type="submit" name="submit" value="Send" class="btn btn-success btn-sm">
      </form>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
</div>
