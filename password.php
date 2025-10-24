<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Function to validate admin credentials (hardcoded, not in password.txt)
function validateAdminLogin($username, $password) {
    // Admin credentials - not stored in password.txt
    $adminUsername = 'admin';
    $adminPassword = 'admin123';
    
    return ($username === $adminUsername && $password === $adminPassword);
}

// Function to validate regular user username and password (from password.txt)
function validateLogin($username, $password) {
    $passwordFile = 'password.txt';
    
    if (!file_exists($passwordFile)) {
        return false;
    }
    
    // Hash the provided password using SHA256
    $hashedPassword = hash('sha256', $password);
    
    // Read the password file
    $passwordData = file_get_contents($passwordFile);
    $lines = explode("\n", trim($passwordData));
    
    foreach ($lines as $line) {
        if (empty($line) || strpos(trim($line), '#') === 0) continue; // Skip empty lines and comments
        
        // Split by '.' to get username and hashed password
        $parts = explode('.', $line);
        if (count($parts) == 2) {
            $fileUsername = trim($parts[0]);
            $filePassword = trim($parts[1]);
            
            // Check if username and password match
            if ($fileUsername === $username && $filePassword === $hashedPassword) {
                return true;
            }
        }
    }
    
    return false;
}

// Function to add new user to password file
function addUser($username, $password) {
    $passwordFile = 'password.txt';
    
    // Check if user already exists
    if (userExists($username)) {
        return false;
    }
    
    // Hash the password using SHA256
    $hashedPassword = hash('sha256', $password);
    
    // Append to password file
    $userData = $username . '.' . $hashedPassword . "\n";
    file_put_contents($passwordFile, $userData, FILE_APPEND | LOCK_EX);
    
    return true;
}

// Function to check if user already exists
function userExists($username) {
    $passwordFile = 'password.txt';
    
    if (!file_exists($passwordFile)) {
        return false;
    }
    
    $passwordData = file_get_contents($passwordFile);
    $lines = explode("\n", trim($passwordData));
    
    foreach ($lines as $line) {
        if (empty($line)) continue;
        
        $parts = explode('.', $line);
        if (count($parts) == 2) {
            $fileUsername = trim($parts[0]);
            if ($fileUsername === $username) {
                return true;
            }
        }
    }
    
    return false;
}

// Function to get all users (for admin view)
function getAllUsers() {
    $passwordFile = 'password.txt';
    $users = array();
    
    if (!file_exists($passwordFile)) {
        return $users;
    }
    
    $passwordData = file_get_contents($passwordFile);
    $lines = explode("\n", trim($passwordData));
    
    foreach ($lines as $line) {
        if (empty($line) || strpos(trim($line), '#') === 0) continue; // Skip empty lines and comments
        
        $parts = explode('.', $line);
        if (count($parts) == 2) {
            $username = trim($parts[0]);
            $users[] = $username;
        }
    }
    
    return $users;
}

// Handle logout
if (isset($_GET['logout']) && $_GET['logout'] === '1') {
    // Destroy session if it exists
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_destroy();
    }
    header('Location: index.php');
    exit();
}

// Handle POST requests for login validation
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    switch ($action) {
        case 'admin_login':
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            
            // STRICT: Only allow the hardcoded admin credentials
            if (validateAdminLogin($username, $password)) {
                $_SESSION['admin_logged_in'] = true;
                $_SESSION['username'] = $username;
                header('Location: home.php');
                exit();
            } else {
                // Admin login failed - redirect with error
                header('Location: admin_login.php?error=1');
                exit();
            }
            break;
            
        case 'user_login':
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            
            if (validateLogin($username, $password)) {
                $_SESSION['user_logged_in'] = true;
                $_SESSION['username'] = $username;
                header('Location: home.php');
                exit();
            } else {
                header('Location: user_signin.php?error=1');
                exit();
            }
            break;
            
        case 'register':
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirm_password = $_POST['confirm_password'] ?? '';
            
            if ($password !== $confirm_password) {
                header('Location: register.php?error=2');
                exit();
            }
            
            if (addUser($username, $password)) {
                header('Location: register.php?success=1');
                exit();
            } else {
                header('Location: register.php?error=1');
                exit();
            }
            break;
    }
}

// Function to check if admin is logged in
function isAdminLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

// Function to check if user is logged in
function isUserLoggedIn() {
    return isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
}

// Function to logout
function logout() {
    session_destroy();
    header('Location: login.php');
    exit();
}

// Handle logout requests
if (isset($_GET['logout'])) {
    logout();
}
?>