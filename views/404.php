<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .error-container {
            min-height: calc(100vh - var(--nav-height));
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            text-align: center;
            background: var(--tokopedia-light);
        }

        .error-code {
            font-size: 6rem;
            font-weight: 700;
            color: var(--tokopedia-dark);
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 1.5rem;
            color: var(--tokopedia-gray);
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-message">Halaman yang Anda cari tidak ditemukan</div>
        <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
    </div>

    <?php include 'includes/pagefooter.php'; ?>
</body>
</html>