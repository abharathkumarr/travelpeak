<?php
// Start session only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once 'password.php';

// STRICT: Only allow admin access - regular users should NOT access this page
if (!isAdminLoggedIn()) {
    // If not admin, redirect to admin login page
    header('Location: admin_login.php?error=access_denied');
    exit();
}

$username = $_SESSION['username'] ?? 'Admin';

// Get all users from the system
$users = getAllUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .admin-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin: 2rem auto;
            max-width: 800px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
        }
        
        .admin-header {
            text-align: center;
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #ecf0f1;
        }
        
        .admin-header h1 {
            color: #e74c3c;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        
        .admin-header p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }
        
        .welcome-message {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
            padding: 1rem 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .users-section {
            margin-top: 2rem;
        }
        
        .users-section h2 {
            color: #2c3e50;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .users-list {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
            border: 2px solid #ecf0f1;
        }
        
        .user-item {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
        }
        
        .user-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .user-item:last-child {
            margin-bottom: 0;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3498db, #2c3e50);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .user-details h3 {
            margin: 0;
            color: #2c3e50;
            font-size: 1.2rem;
        }
        
        .user-details p {
            margin: 0;
            color: #7f8c8d;
            font-size: 0.9rem;
        }
        
        .user-status {
            background: #27ae60;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .admin-actions {
            margin-top: 3rem;
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.4);
        }
        
        .btn-danger {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }
        
        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(231, 76, 60, 0.4);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
        }
        
        .stat-card h3 {
            margin: 0;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        
        .stat-card p {
            margin: 0;
            font-size: 1rem;
            opacity: 0.9;
        }
        
        @media (max-width: 768px) {
            .admin-container {
                margin: 1rem;
                padding: 2rem 1rem;
            }
            
            .admin-actions {
                flex-direction: column;
            }
            
            .user-item {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="index.php" class="logo">TravelPeak</a>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                        <li><a href="admin_panel.php" class="active">Admin Panel</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="admin-container">
                <div class="admin-header">
                    <h1>🛡️ Administrator Panel</h1>
                    <p>Secure access to system management</p>
                </div>
                
                <div class="welcome-message">
                    <p><strong>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</strong> You have administrative access to the TravelPeak system.</p>
                </div>
                
                <div class="stats-grid">
                    <div class="stat-card">
                        <h3><?php echo count($users); ?></h3>
                        <p>Regular Users</p>
                    </div>
                    <div class="stat-card">
                        <h3>1</h3>
                        <p>Admin User</p>
                    </div>
                    <div class="stat-card">
                        <h3><?php echo count($users) + 1; ?></h3>
                        <p>Total Users</p>
                    </div>
                </div>
                
                <div class="users-section">
                    <h2>👥 Registered Users</h2>
                    <p style="text-align: center; color: #7f8c8d; margin-bottom: 1.5rem;">
                        <small>📝 These are regular users stored in password.txt. Admin credentials are handled separately.</small>
                    </p>
                    
                    <?php if (empty($users)): ?>
                        <div class="users-list">
                            <p style="text-align: center; color: #7f8c8d; font-style: italic;">No regular users found in the system.</p>
                        </div>
                    <?php else: ?>
                        <div class="users-list">
                            <?php foreach ($users as $index => $user): ?>
                                <div class="user-item">
                                    <div class="user-info">
                                        <div class="user-avatar">
                                            <?php echo strtoupper(substr($user, 0, 1)); ?>
                                        </div>
                                        <div class="user-details">
                                            <h3><?php echo htmlspecialchars($user); ?></h3>
                                            <p>Registered User</p>
                                        </div>
                                    </div>
                                    <div class="user-status">
                                        ACTIVE
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Password.txt File Viewer Section -->
                <div class="password-file-section" style="margin-top: 3rem;">
                    <h2>📄 Password.txt File Content</h2>
                    <p style="text-align: center; color: #7f8c8d; margin-bottom: 1.5rem;">
                        <small>📝 Raw content of the password.txt file showing username.(encrypted_password) format</small>
                    </p>
                    
                    <div class="password-file-viewer" style="background: #2c3e50; color: #ecf0f1; padding: 2rem; border-radius: 15px; margin-bottom: 2rem; font-family: 'Courier New', monospace; font-size: 0.9rem; line-height: 1.6; overflow-x: auto; box-shadow: inset 0 4px 15px rgba(0,0,0,0.3);">
                        <div style="color: #3498db; margin-bottom: 1rem; font-weight: bold;">📂 /password.txt</div>
                        <div style="border-bottom: 1px solid #34495e; margin-bottom: 1rem; padding-bottom: 0.5rem;">
                            <small style="color: #95a5a6;">Format: username.(sha256_encrypted_password)</small>
                        </div>
                        <pre style="margin: 0; color: #ecf0f1; white-space: pre-wrap; word-wrap: break-word;"><?php
                            $passwordFile = 'password.txt';
                            if (file_exists($passwordFile)) {
                                $content = file_get_contents($passwordFile);
                                if (!empty(trim($content))) {
                                    echo htmlspecialchars($content);
                                } else {
                                    echo '<span style="color: #e74c3c; font-style: italic;">File is empty - No users registered yet</span>';
                                }
                            } else {
                                echo '<span style="color: #e74c3c; font-style: italic;">password.txt file not found</span>';
                            }
                        ?></pre>
                    </div>
                    
                    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2rem;">
                        <button onclick="refreshPasswordFile()" style="background: #3498db; color: white; border: none; padding: 0.8rem 1.5rem; border-radius: 8px; cursor: pointer; font-weight: bold;">
                            🔄 Refresh File Content
                        </button>
                        <a href="file_manager.php?action=view" target="_blank" style="background: #27ae60; color: white; padding: 0.8rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold;">
                            👁️ View password.txt File
                        </a>
                        <a href="file_manager.php?action=download" style="background: #f39c12; color: white; padding: 0.8rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold;">
                            💾 Download password.txt
                        </a>
                        <a href="password_backup.txt" target="_blank" style="background: #9b59b6; color: white; padding: 0.8rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: bold;">
                            � View Backup File
                        </a>
                    </div>
                    
                    <div style="background: #f8f9fa; border: 2px solid #3498db; border-radius: 15px; padding: 1.5rem; margin-bottom: 2rem;">
                        <h4 style="color: #2c3e50; margin-bottom: 1rem;">💡 Important Access Rules:</h4>
                        <ul style="color: #7f8c8d; line-height: 1.8; padding-left: 1.5rem;">
                            <li><strong>Admin Access:</strong> Only admin/admin123 can access this panel</li>
                            <li><strong>Regular Users:</strong> Must use "User Login" - should NOT use "Admin Login"</li>
                            <li><strong>User Registration:</strong> New users added to password.txt with encrypted passwords</li>
                            <li><strong>File Format:</strong> username.(sha256_hash) - only password is encrypted</li>
                            <li><strong>Backup Available:</strong> Original users saved in password_backup.txt</li>
                        </ul>
                        
                        
                    </div>
                </div>
                
                <div class="admin-actions">
                    <a href="register.php" class="btn btn-primary">
                        ➕ Add New User
                    </a>
                    <a href="index.php" class="btn btn-primary">
                        🏠 Back to Homepage
                    </a>
                    <a href="password.php?logout=1" class="btn btn-danger">
                        🔓 Logout
                    </a>
                </div>
                
                <div style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid #ecf0f1; text-align: center;">
                    <p style="color: #7f8c8d; font-size: 0.9rem;">
                        🔐 <strong>Security Notice:</strong> All passwords are encrypted using SHA256 hashing. 
                        User data is stored securely and access is logged.
                    </p>
                    <p style="color: #7f8c8d; font-size: 0.8rem; margin-top: 1rem;">
                        Last accessed: <?php echo date('F j, Y \a\t g:i A'); ?>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>TravelPeak</h3>
                    <p>Your ultimate travel companion for unforgettable adventures around the world.</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="index.php">Home</a></p>
                    <p><a href="about.php">About Us</a></p>
                    <p><a href="services.php">Services</a></p>
                    <p><a href="news.php">News</a></p>
                    <p><a href="contacts.php">Contact</a></p>
                </div>
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p>📧 <a href="mailto:pingmebharathkumar@gmail.com">pingmebharathkumar@gmail.com</a></p>
                    <p>📱 <a href="tel:+16692884608">+1 669-288-4608</a></p>
                    <p>📍 San Jose, California, US</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> TravelPeak. All rights reserved. | Designed with ❤️ for travelers worldwide.</p>
            </div>
        </div>
    </footer>
    
    <script>
        function refreshPasswordFile() {
            // Simple page refresh to update the password file content
            window.location.reload();
        }
    </script>
</body>
</html>