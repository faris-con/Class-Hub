<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule - ClassHub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="schedule-styles.css">
    <link rel="stylesheet" href="mobile-nav.css">
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
                <li class="nav-item"><a href="schedule.php" class="active">Schedule</a></li>
                <li class="nav-item"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin-bottom: 1rem;">
            <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f4c5.png" alt="📅" style="width: 4rem; height: 4rem;">
            <h1 class="hero-title" style="margin-bottom: 0;">Course Schedule</h1>
        </div>
        <p class="hero-subtitle">Spring Semester 2025 - 2026 • All Courses & Groups</p>
        <a href="create_schedule.php" class="create-schedule-btn">
            <span>✨</span> Create Your Schedule
        </a>
    </section>

    <!-- ====== Level 1 ====== -->
    <div class="level-section">
        <div class="level-header">
            <div class="level-icon level-1">1</div>
            <h2 class="level-title">Level 1</h2>
            <span class="level-badge l1">First Year — Semester 1</span>
        </div>
        <div class="courses-grid">
            <div class="course-card gradient-1">
                <span class="course-emoji">📖</span>
                <div class="course-code">HM101</div>
                <div class="course-name">English 1</div>
                <div class="course-instructor">👤 Dr. Hoda Alawady</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sat 9:00-10:40</span>
                    <span class="type-badge lec">Lec B — Mon 10:40-12:20</span>
                </div>
            </div>

            <div class="course-card gradient-1">
                <span class="course-emoji">💻</span>
                <div class="course-code">CS101</div>
                <div class="course-name">Intro to CS</div>
                <div class="course-instructor">👤 Dr. Bahaa</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sat 10:40-12:20</span>
                    <span class="type-badge lec">Lec B — Mon 9:00-10:40</span>
                    <span class="type-badge lab">Lab A1-3 — Mon 9:00-10:40</span>
                    <span class="type-badge lab">Lab A4-6 — Tue 12:40-2:20</span>
                </div>
            </div>

            <div class="course-card gradient-1">
                <span class="course-emoji">⌨️</span>
                <div class="course-code">CS102</div>
                <div class="course-name">Fund. of Programming</div>
                <div class="course-instructor">👤 Prof. Dr. Roushdi</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sat 12:40-2:20</span>
                    <span class="type-badge lec">Lec B — Sat 9:00-10:40</span>
                    <span class="type-badge lab">Lab A1-3 — Tue 10:40-12:20</span>
                    <span class="type-badge lab">Lab A4-6 — Sun 9:00-10:40</span>
                </div>
            </div>

            <div class="course-card gradient-1">
                <span class="course-emoji">🎤</span>
                <div class="course-code">HM102</div>
                <div class="course-name">Inno., Interp.</div>
                <div class="course-instructor">👤 Dr. Salib</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec B — Tue 10:40-12:20</span>
                </div>
            </div>

            <div class="course-card gradient-1">
                <span class="course-emoji">⚡</span>
                <div class="course-code">BS102</div>
                <div class="course-name">Intro. to Physics</div>
                <div class="course-instructor">👤 Dr. Wael</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sat 10:40-12:20</span>
                    <span class="type-badge lec">Lec B — Tue 10:40-12:20</span>
                    <span class="type-badge lab">Lab A1-3 — Tue 9:00-10:40</span>
                    <span class="type-badge lab">Lab A4-6 — Tue 10:40-12:20</span>
                </div>
            </div>

            <div class="course-card gradient-1">
                <span class="course-emoji">🔢</span>
                <div class="course-code">BS101</div>
                <div class="course-name">Mathematics 1</div>
                <div class="course-instructor">👤 Dr. Fattoh</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sun 9:00-10:40</span>
                    <span class="type-badge lec">Lec B — Tue 12:40-2:20</span>
                    <span class="type-badge sec">Sec A1-3 — Tue 12:40-2:20</span>
                    <span class="type-badge sec">Sec A4-6 — Tue 2:20-4:00</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== Level 2 ====== -->
    <div class="level-section">
        <div class="level-header">
            <div class="level-icon level-2">2</div>
            <h2 class="level-title">Level 2</h2>
            <span class="level-badge l2">First Year — Semester 2</span>
        </div>
        <div class="courses-grid">
            <div class="course-card gradient-2">
                <span class="course-emoji">📊</span>
                <div class="course-code">IS101</div>
                <div class="course-name">Introduction to IS</div>
                <div class="course-instructor">👤 Dr. Bahaa / Dr. Walaa</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sat 9:00-10:40</span>
                    <span class="type-badge lec">Lec B — Sun 2:20-4:00</span>
                    <span class="type-badge lec">Lec C — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec D — Sun 9:00-10:40</span>
                </div>
            </div>

            <div class="course-card gradient-2">
                <span class="course-emoji">🧩</span>
                <div class="course-code">CS103</div>
                <div class="course-name">OOP</div>
                <div class="course-instructor">👤 Prof. Dr. Roushdi / Dr. Hossam</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sun 2:20-4:00</span>
                    <span class="type-badge lec">Lec B — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec C — Sun 9:00-10:40</span>
                    <span class="type-badge lec">Lec D — Mon 12:40-2:20</span>
                </div>
            </div>

            <div class="course-card gradient-2">
                <span class="course-emoji">⚡</span>
                <div class="course-code">BS103</div>
                <div class="course-name">Adv. Physics</div>
                <div class="course-instructor">👤 Dr. Wael</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Tue 10:40-12:20</span>
                    <span class="type-badge lec">Lec B — Sun 2:20-4:00</span>
                    <span class="type-badge lec">Lec C — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec D — Sun 2:20-4:00</span>
                </div>
            </div>

            <div class="course-card gradient-2">
                <span class="course-emoji">🔢</span>
                <div class="course-code">BS104</div>
                <div class="course-name">Discrete Math</div>
                <div class="course-instructor">👤 Dr. Hamed / Dr. Abulhamed</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Tue 12:40-2:20</span>
                    <span class="type-badge lec">Lec B — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec C — Sat 10:40-12:20</span>
                    <span class="type-badge lec">Lec D — Sat 12:40-2:20</span>
                </div>
            </div>

            <div class="course-card gradient-2">
                <span class="course-emoji">📖</span>
                <div class="course-code">HM103</div>
                <div class="course-name">English 2</div>
                <div class="course-instructor">👤 Dr. Hoda / Dr. Ahmed</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sat 12:40-2:20</span>
                    <span class="type-badge lec">Lec B — Tue 12:40-2:20</span>
                    <span class="type-badge lec">Lec C — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec D — Tue 2:20-4:00</span>
                </div>
            </div>

            <div class="course-card gradient-2">
                <span class="course-emoji">💰</span>
                <div class="course-code">HM104</div>
                <div class="course-name">Fund. of Economics</div>
                <div class="course-instructor">👤 Dr. Noha Amr</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sat 10:40-12:20</span>
                    <span class="type-badge lec">Lec B — Sat 12:40-2:20</span>
                    <span class="type-badge lec">Lec C — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec D — Mon 10:40-12:20</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== Level 3 ====== -->
    <div class="level-section">
        <div class="level-header">
            <div class="level-icon level-3">3</div>
            <h2 class="level-title">Level 3</h2>
            <span class="level-badge l3">Second Year — Semester 1</span>
        </div>
        <div class="courses-grid">
            <div class="course-card gradient-3">
                <span class="course-emoji">🗄️</span>
                <div class="course-code">IS202</div>
                <div class="course-name">Data Base</div>
                <div class="course-instructor">👤 Dr. Hossam</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sun 9:00-10:40</span>
                    <span class="type-badge lab">Lab A1-2 — Tue 2:20-4:00</span>
                    <span class="type-badge lab">Lab A3 — Mon 10:40-12:20</span>
                </div>
            </div>

            <div class="course-card gradient-3">
                <span class="course-emoji">🏗️</span>
                <div class="course-code">CS201</div>
                <div class="course-name">Data Structure</div>
                <div class="course-instructor">👤 Dr. Hossam</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Tue 9:00-10:40</span>
                    <span class="type-badge lab">Lab A1-2 — Mon 10:40-12:20</span>
                    <span class="type-badge lab">Lab A3 — Sun 2:20-4:00</span>
                </div>
            </div>

            <div class="course-card gradient-3">
                <span class="course-emoji">📐</span>
                <div class="course-code">BS201</div>
                <div class="course-name">Mathematics 2</div>
                <div class="course-instructor">👤 Dr. Mahmoud Abdulmawla</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sun 9:00-10:40</span>
                    <span class="type-badge sec">Sec A1-2 — Mon 12:40-2:20</span>
                    <span class="type-badge sec">Sec A3 — Tue 2:20-4:00</span>
                </div>
            </div>

            <div class="course-card gradient-3">
                <span class="course-emoji">📋</span>
                <div class="course-code">IS201</div>
                <div class="course-name">System Analysis</div>
                <div class="course-instructor">👤 Dr. Walaa</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Tue 9:00-10:40</span>
                    <span class="type-badge lab">Lab A1-2 — Sun 2:20-4:00</span>
                    <span class="type-badge lab">Lab A3 — Mon 10:40-12:20</span>
                </div>
            </div>

            <div class="course-card gradient-3">
                <span class="course-emoji">🔌</span>
                <div class="course-code">BS202</div>
                <div class="course-name">Intro to Electronics</div>
                <div class="course-instructor">👤 Dr. Hamed</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Sun 2:20-4:00</span>
                    <span class="type-badge lab">Lab A1 — Mon 10:40-12:20</span>
                    <span class="type-badge lab">Lab A3 — Mon 12:40-2:20</span>
                </div>
            </div>

            <div class="course-card gradient-3">
                <span class="course-emoji">🗣️</span>
                <div class="course-code">HM201</div>
                <div class="course-name">Communication</div>
                <div class="course-instructor">👤 Dr. Salib</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Tue 12:40-2:20</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== Level 4 ====== -->
    <div class="level-section">
        <div class="level-header">
            <div class="level-icon level-4">4</div>
            <h2 class="level-title">Level 4</h2>
            <span class="level-badge l4">Second Year — Semester 2</span>
        </div>
        <div class="courses-grid">
            <div class="course-card gradient-4">
                <span class="course-emoji">🔧</span>
                <div class="course-code">IT201</div>
                <div class="course-name">Logic Design</div>
                <div class="course-instructor">👤 Dr. Marwan</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec B — Tue 12:40-2:20</span>
                    <span class="type-badge lec">Lec C — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec D — Sun 2:20-4:00</span>
                </div>
            </div>

            <div class="course-card gradient-4">
                <span class="course-emoji">🌐</span>
                <div class="course-code">IT203</div>
                <div class="course-name">Network</div>
                <div class="course-instructor">👤 Dr. Einas / Dr. Hamed</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec B — Sun 2:20-4:00</span>
                    <span class="type-badge lec">Lec C — Tue 2:20-4:00</span>
                    <span class="type-badge lec">Lec D — Sun 2:20-4:00</span>
                </div>
            </div>

            <div class="course-card gradient-4">
                <span class="course-emoji">🔬</span>
                <div class="course-code">BS203</div>
                <div class="course-name">Numerical Computing</div>
                <div class="course-instructor">👤 Dr. Mahmoud</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec B — Sun 2:20-4:00</span>
                    <span class="type-badge lec">Lec C — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec D — Sun 2:20-4:00</span>
                </div>
            </div>

            <div class="course-card gradient-4">
                <span class="course-emoji">📊</span>
                <div class="course-code">BS204</div>
                <div class="course-name">Statistics & Probability</div>
                <div class="course-instructor">👤 Dr. Asmaa / Dr. Fattoh</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec B — Mon 2:20-4:00</span>
                    <span class="type-badge lec">Lec C — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec D — Tue 9:00-10:40</span>
                </div>
            </div>

            <div class="course-card gradient-4">
                <span class="course-emoji">🎨</span>
                <div class="course-code">IT202</div>
                <div class="course-name">Computer Graphics</div>
                <div class="course-instructor">👤 Dr. Sameha / Dr. Riham</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec B — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec C — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec D — Mon 12:40-2:20</span>
                </div>
            </div>

            <div class="course-card gradient-4">
                <span class="course-emoji">📈</span>
                <div class="course-code">HM204</div>
                <div class="course-name">Fund. of Management</div>
                <div class="course-instructor">👤 Dr. Amira Gad</div>
                <div class="course-type-badges">
                    <span class="type-badge lec">Lec A — Mon 12:40-2:20</span>
                    <span class="type-badge lec">Lec B — Tue 9:00-10:40</span>
                    <span class="type-badge lec">Lec C — Mon 10:40-12:20</span>
                    <span class="type-badge lec">Lec D — Tue 2:20-4:00</span>
                </div>
            </div>
        </div>
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
