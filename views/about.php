<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .about-hero {
            padding-top: var(--nav-height);
            background: linear-gradient(135deg, var(--tokopedia-light), #FFFFFF);
            padding: 8rem 8% 4rem;
            text-align: center;
        }

        .about-hero h1 {
            font-size: 2.5rem;
            color: var(--tokopedia-dark);
            margin-bottom: 1rem;
        }

        .about-hero p {
            color: var(--tokopedia-gray);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .about-content {
            max-width: 800px;
            margin: 4rem auto;
            padding: 0 8%;
        }

        .about-section {
            margin-bottom: 4rem;
        }

        .about-section h2 {
            color: #212121;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        .about-section p {
            color: var(--tokopedia-gray);
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .team-member {
            text-align: center;
        }

        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 1rem;
            object-fit: cover;
        }

        .team-member h3 {
            color: #212121;
            margin-bottom: 0.5rem;
        }

        .team-member p {
            color: var(--tokopedia-gray);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .about-hero {
                padding: 6rem 4% 3rem;
            }

            .about-hero h1 {
                font-size: 2rem;
            }

            .about-content {
                padding: 0 4%;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/pageheader.php'; ?>

    <div class="about-hero">
        <h1>Tentang Kuliner Nusantara</h1>
        <p>Melestarikan dan memperkenalkan kekayaan kuliner tradisional Indonesia kepada generasi mendatang.</p>
    </div>

    <div class="about-content">
        <div class="about-section">
            <h2>Visi Kami</h2>
            <p>Menjadi platform terdepan dalam melestarikan dan memperkenalkan kekayaan kuliner tradisional Indonesia, sambil mendukung UMKM lokal dan memajukan industri kuliner nusantara.</p>
        </div>

        <div class="about-section">
            <h2>Misi Kami</h2>
            <p>1. Mendokumentasikan dan mempromosikan berbagai masakan tradisional dari seluruh Indonesia.</p>
            <p>2. Membantu UMKM kuliner tradisional untuk berkembang di era digital.</p>
            <p>3. Mengedukasi generasi muda tentang pentingnya melestarikan kuliner tradisional.</p>
            <p>4. Memfasilitasi akses ke bahan-bahan masakan tradisional.</p>
        </div>

        <div class="about-section">
            <h2>Tim Kami</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="images/team/1.jpg