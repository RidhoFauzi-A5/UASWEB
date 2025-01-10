<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-brand">Kuliner Nusantara</a>
        <div class="nav-menu">
            <a href="index.php" class="nav-link <?php echo isActive('home'); ?>">Beranda</a>
            <a href="index.php?page=makanan" class="nav-link <?php echo isActive('makanan'); ?>">Makanan</a>
            <a href="index.php?page=minuman" class="nav-link <?php echo isActive('minuman'); ?>">Minuman</a>
            <a href="index.php?page=about" class="nav-link <?php echo isActive('about'); ?>">Tentang</a>
            <a href="index.php?page=contact" class="nav-link <?php echo isActive('contact'); ?>">Kontak</a>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background-color: var(--tokopedia-white);
        padding: 1rem 0;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .nav-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-brand {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--tokopedia-dark);
        text-decoration: none;
    }

    .nav-menu {
        display: flex;
        gap: 1.5rem;
    }

    .nav-link {
        color: var(--tokopedia-gray);
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: var(--tokopedia-dark);
        background-color: var(--tokopedia-light);
    }

    .nav-link.active {
        color: var(--tokopedia-dark);
        background-color: var(--tokopedia-light);
    }

    @media (max-width: 768px) {
        .nav-container {
            flex-direction: column;
            gap: 1rem;
        }

        .nav-menu {
            width: 100%;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.5rem;
        }
    }
</style>