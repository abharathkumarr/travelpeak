<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New User - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .register-form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin: 4rem auto;
            max-width: 450px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .form-header h1 {
            color: #27ae60;
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
        }
        
        .form-header p {
            color: #7f8c8d;
            font-size: 1rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #ecf0f1;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #27ae60;
            box-shadow: 0 0 10px rgba(39, 174, 96, 0.2);
        }
        
        .form-buttons {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #27ae60, #229954);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(39, 174, 96, 0.4);
        }
        
        .btn-secondary {
            background: transparent;
            color: #7f8c8d;
            padding: 0.8rem 2rem;
            border: 2px solid #bdc3c7;
            border-radius: 10px;
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            border-color: #95a5a6;
            color: #2c3e50;
        }
        
        .error-message {
            background: #fdf2f2;
            color: #e74c3c;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            border: 1px solid #f5b7b1;
            text-align: center;
        }
        
        .success-message {
            background: #f0f9f0;
            color: #27ae60;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
            border: 1px solid #a9dfbf;
            text-align: center;
        }
        
        .password-requirements {
            margin-top: 1rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
            border-left: 4px solid #27ae60;
        }
        
        .password-requirements h4 {
            margin: 0 0 0.5rem 0;
            color: #2c3e50;
        }
        
        .password-requirements ul {
            margin: 0;
            padding-left: 1.5rem;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .register-form-container {
                margin: 2rem 1rem;
                padding: 2rem 1rem;
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
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="register-form-container">
                <div class="form-header">
                    <h1>✨ Create New Account</h1>
                    <p>Join the TravelPeak community</p>
                </div>
                
                <?php if (isset($_GET['error'])): ?>
                    <?php if ($_GET['error'] == 1): ?>
                        <div class="error-message">
                            ⚠️ Username already exists. Please choose a different username.
                        </div>
                    <?php elseif ($_GET['error'] == 2): ?>
                        <div class="error-message">
                            ⚠️ Passwords do not match. Please try again.
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
                
                <?php if (isset($_GET['success'])): ?>
                    <div class="success-message">
                        ✅ Account created successfully! You can now <a href="user_signin.php" style="color: #27ae60; text-decoration: underline;">sign in</a>.
                    </div>
                <?php endif; ?>
                
                <form action="password.php" method="POST" onsubmit="return validateForm()">
                    <input type="hidden" name="action" value="register">
                    
                    <div class="form-group">
                        <label for="username">👤 Username:</label>
                        <input type="text" id="username" name="username" required 
                               placeholder="Choose a unique username" minlength="3" maxlength="20">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">🔒 Password:</label>
                        <input type="password" id="password" name="password" required 
                               placeholder="Create a secure password" minlength="6">
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm_password">🔒 Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required 
                               placeholder="Re-enter your password" minlength="6">
                    </div>
                    
                    <div class="form-buttons">
                        <button type="submit" class="btn-primary">
                            🚀 Create Account
                        </button>
                        
                        <a href="login.php" class="btn-secondary">
                            ← Back to Login Options
                        </a>
                    </div>
                </form>
                
                <div class="password-requirements">
                    <h4>🔐 Password Requirements:</h4>
                    <ul>
                        <li>Minimum 6 characters long</li>
                        <li>Use a combination of letters and numbers</li>
                        <li>Avoid common words or personal information</li>
                        <li>Keep your password secure and private</li>
                    </ul>
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
        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password !== confirmPassword) {
                alert('Passwords do not match. Please make sure both password fields are identical.');
                return false;
            }
            
            if (password.length < 6) {
                alert('Password must be at least 6 characters long.');
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>