<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-danger text-center">
            <h1>Oops! Terjadi Kesalahan</h1>
            <p><?= isset($message) ? esc($message) : 'Kesalahan tidak diketahui.' ?></p>
            <a href="<?= base_url('/') ?>" class="btn btn-primary">Kembali ke Dashboard</a>
        </div>
    </div>
</body>

</html>