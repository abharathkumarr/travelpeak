<?php
// Get recently visited services from cookie
$recent_services = isset($_COOKIE['recent_services']) ? json_decode($_COOKIE['recent_services'], true) : [];
if (!is_array($recent_services)) {
    $recent_services = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recently Visited Services - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .recent-services-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin: 2rem auto;
            max-width: 1000px;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
        }
        
        .recent-service-item {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s ease;
        }
        
        .recent-service-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        }
        
        .service-info h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .service-info p {
            color: #7f8c8d;
            margin: 0;
        }
        
        .visit-time {
            color: #95a5a6;
            font-size: 0.9rem;
        }
        
        .no-services {
            text-align: center;
            padding: 3rem;
            color: #7f8c8d;
        }
        
        .cookie-info {
            background: #f8f9fa;
            border: 2px solid #3498db;
            border-radius: 15px;
            padding: 2rem;
            margin: 2rem 0;
        }
        
        .cookie-info h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        
        .cookie-debug {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 1.5rem;
            border-radius: 10px;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            margin-top: 1rem;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="home.php" class="logo">TravelPeak</a>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php" class="active">Services</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="recent-services-container">
                <h1 style="text-align: center; color: #2c3e50; margin-bottom: 2rem;">📋 Recently Visited Services</h1>
                
                <?php if (empty($recent_services)): ?>
                    <div class="no-services">
                        <h3>No Recently Visited Services</h3>
                        <p>You haven't visited any service pages yet. <a href="services.php">Browse our services</a> to start exploring!</p>
                    </div>
                <?php else: ?>
                    <h2>Your Last 5 Visited Services:</h2>
                    <?php foreach ($recent_services as $index => $service): ?>
                        <div class="recent-service-item">
                            <div class="service-info">
                                <h3><?php echo htmlspecialchars($service['name']); ?></h3>
                                <p>Service ID: <?php echo htmlspecialchars($service['id']); ?></p>
                                <p class="visit-time">Visited: <?php echo date('F j, Y \a\t g:i A', $service['timestamp']); ?></p>
                            </div>
                            <div>
                                <a href="<?php echo htmlspecialchars($service['url']); ?>" class="cta-button" style="padding: 0.8rem 1.5rem;">
                                    Visit Again
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                
                
                <div style="text-align: center; margin-top: 2rem;">
                    <a href="services.php" class="cta-button">Back to All Services</a>
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
