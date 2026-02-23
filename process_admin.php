<?php
// ضبط المنطقة الزمنية لمصر
date_default_timezone_set('Africa/Cairo');

$servername = "sql313.infinityfree.com";
$username   = "if0_40879162";
$password   = "TBSMXFLWBNw";
$dbname     = "if0_40879162_classhub_db";

// الوقت الحالي بتوقيت مصر
$current_time = date('Y-m-d H:i:s');

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action == "edit_notif") {
        $id = $_POST['id'];
        $msg = $_POST['msg'];
        $stmt = $conn->prepare("UPDATE notifications SET msg=? WHERE id=?");
        $stmt->bind_param("si", $msg, $id);
        $stmt->execute();
        $stmt->close();
    }

    elseif ($action == "send_notif") {
        $msg = $_POST['msg'];
        if (!empty($msg)) {
            $stmt = $conn->prepare("INSERT INTO notifications (msg, year, created_at) VALUES (?, 'second', ?)");
            $stmt->bind_param("ss", $msg, $current_time);
            $stmt->execute();
            $stmt->close();
        }
    }

    elseif ($action == "delete_notif") {
        $id = $_POST['id'];
        $stmt = $conn->prepare("DELETE FROM notifications WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    elseif ($action == "delete_resource") {
        $id = $_POST['id'];
        $sql = "SELECT link FROM resources WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($row = $res->fetch_assoc()) {
            $file_path = $row['link'];
            if (file_exists($file_path) && strpos($file_path, 'uploads/') !== false) {
                unlink($file_path);
            }
        }
        $stmt->close();
        $del_stmt = $conn->prepare("DELETE FROM resources WHERE id=?");
        $del_stmt->bind_param("i", $id);
        $del_stmt->execute();
        $del_stmt->close();
    }

    elseif (strpos($action, 'add_') === 0) {
        $subject = $_POST['subject_id'];
        $title = $_POST['title'];
        $type = "";
        
        if (strpos($action, 'lec') !== false) $type = "lecture";
        elseif (strpos($action, 'sum') !== false) $type = "summary";
        elseif (strpos($action, 'vid') !== false) $type = "video";
        elseif (strpos($action, 'ass') !== false) $type = "assignment";

        $final_link = "";


        if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] == 0) {
            $target_dir = "uploads/";

            if (!file_exists($target_dir)) { mkdir($target_dir, 0777, true); }
            
            $file_extension = pathinfo($_FILES["file_upload"]["name"], PATHINFO_EXTENSION);
            $new_filename = time() . "_" . rand(1000,9999) . "." . $file_extension;
            $target_file = $target_dir . $new_filename;
            if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
                $final_link = $target_file;
            }
        } 

        elseif (!empty($_POST['link_input'])) {
            $final_link = $_POST['link_input'];
        }

        if (!empty($title) && !empty($final_link)) {
            $stmt = $conn->prepare("INSERT INTO resources (subject_id, type, title, link) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $subject, $type, $title, $final_link);
            $stmt->execute();
            $stmt->close();
        }
    }


    elseif ($action == "delete_message") {
        $id = $_POST['id'];
        $stmt = $conn->prepare("DELETE FROM messages WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    // لو AJAX request - رجع JSON
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode(['success' => true]);
        exit();
    }

    header("Location: SECOND_iugrshikerbfgibarbviherbvaihbfldvhkabrioabsvfkhbvsaieoyrtbvsfdbd.php");
    exit();
}