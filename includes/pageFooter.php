<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Kuliner Nusantara</h3>
            <p>Melestarikan dan memperkenalkan kekayaan kuliner tradisional Indonesia.</p>
        </div>
        <div class="footer-section">
            <h4>Menu</h4>
            <a href="index.php">Beranda</a>
            <a href="?page=makanan">Makanan</a>
            <a href="?page=minuman">Minuman</a>
            <a href="?page=about">Tentang</a>
        </div>
        <div class="footer-section">
            <h4>Kontak</h4>
            <a href="?page=contact">Hubungi Kami</a>
            <p>Email: info@kulinernusantara.com</p>
            <p>Tel: (021) 1234-5678</p>
        </div>
        <div class="footer-section">
            <h4>Ikuti Kami</h4>
            <div class="social-links">
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?= date('Y'); ?> Kuliner Nusantara. All rights reserved.</p>
    </div>
</footer>

<style>
.footer {
    background: var(--tokopedia-white);
    padding: 4rem 8% 2rem;
    margin-top: 4rem;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-section h3 {
    color: var(--tokopedia-dark);
    margin-bottom: 1rem;
    font-size: 1.5rem;
}

.footer-section h4 {
    color: #212121;
    margin-bottom: 1rem;
    font-size: 1.1rem;
}

.footer-section p {
    color: var(--tokopedia-gray);
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.footer-section a {
    color: var(--tokopedia-gray);
    text-decoration: none;
    display: block;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
    transition: color 0.3s ease;
}

.footer-section a:hover {
    color: var(--tokopedia-dark);
}

.social-links {
    display: flex;
    gap: 1rem;
}

.footer-bottom {
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
    text-align: center;
    color: var(--tokopedia-gray);
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .footer {
        padding: 2rem 4% 1rem;
    }
    
    .footer-content {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
}
</style>