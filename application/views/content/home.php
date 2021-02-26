<!-- Produk -->

<br>
<div class="background_page">
<div class="container">
  <!-- <div class="alert alert-info alert-dismissible fade show" role="alert">
    <p class="text-center"><strong>Halo,Salam Narik!</strong> Essen ALB essen terbaik dari yang terbaik <a href="#produkre">Yuk di cek</a>!</p>
    <?php if ($this->session->flashdata('error_submit')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('error_submit').'</p>';?>
    <?php endif; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> -->

  <?php if (isset($_COOKIE['customer']) == $Cookies2[0]['salt']): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?php echo '<p class="text-center">Selamat Datang Di ALB Bro <strong>'.$Cookies2[0]['nama'].'</strong> Silahkan berbelanja <a href="#produkre">Disini</a></p>';?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php elseif(isset($_COOKIE['visitor']) == $Cookies[0]['device']): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?php echo '<p>Hai Ketemu lagi nih di ALB Essen</p>';?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

<!-- words -->
<div class="row words">
  <div class="col-sm-12">
    <?php if(is_array($kata)): ?>
    <?php foreach($kata as $string): ?>
      <h2><?php echo $string['header'];?></h2>
      <p><?php echo $string['body'];?></p>
    <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div><br><br>
<!-- Produk and description -->
<div id="produkre">
</div>
<div class="words1" id="produk">
<h2 style="text-align:center;border-bottom:3px solid #d0d0d0;">Produk</h2><br>
<div class="row" style="margin-left:95px;">
<?php
$i=1;$j=1;$k=1;$l=1;$m=1;
foreach ($produk as $key): ?>
<div class="card col-md-5 produk" style="width: 18rem;margin:10px;">
  <img class="card-img-top" src="<?php echo base_url();?>assets/picture_product/<?php echo $key['photo'];?>" alt="Card image cap" height="350" style="padding:50px;">
  <div class="card-body">
    <h5 class="card-title" style="text-align:center;font-weight:bold;"><?php echo $key['nama_barang'];?></h5>
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="heading<?php echo $i++;?>">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $j++;?>" aria-expanded="true" aria-controls="collapse<?php echo $k++;?>">
              <p class="text-center">Detail Kegunaan Essen</p>
            </button>
          </h5>
        </div>
        <div id="collapse<?php echo $l++;?>" class="collapse" aria-labelledby="heading<?php echo $m++;?>" data-parent="#accordion">
          <div class="card-body">
              <p class="card-text"><small><?php echo $key['description'];?></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><p style="text-align:center;"><?php echo 'Harga : Rp. '.$key['harga'];?></p></li>
  </ul>
  <div class="card-body">
    <!-- BATAS -->
    <input type="hidden" name="asolole" value="<?php echo $key['id'];?>">
    <button id="triger" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Beli</button>
  </div>
</div>
<?php endforeach; ?>
</div>
</div>
<div id="produkre">
</div>
<div class="small_produk" id="produk1">
<?php foreach ($produk as $key): ?>
<div class="card">
  <div class="card-header" style="text-align:center;">
    Produk ALB Essen
  </div>
  <div class="card-body contain_produk">
    <h5 class="card-title"><?php echo $key['nama_barang'];?></h5>
  <img src="<?php echo base_url();?>assets/picture_product/<?php echo $key['photo'];?>" alt="essen" height="100" width="120"><br>
  <small>Harga : Rp. <?php echo $key['harga'];?></small><br>
    <button id="triger" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Beli</button>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
      Deskripsi
    </button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><?php echo 'Deskripsi Produk';?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><ul> <li><big><span style="font-size:12px">ALB Merah &ndash;&nbsp;Mempercepat Proses kumpul nya ikan</span></big></li> <li><big><span style="font-size:12px">ALB Butek&nbsp; &ndash; Pengundang datang nya indukan</span></big></li> <li><big><span style="font-size:12px">Cairan ALB &ndash;&nbsp;Menambah Nafsu makan ikan yang galau&nbsp;</span></big></li> </ul> <p><big><span style="font-size:12px">Paket 1 :</span></big></p> <ul> <li><big><span style="font-size:12px">ALB merah 30ml harga 50rb</span></big></li> <li><big><span style="font-size:12px">ALB butek 30ml 65rb</span></big></li> <li><big><span style="font-size:12px">Cairan ALB 600ml harga 40rb</span></big></li> </ul> <p><big><span style="font-size:12px">Paket 2 :</span></big></p> <ul> <li><big><span style="font-size:12px">ALB merah 30ml harga 50rb</span></big></li> <li><big><span style="font-size:12px">ALB butek 10ml harga 25rb</span></big></li> <li><big><span style="font-size:12px">Cairan ALB 600ml harga 40rb</span></big></li> </ul> <p><big><span style="font-size:12px">Satuan :&nbsp;</span></big></p> <ul> <li><big><span style="font-size:12px">Essen ALB merah 30 ML &ndash;&nbsp;50rb</span></big></li> <li><big><span style="font-size:14px"><small>Cairan ALB 600ml &ndash; 40rb</small></span></big></li> <li><big><span style="font-size:14px"><small>Cairan ALB1.5 L &ndash; 100rb</small></span></big></li> <li><big><span style="font-size:14px"><small>Essen ALB Butek 10ml &ndash; 25rb</small></span></big></li> <li><big><span style="font-size:14px"><small>Essen ALB Butek 30ml &ndash; 65rb</small></span></big></li> </ul></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Limit -->
</div>
<?php endforeach; ?>
</div>
<br><br><br>
<!-- Testimony -->
<h2 style="text-align:center;border-bottom:3px solid #d0d0d0;">Testimony</h2><br><br>
<div class="row">
  <div class="testi col-sm-6">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://scontent.cdninstagram.com/vp/fe0dd5a61347b75f95803ff7220640c2/5B39FC49/t51.2885-15/s320x320/e35/29092599_1953807541601228_7123572790812213248_n.jpg" alt="First slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent.cdninstagram.com/vp/28165713ada233363788bd2c7b12de6f/5B558957/t51.2885-15/s320x320/e35/28752242_171088323542727_3161057107646611456_n.jpg" alt="Second slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent.cdninstagram.com/vp/d17eb24841bfc65f4666cc87bc49ed43/5B3AB016/t51.2885-15/s320x320/e35/29089722_468954196857265_1645220521614245888_n.jpg" alt="Third slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent.cdninstagram.com/vp/89506521380a7670d934ce45708bf084/5B34583A/t51.2885-15/s320x320/e35/29088620_1653453528106686_346246725666603008_n.jpg" alt="Third slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent.cdninstagram.com/vp/fe8d6d33fb972b5e2dec319ee4c4dc77/5B51CB38/t51.2885-15/s320x320/e35/28763617_228047994411824_301319731367903232_n.jpg" alt="Third slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent-sea1-1.cdninstagram.com/vp/358c71eae1c2c77e7cee4f07ff6a586a/5B5A6D2B/t51.2885-15/e35/21041148_140057526603267_6952181317706448896_n.jpg?se=7&ig_cache_key=MTU4NzE3MDg4OTI5MTgxMjE1OA%3D%3D.2" alt="First slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent-sea1-1.cdninstagram.com/vp/add24098e2c2897b21767fa62786690f/5B7E3CC7/t51.2885-15/e35/20766956_126782441276465_1708527055362064384_n.jpg?se=7&ig_cache_key=MTU4MDI4MjY2NjU0NDMyMTYwOA%3D%3D.2" alt="Second slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent-sea1-1.cdninstagram.com/vp/1c77945971ffc61fdd61b08b597fb340/5B608866/t51.2885-15/e35/20837050_450811405306039_3783138289603575808_n.jpg?se=7&ig_cache_key=MTU4MDI4MjM3MzgwNzAxNTg1NA%3D%3D.2" alt="Third slide" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div><br>
  </div>
  <div class="col-sm-6 testi2">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://scontent-sea1-1.cdninstagram.com/vp/358c71eae1c2c77e7cee4f07ff6a586a/5B5A6D2B/t51.2885-15/e35/21041148_140057526603267_6952181317706448896_n.jpg?se=7&ig_cache_key=MTU4NzE3MDg4OTI5MTgxMjE1OA%3D%3D.2" alt="First slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent-sea1-1.cdninstagram.com/vp/add24098e2c2897b21767fa62786690f/5B7E3CC7/t51.2885-15/e35/20766956_126782441276465_1708527055362064384_n.jpg?se=7&ig_cache_key=MTU4MDI4MjY2NjU0NDMyMTYwOA%3D%3D.2" alt="Second slide" height="500">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://scontent-sea1-1.cdninstagram.com/vp/1c77945971ffc61fdd61b08b597fb340/5B608866/t51.2885-15/e35/20837050_450811405306039_3783138289603575808_n.jpg?se=7&ig_cache_key=MTU4MDI4MjM3MzgwNzAxNTg1NA%3D%3D.2" alt="Third slide" height="500">
    </div>
  </div>
</div>
  </div>
</div>
</div><br>
<p style="text-align:center;"><a href="http://www.pictame.com/user/perangsanglele/4251033472/1588274477506245755_4251033472" class="btn btn-info">Testimoni Lain</a></p>


<br><br>
<h2 style="text-align:center;border-bottom:3px solid #d0d0d0;">Video Tips</h2><br><br>
  <div class="container">
  <div class="row VideoTips">
    <?php foreach ($yutub as $key): ?>
    <div class="col-sm-4">
        <iframe width="310" height="210" src="<?php echo $key['link'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="row VideoTips2">
    <?php foreach ($yutub as $key): ?>
    <div class="col-sm-9">
        <iframe width="480" height="210" src="<?php echo $key['link'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <?php endforeach; ?>
  </div>
  <div class="align-middle"><br>
  <p>Jangan lupa ya untuk subscribe channel kita,untuk terus update tentang cara meracik umpan yang joss..!</p>
  <script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channelid="ZuKd1tFXFbhpxVM75If3fQ" data-layout="full" data-count="default"></div>
  </div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $atr = array('onsubmit' => 'Validation(This)');
         echo form_open_multipart('halaman/send',$atr);?>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" name="nama" id="nama">
            <div id="notif"><small>*Wajib di isi</small></div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Alamat Pengiriman(Detil):</label>
            <textarea class="form-control"  name="alamat" placeholder="Nama Jalan,RT/RW,No Rumah,Kode Pos" id="alamat"></textarea>
            <div id="notif1"><small>*Wajib di isi</small></div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kecamatan:</label>
            <input type="text" class="form-control" name="kecamatan" id="kecamatan">
            <div id="notif2"><small>*Wajib di isi</small></div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kelurahan:</label>
            <input type="text" class="form-control" name="kelurahan" id="kelurahan">
            <div id="notif3"><small>*Wajib di isi</small></div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kabupaten/Kota:</label>
            <input type="text" class="form-control" name="kako" id="kako">
            <div id="notif4"><small>*Wajib di isi</small></div>
          </div>
          <label for="message-text" class="col-form-label">Barang Dibeli:</label>
          <select class="form-control form-control-sm" name="barang" id="barang">
            <option value="">Tidak Ada</option>
            <?php foreach ($list as $key): ?>
          <option value="<?php echo $key['id'];?>"><?php echo $key['nama_barang'];?></option>
          <?php endforeach; ?>
        </select>
        <div id="notif5"><small>*Wajib di isi</small></div>
        <br>
        <small>Setelah Isi semua data,klik tombol validasi untuk membuka tombol Kirim Order</small>
          <button type="button" name="button" id="check" class="btn btn-warning btn-sm" onclick="Check()">Validasi</button><br>
          <p>Ketentuan :</p>
          <small>* Isi Form Sesuai dengan ketentuan.</small><br>
          <small>* Barang Dikirim setelah bukti transfer diberikan pada kami.</small><br>
          <small>* Jika barang transfer lebih dari jam 17:00 maka barang akan dikirim esok hari.</small>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            <input type="submit" name="submit" value="Kirim" class="btn btn-danger btn-sm" disabled id="send">
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- batas2 -->
