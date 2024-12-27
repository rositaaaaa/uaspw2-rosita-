<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>
    <h2 class="mb-5">Dashboard</h2>

    <div class="row mb-5">
        <div class="col-8">
            <div class="rounded bg-success-subtle p-5">
                <h5>Total Pendapatan</h5>
                <h2>Rp 500.000.000</h2>
            </div>
        </div>
        <div class="col-4">
            <div class="rounded bg-secondary-subtle p-5">
               <h5>Total Transaksi</h5>
               <h2>1234</h2>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>