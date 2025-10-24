<?php
require_once 'cookie_tracker.php';

// Track this service visit
$service_name = "Custom Itinerary Planning";
$service_id = "custom_itinerary";
trackServiceVisit($service_id, $service_name, $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Itinerary Planning - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .service-hero { background: linear-gradient(135deg, rgba(155, 89, 182, 0.8) 0%, rgba(52, 152, 219, 0.8) 100%), url('https://images.unsplash.com/photo-1480796927426-f609979314bd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center; background-attachment: fixed; padding: 4rem 0; color: white; text-align: center; }
        .service-details { padding: 3rem 0; }
        .service-image { width: 100%; height: 400px; object-fit: cover; border-radius: 15px; margin: 2rem 0; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 3rem 0; }
        .feature-card { background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); text-align: center; }
        .feature-card h3 { color: #2c3e50; margin-bottom: 1rem; }
        .booking-section { background: linear-gradient(135deg, #9b59b6, #8e44ad); color: white; padding: 3rem; border-radius: 20px; text-align: center; margin: 3rem 0; }
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
            <h1>🎯 Custom Itinerary Planning</h1>
            <p>Bespoke travel planning tailored to your specific interests, budget, and schedule. Every detail customized just for you.</p>
            <div class="price-highlight">From $1,599</div>
        </div>
    </section>

    <main>
        <div class="container">
            <section class="service-details">
                <h2>Personalized Travel Experiences</h2>
                <p>Our expert travel planners create completely customized itineraries based on your unique preferences, interests, and travel style.</p>
                
                <img src="https://images.unsplash.com/photo-1480796927426-f609979314bd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Custom Planning" class="service-image">
                
                <h3>What's Included in Your Custom Planning</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <h3>📋 Personal Consultation</h3>
                        <p>One-on-one consultation to understand your travel preferences and dreams.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🗺️ Detailed Itinerary</h3>
                        <p>Day-by-day itinerary with activities, dining, and accommodation recommendations.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🏨 Accommodation Booking</h3>
                        <p>Hand-picked hotels and resorts that match your style and budget.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🍽️ Restaurant Reservations</h3>
                        <p>Curated dining experiences and advance reservations at top restaurants.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🎫 Activity Coordination</h3>
                        <p>Pre-booked tours, activities, and experiences tailored to your interests.</p>
                    </div>
                    <div class="feature-card">
                        <h3>📱 24/7 Support</h3>
                        <p>Round-the-clock support and assistance throughout your journey.</p>
                    </div>
                </div>
                
                <div class="booking-section">
                    <h2>Ready for Your Custom Journey?</h2>
                    <p>Let us create your perfect travel experience</p>
                    <div class="price-highlight">Starting from $1,599 per person</div>
                    <a href="contacts.php" class="cta-button" style="background: white; color: #2c3e50; margin-top: 1rem;">
                        Start Your Custom Planning
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
