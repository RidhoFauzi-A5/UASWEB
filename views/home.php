<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --tokopedia-green: #42B549;
            --tokopedia-dark: #03AC0E;
            --tokopedia-light: #F3FFF4;
            --tokopedia-gray: #6C727C;
            --tokopedia-white: #FFFFFF;
            --nav-height: 64px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #F5F5F5;
            color: #212121;
        }

        .featured-hero {
            padding-top: var(--nav-height);
            min-height: 60vh;
            background: linear-gradient(135deg, var(--tokopedia-light), #FFFFFF);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .featured-content {
            padding: 4rem 8%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .featured-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--tokopedia-dark);
            line-height: 1.2;
        }

        .featured-description {
            font-size: 1.2rem;
            color: var(--tokopedia-gray);
            margin-bottom: 2.5rem;
            max-width: 600px;
            line-height: 1.6;
        }

        .btn {
            padding: 0.875rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: var(--tokopedia-green);
            color: white;
        }

        .btn-primary:hover {
            background: var(--tokopedia-dark);
            transform: translateY(-2px);
        }

        .content-row {
            padding: 2rem 8%;
            margin-bottom: 2rem;
            background: var(--tokopedia-white);
        }

        .row-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .row-header h2 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #212121;
        }

        .see-all {
            color: var(--tokopedia-dark);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .content-slider {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1.5rem;
            padding: 1rem 0;
        }

        .content-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
        }

        .content-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .card-image {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
        }

        .card-content {
            padding: 1rem;
        }

        .card-content h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: #212121;
            font-weight: 600;
        }

        .tag {
            font-size: 0.8rem;
            color: var(--tokopedia-gray);
            background: var(--tokopedia-light);
            padding: 4px 12px;
            border-radius: 100px;
            display: inline-block;
        }

        @media (max-width: 768px) {
            .featured-title {
                font-size: 2.5rem;
            }

            .featured-description {
                font-size: 1rem;
            }

            .content-slider {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            }

            .featured-content {
                padding: 2rem 4%;
            }
        }
    </style>
</head>
<body>

    <div class="featured-hero">
        <div class="featured-content">
            <h1 class="featured-title">Kuliner Nusantara</h1>
            <p class="featured-description">Temukan kelezatan masakan tradisional Indonesia dari berbagai daerah. Nikmati cita rasa autentik yang membanggakan.</p>
            <a href="#explore" class="btn btn-primary">Jelajahi Sekarang</a>
        </div>
    </div>

    <section id="explore" class="content-row">
        <div class="row-header">
            <h2>Hidangan Tradisional</h2>
            <a href="?page=makanan" class="see-all">Lihat Semua ›</a>
        </div>
        <div class="content-slider">
            <?php
            $resultMakanan = getMakanan(6);
            if (mysqli_num_rows($resultMakanan) > 0) {
                $counter = 1;
                while ($makanan = mysqli_fetch_assoc($resultMakanan)) {
            ?>
                    <div class="content-card">
                        <img src="images/makanan/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($makanan['nama_makanan']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($makanan['nama_makanan']); ?></h3>
                            <span class="tag"><?= htmlspecialchars($makanan['daerah_makanan']); ?></span>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>

    <section class="content-row">
        <div class="row-header">
            <h2>Minuman Tradisional</h2>
            <a href="?page=minuman" class="see-all">Lihat Semua ›</a>
        </div>
        <div class="content-slider">
            <?php
            $resultMinuman = getMinuman(6);
            if (mysqli_num_rows($resultMinuman) > 0) {
                $counter = 1;
                while ($minuman = mysqli_fetch_assoc($resultMinuman)) {
            ?>
                    <div class="content-card">
                        <img src="images/minuman/<?= $counter; ?>.jpg" alt="<?= htmlspecialchars($minuman['nama_minuman']); ?>" class="card-image">
                        <div class="card-content">
                            <h3><?= htmlspecialchars($minuman['nama_minuman']); ?></h3>
                            <span class="tag"><?= htmlspecialchars($minuman['daerah_minuman']); ?></span>
                        </div>
                    </div>
            <?php
                    $counter++;
                }
            }
            ?>
        </div>
    </section>

</body>
</html>