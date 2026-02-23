<?php
// --- 1. إعدادات الاتصال والمنطق الخلفي ---
$servername = "sql313.infinityfree.com";
$username   = "if0_40879162";
$password   = "TBSMXFLWBNw"; 
$dbname     = "if0_40879162_classhub_db";

$total_materials_count = 0;
$first_year_count = 0;
$second_year_count = 0;
$first_year_assignments = 0;
$second_year_assignments = 0;
$first_year_ids = [];
$second_year_ids = [];
$first_year_assignment_ids = [];
$second_year_assignment_ids = [];
$db_error = false;

// مواد السنة الأولى
$first_year_subjects = ['oop', 'is', 'discrete', 'physics', 'english', 'economics'];
// مواد السنة التانية
$second_year_subjects = ['logic', 'numerical', 'network', 'statistics', 'graphics', 'management'];

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        throw new Exception("Connection failed");
    }

    // عد كل المواد
    $res1 = $conn->query("SELECT COUNT(*) FROM resources");
    if ($res1) {
        $total_materials_count = $res1->fetch_row()[0];
    }
    
    // عداد الزوار - زيادة العداد وجلب القيمة
    $visitor_count = 0;
    $conn->query("UPDATE visitors SET visit_count = visit_count + 1 WHERE id = 1");
    $visitor_res = $conn->query("SELECT visit_count FROM visitors WHERE id = 1");
    if ($visitor_res) {
        $visitor_count = $visitor_res->fetch_row()[0];
    }
    
    // جلب IDs السنة الأولى
    $first_subjects_str = "'" . implode("','", $first_year_subjects) . "'";
    $res2 = $conn->query("SELECT id, type FROM resources WHERE subject_id IN ($first_subjects_str)");
    if ($res2) {
        while($row = $res2->fetch_assoc()) {
            $first_year_ids[] = $row['id'];
            if ($row['type'] == 'assignment') {
                $first_year_assignments++;
                $first_year_assignment_ids[] = $row['id'];
            }
        }
        $first_year_count = count($first_year_ids);
    }
    
    // جلب IDs السنة التانية
    $second_subjects_str = "'" . implode("','", $second_year_subjects) . "'";
    $res3 = $conn->query("SELECT id, type FROM resources WHERE subject_id IN ($second_subjects_str)");
    if ($res3) {
        while($row = $res3->fetch_assoc()) {
            $second_year_ids[] = $row['id'];
            if ($row['type'] == 'assignment') {
                $second_year_assignments++;
                $second_year_assignment_ids[] = $row['id'];
            }
        }
        $second_year_count = count($second_year_ids);
    }
    
    $conn->close();
} catch (Exception $e) {
    $db_error = true; 
}

// --- 2. تحديد التحية ---
date_default_timezone_set('Africa/Cairo');
$hour = date('H');
if ($hour < 12) {
    $greeting = "Good Morning ☀️";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon 🌤️";
} else {
    $greeting = "Good Evening 🌙";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClassHub | Student Portal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="mobile-nav.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div><div class="shape"></div><div class="shape"></div><div class="shape"></div><div class="shape"></div>
    </div>

    <nav class="navbar" id="navbar">
        <div class="nav-content">
            <div class="logo-container" onclick="scrollToHome()">
                <div class="logo-image">🎓</div>
                <div class="logo-text">ClassHub</div>
            </div>
            <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
            <ul class="nav-links">
                <li class="nav-item"><a href="index.php" class="active">Home</a></li>
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
        <span class="greeting-badge" style="color: #fff;"><?php echo $greeting; ?>, Student!</span>
        <h1 class="hero-title">Welcome to Your Learning Hub</h1>
        <p class="hero-subtitle">Access all your class materials, track your progress.</p>
        
        <!-- الداشبوردات جمب بعض -->
        <div style="display: flex; gap: 2rem; flex-wrap: wrap; justify-content: center;">
            <!-- داشبورد السنة الأولى -->
            <div class="stats-card" style="flex: 1; min-width: 300px; max-width: 500px;">
                <h3 class="stats-title"><span style="color: #2ecc71;">&#9679;</span> First Year Dashboard</h3>
                <!-- الصف الأول: 3 عناصر -->
                <div class="stats-grid" style="grid-template-columns: repeat(3, 1fr);">
                    <div class="stat-item">
                        <div class="stat-number orange counter" data-target="6">0</div>
                        <div class="stat-label">Subjects</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number purple counter" data-target="<?php echo $first_year_count; ?>">0</div>
                        <div class="stat-label">Materials</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number green" id="firstYearFinished">0</div>
                        <div class="stat-label">Finished</div>
                    </div>
                </div>
                <!-- الصف التاني: Assignments -->
                <div style="display: flex; justify-content: center; gap: 2rem; margin-top: 1rem; padding: 15px; background: rgba(162, 155, 254, 0.1); border-radius: 15px; border: 1px solid rgba(162, 155, 254, 0.3);">
                    <div style="text-align: center;">
                        <div class="stat-number counter" style="color: #a29bfe; font-size: 1.8rem;" data-target="<?php echo $first_year_assignments; ?>">0</div>
                        <div class="stat-label">📋 Assignments</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="stat-number" style="color: #00b894; font-size: 1.8rem;" id="firstYearAssignmentsFinished">0</div>
                        <div class="stat-label">✅ Done</div>
                    </div>
                </div>
                <!-- زرار Go -->
                <div style="text-align: center; margin-top: 1rem;">
                    <a href="first.php" class="dashboard-go-btn" style="text-decoration: none; display: inline-block; padding: 10px 30px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 25px; color: white; font-weight: 600; transition: all 0.3s ease;">
                        Go → View All
                    </a>
                </div>
            </div>

            <!-- داشبورد السنة التانية -->
            <div class="stats-card" style="flex: 1; min-width: 300px; max-width: 500px;">
                <h3 class="stats-title"><span style="color: #54a0ff;">&#9679;</span> Second Year Dashboard</h3>
                <!-- الصف الأول: 3 عناصر -->
                <div class="stats-grid" style="grid-template-columns: repeat(3, 1fr);">
                    <div class="stat-item">
                        <div class="stat-number orange counter" data-target="6">0</div>
                        <div class="stat-label">Subjects</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number purple counter" data-target="<?php echo $second_year_count; ?>">0</div>
                        <div class="stat-label">Materials</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number green" id="secondYearFinished">0</div>
                        <div class="stat-label">Finished</div>
                    </div>
                </div>
                <!-- الصف التاني: Assignments -->
                <div style="display: flex; justify-content: center; gap: 2rem; margin-top: 1rem; padding: 15px; background: rgba(162, 155, 254, 0.1); border-radius: 15px; border: 1px solid rgba(162, 155, 254, 0.3);">
                    <div style="text-align: center;">
                        <div class="stat-number counter" style="color: #a29bfe; font-size: 1.8rem;" data-target="<?php echo $second_year_assignments; ?>">0</div>
                        <div class="stat-label">📋 Assignments</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="stat-number" style="color: #00b894; font-size: 1.8rem;" id="secondYearAssignmentsFinished">0</div>
                        <div class="stat-label">✅ Done</div>
                    </div>
                </div>
                <!-- زرار Go -->
                <div style="text-align: center; margin-top: 1rem;">
                    <a href="second.php" class="dashboard-go-btn" style="text-decoration: none; display: inline-block; padding: 10px 30px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 25px; color: white; font-weight: 600; transition: all 0.3s ease;">
                        Go → View All
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="resources-grid">
        <div class="resource-card">
            <span class="card-icon" style="font-size: 3rem;">&#128218;</span>
            <h3 class="card-title">Books & Lectures</h3>
            <p class="card-description">Access all your textbooks, recorded lectures, and educational materials in one place.</p>
        </div>

        <div class="resource-card">
            <span class="card-icon" style="font-size: 3rem;">&#128221;</span>
            <h3 class="card-title">Summaries & Notes</h3>
            <p class="card-description">Quick study guides and chapter summaries to help you prepare for exams.</p>
        </div>

        <div class="resource-card">
            <span class="card-icon" style="font-size: 3rem;">&#127909;</span>
            <h3 class="card-title">Videos & Tutorials</h3>
            <p class="card-description">Watch educational videos and tutorials to enhance your understanding.</p>
        </div>
    </div>

    <!-- Semester Materials Section -->
    <div class="semester-section" style="padding: 3rem 2rem; max-width: 1400px; margin: 0 auto;">
        <h2 style="text-align: center; color: white; font-size: 2rem; margin-bottom: 2rem; font-weight: 700;">
            Previous Semesters Materials
        </h2>
        <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; justify-content: center;">
            <a href="semester1.php" class="semester-btn" style="
                flex: 1;
                min-width: 250px;
                max-width: 400px;
                padding: 2rem;
                background: linear-gradient(135deg, rgba(236, 72, 153, 0.2), rgba(168, 85, 247, 0.2));
                border: 1px solid rgba(236, 72, 153, 0.4);
                border-radius: 20px;
                text-decoration: none;
                color: white;
                text-align: center;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            ">
                <span style="font-size: 3rem; display: block; margin-bottom: 1rem;">&#128221;</span>
                <span style="font-size: 1.3rem; font-weight: 600; display: block;">Materials for Semester 1</span>
                <span style="font-size: 0.9rem; color: #f472b6; margin-top: 0.5rem; display: block;">First Year - First Term</span>
            </a>
            <a href="semester2.php" class="semester-btn" style="
                flex: 1;
                min-width: 250px;
                max-width: 400px;
                padding: 2rem;
                background: linear-gradient(135deg, rgba(102, 126, 234, 0.2), rgba(118, 75, 162, 0.2));
                border: 1px solid rgba(102, 126, 234, 0.4);
                border-radius: 20px;
                text-decoration: none;
                color: white;
                text-align: center;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            ">
                <span style="font-size: 3rem; display: block; margin-bottom: 1rem;">📚</span>
                <span style="font-size: 1.3rem; font-weight: 600; display: block;">Materials for Semester 2</span>
                <span style="font-size: 0.9rem; color: #a8c0ff; margin-top: 0.5rem; display: block;">First Year - Second Term</span>
            </a>
            <a href="semester3.php" class="semester-btn" style="
                flex: 1;
                min-width: 250px;
                max-width: 400px;
                padding: 2rem;
                background: linear-gradient(135deg, rgba(46, 204, 113, 0.2), rgba(39, 174, 96, 0.2));
                border: 1px solid rgba(46, 204, 113, 0.4);
                border-radius: 20px;
                text-decoration: none;
                color: white;
                text-align: center;
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            ">
                <span style="font-size: 3rem; display: block; margin-bottom: 1rem;">📖</span>
                <span style="font-size: 1.3rem; font-weight: 600; display: block;">Materials for Semester 3</span>
                <span style="font-size: 0.9rem; color: #2ecc71; margin-top: 0.5rem; display: block;">Second Year - First Term</span>
            </a>
        </div>
    </div>

    <!-- Visitor Counter Section -->
    <div class="visitor-section">
        <div class="visitor-box">
            <span class="visitor-icon">👥</span>
            <div class="visitor-info">
                <span class="visitor-label">Total Visitors</span>
                <span class="visitor-count"><?php echo number_format($visitor_count); ?></span>
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
            © <?php echo date("Y"); ?> ClassHub. Built with ❤️ for students, by students.
        </div>
    </footer>
    


    <div class="scroll-to-top" id="scrollToTop">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
        </svg>
    </div>

    <script>
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / 50; 
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };
            setTimeout(updateCount, 500);
        });

        function scrollToHome() { window.location.href = 'index.php'; }

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

        const scrollToTopBtn = document.getElementById('scrollToTop');
        window.addEventListener('scroll', () => {
            scrollToTopBtn.classList.toggle('show', window.scrollY > 300);
        });
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        document.addEventListener("DOMContentLoaded", function() {
            try {
                const finishedItems = JSON.parse(localStorage.getItem("finishedLectures")) || [];
                
                // IDs مواد كل سنة من الداتا بيز
                const firstYearIds = <?php echo json_encode(array_map('intval', $first_year_ids)); ?>;
                const secondYearIds = <?php echo json_encode(array_map('intval', $second_year_ids)); ?>;
                
                // IDs تاسكات كل سنة
                const firstYearAssignmentIds = <?php echo json_encode(array_map('intval', $first_year_assignment_ids)); ?>;
                const secondYearAssignmentIds = <?php echo json_encode(array_map('intval', $second_year_assignment_ids)); ?>;
                
                // حساب اللي خلصته في كل سنة
                let firstYearFinishedCount = 0;
                let secondYearFinishedCount = 0;
                let firstYearAssignmentsFinishedCount = 0;
                let secondYearAssignmentsFinishedCount = 0;
                
                finishedItems.forEach(id => {
                    const intId = parseInt(id);
                    if (firstYearIds.includes(intId)) {
                        firstYearFinishedCount++;
                    }
                    if (secondYearIds.includes(intId)) {
                        secondYearFinishedCount++;
                    }
                    if (firstYearAssignmentIds.includes(intId)) {
                        firstYearAssignmentsFinishedCount++;
                    }
                    if (secondYearAssignmentIds.includes(intId)) {
                        secondYearAssignmentsFinishedCount++;
                    }
                });
                
                const firstYearEl = document.getElementById("firstYearFinished");
                const secondYearEl = document.getElementById("secondYearFinished");
                const firstYearAssignEl = document.getElementById("firstYearAssignmentsFinished");
                const secondYearAssignEl = document.getElementById("secondYearAssignmentsFinished");
                
                // عرض الأرقام مع animation
                function animateCounter(element, target) {
                    if(!element) return;
                    if(target === 0) {
                        element.innerText = 0;
                        return;
                    }
                    let start = 0;
                    const duration = 1000;
                    const stepTime = Math.abs(Math.floor(duration / target));
                    const timer = setInterval(function() {
                        start += 1;
                        element.innerText = start;
                        if (start >= target) clearInterval(timer);
                    }, stepTime);
                }
                
                animateCounter(firstYearEl, firstYearFinishedCount);
                animateCounter(secondYearEl, secondYearFinishedCount);
                animateCounter(firstYearAssignEl, firstYearAssignmentsFinishedCount);
                animateCounter(secondYearAssignEl, secondYearAssignmentsFinishedCount);
                
            } catch (e) { console.log("Local storage error"); }
        });
    </script>
    <script src="mobile-nav.js"></script>
</body>
</html>