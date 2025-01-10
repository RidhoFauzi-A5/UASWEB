<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .contact-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form {
            display: grid;
            gap: 1.5rem;
        }

        .form-group {
            display: grid;
            gap: 0.5rem;
        }

        .form-label {
            font-weight: 600;
            color: #212121;
        }

        .form-input,
        .form-textarea {
            padding: 0.75rem;
            border: 1px solid #E0E0E0;
            border-radius: 8px;
            font-family: inherit;
        }

        .form-textarea {
            min-height: 150px;
            resize: vertical;
        }
    </style>
</head>
<body>
    <div class="featured-hero" style="min-height: 40vh;">
        <div class="featured-content">
            <h1 class="featured-title">Hubungi Kami</h1>
            <p class="featured-description">Kami senang mendengar dari Anda. Kirimkan pertanyaan, saran, atau masukan Anda.</p>
        </div>
    </div>

    <div class="contact-container">
        <form class="contact-form" action="process_contact.php" method="POST">
            <div class="form-group">
                <label class="form-label" for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="subject">Subjek</label>
                <input type="text" id="subject" name="subject" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="message">Pesan</label>
                <textarea id="message" name="message" class="form-textarea" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>

    <?php include 'includes/pagefooter.php'; ?>
</body>
</html