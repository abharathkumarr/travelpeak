<?php
require_once 'cookie_tracker.php';

// Track this service visit
$service_name = "Culinary Journeys";
$service_id = "culinary_journeys";
trackServiceVisit($service_id, $service_name, $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culinary Journeys - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .service-hero { background: linear-gradient(135deg, rgba(231, 76, 60, 0.8) 0%, rgba(52, 152, 219, 0.8) 100%), url('https://images.unsplash.com/photo-1480796927426-f609979314bd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center; background-attachment: fixed; padding: 4rem 0; color: white; text-align: center; }
        .service-details { padding: 3rem 0; }
        .service-image { width: 100%; height: 400px; object-fit: cover; border-radius: 15px; margin: 2rem 0; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 3rem 0; }
        .feature-card { background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center; }
        .feature-card h3 { color: #2c3e50; margin-bottom: 1rem; }
        .booking-section { background: linear-gradient(135deg, #e74c3c, #c0392b); color: white; padding: 3rem; border-radius: 20px; text-align: center; margin: 3rem 0; }
        .price-highlight { font-size: 2.5rem; font-weight: bold; color: #f39c12; margin: 1rem 0; }
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
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="service-hero">
        <div class="container">
            <h1>🍷 Culinary Journeys</h1>
            <p>Savor the world's finest cuisines with Michelin-starred dining experiences, cooking classes, and wine country tours.</p>
            <div class="price-highlight">From $2,799</div>
        </div>
    </section>

    <main>
        <div class="container">
            <section class="service-details">
                <h2>Gourmet Food & Wine Adventures</h2>
                <p>Indulge in the world's most exquisite culinary experiences, from Michelin-starred restaurants to hands-on cooking classes with master chefs.</p>
                
                <img src="https://images.unsplash.com/photo-1480796927426-f609979314bd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Gourmet Dining" class="service-image">
                
                <h3>What's Included in Your Culinary Journey</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <h3>🍽️ Michelin Dining</h3>
                        <p>Reservations at world-renowned Michelin-starred restaurants.</p>
                    </div>
                    <div class="feature-card">
                        <h3>👨‍🍳 Cooking Classes</h3>
                        <p>Hands-on cooking classes with master chefs and local experts.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🍷 Wine Tastings</h3>
                        <p>Private wine tastings at prestigious vineyards and cellars.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🛒 Market Tours</h3>
                        <p>Guided tours of local markets with fresh ingredient sourcing.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🏛️ Food History</h3>
                        <p>Cultural food tours exploring culinary traditions and history.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🍴 Private Chefs</h3>
                        <p>Personal chef services for intimate dining experiences.</p>
                    </div>
                </div>
                
                <div class="booking-section">
                    <h2>Ready for Your Culinary Adventure?</h2>
                    <p>Taste the world's finest cuisines</p>
                    <div class="price-highlight">Starting from $2,799 per person</div>
                    <a href="contacts.php" class="cta-button" style="background: white; color: #2c3e50; margin-top: 1rem;">
                        Book Your Culinary Journey
                    </a>
                </div>
            </section>
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
