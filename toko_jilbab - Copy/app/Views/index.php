<?= $this->extend('template') ?> 

<?= $this->section('main') ?>
<div class="container p-4" style="background-color: pink; border-radius: 0 0 1rem 1rem;">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1 class="fs-3">Selamat Datang di Toko Jilbab </h1>
      <p class="fs-6">Kami menyediakan berbagai jenis jilbab cantik dan berkualitas.</p>
      <a href="<?= base_url() ?>" class="btn btn-success btn-sm mt-2">Lihat Produk</a>
    </div>
  </div>
</div>

<div class="container mb-5">
  <h2 class="mt-5">Daftar Jilbab</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/sorongjpeg.jpeg') ?>" class="card-img-top" alt="Jilbab Satin">
        <div class="card-body">
          <h5 class="card-title">Jilbab Sorong</h5>
          <p class="card-text">Harga: Rp 30.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/pasmina.jpeg') ?>" class="card-img-top" alt="Jilbab Katun">
        <div class="card-body">
          <h5 class="card-title">Jilbab pasmina</h5>
          <p class="card-text">Harga: Rp 55.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-lg border-0 h-100">
        <img src="<?= base_url('images/5e9ba5bc-d726-43f8-95a4-1d7968553dc1.jpg') ?>" class="card-img-top" alt="Jilbab Segi Empat">
        <div class="card-body">
          <h5 class="card-title">Jilbab Segi Empat</h5>
          <p class="card-text">Harga: Rp 50.000</p>
          <a href="#" class="btn btn-warning">Add to cart</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
