<?php
// ضبط المنطقة الزمنية لمصر
date_default_timezone_set('Africa/Cairo');

// 1. إعداد بيانات الاتصال بقاعدة البيانات
$servername = "sql313.infinityfree.com"; 
$username   = "if0_40879162"; 
$password   = "TBSMXFLWBNw"; 
$dbname     = "if0_40879162_classhub_db";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("الاتصال فشل: " . $conn->connect_error);
}

// 2. جلب جميع التنبيهات من الجدول
$notifications = [];
$sql = "SELECT msg, created_at FROM notifications WHERE year='second' ORDER BY id DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
}
$count = count($notifications); // عدد التنبيهات
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Year - Class Resources Hub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="second-styles.css">
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
                <li class="nav-item"><a href="schedule.php">Schedule</a></li>
                <li class="nav-item"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="floating-notification-bell" id="notificationBtn">
        <div class="bell-icon">
            🔔
            <?php if ($count > 0): ?>
                <span class="notification-badge"><?php echo $count; ?></span>
            <?php endif; ?>
        </div>
    </div>

    <div class="notification-dropdown" id="notificationDropdown">
        <div class="notification-header">
            <h3>الإشعارات (<?php echo $count; ?>)</h3>
        </div>
        <div class="notification-list" id="notificationList">
            <?php if ($count > 0): ?>
                <?php foreach($notifications as $notif): ?>
                    <div class="notification-item">
                        <div class="notification-msg"><?php echo htmlspecialchars($notif['msg']); ?></div>
                        <span class="notification-time">🕒 <?php 
                            $time = new DateTime($notif['created_at']);
                            echo $time->format('M d, h:i A'); 
                        ?></span>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="no-notifications">
                    <span>📭</span>
                    <p>لا توجد رسائل</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <section class="hero">
        <h1 class="hero-title">Second Year Lectures</h1>
        <p class="hero-subtitle">Your complete guide to second year computer science</p>
    </section>

    <div class="resources-grid">
        <a href="logic.php" class="resource-card">
            <span class="card-icon">⚡</span>
            <h3 class="card-title">Logic Design</h3>
            <p class="card-description">Master digital logic circuits, Boolean algebra, combinational and sequential circuits design.</p>
        </a>

        <a href="numerical.php" class="resource-card">
            <span class="card-icon">🔢</span>
            <h3 class="card-title">Numerical Computing</h3>
            <p class="card-description">Learn numerical methods, matrix operations, and computational algorithms for engineering problems.</p>
        </a>

        <a href="network.php" class="resource-card">
            <span class="card-icon">🌐</span>
            <h3 class="card-title">Computer Network</h3>
            <p class="card-description">Understand networking protocols, OSI model, TCP/IP, and network security fundamentals.</p>
        </a>

        <a href="statistics.php" class="resource-card">
            <span class="card-icon">📊</span>
            <h3 class="card-title">Statistics & Probability</h3>
            <p class="card-description">Explore probability theory, statistical analysis, and data interpretation techniques.</p>
        </a>

        <a href="graphics.php" class="resource-card">
            <span class="card-icon">🎨</span>
            <h3 class="card-title">Computer Graphics</h3>
            <p class="card-description">Create 2D/3D graphics, learn rendering techniques, transformations, and animation principles.</p>
        </a>

        <a href="management.php" class="resource-card">
            <span class="card-icon">💼</span>
            <h3 class="card-title">Fun. Of Managements</h3>
            <p class="card-description">Understand management principles, organizational behavior, and business administration basics.</p>
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
            © <?php echo date("Y"); ?> ClassHub. Built with ❤️ for students, by students.
        </div>
    </footer>

    <script>
        // Ensure footer dropdown works
        const footerLecturesDropdown = document.getElementById('footerLecturesDropdown');
        if(footerLecturesDropdown) {
            const footerDropdownToggle = footerLecturesDropdown.querySelector('.footer-dropdown-toggle');
            footerDropdownToggle.addEventListener('click', (e) => {
                e.preventDefault();
                footerLecturesDropdown.classList.toggle('active');
            });
        }
    </script>

    <script>
        // Toggle notification dropdown
        const notificationBtn = document.getElementById('notificationBtn');
        const notificationDropdown = document.getElementById('notificationDropdown');

        notificationBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            notificationDropdown.classList.toggle('show');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!notificationBtn.contains(e.target) && !notificationDropdown.contains(e.target)) {
                notificationDropdown.classList.remove('show');
            }
        });

        function scrollToHome() { window.location.href = 'index.php'; }

        // Dropdown Navigation
        const lecturesDropdown = document.getElementById('lecturesDropdown');
        const dropdownToggle = lecturesDropdown.querySelector('.dropdown-toggle');
        dropdownToggle.addEventListener('click', (e) => {
            e.preventDefault();
            lecturesDropdown.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!lecturesDropdown.contains(e.target)) {
                lecturesDropdown.classList.remove('active');
            }
        });
    </script>
    <script src="mobile-nav.js"></script>
</body>
</html>