<?php
// Display Logs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "sql313.infinityfree.com";
$username   = "if0_40879162";
$password   = "TBSMXFLWBNw";
$dbname     = "if0_40879162_classhub_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

// Ensure consistent UTC handling
$conn->query("SET time_zone = '+00:00'");

// Ensure table exists to prevent errors if no one logged in yet
$conn->query("CREATE TABLE IF NOT EXISTS admin_login_logs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ip_address VARCHAR(45) NOT NULL,
    user_agent TEXT NOT NULL,
    page_type VARCHAR(50) NOT NULL,
    login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$first_logs = [];
$second_logs = [];

$result = $conn->query("SELECT * FROM admin_login_logs ORDER BY login_time DESC LIMIT 200");
if ($result) {
    while($row = $result->fetch_assoc()) {
        if (strpos($row['page_type'], 'First') !== false) {
            $first_logs[] = $row;
        } else {
            $second_logs[] = $row;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Security Logs</title>
    <link rel="icon" type="image/png" href="Logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --border-color: #e2e8f0;
            --primary-blue: #3b82f6;
            --primary-blue-dim: #eff6ff;
            --primary-green: #10b981;
            --primary-green-dim: #ecfdf5;
            --shadow-sm: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            margin: 0;
            padding: 40px 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-header {
            margin-bottom: 40px;
            text-align: center;
        }

        .page-header h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0;
            background: linear-gradient(135deg, #0f172a 0%, #334155 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.02em;
        }

        .page-header p {
            color: var(--text-secondary);
            margin-top: 10px;
            font-size: 1.1rem;
        }

        .log-section {
            background: var(--card-bg);
            border-radius: 20px;
            box-shadow: var(--shadow-md);
            overflow: hidden;
            margin-bottom: 40px;
            border: 1px solid var(--border-color);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .log-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        }

        .section-header {
            padding: 24px 32px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-first { background: linear-gradient(to right, #eff6ff, #ffffff); }
        .header-second { background: linear-gradient(to right, #f0fdf4, #ffffff); }

        .section-icon {
            font-size: 1.5rem;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin: 0;
        }

        .text-blue { color: #1d4ed8; }
        .text-green { color: #047857; }

        .table-responsive {
            overflow-x: auto;
            overflow-y: auto;
            max-height: 550px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background-color: #f8fafc;
            color: var(--text-secondary);
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            padding: 16px 32px;
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        td {
            padding: 20px 32px;
            border-bottom: 1px solid var(--border-color);
            color: var(--text-primary);
            font-size: 0.95rem;
            white-space: nowrap;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background-color: #f8fafc;
        }

        .meta-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .ip-badge {
            font-family: 'Monaco', 'Consolas', monospace;
            background: #f1f5f9;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 0.85rem;
            color: #475569;
            font-weight: 600;
            display: inline-block;
        }

        .device-text {
            color: var(--text-secondary);
            font-size: 0.85rem;
            max-width: 400px;
            white-space: normal;
            line-height: 1.4;
        }

        .time-date {
            font-weight: 600;
            color: var(--text-primary);
        }

        .time-ago {
            font-size: 0.85rem;
            color: var(--text-secondary);
            font-weight: 400;
        }

        .empty-state {
            padding: 60px;
            text-align: center;
            color: var(--text-secondary);
        }
        
        .empty-icon {
            font-size: 3rem;
            margin-bottom: 16px;
            display: block;
            opacity: 0.5;
        }
        
        .detail-tag {
            background: #f1f5f9;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 0.8rem;
            color: #475569;
            border: 1px solid #cbd5e1;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            body { padding: 20px 10px; }
            .section-header { padding: 20px; }
            th, td { padding: 16px 20px; }
            .device-text { max-width: 200px; }
        }
    </style>
</head>
<body>

    <div class="container">
        
        <div class="page-header">
            <h1><span style="font-family: 'Segoe UI Emoji', 'Noto Color Emoji', 'Apple Color Emoji', 'Segoe UI Symbol', sans-serif;">&#128737;&#65039;</span> Security Logs</h1>
            <p>Monitor access to administration panels in real-time</p>
        </div>

        <!-- First Year Section -->
        <div class="log-section">
            <div class="section-header header-first">
                <span class="section-icon">🎓</span>
                <h2 class="section-title text-blue">First Year Admins</h2>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th width="25%">Date & Time</th>
                            <th width="20%">IP Address</th>
                            <th width="55%">Device Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($first_logs) > 0): ?>
                            <?php foreach($first_logs as $log): ?>
                                <?php 
                                    // Assume DB stores time in UTC, convert to Cairo
                                    $dt = new DateTime($log['login_time'], new DateTimeZone('UTC'));
                                    $dt->setTimezone(new DateTimeZone('Africa/Cairo'));
                                    $dateStr = $dt->format('M j, Y');
                                    $timeStr = $dt->format('g:i A');
                                ?>
                                <tr>
                                    <td>
                                        <div class="meta-info">
                                            <span class="time-date"><?php echo $dateStr; ?></span>
                                            <span class="time-ago"><?php echo $timeStr; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="ip-badge" id="ip-first-<?php echo $log['id']; ?>"><?php echo htmlspecialchars($log['ip_address']); ?></span>
                                        <div class="location-info" id="loc-first-<?php echo $log['id']; ?>">
                                            <span class="loading-dots">Detecting location...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="device-text">
                                            <strong>UA:</strong> <?php echo htmlspecialchars($log['user_agent']); ?>
                                            <?php 
                                            if (!empty($log['device_details'])) {
                                                $details = json_decode($log['device_details'], true);
                                                if ($details) {
                                                    echo "<div style='margin-top:8px; display:flex; gap:8px; flex-wrap:wrap;'>";
                                                    if (!empty($details['screen'])) echo "<span class='detail-tag'>🖥️ " . htmlspecialchars($details['screen']) . "</span>";
                                                    if (!empty($details['platform'])) echo "<span class='detail-tag'>💻 " . htmlspecialchars($details['platform']) . "</span>";
                                                    if (!empty($details['cores'])) echo "<span class='detail-tag'>🚀 " . htmlspecialchars($details['cores']) . " Cores</span>";
                                                    if (!empty($details['timezone'])) echo "<span class='detail-tag'>🌍 " . htmlspecialchars($details['timezone']) . "</span>";
                                                    echo "</div>";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3">
                                    <div class="empty-state">
                                        <span class="empty-icon">🛡️</span>
                                        No login activity recorded for First Year yet.
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Second Year Section -->
        <div class="log-section">
            <div class="section-header header-second">
                <span class="section-icon">⚡</span>
                <h2 class="section-title text-green">Second Year Admins</h2>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th width="25%">Date & Time</th>
                            <th width="20%">IP Address</th>
                            <th width="55%">Device Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($second_logs) > 0): ?>
                            <?php foreach($second_logs as $log): ?>
                                <?php 
                                    // Assume DB stores time in UTC, convert to Cairo
                                    $dt = new DateTime($log['login_time'], new DateTimeZone('UTC'));
                                    $dt->setTimezone(new DateTimeZone('Africa/Cairo'));
                                    $dateStr = $dt->format('M j, Y');
                                    $timeStr = $dt->format('g:i A');
                                ?>
                                <tr>
                                    <td>
                                        <div class="meta-info">
                                            <span class="time-date"><?php echo $dateStr; ?></span>
                                            <span class="time-ago"><?php echo $timeStr; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="ip-badge" id="ip-second-<?php echo $log['id']; ?>"><?php echo htmlspecialchars($log['ip_address']); ?></span>
                                        <div class="location-info" id="loc-second-<?php echo $log['id']; ?>">
                                            <span class="loading-dots">Detecting location...</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="device-text">
                                            <strong>UA:</strong> <?php echo htmlspecialchars($log['user_agent']); ?>
                                            <?php 
                                            if (!empty($log['device_details'])) {
                                                $details = json_decode($log['device_details'], true);
                                                if ($details) {
                                                    echo "<div style='margin-top:8px; display:flex; gap:8px; flex-wrap:wrap;'>";
                                                    if (!empty($details['screen'])) echo "<span class='detail-tag'>🖥️ " . htmlspecialchars($details['screen']) . "</span>";
                                                    if (!empty($details['platform'])) echo "<span class='detail-tag'>💻 " . htmlspecialchars($details['platform']) . "</span>";
                                                    if (!empty($details['cores'])) echo "<span class='detail-tag'>🚀 " . htmlspecialchars($details['cores']) . " Cores</span>";
                                                    if (!empty($details['timezone'])) echo "<span class='detail-tag'>🌍 " . htmlspecialchars($details['timezone']) . "</span>";
                                                    echo "</div>";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3">
                                    <div class="empty-state">
                                        <span class="empty-icon">🛡️</span>
                                        No login activity recorded for Second Year yet.
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ipElements = document.querySelectorAll('.ip-badge');
            
            ipElements.forEach(el => {
                const ip = el.textContent;
                const id = el.id.replace('ip-', ''); // first-123 or second-123
                const locEl = document.getElementById('loc-' + id);
                
                // Skip local IPs
                if (ip === '::1' || ip === '127.0.0.1') {
                    locEl.innerHTML = '<span style="color:#94a3b8">Localhost</span>';
                    return;
                }

                fetch(`http://ip-api.com/json/${ip}?fields=status,country,city,isp`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            locEl.innerHTML = `
                                <div style="font-size:0.85rem; font-weight:600; color:#1e293b; margin-top:4px;">${data.city}, ${data.country}</div>
                                <div style="font-size:0.75rem; color:#64748b;">${data.isp}</div>
                            `;
                        } else {
                            locEl.innerHTML = '<span style="color:#ef4444; font-size:0.8rem;">Private/Hidden IP</span>';
                        }
                    })
                    .catch(err => {
                        locEl.innerHTML = '<span style="color:#ef4444; font-size:0.8rem;">Failed to load</span>';
                    });
            });
        });
    </script>
</body>
</html>
