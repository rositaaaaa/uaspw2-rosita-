<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2 class="mb-3">Keranjang Belanja</h2>
    <div class="mb-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url('images/pasmina.jpeg'); ?>" alt="Mawar" style="width: 150px; height:auto;">
                        <h6>Pasmina</h6>
                    </td>
                    <td>x1</td>
                    <td>Rp 150.000</td>
                    <td>Rp 150.000</td>
                    <td>
                        <a href="<?= base_url('cart/delete') ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h4 class="mb-3">Total Belanja: Rp 150.000</h4>
    <div class="mb-3">
        <a href="<?= base_url('checkout') ?>" class="btn btn-primary">Lanjut ke Pembayaran</a>
    </div>
</div>

<?= $this->endSection() ?>
