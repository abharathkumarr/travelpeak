<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Login page specific styles */
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin: 4rem auto;
            max-width: 500px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
            text-align: center;
        }
        
        .login-options {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .login-option {
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            padding: 1.5rem 2rem;
            border-radius: 15px;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .login-option:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(52, 152, 219, 0.4);
        }
        
        .login-option.admin {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
        }
        
        .login-option.admin:hover {
            box-shadow: 0 10px 30px rgba(231, 76, 60, 0.4);
        }
        
        .login-option.register {
            background: linear-gradient(135deg, #27ae60, #229954);
        }
        
        .login-option.register:hover {
            box-shadow: 0 10px 30px rgba(39, 174, 96, 0.4);
        }
        
        .page-title {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        
        .page-subtitle {
            color: #7f8c8d;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        
        /* Mobile responsive */
        @media (max-width: 768px) {
            .login-container {
                margin: 2rem 1rem;
                padding: 2rem 1rem;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .login-option {
                padding: 1.2rem 1.5rem;
                font-size: 1.1rem;
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
                        <li><a href="login.php" class="active">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="login-container">
                <h1 class="page-title">🔐 Access Portal</h1>
                <p class="page-subtitle">Choose your login option below</p>
                
                <div class="login-options">
                    <a href="admin_login.php" class="login-option admin">
                        👨‍💼 Administrator Login
                    </a>
                    
                    <a href="user_signin.php" class="login-option">
                        👤 User Sign In
                    </a>
                    
                    <a href="register.php" class="login-option register">
                        ✨ Register New User
                    </a>
                </div>
                
                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #ecf0f1;">
                    <p style="color: #7f8c8d; font-size: 0.9rem;">
                        🔒 Secure login system with SHA256 encryption
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