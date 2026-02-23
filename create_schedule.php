<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Schedule - ClassHub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="schedule-styles.css">
    <link rel="stylesheet" href="mobile-nav.css">
    <link rel="stylesheet" href="create_schedule_style.css">
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
    </div>

    <!-- Same Navbar as schedule.php -->
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

    <div class="scheduler-container">
        <header class="scheduler-header">
            <div class="bounce-in" style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 0.5rem;">
                <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/2728.png" alt="✨" style="width: 3rem; height: 3rem;">
                <h1 style="margin: 0;">Build Your Dream Schedule</h1>
            </div>
            <p class="fade-in">Select your courses, customize your groups, and generate your perfect weekly plan.</p>
        </header>

        <!-- Step 1: Course Selection -->
        <section id="course-selection" class="step-section active">
            <div class="search-bar-container">
                <input type="text" id="courseSearch" placeholder="🔍 Search for courses (e.g., 'Physics', 'CS101')...">
            </div>
            
            <div class="courses-grid-wrapper" id="coursesGrid">
                <!-- Courses will be injected here via JS -->
                 <div class="loading-spinner">Loading Courses...</div>
            </div>

            <div class="scheduler-actions">
                <button id="viewScheduleBtn" class="action-btn primary-btn hidden">
                    <span class="btn-icon">📅</span> Generate Schedule (<span id="selectedCount">0</span>)
                </button>
            </div>
        </section>

        <!-- Final Schedule View (Hidden initially) -->
        <section id="schedule-view" class="step-section hidden">
            <div class="schedule-toolbar">
                <button id="backToSelectionBtn" class="action-btn secondary-btn">
                    <span class="btn-icon">⬅️</span> Modify Selection
                </button>
                <button id="printScheduleBtn" class="action-btn primary-btn">
                    <span class="btn-icon">🖨️</span> Print
                </button>
                <button id="downloadImageBtn" class="action-btn secondary-btn" style="margin-left: 10px; background: linear-gradient(135deg, #11998e, #38ef7d); color: white;">
                    <span class="btn-icon">📷</span> Save as Image
                </button>
            </div>
            <div id="scheduleTableContainer" class="schedule-output">
                <!-- Schedule Table will be injected here -->
            </div>
        </section>
    </div>

    <!-- Course Details Modal -->
    <div id="courseModal" class="modal-overlay">
        <div class="modal-content glass-panel">
            <span class="close-modal">&times;</span>
            <div class="modal-header">
                <h2 id="modalCourseTitle">Course Name</h2>
                <span id="modalCourseCode" class="badge">CODE</span>
            </div>
            
            <div class="modal-body">
                <div class="selection-step" id="groupSelectionStep">
                    <h3>1. Select Lecture Group</h3>
                    <div class="options-grid" id="groupOptions">
                        <!-- Group buttons (A, B, C...) -->
                    </div>
                </div>

                <div class="selection-step hidden" id="subgroupSelectionStep">
                    <h3>2. Select Lab/Section</h3>
                    <div class="options-grid" id="subgroupOptions">
                        <!-- Lab/Section buttons -->
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button id="confirmSelectionBtn" class="action-btn confirm-btn disabled">Confirm & Add</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-bottom">
            © 2026 ClassHub. Built with ❤️ for students.
        </div>
    </footer>

    <script>
        function scrollToHome() { window.location.href = 'index.php'; }
        // Navbar toggle logic (reused)
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.querySelector('.nav-links');
        if(hamburger) {
            hamburger.addEventListener('click', () => {
                hamburger.classList.toggle('active');
                navLinks.classList.toggle('active');
            });
        }
    </script>
    <!-- html2canvas for Download as Image -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="create_schedule_data.js?v=2.0"></script>
    <script src="create_schedule_script.js?v=2.2"></script>
</body>
</html>