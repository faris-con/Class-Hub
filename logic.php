<?php
// 1. الاتصال بقاعدة البيانات
$servername = "sql313.infinityfree.com";
$username   = "if0_40879162";
$password   = "TBSMXFLWBNw";
$dbname     = "if0_40879162_classhub_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. تعريف المصفوفات
$lectures = [];
$summaries = [];
$videos = [];
$assignments = [];
// التعديل 1: مصفوفة شاملة لكل IDs المادة دي عشان العداد يحسب كله
$all_subject_ids = []; 

// 3. جلب البيانات (Logic Design)
$sql = "SELECT * FROM resources WHERE subject_id = 'logic' ORDER BY id DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // بنخزن الـ ID بتاع أي حاجة تخص المادة دي
        $all_subject_ids[] = $row['id'];

        if ($row['type'] == 'lecture') {
            $lectures[] = $row;
        } elseif ($row['type'] == 'summary') {
            $summaries[] = $row;
        } elseif ($row['type'] == 'video') {
            $videos[] = $row;
        } elseif ($row['type'] == 'assignment') {
            $assignments[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic Design - Class Resources Hub</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="../Logo.png">

    <link rel="stylesheet" href="logic-styles.css?v=<?php echo time(); ?>">
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
                <li class="nav-item"><a href="../index.php">Home</a></li>
                <li class="nav-item dropdown" id="lecturesDropdown">
                    <a href="#lectures" class="dropdown-toggle">
                        Lectures <span class="dropdown-arrow">▼</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="first.php">First Year</a>
                        <a href="second.php">Second Year</a>
                        <a href="previous-semesters.php">Previous Semesters</a>
                    </div>
                </li>
                <li class="nav-item"><a href="programming.php">Programming</a></li>
                <li class="nav-item"><a href="communities.php">Communities</a></li>
                <li class="nav-item"><a href="schedule.php">Schedule</a></li>
                <li class="nav-item"><a href="../contact.html" target="_blank">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <h1 class="hero-title">⚡ Logic Design</h1>
        <p class="hero-subtitle">Master digital logic circuits and Boolean algebra</p>

        <div class="subject-stats">
            <div class="stat-box">
                <span class="stat-num c-blue"><?php echo count($lectures); ?></span>
                <span class="stat-txt">Lectures</span>
            </div>
            <div class="stat-box">
                <span class="stat-num c-orange"><?php echo count($summaries); ?></span>
                <span class="stat-txt">Summaries</span>
            </div>
            <div class="stat-box">
                <span class="stat-num c-red"><?php echo count($videos); ?></span>
                <span class="stat-txt">Videos</span>
            </div>
            <div class="stat-box">
                <span class="stat-num" style="color: #a29bfe;"><?php echo count($assignments); ?></span>
                <span class="stat-txt">Assignments</span>
            </div>
            <div class="stat-box" style="border-color: #1dd1a1;">
                <span class="stat-num c-green" id="localFinishedCount">0</span>
                <span class="stat-txt">Total Finished ✅</span>
            </div>
        </div>

    </section>

    <div class="content-container">
        <div class="content-grid">
            
            <div class="content-section">
                <div class="section-header">
                    <span class="section-icon">📚</span>
                    <h2 class="section-title">المحاضرات</h2>
                </div>
                <div class="section-content" style="display: block; width: 100%;">
                    <?php if (count($lectures) > 0): ?>
                        <?php foreach($lectures as $lec): ?>
                            <div class="resource-row">
                                <a href="../<?php echo $lec['link']; ?>" target="_blank" class="resource-link">
                                    <span class="link-icon-small">📄</span><?php echo $lec['title']; ?>
                                </a>
                                <button class="finish-btn" 
                                        data-id="<?php echo $lec['id']; ?>" 
                                        onclick="toggleFinish(this, <?php echo $lec['id']; ?>)">
                                    Wait
                                </button>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="coming-soon">محتوى المحاضرات سيتم إضافته قريباً...</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="content-section">
                <div class="section-header">
                    <span class="section-icon">📝</span>
                    <h2 class="section-title">الملخصات</h2>
                </div>
                <div class="section-content" style="display: block; width: 100%;">
                    <?php if (count($summaries) > 0): ?>
                        <?php foreach($summaries as $sum): ?>
                            <div class="resource-row">
                                <a href="../<?php echo $sum['link']; ?>" target="_blank" class="resource-link">
                                    <span class="link-icon-small">📑</span><?php echo $sum['title']; ?>
                                </a>
                                <button class="finish-btn" 
                                        data-id="<?php echo $sum['id']; ?>" 
                                        onclick="toggleFinish(this, <?php echo $sum['id']; ?>)">
                                    Wait
                                </button>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="coming-soon">محتوى الملخصات سيتم إضافته قريباً...</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="content-section">
                <div class="section-header">
                    <span class="section-icon">🎥</span>
                    <h2 class="section-title">الفيديوهات</h2>
                </div>
                <div class="section-content" style="display: block; width: 100%;">
                    <?php if (count($videos) > 0): ?>
                        <?php foreach($videos as $vid): ?>
                            <?php 
                                $link = $vid['link'];
                                if (strpos($link, 'uploads/') !== false) $link = "../" . $link;
                            ?>
                            <div class="resource-row">
                                <a href="<?php echo $link; ?>" target="_blank" class="resource-link">
                                    <span class="link-icon-small">▶️</span><?php echo $vid['title']; ?>
                                </a>
                                <button class="finish-btn" 
                                        data-id="<?php echo $vid['id']; ?>" 
                                        onclick="toggleFinish(this, <?php echo $vid['id']; ?>)">
                                    Wait
                                </button>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="coming-soon">محتوى الفيديوهات سيتم إضافته قريباً...</p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="content-section">
                <div class="section-header">
                    <span class="section-icon">📋</span>
                    <h2 class="section-title">Assignments</h2>
                </div>
                <div class="section-content" style="display: block; width: 100%;">
                    <?php if (count($assignments) > 0): ?>
                        <?php foreach($assignments as $assign): ?>
                            <?php 
                                $link = $assign['link'];
                                if (strpos($link, 'uploads/') !== false) $link = "../" . $link;
                            ?>
                            <div class="resource-row">
                                <a href="<?php echo $link; ?>" target="_blank" class="resource-link">
                                    <span class="link-icon-small">📋</span><?php echo $assign['title']; ?>
                                </a>
                                <button class="finish-btn" 
                                        data-id="<?php echo $assign['id']; ?>" 
                                        onclick="toggleFinish(this, <?php echo $assign['id']; ?>)">
                                    Wait
                                </button>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="coming-soon">لا يوجد assignments حالياً...</p>
                    <?php endif; ?>
                </div>
            </div>

        </div>

    </div>

    <?php include 'logic-quiz.php'; ?>

    <!-- Previous Exams Section -->
    <div class="quiz-section">
        <h3 style="color: #fff; font-size: 1.3rem; margin-bottom: 1rem;">📋 Previous Exams</h3>
        <p style="color: rgba(255,255,255,0.6); margin-bottom: 1.5rem;">Access past exams and practice materials</p>
        <div id="prevExamsContent" style="display: none; margin-top: 1.5rem; text-align: left;">
            <!-- Add your exam links here -->
            <p style="color: rgba(255,255,255,0.5); text-align: center;">Coming soon...</p>
        </div>
        <button class="quiz-btn exams-btn" onclick="document.getElementById('prevExamsContent').style.display = document.getElementById('prevExamsContent').style.display === 'none' ? 'block' : 'none'; this.innerHTML = document.getElementById('prevExamsContent').style.display === 'none' ? '<span>📋</span> View Previous Exams' : '<span>📋</span> Hide Previous Exams';">
            <span>📋</span> View Previous Exams
        </button>
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
                    <a href="../index.php">Home</a>
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
                    <a href="../contact.html">Contact</a>
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
        // --- 1. هنا بنستقبل كل الـ IDs بتاعة المادة دي (محاضرات + ملخصات + فيديوهات) ---
        // ده هو التعديل اللي هيخلي العداد يعد كل حاجة تخص المادة
        const currentSubjectIds = <?php echo json_encode($all_subject_ids); ?>;

        // --- 2. دالة تحديث العداد ---
        function updateSubjectProgress() {
            // بنجيب الليستة الكاملة للحاجات اللي خلصت من المتصفح
            let allFinished = JSON.parse(localStorage.getItem("finishedLectures")) || [];
            
            // بنشوف كام ID من اللي خلصوا دول موجود جوه قائمة المادة دي
            // استخدمنا map(Number) عشان نضمن اننا بنقارن أرقام بأرقام مش نصوص
            let subjectFinishedCount = 0;
            
            currentSubjectIds.forEach(id => {
               if (allFinished.includes(parseInt(id))) {
                   subjectFinishedCount++;
               }
            });
            
            // تحديث الرقم في الشاشة
            const counterElement = document.getElementById('localFinishedCount');
            if(counterElement) {
                counterElement.innerText = subjectFinishedCount;
            }
        }

        // --- 3. تشغيل الكود عند فتح الصفحة ---
        document.addEventListener("DOMContentLoaded", function() {
            let finishedItems = JSON.parse(localStorage.getItem("finishedLectures")) || [];
            
            // بنلف على كل الزراير في الصفحة عشان نلونهم لو كانوا خلصانين
            document.querySelectorAll('.finish-btn').forEach(btn => {
                let id = parseInt(btn.getAttribute('data-id'));
                if (finishedItems.includes(id)) {
                    btn.classList.add('done');
                    btn.innerText = "Done ✔";
                } else {
                    btn.innerText = "Finish"; // ممكن تغيرها لـ Wait لو تحب
                }
            });

            // حساب العداد أول ما الصفحة تفتح
            updateSubjectProgress();
        });

        // --- 4. لما تضغط على الزرار ---
        function toggleFinish(btn, id) {
            let finishedItems = JSON.parse(localStorage.getItem("finishedLectures")) || [];
            id = parseInt(id); // تأكيد إنه رقم

            if (finishedItems.includes(id)) {
                // لو موجود -> شيله (Un-finish)
                finishedItems = finishedItems.filter(item => item !== id);
                btn.classList.remove('done');
                btn.innerText = "Finish";
            } else {
                // لو مش موجود -> ضيفه (Finish)
                finishedItems.push(id);
                btn.classList.add('done');
                btn.innerText = "Done ✔";
            }

            // حفظ التعديل
            localStorage.setItem("finishedLectures", JSON.stringify(finishedItems));
            
            // تحديث الرقم فوراً
            updateSubjectProgress();
        }

        // --- وظائف التصميم (Dropdown, Scroll) ---
        function scrollToHome() { window.location.href = '../index.php'; }
        
        const lecturesDropdown = document.getElementById('lecturesDropdown');
        if(lecturesDropdown) {
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
        }

        const footerLecturesDropdown = document.getElementById('footerLecturesDropdown');
        if(footerLecturesDropdown) {
            const footerDropdownToggle = footerLecturesDropdown.querySelector('.footer-dropdown-toggle');
            footerDropdownToggle.addEventListener('click', (e) => {
                e.preventDefault();
                footerLecturesDropdown.classList.toggle('active');
            });
        }

        const scrollToTopBtn = document.getElementById('scrollToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // ============== Quiz Functions ==============
        const correctAnswers = {
            1: 'b',  // A AND 0 = 0
            2: 'b',  // A OR 1 = 1
            3: 'b',  // AND Gate
            4: 'a',  // NOT(NOT A) = A
            5: 'c'   // 2^3 = 8 rows
        };
        
        let userAnswers = {};
        const totalQuestions = 5;
        let currentQuestion = 1;

        function openQuizModal() {
            document.getElementById('quizModal').classList.add('active');
            document.body.style.overflow = 'hidden';
            showQuestion(1);
        }

        function closeQuizModal() {
            document.getElementById('quizModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        function showQuestion(num) {
            // Hide all questions
            document.querySelectorAll('.question-card').forEach(card => {
                card.classList.remove('active');
            });
            
            // Show current question
            document.querySelector(`.question-card[data-question="${num}"]`).classList.add('active');
            
            // Update progress indicator
            document.getElementById('progressIndicator').textContent = `${num} / ${totalQuestions}`;
            
            // Update navigation buttons
            document.getElementById('prevBtn').disabled = (num === 1);
            
            // Show/hide next button and submit button
            if (num === totalQuestions) {
                document.getElementById('nextBtn').style.display = 'none';
                document.getElementById('submitQuizBtn').style.display = 'block';
                checkAllAnswered();
            } else {
                document.getElementById('nextBtn').style.display = 'flex';
                document.getElementById('submitQuizBtn').style.display = 'none';
            }
            
            currentQuestion = num;
        }

        function nextQuestion() {
            if (currentQuestion < totalQuestions) {
                showQuestion(currentQuestion + 1);
            }
        }

        function prevQuestion() {
            if (currentQuestion > 1) {
                showQuestion(currentQuestion - 1);
            }
        }

        function selectOption(element, questionNum) {
            // Remove selection from other options in this question
            const questionCard = element.closest('.question-card');
            questionCard.querySelectorAll('.option-item').forEach(opt => {
                opt.classList.remove('selected');
            });
            
            // Select this option
            element.classList.add('selected');
            
            // Store the answer
            userAnswers[questionNum] = element.getAttribute('data-answer');
            
            // Check if all questions are answered (for last question)
            if (currentQuestion === totalQuestions) {
                checkAllAnswered();
            }
        }

        function checkAllAnswered() {
            const submitBtn = document.getElementById('submitQuizBtn');
            if (Object.keys(userAnswers).length === totalQuestions) {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }

        function submitQuiz() {
            let score = 0;
            
            // Check each answer and highlight correct/wrong
            for (let q = 1; q <= totalQuestions; q++) {
                const questionCard = document.querySelector(`.question-card[data-question="${q}"]`);
                const options = questionCard.querySelectorAll('.option-item');
                
                options.forEach(opt => {
                    const answer = opt.getAttribute('data-answer');
                    opt.style.pointerEvents = 'none'; // Disable clicking
                    
                    if (answer === correctAnswers[q]) {
                        opt.classList.add('correct');
                    }
                    
                    if (answer === userAnswers[q] && answer !== correctAnswers[q]) {
                        opt.classList.add('wrong');
                    }
                });
                
                if (userAnswers[q] === correctAnswers[q]) {
                    score++;
                }
            }
            
            // Hide quiz nav, submit button, show result
            document.getElementById('submitQuizBtn').style.display = 'none';
            document.getElementById('quizNav').style.display = 'none';
            document.getElementById('questionsContainer').style.display = 'none';
            
            const resultCard = document.getElementById('resultCard');
            resultCard.classList.add('show');
            
            document.getElementById('scoreDisplay').textContent = `${score}/${totalQuestions}`;
            
            // Show appropriate message based on score
            let message = '';
            if (score === totalQuestions) {
                message = '🎉 Excellent! Perfect Score!';
            } else if (score >= totalQuestions * 0.7) {
                message = '👏 Great Job!';
            } else if (score >= totalQuestions * 0.5) {
                message = '💪 Good! Keep practicing!';
            } else {
                message = '📚 Need more practice!';
            }
            document.getElementById('resultMessage').textContent = message;
        }

        function retryQuiz() {
            // Reset everything
            userAnswers = {};
            currentQuestion = 1;
            
            // Reset UI
            document.querySelectorAll('.option-item').forEach(opt => {
                opt.classList.remove('selected', 'correct', 'wrong');
                opt.style.pointerEvents = 'auto';
            });
            
            document.getElementById('quizNav').style.display = 'flex';
            document.getElementById('questionsContainer').style.display = 'block';
            document.getElementById('resultCard').classList.remove('show');
            
            showQuestion(1);
        }

        // Close modal when clicking outside
        document.getElementById('quizModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeQuizModal();
            }
        });
    </script>
    <script src="mobile-nav.js"></script>
</body>
</html>