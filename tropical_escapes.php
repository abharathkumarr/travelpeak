<?php
require_once 'cookie_tracker.php';

// Track this service visit
$service_name = "Tropical Escapes";
$service_id = "tropical_escapes";
trackServiceVisit($service_id, $service_name, $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Escapes - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .service-hero {
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.8) 0%, rgba(52, 152, 219, 0.8) 100%), 
                        url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 4rem 0;
            color: white;
            text-align: center;
        }
        
        .service-details {
            padding: 3rem 0;
        }
        
        .service-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
            margin: 2rem 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }
        
        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .feature-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        
        .booking-section {
            background: linear-gradient(135deg, #27ae60, #229954);
            color: white;
            padding: 3rem;
            border-radius: 20px;
            text-align: center;
            margin: 3rem 0;
        }
        
        .price-highlight {
            font-size: 2.5rem;
            font-weight: bold;
            color: #f39c12;
            margin: 1rem 0;
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
            <h1>🏝️ Tropical Escapes</h1>
            <p>Unwind in paradise with overwater villas, private beaches, and exclusive island experiences in the world's most beautiful destinations.</p>
            <div class="price-highlight">From $3,499</div>
        </div>
    </section>

    <main>
        <div class="container">
            <section class="service-details">
                <h2>Paradise Awaits in Tropical Heaven</h2>
                <p>Our Tropical Escapes package transports you to the world's most stunning tropical destinations, where crystal-clear waters meet pristine beaches and luxury resorts. Experience the ultimate in relaxation and adventure in paradise.</p>
                
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Tropical Paradise" class="service-image">
                
                <h3>What's Included in Your Tropical Escape</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <h3>🏖️ Private Beach Access</h3>
                        <p>Exclusive access to pristine private beaches with crystal-clear waters and white sand.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🏠 Overwater Villas</h3>
                        <p>Luxury overwater accommodations with direct ocean access and panoramic views.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🤿 Water Activities</h3>
                        <p>Snorkeling, diving, kayaking, and water sports in pristine tropical waters.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🍹 All-Inclusive Dining</h3>
                        <p>Gourmet meals featuring fresh seafood, tropical fruits, and international cuisine.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🌅 Sunset Experiences</h3>
                        <p>Private sunset cruises, beach dinners, and romantic tropical evenings.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🛡️ Luxury Service</h3>
                        <p>Personal butler service, spa treatments, and 24/7 concierge assistance.</p>
                    </div>
                </div>
                
                <h3>Exclusive Tropical Destinations</h3>
                <ul style="font-size: 1.1rem; line-height: 2; margin: 2rem 0;">
                    <li><strong>Maldives:</strong> Overwater villas and pristine coral reefs</li>
                    <li><strong>Bora Bora:</strong> French Polynesian luxury and Mount Otemanu views</li>
                    <li><strong>Caribbean:</strong> St. Lucia, Barbados, and Turks & Caicos</li>
                    <li><strong>Southeast Asia:</strong> Thailand, Indonesia, and Philippines</li>
                    <li><strong>Pacific Islands:</strong> Fiji, Tahiti, and Cook Islands</li>
                </ul>
                
                <div class="booking-section">
                    <h2>Ready for Your Tropical Paradise?</h2>
                    <p>Escape to the world's most beautiful tropical destinations</p>
                    <div class="price-highlight">Starting from $3,499 per person</div>
                    <a href="contacts.php" class="cta-button" style="background: white; color: #2c3e50; margin-top: 1rem;">
                        Book Your Tropical Escape
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
