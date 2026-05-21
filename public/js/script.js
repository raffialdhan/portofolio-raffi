document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll effect for Navbar
    const navbarContainer = document.querySelector('.navbar-container');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbarContainer.classList.add('scrolled');
        } else {
            navbarContainer.classList.remove('scrolled');
        }
    });

    // 2. Typing Effect
    const typingElement = document.getElementById('typing-text');
    const words = ["Pengembang Backend", "Pengembang Full-Stack", "Ahli Laravel", "Pemecah Masalah"];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100;

    function type() {
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            typingElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typeSpeed = 50;
        } else {
            typingElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typeSpeed = 150;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            typeSpeed = 2000;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            typeSpeed = 500;
        }

        setTimeout(type, typeSpeed);
    }

    if (typingElement) {
        type();
    }

    // 3. Scroll Reveal System using IntersectionObserver
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                
                // If it is a skills section, trigger the progress bars
                if (entry.target.id === 'skills') {
                    animateSkills();
                }
                
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // 4. Skills Bar Animation Trigger
    function animateSkills() {
        const progressBars = document.querySelectorAll('.skill-progress');
        progressBars.forEach(bar => {
            const target = bar.getAttribute('data-progress');
            bar.style.width = target;
        });
    }

    // 5. Active Section Indicator on Scroll
    const sections = document.querySelectorAll('section');
    const navItems = document.querySelectorAll('.nav-item');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.pageYOffset >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navItems.forEach(item => {
            item.classList.remove('active');
            if (item.getAttribute('href') === `#${current}`) {
                item.classList.add('active');
            }
        });
    });

    // 6. Mobile Navigation Drawer Toggle
    const mobileToggle = document.querySelector('.mobile-nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (mobileToggle && navLinks) {
        mobileToggle.addEventListener('click', () => {
            navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
            if (navLinks.style.display === 'flex') {
                navLinks.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '100%';
                navLinks.style.left = '24px';
                navLinks.style.right = '24px';
                navLinks.style.background = 'rgba(6, 8, 12, 0.95)';
                navLinks.style.padding = '20px';
                navLinks.style.borderRadius = '16px';
                navLinks.style.border = '1px solid var(--border-color)';
                navLinks.style.backdropFilter = 'blur(16px)';
            }
        });
    }

    // 7. Contact Form Real Integration (Email + WhatsApp)
    const contactForm = document.getElementById('contact-form');
    const toast = document.getElementById('toast-notification');

    if (contactForm && toast) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('.form-submit-btn');
            const originalText = submitBtn.innerHTML;
            
            // Ambil data dari form
            const name = document.getElementById('form-name').value;
            const email = document.getElementById('form-email').value;
            const subject = document.getElementById('form-subject').value;
            const message = document.getElementById('form-message').value;
            
            // Disable button and show sending feedback state
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <svg class="animate-spin" style="animation: spin 1s linear infinite;" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="2" y2="6"/><line x1="12" x2="12" y1="18" y2="22"/><line x1="4.93" x2="7.76" y1="4.93" y2="7.76"/><line x1="16.24" x2="19.07" y1="16.24" y2="19.07"/><line x1="2" x2="6" y1="12" y2="12"/><line x1="18" x2="22" y1="12" y2="12"/><line x1="4.93" x2="7.76" y1="19.07" y2="16.24"/><line x1="16.24" x2="19.07" y1="7.76" y2="4.93"/></svg>
                Mengirim pesan...
            `;

            // 1. Kirim Email melalui FormSubmit API (menggunakan AJAX)
            fetch("https://formsubmit.co/ajax/Raffi4779.pplg1@smkprestasiprima.sch.id", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    subject: subject,
                    message: message,
                    _subject: `Pesan Portofolio Baru dari ${name}`
                })
            })
            .then(response => response.json())
            .then(data => {
                // Tampilkan floating custom toast
                toast.classList.add('show');
                
                // Bersihkan inputs
                contactForm.reset();
                
                // Kembalikan tombol seperti semula
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
                
                // Sembunyikan toast setelah 4 detik
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 4000);

                // 2. Buat URL WhatsApp & Buka di Tab Baru
                const waPhone = "6285691000097";
                const waText = `Halo Raffi, nama saya ${name}.\n\nSaya menghubungi Anda terkait: *${subject}*.\n\nPesan:\n${message}\n\nEmail saya: ${email}`;
                const waUrl = `https://wa.me/${waPhone}?text=${encodeURIComponent(waText)}`;
                
                // Buka tab WhatsApp
                window.open(waUrl, '_blank');
            })
            .catch(error => {
                console.log(error);
                alert("Maaf, terjadi kesalahan saat mengirim email. Anda akan dialihkan ke WhatsApp.");
                
                // Fallback: Jika email gagal, tetap buka WhatsApp
                const waPhone = "6285691000097";
                const waText = `Halo Raffi, nama saya ${name}.\n\nSaya menghubungi Anda terkait: *${subject}*.\n\nPesan:\n${message}`;
                const waUrl = `https://wa.me/${waPhone}?text=${encodeURIComponent(waText)}`;
                window.open(waUrl, '_blank');
                
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            });
        });
    }
});
