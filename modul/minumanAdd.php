<?php
include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Makanan Tradisional</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --tokopedia-green: #03AC0E;
            --tokopedia-dark-green: #028A0E;
            --tokopedia-light-gray: #F5F5F5;
            --tokopedia-gray: #E0E0E0;
            --tokopedia-dark-gray: #757575;
            --tokopedia-black: #333333;
            --transition-speed: 0.3s;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--tokopedia-light-gray);
            color: var(--tokopedia-black);
            min-height: 100vh;
            line-height: 1.5;
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
            color: var(--tokopedia-green);
        }

        .form-subtitle {
            color: var(--tokopedia-dark-gray);
            font-size: 1.1rem;
            margin-top: 1rem;
        }

        .form-card {
            background: #FFFFFF;
            padding: 2.5rem;
            border-radius: 12px;
            border: 1px solid var(--tokopedia-gray);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 2rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.8rem;
            color: var(--tokopedia-dark-gray);
            font-weight: 500;
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            background: var(--tokopedia-light-gray);
            border: 1px solid var(--tokopedia-gray);
            border-radius: 8px;
            color: var(--tokopedia-black);
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: all var(--transition-speed) ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--tokopedia-green);
            background: #FFFFFF;
            box-shadow: 0 0 0 2px rgba(3, 172, 14, 0.2);
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
            background: var(--tokopedia-green);
            color: #FFFFFF;
        }

        .btn-primary:hover {
            background: var(--tokopedia-dark-green);
            transform: scale(1.02);
        }

        .btn-secondary {
            background: transparent;
            color: var(--tokopedia-dark-gray);
            border: 1px solid var(--tokopedia-gray);
        }

        .btn-secondary:hover {
            background: var(--tokopedia-gray);
            transform: scale(1.02);
        }

        .form-input::placeholder {
            color: var(--tokopedia-dark-gray);
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

            .form-subtitle {
                font-size: 1rem;
                padding: 0 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-header">
            <h1 class="page-title">Tambah Minuman Tradisional</h1>
            <p class="form-subtitle">Tambahkan hidangan baru ke koleksi kuliner nusantara</p>
        </div>

        <div class="form-card">
            <form method="post" action="?page=minumanAddProses">
                <div class="form-group">
                    <label class="form-label">Nama Minuman</label>
                    <input type="text" name="nama_minuman" class="form-input"
                        placeholder="Masukkan nama minuman" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Daerah Asal</label>
                    <input type="text" name="daerah_minuman" class="form-input"
                        placeholder="Masukkan daerah asal" required>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=minuman'">
                        Batal
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
