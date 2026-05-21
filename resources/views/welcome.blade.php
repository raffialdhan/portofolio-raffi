<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio Raffi, seorang Pengembang Backend & Full-Stack yang berdedikasi tinggi dalam menciptakan aplikasi web berkinerja tinggi.">
    <title>Raffi| Portofolio Web Developer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Efek latar belakang bercahaya -->
    <div class="bg-glow-1"></div>
    <div class="bg-glow-2"></div>

    <!-- Bilah Navigasi -->
    <header class="navbar-container">
        <div class="navbar">
            <a href="#home" class="nav-logo">Raffi A<span>.</span></a>
            <nav class="nav-links">
                <a href="#home" class="nav-item active">Beranda</a>
                <a href="#about" class="nav-item">Tentang</a>
                <a href="#skills" class="nav-item">Keahlian</a>
                <a href="#services" class="nav-item">Layanan</a>
                <a href="#projects" class="nav-item">Proyek</a>
                <a href="#contact" class="nav-item">Kontak</a>
            </nav>
            <a href="#contact" class="nav-btn">Hubungi Saya</a>
            <button class="mobile-nav-toggle" aria-label="Buka menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
        </div>
    </header>

    <!-- Bagian Hero -->
    <section id="home" class="hero reveal">
        <div class="hero-wrapper">
            <!-- Konten Kiri Hero -->
            <div class="hero-content">
                <div class="hello-pill">
                  
                </div>
                <h1 class="hero-title">
                    Saya <span class="name">Raffi Aldhan Afghani</span>
                </h1>
                <div class="hero-subtitle">
                    Saya seorang <span id="typing-text"></span><span class="typing-cursor"></span>
                </div>
                <p class="hero-desc">
                  Saya adalah seorang siswa PPLG (Pengembangan Perangkat Lunak dan Gim) yang memiliki minat besar di dunia pengembangan web dan teknologi modern. Saya suka membuat website yang menarik, responsif, dan mudah digunakan. Saya senang belajar hal baru, mengembangkan skill coding, serta mengubah ide sederhana menjadi proyek digital yang bermanfaat dan kreatif.
                </p>
                
            </div>

            <!-- Area Gambar Kanan Hero -->
            <div class="hero-image-area">
             
                <div class="hero-avatar-text">
                    RA
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Tentang -->
    <section id="about" class="reveal">
      
        <h2 class="section-title">Tentang <span>Saya</span></h2>
        <div class="about-grid">
            <!-- Konten Profil Kanan -->
            <div class="about-content">
                <h3 class="about-title">Mengubah Ide Kreatif Menjadi Website Modern</h3>
                <p class="about-desc">
                   Halo! Saya Raffi Aldhan Afghani, seorang pengembang perangkat lunak yang selalu mengutamakan kerapian dan efisiensi. Saya percaya bahwa desain web yang hebat haruslah bersih dari kekacauan, mudah dipahami, dan memberikan navigasi yang mulus bagi penggunanya.

Saya menggabungkan kemampuan pemecahan masalah dengan intuisi desain minimalis untuk menciptakan aplikasi yang stabil, cepat, dan terlihat sangat profesional di berbagai perangkat.
                </p>
                <div class="about-details">
                    <div class="detail-item">
                        <span class="detail-label">Nama Lengkap</span>
                        <span class="detail-val">Raffi Aldhan Afghani</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Email</span>
                        <span class="detail-val">raffi@example.com</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Lokasi</span>
                        <span class="detail-val">Jakarta, Indonesia</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Freelance</span>
                        <span class="detail-val">Tersedia</span>
                    </div>
                </div>
                <div class="about-actions">
                    <a href="#contact" class="nav-btn" style="background: var(--accent); color: var(--bg-main); box-shadow: 0 0 15px rgba(0,243,255,0.2);">Hubungi Saya</a>
                    <a href="javascript:void(0)" onclick="alert('File CV sedang diperbarui. Silakan hubungi saya melalui form kontak.')" class="nav-btn">Unduh CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Keahlian -->
    <section id="skills" class="reveal">
        <span class="section-subtitle">Kemampuan</span>
        <h2 class="section-title">Keahlian <span>Teknis</span></h2>
        <div class="skills-grid">
            <!-- Kiri: Teknologi Backend -->
            <div class="skills-category">
                <h3 class="category-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="8" x="2" y="2" rx="2" ry="2"/><rect width="20" height="8" x="2" y="14" rx="2" ry="2"/><line x1="6" x2="6" y1="6" y2="6"/><line x1="6" x2="6" y1="18" y2="18"/></svg>
                    Backend & Arsitektur
                </h3>
                <div class="skills-list">
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Laravel Framework</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>PHP Dasar & CRUD</span>
                            <span>65%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="65%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Database MySQL</span>
                            <span>78%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="78%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>REST API Dasar</span>
                            <span>60%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="60%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kanan: Frontend & Sistem -->
            <div class="skills-category">
                <h3 class="category-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Frontend & Desain
                </h3>
                <div class="skills-list">
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Html,CSS,JavaScript
                            </span>
                            <span>55%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="55%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Tailwind CSS </span>
                            <span>50%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="50%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Responsive Web Design</span>
                            <span>70%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="70%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-info">
                            <span>Git / Github</span>
                            <span>65%</span>
                        </div>
                        <div class="skill-track">
                            <div class="skill-progress" data-progress="65%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Layanan -->
    <section id="services" class="reveal">
        <span class="section-subtitle">Apa yang Saya Tawarkan</span>
        <h2 class="section-title">Layanan <span>Saya</span></h2>
        <div class="services-grid">
            <!-- Layanan 1 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="12" x="2" y="6" rx="2"/><line x1="12" x2="12" y1="18" y2="18"/><line x1="12" x2="12" y1="6" y2="6"/><path d="M12 12h.01"/></svg>
                </div>
                <h3 class="service-title">Website & UI Design</h3>
                <p class="service-desc">
                    Membuat tampilan website modern, responsif, dan nyaman digunakan dengan desain yang menarik serta user-friendly.
                </p>
            </div>

            <!-- Layanan 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                </div>
                <h3 class="service-title">Pengembangan Website</h3>
                <p class="service-desc">
                    Membangun website menggunakan HTML, CSS, JavaScript, PHP, dan Laravel sesuai kebutuhan pengguna.
                </p>
            </div>

            <!-- Layanan 3 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 16-4 4-4-4"/><path d="M17 20V4"/><path d="m3 8 4-4 4 4"/><path d="M7 4v16"/></svg>
                </div>
                <h3 class="service-title">Responsive & Optimasi</h3>
                <p class="service-desc">
                    Mengoptimalkan tampilan website agar ringan, cepat, dan dapat berjalan dengan baik di berbagai perangkat.
                </p>
            </div>
        </div>
    </section>

    <!-- Bagian Proyek -->
    <section id="projects" class="reveal">
        <span class="section-subtitle">Portofolio</span>
        <h2 class="section-title">Proyek <span>Saya</span></h2>
        <div class="projects-grid">
            <!-- Proyek 1 -->
            <div class="project-card">
                <div class="project-img-wrapper" style="width: 100%; aspect-ratio: 16/10; overflow: hidden; border-bottom: 1px solid var(--border-color);">
                    <img src="{{ asset('images/spp-dashboard.jpeg') }}" alt="Sistem Manajemen Pembayaran SPP" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div class="project-content">
                    <div class="project-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">Tailwind CSS</span>
                    </div>
                    <h3 class="project-card-title">Sistem SPP Terpadu</h3>
                    <p class="project-card-desc">
                        Aplikasi manajemen pembayaran SPP sekolah. Memiliki fitur Dasbor Siswa, Ringkasan Tagihan, dan Riwayat Transaksi secara real-time.
                    </p>
                    <a href="javascript:void(0)" onclick="alert('Situs proyek ini belum di-hosting secara publik. Anda dapat melihat preview-nya pada gambar di atas.')" class="project-link">
                        Lihat Proyek
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Proyek 2 -->
            <div class="project-card">
                <div class="project-img-wrapper" style="width: 100%; aspect-ratio: 16/10; overflow: hidden; border-bottom: 1px solid var(--border-color);">
                    <img src="{{ asset('images/nasi-uduk.png') }}" alt="Nasi Uduk Nyak Resink" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div class="project-content">
                    <div class="project-tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">Landing Page</span>
                    </div>
                    <h3 class="project-card-title">Nasi Uduk Nyak Resink</h3>
                    <p class="project-card-desc">
                        Website profil dan landing page usaha kuliner Nasi Uduk Nyak Resink dengan desain visual yang cerah, menarik, dan responsif.
                    </p>
                    <a href="javascript:void(0)" onclick="alert('Situs proyek ini belum di-hosting secara publik. Anda dapat melihat preview-nya pada gambar di atas.')" class="project-link">
                        Lihat Proyek
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Proyek 3 -->
            <div class="project-card">
                <div class="project-img-wrapper" style="width: 100%; aspect-ratio: 16/10; overflow: hidden; border-bottom: 1px solid var(--border-color);">
                    <img src="{{ asset('images/web-badminton.png') }}" alt="Victor Store x Rackets" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                </div>
                <div class="project-content">
                    <div class="project-tags">
                        <span class="tag">E-Commerce</span>
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                    </div>
                    <h3 class="project-card-title">Victor Store x Racke'ts</h3>
                    <p class="project-card-desc">
                        Toko online perlengkapan olahraga badminton yang menampilkan katalog produk raket dengan antarmuka yang bersih dan responsif.
                    </p>
                    <a href="javascript:void(0)" onclick="alert('Situs proyek ini belum di-hosting secara publik. Anda dapat melihat preview-nya pada gambar di atas.')" class="project-link">
                        Lihat Proyek
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" x2="21" y1="14" y2="3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Kontak -->
    <section id="contact" class="reveal">
        <span class="section-subtitle">Hubungi Saya</span>
        <h2 class="section-title">Hubungi <span>Saya</span></h2>
        <div class="contact-grid">
            <!-- Blok Informasi Kiri -->
            <div class="contact-info">
                <!-- Info 1 -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                    <div class="contact-details-text">
                        <h4>Surel (Email)</h4>
                        <p>Raffi4779.pplg1@smkprestasiprima.sch.id</p>
                    </div>
                </div>
                
                <!-- Info 2 -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </div>
                    <div class="contact-details-text">
                        <h4>Instagram</h4>
                        <p>@ijehrfi</p>
                    </div>
                </div>

                <!-- Info 3 -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                    <div class="contact-details-text">
                        <h4>WhatsApp</h4>
                        <p>+62 856-9100-0097</p>
                    </div>
                </div>

                <!-- Info 4 -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"/></svg>
                    </div>
                    <div class="contact-details-text">
                        <h4>TikTok</h4>
                        <p>@raffialdhan</p>
                    </div>
                </div>
            </div>

            <!-- Kartu Formulir Kanan -->
            <div class="contact-form-card">
                <form id="contact-form">
                    <div class="form-group-row">
                        <div class="form-group">
                            <label class="form-label" for="form-name">Nama</label>
                            <input class="form-input" type="text" id="form-name" placeholder="Nama Anda" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="form-email">Surel (Email)</label>
                            <input class="form-input" type="email" id="form-email" placeholder="email@anda.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="form-subject">Subjek</label>
                        <input class="form-input" type="text" id="form-subject" placeholder="Tujuan Pesan" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="form-message">Pesan</label>
                        <textarea class="form-input" id="form-message" placeholder="Halo Raffi, saya ingin berkolaborasi..." required></textarea>
                    </div>
                    <button class="form-submit-btn" type="submit">
                        Kirim Pesan
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" x2="11" y1="2" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Umpan Balik Notifikasi Sukses Mengambang -->
    <div id="toast-notification" class="custom-toast">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
        <span>Pesan berhasil dikirim! Terima kasih.</span>
    </div>

    <!-- Bagian Kaki (Footer) -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo">Raffi<span>.</span></div>
            <div>&copy; 2026 Raffi Aldhan Afghani. Hak cipta dilindungi undang-undang.</div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
