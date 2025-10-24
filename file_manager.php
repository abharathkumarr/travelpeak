<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'password.php';

// Check if admin is logged in
if (!isAdminLoggedIn()) {
    http_response_code(403);
    die('Access Denied: Admin privileges required');
}

// Get the action parameter
$action = $_GET['action'] ?? '';

switch ($action) {
    case 'view':
        // Display password.txt content in browser
        header('Content-Type: text/plain; charset=utf-8');
        header('Content-Disposition: inline; filename="password.txt"');
        
        if (file_exists('password.txt')) {
            readfile('password.txt');
        } else {
            echo "password.txt file not found";
        }
        break;
        
    case 'download':
        // Force download of password.txt
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="password.txt"');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        
        if (file_exists('password.txt')) {
            readfile('password.txt');
        } else {
            echo "password.txt file not found";
        }
        break;
        
    default:
        http_response_code(400);
        echo "Invalid action";
        break;
}
?>