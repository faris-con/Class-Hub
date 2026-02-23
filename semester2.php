<?php
$basePath = __DIR__ . '/Semester2';
$subjects = [];

if (is_dir($basePath)) {
    foreach (scandir($basePath) as $item) {
        if ($item[0] === '.' || !is_dir($basePath . '/' . $item)) continue;
        $subjects[] = $item;
    }
}
sort($subjects);

// Build data structure
$data = [];
$directFiles = []; // لتخزين الملفات المباشرة في كل مادة

foreach ($subjects as $subj) {
    $subjPath = $basePath . '/' . $subj;
    $data[$subj] = [];
    $directFiles[$subj] = [];
    
    foreach (scandir($subjPath) as $item) {
        if ($item[0] === '.') continue;
        
        $itemPath = $subjPath . '/' . $item;
        
        // لو ده فولدر، اقرأ الملفات اللي جواه
        if (is_dir($itemPath)) {
            $files = [];
            foreach (scandir($itemPath) as $file) {
                if ($file[0] === '.' || is_dir($itemPath . '/' . $file)) continue;
                $files[] = [
                    'name' => $file,
                    'size' => filesize($itemPath . '/' . $file),
                    'ext' => strtolower(pathinfo($file, PATHINFO_EXTENSION)),
                    'path' => 'Semester2/' . $subj . '/' . $item . '/' . $file
                ];
            }
            $data[$subj][$item] = $files;
        } else {
            // لو ده ملف مباشر في مجلد المادة
            $directFiles[$subj][] = [
                'name' => $item,
                'size' => filesize($itemPath),
                'ext' => strtolower(pathinfo($item, PATHINFO_EXTENSION)),
                'path' => 'Semester2/' . $subj . '/' . $item
            ];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester 2 | ClassHub</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="stylesheet" href="semester2-styles.css">
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
                    <a href="#" class="dropdown-toggle">Lectures <span class="dropdown-arrow">▼</span></a>
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
        <div class="tabs">
            <?php foreach($subjects as $s): ?>
            <div class="tab" data-subject="<?= htmlspecialchars($s) ?>"><?= htmlspecialchars($s) ?></div>
            <?php endforeach; ?>
        </div>
    </section>

    <div class="container">
        <!-- ملفات مباشرة في مجلد المادة -->
        <div id="direct-files-area" style="display: none; margin-bottom: 2rem;">
            <h3 style="color: #fff; text-align: center; margin-bottom: 1rem;">📄 الملفات</h3>
            <div class="files" id="direct-files-list"></div>
        </div>
        
        <div id="subfolders-area">
            <h3 id="folders-title" style="color: #fff; text-align: center; margin-bottom: 1rem; display: none;">📁 المجلدات</h3>
            <div class="subfolders" id="subfolders-list"></div>
        </div>
        
        <div id="files-area">
            <div class="files" id="files-list"></div>
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
        const data = <?= json_encode($data, JSON_UNESCAPED_UNICODE) ?>;
        const directFiles = <?= json_encode($directFiles, JSON_UNESCAPED_UNICODE) ?>;
        
        const icons = {pdf:'📕',doc:'📘',docx:'📘',ppt:'📙',pptx:'📙',xls:'📗',xlsx:'📗',jpg:'🖼️',png:'🖼️',mp4:'🎬',zip:'📦',rar:'📦'};
        function getIcon(ext) { return icons[ext] || '📄'; }
        function formatSize(b) {
            if (b >= 1048576) return (b/1048576).toFixed(1)+' MB';
            if (b >= 1024) return (b/1024).toFixed(1)+' KB';
            return b+' B';
        }
        
        function renderFiles(files, container) {
            container.innerHTML = '';
            files.forEach(file => {
                const a = document.createElement('a');
                a.className = 'file';
                a.href = file.path;
                a.target = '_blank';
                a.innerHTML = `<span class="file-icon">${getIcon(file.ext)}</span><div class="file-info"><div class="file-name">${file.name}</div><div class="file-meta">${file.ext.toUpperCase()} • ${formatSize(file.size)}</div></div>`;
                container.appendChild(a);
            });
        }
        
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                showSubject(this.dataset.subject);
            });
        });
        
        function showSubject(subject) {
            // إخفاء منطقة الملفات اللي بتتعرض لما تختار فولدر فرعي
            document.getElementById('files-area').style.display = 'none';
            
            // عرض الملفات المباشرة (فوق)
            const directFilesContainer = document.getElementById('direct-files-list');
            const directFilesArea = document.getElementById('direct-files-area');
            
            if (directFiles[subject] && directFiles[subject].length > 0) {
                renderFiles(directFiles[subject], directFilesContainer);
                directFilesArea.style.display = 'block';
            } else {
                directFilesArea.style.display = 'none';
            }
            
            // عرض الفولدرات الفرعية (تحت)
            const folders = Object.keys(data[subject]);
            const container = document.getElementById('subfolders-list');
            const foldersTitle = document.getElementById('folders-title');
            container.innerHTML = '';
            
            if (folders.length > 0) {
                folders.forEach(folder => {
                    const div = document.createElement('div');
                    div.className = 'subfolder';
                    div.innerHTML = '📁 ' + folder;
                    div.onclick = function() {
                        document.querySelectorAll('.subfolder').forEach(s => s.classList.remove('active'));
                        this.classList.add('active');
                        showFiles(subject, folder);
                    };
                    container.appendChild(div);
                });
                foldersTitle.style.display = 'block';
            } else {
                foldersTitle.style.display = 'none';
            }
            
            document.getElementById('subfolders-area').style.display = 'block';
        }
        
        function showFiles(subject, folder) {
            const files = data[subject][folder];
            const container = document.getElementById('files-list');
            renderFiles(files, container);
            document.getElementById('files-area').style.display = 'block';
        }
        
        function scrollToHome() { window.location.href = 'index.php'; }

        const lecturesDropdown = document.getElementById('lecturesDropdown');
        lecturesDropdown.querySelector('.dropdown-toggle').addEventListener('click', (e) => {
            e.preventDefault();
            lecturesDropdown.classList.toggle('active');
        });
        document.addEventListener('click', (e) => {
            if (!lecturesDropdown.contains(e.target)) lecturesDropdown.classList.remove('active');
        });
    </script>
    <script src="mobile-nav.js"></script>
</body>
</html>