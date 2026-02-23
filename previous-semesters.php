<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previous Semesters - ClassHub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="schedule-styles.css">
    <link rel="stylesheet" href="mobile-nav.css">
    <style>
        .semesters-grid {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            justify-content: center;
            padding: 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .semester-card {
            flex: 1;
            min-width: 280px;
            max-width: 400px;
            padding: 2.5rem 2rem;
            border-radius: 24px;
            text-decoration: none;
            color: white;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            backdrop-filter: blur(12px);
            position: relative;
            overflow: hidden;
        }

        .semester-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.05), rgba(255,255,255,0));
            border-radius: 24px;
            pointer-events: none;
        }

        .semester-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }

        .semester-card.sem-1 {
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.2), rgba(168, 85, 247, 0.2));
            border: 1px solid rgba(236, 72, 153, 0.4);
        }
        .semester-card.sem-1:hover {
            border-color: rgba(236, 72, 153, 0.7);
            box-shadow: 0 20px 60px rgba(236, 72, 153, 0.15);
        }

        .semester-card.sem-2 {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.2), rgba(118, 75, 162, 0.2));
            border: 1px solid rgba(102, 126, 234, 0.4);
        }
        .semester-card.sem-2:hover {
            border-color: rgba(102, 126, 234, 0.7);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.15);
        }

        .semester-card.sem-3 {
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.2), rgba(39, 174, 96, 0.2));
            border: 1px solid rgba(46, 204, 113, 0.4);
        }
        .semester-card.sem-3:hover {
            border-color: rgba(46, 204, 113, 0.7);
            box-shadow: 0 20px 60px rgba(46, 204, 113, 0.15);
        }

        .semester-card .card-emoji {
            font-size: 4rem;
            display: block;
            margin-bottom: 1.2rem;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3));
        }

        .semester-card .card-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .semester-card .card-subtitle {
            font-size: 0.95rem;
            opacity: 0.8;
            font-weight: 400;
        }

        .semester-card.sem-1 .card-subtitle { color: #f472b6; }
        .semester-card.sem-2 .card-subtitle { color: #a8c0ff; }
        .semester-card.sem-3 .card-subtitle { color: #2ecc71; }

        .semester-card .arrow-icon {
            display: inline-block;
            margin-top: 1.2rem;
            font-size: 1.5rem;
            opacity: 0;
            transform: translateX(-10px);
            transition: all 0.3s ease;
        }
        .semester-card:hover .arrow-icon {
            opacity: 1;
            transform: translateX(0);
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
    </div>

    <nav class="navbar" id="navbar">
        <div class="nav-content">
            <div class="logo-container" onclick="scrollToHome()">
                <div class="logo-image">🎓</div>
                <div class="logo-text">ClassHub</div>
            </div>
            <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
            <ul class="nav-links">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item dropdown" id="lecturesDropdown">
                    <a href="#lectures" class="dropdown-toggle">Lectures <span class="dropdown-arrow">▼</span></a>
                    <div class="dropdown-menu">
                        <a href="first.php">First Year</a>
                        <a href="second.php">Second Year</a>
                        <a href="previous-semesters.php">Previous Semesters</a>
                    </div>
                </li>
                <li class="nav-item"><a href="programming.php">Programming</a></li>
                <li class="nav-item"><a href="communities.php">Communities</a></li>
                <li class="nav-item"><a href="schedule.php">Schedule</a></li>
                <li class="nav-item"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
            <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f4c2.png" alt="📂" style="width: 4rem; height: 4rem;">
            <h1 class="hero-title" style="margin-bottom: 0;">Previous Semesters</h1>
        </div>
        <p class="hero-subtitle">Access materials from previous semesters</p>
    </section>

    <div class="semesters-grid">
        <a href="semester1.php" class="semester-card sem-1">
            <span class="card-emoji">&#128221;</span>
            <div class="card-title">Semester 1</div>
            <div class="card-subtitle">First Year — First Term</div>
            <span class="arrow-icon">→</span>
        </a>

        <a href="semester2.php" class="semester-card sem-2">
            <span class="card-emoji">📚</span>
            <div class="card-title">Semester 2</div>
            <div class="card-subtitle">First Year — Second Term</div>
            <span class="arrow-icon">→</span>
        </a>

        <a href="semester3.php" class="semester-card sem-3">
            <span class="card-emoji">📖</span>
            <div class="card-title">Semester 3</div>
            <div class="card-subtitle">Second Year — First Term</div>
            <span class="arrow-icon">→</span>
        </a>
    </div>

    <footer>
        <div class="footer-content">
            <div class="footer-section footer-brand">
                <h3>ClassHub</h3>
                <p>Computer Science College Class Hub</p>
                <p class="footer-developer">Developed by - Faris Nabil</p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <div class="footer-dropdown" id="footerLecturesDropdown">
                        <a href="#lectures" class="footer-dropdown-toggle">
                            Lectures <span class="footer-dropdown-arrow">▼</span>
                        </a>
                        <div class="footer-dropdown-menu">
                            <a href="first.php">First Year</a>
                            <a href="second.php">Second Year</a>
                            <a href="previous-semesters.php">Previous Semesters</a>
                        </div>
                    </div>
                    <a href="programming.php">Programming</a>
                    <a href="communities.php">Communities</a>
                    <a href="schedule.php">Schedule</a>
                    <a href="contact.html">Contact</a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Join Us</h3>
                <a href="https://chat.whatsapp.com/IdDaqDZNSZQ3YF375tYBHU" class="whatsapp-link" target="_blank">
                    <span class="whatsapp-icon">💬</span>
                    WhatsApp Group
                </a>
            </div>
        </div>
        
        <div class="footer-bottom">
            © 2026 ClassHub. Built with ❤️ for students, by students.
        </div>
    </footer>

    <div class="scroll-to-top" id="scrollToTop">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
        </svg>
    </div>

    <script>
        function scrollToHome() { window.location.href = 'index.php'; }

        // Dropdown Navigation
        function setupDropdown(triggerId) {
            const dropdown = document.getElementById(triggerId);
            if(!dropdown) return;
            const toggle = dropdown.querySelector('.dropdown-toggle, .footer-dropdown-toggle');
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                dropdown.classList.toggle('active');
            });
            document.addEventListener('click', (e) => {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('active');
                }
            });
        }
        setupDropdown('lecturesDropdown');
        setupDropdown('footerLecturesDropdown');

        // Scroll to top
        const scrollToTopBtn = document.getElementById('scrollToTop');
        window.addEventListener('scroll', () => {
            scrollToTopBtn.classList.toggle('show', window.scrollY > 300);
        });
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    <script src="mobile-nav.js"></script>
</body>
</html>
