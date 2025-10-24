<?php
require_once 'cookie_tracker.php';

// Track this service visit
$service_name = "Luxury Cruises";
$service_id = "luxury_cruises";
trackServiceVisit($service_id, $service_name, $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Cruises - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .service-hero { background: linear-gradient(135deg, rgba(52, 152, 219, 0.8) 0%, rgba(46, 204, 113, 0.8) 100%), url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center; background-attachment: fixed; padding: 4rem 0; color: white; text-align: center; }
        .service-details { padding: 3rem 0; }
        .service-image { width: 100%; height: 400px; object-fit: cover; border-radius: 15px; margin: 2rem 0; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 3rem 0; }
        .feature-card { background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center; }
        .feature-card h3 { color: #2c3e50; margin-bottom: 1rem; }
        .booking-section { background: linear-gradient(135deg, #3498db, #2980b9); color: white; padding: 3rem; border-radius: 20px; text-align: center; margin: 3rem 0; }
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
            <h1>🚢 Luxury Cruises</h1>
            <p>Sail in style with premium cruise experiences featuring suite accommodations, gourmet dining, and exclusive shore excursions.</p>
            <div class="price-highlight">From $3,199</div>
        </div>
    </section>

    <main>
        <div class="container">
            <section class="service-details">
                <h2>Premium Ocean Voyages</h2>
                <p>Experience the ultimate in luxury cruising with world-class amenities, gourmet dining, and exclusive shore excursions to the world's most beautiful destinations.</p>
                
                <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Luxury Cruise" class="service-image">
                
                <h3>What's Included in Your Cruise Experience</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <h3>🏨 Suite Accommodations</h3>
                        <p>Luxury suites with private balconies and ocean views.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🍽️ Gourmet Dining</h3>
                        <p>World-class restaurants and 24/7 room service.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🏝️ Shore Excursions</h3>
                        <p>Exclusive guided tours and activities at each port.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🎭 Entertainment</h3>
                        <p>Broadway-style shows, live music, and cultural performances.</p>
                    </div>
                    <div class="feature-card">
                        <h3>💆 Spa Services</h3>
                        <p>Luxury spa treatments and wellness programs.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🛡️ Concierge Service</h3>
                        <p>Personal concierge and butler service throughout your voyage.</p>
                    </div>
                </div>
                
                <div class="booking-section">
                    <h2>Ready for Your Cruise Adventure?</h2>
                    <p>Set sail on the ultimate luxury cruise</p>
                    <div class="price-highlight">Starting from $3,199 per person</div>
                    <a href="contacts.php" class="cta-button" style="background: white; color: #2c3e50; margin-top: 1rem;">
                        Book Your Cruise Adventure
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
