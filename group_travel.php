<?php
require_once 'cookie_tracker.php';

// Track this service visit
$service_name = "Group Travel Coordination";
$service_id = "group_travel";
trackServiceVisit($service_id, $service_name, $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Travel Coordination - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .service-hero { background: linear-gradient(135deg, rgba(155, 89, 182, 0.8) 0%, rgba(52, 152, 219, 0.8) 100%), url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center; background-attachment: fixed; padding: 4rem 0; color: white; text-align: center; }
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
            <h1>👥 Group Travel Coordination</h1>
            <p>Expert coordination for family reunions, corporate retreats, and special celebration trips with customized group experiences.</p>
            <div class="price-highlight">From $2,199</div>
        </div>
    </section>

    <main>
        <div class="container">
            <section class="service-details">
                <h2>Seamless Group Travel Experiences</h2>
                <p>Our group travel specialists coordinate every detail of your group journey, ensuring a seamless and memorable experience for all participants.</p>
                
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Group Travel" class="service-image">
                
                <h3>What's Included in Your Group Coordination</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <h3>👨‍👩‍👧‍👦 Family Reunions</h3>
                        <p>Multi-generational family trips with activities for all ages.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🏢 Corporate Retreats</h3>
                        <p>Team building experiences and corporate incentive trips.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🎉 Special Celebrations</h3>
                        <p>Weddings, anniversaries, and milestone celebration trips.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🎓 Educational Groups</h3>
                        <p>Student tours and educational travel experiences.</p>
                    </div>
                    <div class="feature-card">
                        <h3>⛪ Religious Pilgrimages</h3>
                        <p>Spiritual journeys and religious group travel.</p>
                    </div>
                    <div class="feature-card">
                        <h3>🛡️ Group Management</h3>
                        <p>Dedicated group coordinator and 24/7 support.</p>
                    </div>
                </div>
                
                <div class="booking-section">
                    <h2>Ready for Your Group Adventure?</h2>
                    <p>Let us coordinate your perfect group experience</p>
                    <div class="price-highlight">Starting from $2,199 per person</div>
                    <a href="contacts.php" class="cta-button" style="background: white; color: #2c3e50; margin-top: 1rem;">
                        Plan Your Group Trip
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
