<?php
session_start();

// SHA-256 Hashes
$admin_user_hash = "cc4ea86f8726f657f91bebf6446597888df5736eaf3d4852e4eb1393ea19c95e"; // Adminn22_3
$admin_pass_hash = "634d2505b8a6c525327cf53ce6954ef2a396c8abe474a5be563104b6399b734b"; // F1year@22_3

// Handle Login
if (isset($_POST['login'])) {
    $user_input = hash('sha256', $_POST['username']);
    $pass_input = hash('sha256', $_POST['password']);

    if ($user_input === $admin_user_hash && $pass_input === $admin_pass_hash) {
        // --- LOGGING START ---
        $servername_log = "sql313.infinityfree.com";
        $username_log   = "if0_40879162";
        $password_log   = "TBSMXFLWBNw";
        $dbname_log     = "if0_40879162_classhub_db";
        
        $conn_log = new mysqli($servername_log, $username_log, $password_log, $dbname_log);
        if (!$conn_log->connect_error) {
            // Ensure consistent UTC handling
            $conn_log->query("SET time_zone = '+00:00'");

            // Ensure table exists with new column
            $check_col = $conn_log->query("SHOW COLUMNS FROM admin_login_logs LIKE 'device_details'");
            if ($check_col->num_rows == 0) {
                $conn_log->query("ALTER TABLE admin_login_logs ADD COLUMN device_details TEXT");
            }

            $ip = $_SERVER['REMOTE_ADDR'];
            $ua = $_SERVER['HTTP_USER_AGENT'];
            $page = "First Year Admin";
            $details = isset($_POST['device_details']) ? $_POST['device_details'] : ''; // Capture JS details
            
            $stmt_log = $conn_log->prepare("INSERT INTO admin_login_logs (ip_address, user_agent, page_type, device_details) VALUES (?, ?, ?, ?)");
            $stmt_log->bind_param("ssss", $ip, $ua, $page, $details);
            $stmt_log->execute();
            $stmt_log->close();
            $conn_log->close();
        }
        // --- LOGGING END ---

        $_SESSION['admin_first_logged_in'] = true;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $error = "❌ بيانات الدخول غير صحيحة";
    }
}

// Check if logged in
if (!isset($_SESSION['admin_first_logged_in']) || $_SESSION['admin_first_logged_in'] !== true) {
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - First Year</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="first-styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden; /* Prevent scrollbars from floating shapes */
        }
        .login-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.06));
            backdrop-filter: blur(25px);
            border-radius: 28px;
            padding: 3.5rem;
            box-shadow: 
                0 20px 60px rgba(0, 0, 0, 0.35),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.15);
            width: 100%;
            max-width: 450px;
            text-align: center;
            position: relative;
            z-index: 10;
            animation: cardFadeIn 0.8s ease-out both;
        }
        @keyframes cardFadeIn {
            from { opacity: 0; transform: translateY(30px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        .login-card h2 {
            margin-bottom: 2rem;
            color: white;
            font-size: 1.8rem;
            font-weight: 700;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
        .form-group { margin-bottom: 1.5rem; text-align: right; }
        input {
            width: 100%;
            padding: 14px 20px;
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: white;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }
        input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
            background: rgba(15, 23, 42, 0.8);
        }
        button {
            width: 100%;
            padding: 14px;
            margin-top: 10px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }
        .error {
            background: rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ff8a8a;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
    </style>
    <script>
        function captureDetails() {
            const details = {
                screen: `${window.screen.width}x${window.screen.height}`,
                timezone: Intl.DateTimeFormat().resolvedOptions().timeZone,
                platform: navigator.platform,
                cores: navigator.hardwareConcurrency || 'Unknown',
                memory: navigator.deviceMemory || 'Unknown'
            };
            document.getElementById('device_details').value = JSON.stringify(details);
        }
    </script>
</head>
<body>
    <!-- Floating Shapes -->
    <div class="floating-shapes">
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
    </div>

    <div class="login-card">
        <div style="font-size: 3.5rem; margin-bottom: 1rem;">🎓</div>
        <h2>تسجيل دخول المسؤول</h2>
        <?php if(isset($error)) echo "<div class='error'>$error</div>"; ?>
        <form method="POST" onsubmit="captureDetails()">
            <input type="hidden" name="device_details" id="device_details">
            <div class="form-group">
                <input type="text" name="username" placeholder="اسم المستخدم" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="كلمة المرور" required>
            </div>
            <button type="submit" name="login">دخول</button>
        </form>
        <p style="margin-top: 20px; color: rgba(255,255,255,0.5); font-size: 0.9rem;">First Year Admin Panel</p>
    </div>
</body>
</html>
<?php
    exit;
}

$servername = "sql313.infinityfree.com";
$username   = "if0_40879162";
$password   = "TBSMXFLWBNw";
$dbname     = "if0_40879162_classhub_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// جلب المواد
$resources_data = [];
$res_query = $conn->query("SELECT * FROM resources ORDER BY id DESC");
while($row = $res_query->fetch_assoc()) { $resources_data[] = $row; }

// جلب التنبيهات
$notif_data = [];
$notif_query = $conn->query("SELECT * FROM notifications WHERE year='first' ORDER BY id DESC");
while($row = $notif_query->fetch_assoc()) { $notif_data[] = $row; }
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Year - All Subjects Admin</title>
    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="first-styles.css">
</head>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div><div class="shape"></div><div class="shape"></div>
    </div>

    <button class="notification-btn" onclick="openNotifModal()">🔔</button>

    <div class="container">
        
        <div class="subject-block">
            <div class="subject-header"><h1 class="subject-title">💻 OOP</h1></div>
            <div class="sections-container">
                <div class="section-card" onclick="openModal('oop', 'lectures')">
                    <div class="section-header"><span class="section-icon">📚</span><h2 class="section-title">المحاضرات</h2></div>
                </div>
                <div class="section-card" onclick="openModal('oop', 'summaries')">
                    <div class="section-header"><span class="section-icon">📝</span><h2 class="section-title">الملخصات</h2></div>
                </div>
                <div class="section-card" onclick="openModal('oop', 'videos')">
                    <div class="section-header"><span class="section-icon">🎥</span><h2 class="section-title">الفيديوهات</h2></div>
                </div>
                <div class="section-card" onclick="openModal('oop', 'assignments')">
                    <div class="section-header"><span class="section-icon">📋</span><h2 class="section-title">Assignments</h2></div>
                </div>
            </div>
        </div>

        <div class="subject-block">
            <div class="subject-header"><h1 class="subject-title">📊 Information Systems</h1></div>
            <div class="sections-container">
                <div class="section-card" onclick="openModal('is', 'lectures')"><div class="section-header"><span class="section-icon">📚</span><h2 class="section-title">المحاضرات</h2></div></div>
                <div class="section-card" onclick="openModal('is', 'summaries')"><div class="section-header"><span class="section-icon">📝</span><h2 class="section-title">الملخصات</h2></div></div>
                <div class="section-card" onclick="openModal('is', 'videos')"><div class="section-header"><span class="section-icon">🎥</span><h2 class="section-title">الفيديوهات</h2></div></div>
                <div class="section-card" onclick="openModal('is', 'assignments')"><div class="section-header"><span class="section-icon">📋</span><h2 class="section-title">Assignments</h2></div></div>
            </div>
        </div>

        <div class="subject-block">
            <div class="subject-header"><h1 class="subject-title">🔢 Discrete Math</h1></div>
            <div class="sections-container">
                <div class="section-card" onclick="openModal('discrete', 'lectures')"><div class="section-header"><span class="section-icon">📚</span><h2 class="section-title">المحاضرات</h2></div></div>
                <div class="section-card" onclick="openModal('discrete', 'summaries')"><div class="section-header"><span class="section-icon">📝</span><h2 class="section-title">الملخصات</h2></div></div>
                <div class="section-card" onclick="openModal('discrete', 'videos')"><div class="section-header"><span class="section-icon">🎥</span><h2 class="section-title">الفيديوهات</h2></div></div>
                <div class="section-card" onclick="openModal('discrete', 'assignments')"><div class="section-header"><span class="section-icon">📋</span><h2 class="section-title">Assignments</h2></div></div>
            </div>
        </div>

        <div class="subject-block">
            <div class="subject-header"><h1 class="subject-title">⚡ Advanced Physics</h1></div>
            <div class="sections-container">
                <div class="section-card" onclick="openModal('physics', 'lectures')"><div class="section-header"><span class="section-icon">📚</span><h2 class="section-title">المحاضرات</h2></div></div>
                <div class="section-card" onclick="openModal('physics', 'summaries')"><div class="section-header"><span class="section-icon">📝</span><h2 class="section-title">الملخصات</h2></div></div>
                <div class="section-card" onclick="openModal('physics', 'videos')"><div class="section-header"><span class="section-icon">🎥</span><h2 class="section-title">الفيديوهات</h2></div></div>
                <div class="section-card" onclick="openModal('physics', 'assignments')"><div class="section-header"><span class="section-icon">📋</span><h2 class="section-title">Assignments</h2></div></div>
            </div>
        </div>

        <div class="subject-block">
            <div class="subject-header"><h1 class="subject-title">📖 English 2</h1></div>
            <div class="sections-container">
                <div class="section-card" onclick="openModal('english', 'lectures')"><div class="section-header"><span class="section-icon">📚</span><h2 class="section-title">المحاضرات</h2></div></div>
                <div class="section-card" onclick="openModal('english', 'summaries')"><div class="section-header"><span class="section-icon">📝</span><h2 class="section-title">الملخصات</h2></div></div>
                <div class="section-card" onclick="openModal('english', 'videos')"><div class="section-header"><span class="section-icon">🎥</span><h2 class="section-title">الفيديوهات</h2></div></div>
                <div class="section-card" onclick="openModal('english', 'assignments')"><div class="section-header"><span class="section-icon">📋</span><h2 class="section-title">Assignments</h2></div></div>
            </div>
        </div>

        <div class="subject-block">
            <div class="subject-header"><h1 class="subject-title">💰 Economics</h1></div>
            <div class="sections-container">
                <div class="section-card" onclick="openModal('economics', 'lectures')"><div class="section-header"><span class="section-icon">📚</span><h2 class="section-title">المحاضرات</h2></div></div>
                <div class="section-card" onclick="openModal('economics', 'summaries')"><div class="section-header"><span class="section-icon">📝</span><h2 class="section-title">الملخصات</h2></div></div>
                <div class="section-card" onclick="openModal('economics', 'videos')"><div class="section-header"><span class="section-icon">🎥</span><h2 class="section-title">الفيديوهات</h2></div></div>
                <div class="section-card" onclick="openModal('economics', 'assignments')"><div class="section-header"><span class="section-icon">📋</span><h2 class="section-title">Assignments</h2></div></div>
            </div>
        </div>

    </div>

    <div class="modal" id="resourceModal">
        <div class="modal-content">
            <button class="close-btn" onclick="document.getElementById('resourceModal').classList.remove('active')">×</button>
            <h2 id="modalTitle" style="color:white; margin-bottom:20px;">إدارة المحتوى</h2>
            
            <form action="process_admin_first.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="subjectId" name="subject_id">
                <input type="hidden" id="actionType" name="action">

                <div class="form-group">
                    <label class="form-label">العنوان</label>
                    <input type="text" name="title" class="form-control" required placeholder="مثال: المحاضرة الأولى">
                </div>

                <div id="uploadContainer" class="form-group">
                    </div>

                <div class="modal-actions">
                    <button type="submit" class="modal-btn confirm-btn">➕ إضافة</button>
                </div>
            </form>

            <div class="items-list">
                <h3 style="color:#aaa; margin-bottom:10px;">العناصر الحالية</h3>
                <div id="currentItemsList"></div>
            </div>
        </div>
    </div>

    <div class="modal" id="notifModal">
        <div class="modal-content">
            <button class="close-btn" onclick="document.getElementById('notifModal').classList.remove('active')">×</button>
            <h2 style="color:white; margin-bottom:20px;">إدارة الإشعارات</h2>
            
            <form id="notifForm" action="process_admin_first.php" method="POST">
                <input type="hidden" id="notifAction" name="action" value="send_notif">
                <input type="hidden" id="notifId" name="id" value="">
                
                <div class="form-group">
                    <label class="form-label" id="notifLabel">رسالة جديدة</label>
                    <textarea id="notifMsg" name="msg" class="form-textarea" rows="3" placeholder="اكتب التنبيه هنا..." required></textarea>
                </div>
                <div class="modal-actions">
                    <button type="submit" id="notifSubmitBtn" class="modal-btn confirm-btn">📤 إرسال</button>
                    <button type="button" onclick="resetNotifForm()" class="modal-btn cancel-btn">إلغاء التعديل</button>
                </div>
            </form>

            <div class="items-list">
                <h3 style="color:#aaa; margin-bottom:10px;">الإشعارات السابقة</h3>
            <?php foreach($notif_data as $notif): ?>
                    <div class="item-row" id="notif-<?php echo $notif['id']; ?>">
                        <span style="flex:1; color:white; margin-left:10px;"><?php echo $notif['msg']; ?></span>
                        <div>
                            <button class="btn-edit" onclick="editNotif(<?php echo $notif['id']; ?>, '<?php echo addslashes(htmlspecialchars($notif['msg'])); ?>')">✏️</button>
                            <button class="btn-danger" onclick="deleteNotif(<?php echo $notif['id']; ?>)">🗑️</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        const resources = <?php echo json_encode($resources_data); ?>;

        function openNotifModal() {
            document.getElementById('notifModal').classList.add('active');
        }

        function editNotif(id, msg) {
            document.getElementById('notifAction').value = 'edit_notif';
            document.getElementById('notifId').value = id;
            document.getElementById('notifMsg').value = msg;
            document.getElementById('notifLabel').textContent = 'تعديل الرسالة';
            document.getElementById('notifSubmitBtn').textContent = '💾 حفظ التعديل';
            document.querySelector('#notifModal .modal-content').scrollTop = 0;
        }

        function resetNotifForm() {
            document.getElementById('notifAction').value = 'send_notif';
            document.getElementById('notifId').value = '';
            document.getElementById('notifMsg').value = '';
            document.getElementById('notifLabel').textContent = 'رسالة جديدة';
            document.getElementById('notifSubmitBtn').textContent = '📤 إرسال';
        }

        function openModal(subject, type) {
            document.getElementById('subjectId').value = subject;
            document.getElementById('actionType').value = 'add_' + type.substring(0, 3);
            document.getElementById('modalTitle').textContent = `${type.toUpperCase()} - ${subject.toUpperCase()}`;
            
            const uploadDiv = document.getElementById('uploadContainer');
            if (type === 'videos') {
                uploadDiv.innerHTML = `
                    <div style="margin-bottom:15px; color:white;">
                        <label><input type="radio" name="vid_type" value="link" checked onchange="toggleVidInput('link')"> رابط (YouTube)</label>
                        <label style="margin-right:15px;"><input type="radio" name="vid_type" value="file" onchange="toggleVidInput('file')"> رفع فيديو</label>
                    </div>
                    <div id="vidLinkInput">
                        <input type="url" name="link_input" class="form-control" placeholder="https://youtube.com/...">
                    </div>
                    <div id="vidFileInput" style="display:none;">
                        <input type="file" name="file_upload" class="form-control" accept="video/*">
                    </div>`;
            } else {
                uploadDiv.innerHTML = `
                    <label class="form-label">اختر الملف</label>
                    <input type="file" name="file_upload" class="form-control" accept=".pdf,.ppt,.pptx,.doc,.docx" required>
                `;
            }

            const listDiv = document.getElementById('currentItemsList');
            listDiv.innerHTML = '';
            let dbType = type === 'lectures' ? 'lecture' : (type === 'summaries' ? 'summary' : (type === 'assignments' ? 'assignment' : 'video'));
            const relevantItems = resources.filter(r => r.subject_id === subject && r.type === dbType);

            if (relevantItems.length === 0) {
                listDiv.innerHTML = '<p style="text-align:center; color:#aaa;">لا يوجد عناصر</p>';
            } else {
                relevantItems.forEach(item => {
                    listDiv.innerHTML += `
                        <div class="item-row" id="item-${item.id}">
                            <span style="color:white;">${item.title}</span>
                            <button class="btn-danger" onclick="deleteResource(${item.id})">🗑️</button>
                        </div>`;
                });
            }
            document.getElementById('resourceModal').classList.add('active');
        }

        function toggleVidInput(mode) {
            document.getElementById('vidLinkInput').style.display = (mode === 'link') ? 'block' : 'none';
            document.getElementById('vidFileInput').style.display = (mode === 'file') ? 'block' : 'none';
        }

        // حذف المواد بـ AJAX
        function deleteResource(id) {
            if (!confirm('حذف؟')) return;
            
            fetch('process_admin_first.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: 'action=delete_resource&id=' + id
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // إزالة العنصر من الصفحة
                    const item = document.getElementById('item-' + id);
                    if (item) {
                        item.style.animation = 'fadeOut 0.3s ease';
                        setTimeout(() => item.remove(), 300);
                    }
                    // إزالة من الـ array
                    const index = resources.findIndex(r => r.id == id);
                    if (index > -1) resources.splice(index, 1);
                }
            })
            .catch(err => console.error('Error:', err));
        }

        // حذف الإشعارات بـ AJAX
        function deleteNotif(id) {
            if (!confirm('حذف؟')) return;
            
            fetch('process_admin_first.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: 'action=delete_notif&id=' + id
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const item = document.getElementById('notif-' + id);
                    if (item) {
                        item.style.animation = 'fadeOut 0.3s ease';
                        setTimeout(() => item.remove(), 300);
                    }
                }
            })
            .catch(err => console.error('Error:', err));
        }
    </script>

    <style>
        @keyframes fadeOut {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(-20px); }
        }
    </style>
</body>
</html>
<?php unset($_SESSION['admin_first_logged_in']); ?>
