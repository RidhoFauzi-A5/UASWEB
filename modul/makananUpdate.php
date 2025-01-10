<?php
// Common PHP header for both files
include "includes/config.php";

// For update.php only - fetch data
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_makanan WHERE id_makanan = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($data) ? 'Edit' : 'Tambah' ?> Makanan Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --spotify-green: #1DB954;
            --spotify-black: #121212;
            --spotify-dark-gray: #282828;
            --spotify-light-gray: #B3B3B3;
            --spotify-white: #FFFFFF;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(180deg, #3C1D51 0%, var(--spotify-black) 100%);
            color: var(--spotify-white);
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(to right, var(--spotify-white), var(--spotify-green));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .form-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 2.5rem;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.8rem;
            color: var(--spotify-light-gray);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--spotify-white);
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: all var(--transition-speed) ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--spotify-green);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 0 2px rgba(29, 185, 84, 0.1);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 3rem;
        }

        .btn {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 500px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary {
            background: var(--spotify-green);
            color: var(--spotify-black);
        }

        .btn-primary:hover {
            background: #1ed760;
            transform: scale(1.02);
        }

        .btn-secondary {
            background: transparent;
            color: var(--spotify-white);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: scale(1.02);
        }

        @media (max-width: 768px) {
            .container {
                padding: 2rem 1rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .form-card {
                padding: 1.5rem;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h1 class="page-title"><?= isset($data) ? 'Edit' : 'Tambah' ?> Makanan Tradisional</h1>
        </div>

        <div class="form-card">
            <form method="post" action="?page=<?= isset($data) ? 'makananUpdateProses' : 'makananAddProses' ?>">
                <?php if (isset($data)): ?>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_makanan']) ?>">
                <?php endif; ?>

                <div class="form-group">
                    <label class="form-label">Nama Makanan</label>
                    <input type="text" name="nama_makanan" class="form-input"
                        value="<?= isset($data) ? htmlspecialchars($data['nama_makanan']) : '' ?>" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_makanan" class="form-input"
                        value="<?= isset($data) ? htmlspecialchars($data['daerah_makanan']) : '' ?>" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=makanan'">
                        Batal
                    </button>
                    <button type="submit" name="<?= isset($data) ? 'update' : 'submit' ?>" class="btn btn-primary">
                        <?= isset($data) ? 'Update' : 'Simpan' ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>