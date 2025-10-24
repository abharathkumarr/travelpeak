<?php
require_once 'cookie_tracker.php';

// Track this service visit
$service_name = "Alpine Adventures";
$service_id = "alpine_adventures";
trackServiceVisit($service_id, $service_name, $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpine Adventures - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .service-hero {
            background: linear-gradient(135deg, rgba(44, 62, 80, 0.8) 0%, rgba(52, 152, 219, 0.8) 100%), 
                        url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');
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
            background: linear-gradient(135deg, #3498db, #2c3e50);
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
            <h1>🏔️ Alpine Adventures</h1>
            <p>Experience the majesty of mountain peaks with luxury alpine resorts, helicopter tours, and world-class skiing experiences.</p>
            <div class="price-highlight">From $2,999</div>
        </div>
    </section>

    <main>
        <div class="container">
            <section class="service-details">
                <h2>Discover the Alpine Wonderland</h2>
                <p>Our Alpine Adventures package takes you to the world's most spectacular mountain destinations, where pristine peaks meet luxury accommodations. Experience the perfect blend of adventure and comfort in some of the most breathtaking alpine environments on Earth.</p>
                
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Alpine Mountains" class="service-image">
                
                <h3>What's Included in Your Alpine Adventure</h3>
                <div class="features-grid">
                    <div class="feature-card">
                        <h3>🏨 Luxury Alpine Resorts</h3>
                        <p>Stay in world-class mountain resorts with panoramic views, spa facilities, and gourmet dining experiences.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🚁 Helicopter Tours</h3>
                        <p>Soar above the peaks with private helicopter tours offering unparalleled views of alpine landscapes.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>⛷️ World-Class Skiing</h3>
                        <p>Access to premier ski resorts with expert instructors, premium equipment, and exclusive slopes.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🥾 Guided Hiking</h3>
                        <p>Expert-guided hiking trails through pristine alpine meadows and mountain passes.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🍷 Alpine Dining</h3>
                        <p>Gourmet meals featuring local alpine cuisine and fine wines from mountain vineyards.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3>🛡️ Safety & Support</h3>
                        <p>24/7 safety support, emergency services, and comprehensive travel insurance included.</p>
                    </div>
                </div>
                
                <h3>Popular Alpine Destinations</h3>
                <ul style="font-size: 1.1rem; line-height: 2; margin: 2rem 0;">
                    <li><strong>Swiss Alps:</strong> Matterhorn, Jungfrau, and Zermatt experiences</li>
                    <li><strong>Austrian Alps:</strong> Innsbruck, Salzburg, and Tyrolean adventures</li>
                    <li><strong>French Alps:</strong> Chamonix, Courchevel, and Mont Blanc region</li>
                    <li><strong>Italian Alps:</strong> Dolomites, Cortina d'Ampezzo, and South Tyrol</li>
                    <li><strong>Canadian Rockies:</strong> Banff, Lake Louise, and Jasper National Park</li>
                </ul>
                
                <div class="booking-section">
                    <h2>Ready for Your Alpine Adventure?</h2>
                    <p>Book your personalized alpine experience with our travel experts</p>
                    <div class="price-highlight">Starting from $2,999 per person</div>
                    <a href="contacts.php" class="cta-button" style="background: white; color: #2c3e50; margin-top: 1rem;">
                        Book Your Alpine Adventure
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
