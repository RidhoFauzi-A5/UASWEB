<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-logo">
            <h1>Kuliner Nusantara</h1>
        </a>
        <div class="nav-links">
            <a href="index.php" class="nav-link">Beranda</a>
            <a href="?page=makanan" class="nav-link">Makanan</a>
            <a href="?page=minuman" class="nav-link">Minuman</a>
            <a href="?page=about" class="nav-link">Tentang</a>
            <a href="?page=contact" class="nav-link">Kontak</a>
        </div>
        <div class="nav-auth">
            <a href="?page=login" class="btn btn-login">Masuk</a>
        </div>
    </div>
</nav>

<style>
.navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: var(--nav-height);
    background: var(--tokopedia-white);
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    z-index: 1000;
}

.nav-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.nav-logo h1 {
    color: var(--tokopedia-dark);
    font-size: 1.5rem;
    font-weight: 700;
    text-decoration: none;
}

.nav-links {
    display: flex;
    gap: 2rem;
}

.nav-link {
    color: var(--tokopedia-gray);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: var(--tokopedia-dark);
}

.btn-login {
    background: var(--tokopedia-light);
    color: var(--tokopedia-dark);
    padding: 0.5rem 1.5rem;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-login:hover {
    background: var(--tokopedia-dark);
    color: white;
}

@media (max-width: 768px) {
    .nav-links {
        display: none;
    }
    
    .nav-container {
        padding: 0 1rem;
    }
}
</style>