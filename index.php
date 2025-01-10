<?php
require "includes/config.php";
require "includes/function.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Daftar Kuliner Nusantara - Temukan berbagai makanan dan minuman tradisional Indonesia">
    <title>Daftar Kuliner Nusantara</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: var(--tokopedia-white);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .container {
            flex: 1;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        footer {
            background-color: var(--tokopedia-white);
            padding: 1.5rem 0;
            margin-top: auto;
            text-align: center;
            color: var(--tokopedia-gray);
        }

        hr {
            border: none;
            border-top: 1px solid #E0E0E0;
            margin: 1rem 0;
        }
    </style>
</head>

<body>
    <header>
        <?php require "includes/navbar.php" ?>
    </header>

    <main class="container">
        <?php require "includes/konten.php" ?>
    </main>

    <footer>
        <div class="container">
            <p>Pemrograman Web 1 &copy; <?= date("Y") ?></p>
        </div>
    </footer>
</body>

</html>