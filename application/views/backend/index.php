<div class="row">
	<div class="col-md-12">
		<div class="card">
			<?php
			if ($this->session->flashdata('alert') == 'login_sukses'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown"
					 style="position: absolute; width: 100%; z-index: 2" id="feedback"
					 role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Berhasil Login <?= $this->session->userdata('session_hak_akses'); ?>
					, <?= $this->session->userdata('session_nama'); ?>
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'sudah_login'):
				?>
				<div class="alert alert-warning alert-dismissible animated fadeInDown"
					 style="position: absolute; width: 100%; z-index: 2" id="feedback"
					 role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Sudah Login
				</div>
			<?php
			endif;
			?>
		</div>

		<!--<div class="row section-header" data-aos="fade-up">
		<div class="col-full">
			<h3 class="subhead">Gallery</h3>
<!--			<h1 class="display-1">We have everything you need to launch and grow a successful digital business.</h1>-->
		<!--</div>
	</div> <!-- end section-header -->

	<div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <!--<span class="text-cursive h5 text-red d-block">Our Gallery</span>-->
            <h2 style="font-family: bold;" class="text-cursive">Gallery</h2>
          </div>
        </div>

        <!--<div class="row">
          <div style="width: 100%; height: 650px; margin: 0 auto" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/1.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/1.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div style="width: 100%; height: 650px; margin: 0 auto" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/2.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/2.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div style="width: 25%;" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/3.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/3.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div style="width: 25%;" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/4.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/4.jpg" alt="Image" class="img-fluid"></a>
          </div>

          <div style="width: 25%;" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/5.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/5.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div style="width: 25%;" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/6.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/6.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div style="width: 25%;" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/7.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/7.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div style="width: 100%; height: 650px; margin: 0 auto" class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/8.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/8.jpg" alt="Image" class="img-fluid"></a> 
          </div>
        </div>-->

		<!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/frontend/images/sigaka/1.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="assets/frontend/images/sigaka/2.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="assets/frontend/images/sigaka/3.jpg" class="d-block w-100" alt="">
    </div>
	<div style="max-width: auto;" class="carousel-item">
      <img src="assets/frontend/images/sigaka/10.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->
<div class="site-section">
      <div class="container">
        <div class="row mb-5">
					
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">PUSKODAL APPLICATION</span>
						<img style="width: 200px;position:relative;bottom:20px;" src="<?= base_url() ?>assets/images/logo/puskodal4.png" alt="branding logo">
						<h2 style="font-family: bold; position:relative; bottom:15px;" class="text-black">Pusat Komando dan Pengendalian Sekretariat Daerah Provinsi Jawa Barat</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/1.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/1.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/2.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/2.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/3.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/3.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-3 mb-4">
            <a href="assets/frontend/images/sigaka/4.jpg" data-fancybox="gal"><img src="assets/frontend/images/sigaka/4.jpg" alt="Image" class="img-fluid"></a>
          </div>

          <!--<div class="col-md-3 mb-4">
            <a href="../../assets/style/images/img_5.jpg" data-fancybox="gal"><img src="../../assets/style/images/img_5.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-3 mb-4">
            <a href="../../assets/style/images/img_2.jpg" data-fancybox="gal"><img src="../../assets/style/images/img_3.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-3 mb-4">
            <a href="../../assets/style/images/img_2.jpg" data-fancybox="gal"><img src="../../assets/style/images/img_2.jpg" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-md-3 mb-4">
            <a href="../../assets/style/images/img_1.jpg" data-fancybox="gal"><img src="../../assets/style/images/img_1.jpg" alt="Image" class="img-fluid"></a> 
          </div>-->
        </div>
      </div>
    </div>

      </div>
    </div>

	
	<!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="top: 40px; width: 150vh;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/frontend/images/sigaka/1.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="assets/frontend/images/sigaka/2.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="assets/frontend/images/sigaka/3.jpg" class="d-block w-100" alt="">
    </div>
	<div class="carousel-item">
      <img src="assets/frontend/images/sigaka/4.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->

	</div>
</div>

