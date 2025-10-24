<?php
session_start();

// Check if user is logged in (either admin or regular user)
if (!isset($_SESSION['user_logged_in']) && !isset($_SESSION['admin_logged_in'])) {
    header('Location: user_signin.php');
    exit();
}

$username = $_SESSION['username'] ?? 'User';
$isAdmin = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .dashboard-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin: 2rem auto;
            max-width: 900px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
        }
        
        .dashboard-header {
            text-align: center;
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #ecf0f1;
        }
        
        .dashboard-header h1 {
            color: #3498db;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        
        .dashboard-header p {
            color: #7f8c8d;
            font-size: 1.1rem;
        }
        
        .welcome-card {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 3rem;
            text-align: center;
        }
        
        .welcome-card h2 {
            margin: 0 0 1rem 0;
            font-size: 1.8rem;
        }
        
        .welcome-card p {
            margin: 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .dashboard-card {
            background: white;
            border: 2px solid #ecf0f1;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            border-color: #3498db;
        }
        
        .dashboard-card .icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        .dashboard-card h3 {
            color: #2c3e50;
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }
        
        .dashboard-card p {
            color: #7f8c8d;
            font-size: 1rem;
            line-height: 1.6;
        }
        
        .quick-actions {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 3rem;
        }
        
        .quick-actions h3 {
            color: #2c3e50;
            font-size: 1.6rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .action-btn {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            padding: 1.5rem 2rem;
            border-radius: 10px;
            text-decoration: none;
            text-align: center;
            font-weight: bold;
            transition: all 0.3s ease;
            display: block;
        }
        
        .action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.4);
        }
        
        .action-btn.admin {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
        }
        
        .action-btn.admin:hover {
            box-shadow: 0 10px 30px rgba(231, 76, 60, 0.4);
        }
        
        .user-info {
            background: white;
            border: 2px solid #ecf0f1;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .user-info h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        
        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid #ecf0f1;
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: bold;
            color: #7f8c8d;
        }
        
        .info-value {
            color: #2c3e50;
        }
        
        .status-badge {
            background: #27ae60;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .status-badge.admin {
            background: #e74c3c;
        }
        
        @media (max-width: 768px) {
            .dashboard-container {
                margin: 1rem;
                padding: 2rem 1rem;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            .actions-grid {
                grid-template-columns: 1fr;
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
                        <li><a href="user_dashboard.php" class="active">Dashboard</a></li>
                        <?php if ($isAdmin): ?>
                            <li><a href="admin_panel.php">Admin Panel</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="dashboard-container">
                <div class="dashboard-header">
                    <h1>🎯 User Dashboard</h1>
                    <p>Your personal TravelPeak control center</p>
                </div>
                
                <div class="welcome-card">
                    <h2>Welcome back, <?php echo htmlspecialchars($username); ?>! 👋</h2>
                    <p>Ready to plan your next amazing adventure? Let's explore what TravelPeak has to offer.</p>
                </div>
                
                <div class="user-info">
                    <h3>👤 Account Information</h3>
                    <div class="info-item">
                        <span class="info-label">Username:</span>
                        <span class="info-value"><?php echo htmlspecialchars($username); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Account Type:</span>
                        <span class="status-badge <?php echo $isAdmin ? 'admin' : ''; ?>">
                            <?php echo $isAdmin ? 'ADMINISTRATOR' : 'MEMBER'; ?>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Login Time:</span>
                        <span class="info-value"><?php echo date('F j, Y \a\t g:i A'); ?></span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">Status:</span>
                        <span class="status-badge">ACTIVE</span>
                    </div>
                </div>
                
                <div class="dashboard-grid">
                    <div class="dashboard-card" onclick="window.location.href='services.php'">
                        <span class="icon">🎒</span>
                        <h3>Travel Services</h3>
                        <p>Discover our comprehensive travel packages, guided tours, and adventure experiences tailored for every type of traveler.</p>
                    </div>
                    
                    <div class="dashboard-card" onclick="window.location.href='news.php'">
                        <span class="icon">📰</span>
                        <h3>Travel News</h3>
                        <p>Stay updated with the latest travel destinations, tips, and industry news to make your trips more memorable.</p>
                    </div>
                    
                    <div class="dashboard-card" onclick="window.location.href='contacts.php'">
                        <span class="icon">📞</span>
                        <h3>Contact Support</h3>
                        <p>Get in touch with our travel experts for personalized recommendations and assistance with your travel plans.</p>
                    </div>
                    
                    <div class="dashboard-card" onclick="window.location.href='about.php'">
                        <span class="icon">ℹ️</span>
                        <h3>About TravelPeak</h3>
                        <p>Learn more about our mission, values, and commitment to making your travel experiences extraordinary.</p>
                    </div>
                </div>
                
                <div class="quick-actions">
                    <h3>🚀 Quick Actions</h3>
                    <div class="actions-grid">
                        <a href="services.php" class="action-btn">
                            🎯 Browse Services
                        </a>
                        <a href="news.php" class="action-btn">
                            📖 Read Travel News
                        </a>
                        <a href="contacts.php" class="action-btn">
                            💬 Contact Us
                        </a>
                        <?php if ($isAdmin): ?>
                            <a href="admin_panel.php" class="action-btn admin">
                                🛡️ Admin Panel
                            </a>
                        <?php endif; ?>
                        <a href="password.php?logout=1" class="action-btn" style="background: linear-gradient(135deg, #95a5a6, #7f8c8d);">
                            🔓 Logout
                        </a>
                    </div>
                </div>
                
                <div style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid #ecf0f1; text-align: center;">
                    <p style="color: #7f8c8d; font-size: 0.9rem;">
                        🔐 <strong>Security Notice:</strong> Your session is secure and encrypted. 
                        Remember to logout when using shared computers.
                    </p>
                    <p style="color: #7f8c8d; font-size: 0.8rem; margin-top: 1rem;">
                        Dashboard last updated: <?php echo date('F j, Y \a\t g:i A'); ?>
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
</body>
</html>