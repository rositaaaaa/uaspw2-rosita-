<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container">
    <h2 class="mb-5">Checkout</h2>
    <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url('images/mawar34.png'); ?>" alt="" style="width: 150px; height:auto;">
                        <h6>Produk Spesial Kami</h6>
                    </td>
                    <td>
                        x2
                    </td>
                    <td>
                        Rp 50.000
                    </td>
                    <td>
                        Rp 55.000
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <h2 class="mb-5">Total: Rp 350.000</h2>
    <h2 class="mb-3">Data Pembeli</h2>
    <div class="mb-5">
        Rositaaaa <br />
        081345671895 <br />
        rositaa22@gmail.com
    </div>
    <h2 class="mb-3">Alamat Pengiriman</h2>
    <div class="mb-5">
        <span>Jl. Denpasar, Kota Sulawesi, Indonesia.</span>
    </div>
    <h2 class="mb-3">Metode Pembayaran</h2>
    <div class="mb-5">
        Transfer Bank <br />
        BCA, Tata <br />
        1376339816
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit') ?>" class="btn btn-success">Submit</a>
    </div>
</div>

<?= $this->endSection() ?>