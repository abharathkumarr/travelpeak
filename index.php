<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Apply the epic-travel-showcase background to all sections */
        .parallax-bg-section {
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.1) 0%, rgba(255, 255, 255, 0.9) 20%, rgba(243, 156, 18, 0.1) 40%, rgba(255, 255, 255, 0.9) 60%, rgba(46, 204, 113, 0.1) 80%, rgba(255, 255, 255, 0.9) 100%) center center / cover fixed, url(https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80);
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 2rem 0;
            padding: 3rem 2rem;
            border-radius: 20px;
        }
        
        /* Override for mobile */
        @media (max-width: 768px) {
            .parallax-bg-section {
                background-attachment: scroll;
            }
        }
    </style>
</head>
<body>
    <!-- Travel Decorative Elements -->
    <div class="travel-decoration">✈️</div>
    <div class="travel-decoration">🌍</div>
    <div class="travel-decoration">🏔️</div>
    <div class="travel-decoration">🏖️</div>
    
    <header>
        <div class="container">
            <div class="header-content">
                <a href="index.php" class="logo">TravelPeak</a>
                <nav>
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                        <li><a href="login.php" class="login-btn">🔐 Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-content fade-in">
                <h1>Discover Your Next Adventure</h1>
                <p>Experience the world like never before with TravelPeak. From exotic destinations to cultural immersions, we craft unforgettable journeys tailored just for you.</p>
                <a href="services.php" class="cta-button">Start Your Journey</a>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <!-- EPIC TRAVEL SHOWCASE - The Most Creative First Section -->
            <section class="epic-travel-showcase parallax-bg-section fade-in">
                <div class="floating-badge">✨ Premium Travel Experiences</div>
                
                <div class="showcase-grid">
                    <div class="showcase-main">
                        <h2>Explore the World with TravelPeak</h2>
                        <p>From breathtaking mountain peaks to pristine beaches, discover destinations that will leave you speechless. Our expertly curated experiences combine luxury, adventure, and authentic cultural immersion.</p>
                        
                        
                    </div>
                    
                    <div class="showcase-gallery">
                        <div class="gallery-item main-image">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Mountain Adventure">
                            <div class="image-overlay">
                                <span>Swiss Alps Adventure</span>
                                <div class="price-tag">From $2,999</div>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tropical Paradise">
                            <div class="image-overlay">
                                <span>Maldives Escape</span>
                                <div class="price-tag">From $3,499</div>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="City Lights">
                            <div class="image-overlay">
                                <span>Tokyo City Break</span>
                                <div class="price-tag">From $1,899</div>
                            </div>
                        </div>
                        <div class="gallery-item">
                            <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Safari Adventure">
                            <div class="image-overlay">
                                <span>African Safari</span>
                                <div class="price-tag">From $4,299</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="travel-stats">
                    <div class="stat-item">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Happy Travelers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Destinations</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                </div>
            </section>

            <!-- Customer Reviews with Parallax -->
            <section class="parallax-bg-section fade-in">
                <h2>What Our Travelers Say</h2>
                <div class="reviews-grid">
                        <div class="review-card">
                            <div class="place-image">
                                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Swiss Alps">
                            </div>
                            <div class="review-content">
                                <p>"The Swiss Alps adventure was absolutely breathtaking! TravelPeak organized everything perfectly, from the luxury mountain lodge to the helicopter tours. An experience I'll never forget!"</p>
                                <h4>- Sarah Johnson, Switzerland</h4>
                            </div>
                        </div>
                        
                        <div class="review-card">
                            <div class="place-image">
                                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Maldives">
                            </div>
                            <div class="review-content">
                                <p>"Our honeymoon in the Maldives was pure paradise. The overwater villa, private dining, and crystal-clear waters exceeded all expectations. Thank you TravelPeak!"</p>
                                <h4>- Michael & Emma, Maldives</h4>
                            </div>
                        </div>
                        
                        <div class="review-card">
                            <div class="place-image">
                                <img src="https://images.unsplash.com/photo-1522383225653-ed111181a951?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Japan">
                            </div>
                            <div class="review-content">
                                <p>"Exploring Japan during cherry blossom season was magical. The cultural experiences, authentic cuisine, and seamless travel arrangements made this trip extraordinary."</p>
                                <h4>- David Chen, Japan</h4>
                            </div>
                        </div>

                        <div class="review-card">
                            <div class="place-image">
                                <img src="https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Santorini Greece">
                            </div>
                            <div class="review-content">
                                <p>"Our Greek island adventure in Santorini was absolutely magical! The sunset views, luxury cave hotel, and private yacht tour exceeded every expectation. TravelPeak made our dream honeymoon come true!"</p>
                                <h4>- Jessica & Mark, Greece</h4>
                            </div>
                        </div>
                    </div>
            </section>

            <!-- Featured Destinations -->
            <section class="parallax-bg-section fade-in">
                <div class="section-decoration">🏔️</div>
                <h2>Featured Destinations</h2>
                <p>Explore our handpicked selection of extraordinary destinations, each offering unique experiences and unforgettable memories. From pristine beaches to majestic mountains, cultural treasures to modern marvels.</p>
                
                <div class="services-grid">
                    <div class="service-card">
                        <h3>🏔️ Swiss Alps</h3>
                        <p>Experience breathtaking mountain vistas, luxury alpine resorts, and world-class skiing in the heart of Europe.</p>
                        <div class="price">From $2,999</div>
                    </div>
                    
                    <div class="service-card">
                        <h3>🏝️ Maldives</h3>
                        <p>Indulge in overwater villas, pristine coral reefs, and endless turquoise waters in this tropical paradise.</p>
                        <div class="price">From $3,499</div>
                    </div>
                    
                    <div class="service-card">
                        <h3>🌸 Japan</h3>
                        <p>Immerse yourself in ancient traditions, modern innovation, and the stunning beauty of cherry blossoms.</p>
                        <div class="price">From $2,299</div>
                    </div>
                    
                    <div class="service-card">
                        <h3>🦁 African Safari</h3>
                        <p>Witness the Big Five in their natural habitat while staying in luxury safari lodges.</p>
                        <div class="price">From $4,299</div>
                    </div>
                    
                    <div class="service-card">
                        <h3>🏛️ Greek Islands</h3>
                        <p>Discover ancient history, stunning sunsets, and Mediterranean cuisine across picturesque islands.</p>
                        <div class="price">From $1,899</div>
                    </div>
                    
                    <div class="service-card">
                        <h3>🌺 Bali</h3>
                        <p>Find peace and adventure in this spiritual island with stunning temples, beaches, and rice terraces.</p>
                        <div class="price">From $1,599</div>
                    </div>
                </div>
            </section>

            
           

            <section class="parallax-bg-section fade-in">
                <h2>Why Choose TravelPeak?</h2>
                <p>With over 15 years of experience in luxury travel, TravelPeak has established itself as the premier choice for discerning travelers. Our commitment to excellence, attention to detail, and personalized service ensures that every journey exceeds expectations.</p>
                
                <div class="services-grid">
                    <div class="service-card">
                        <h3>🎯 Personalized Itineraries</h3>
                        <p>Every trip is uniquely crafted to match your interests, preferences, and travel style.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🏆 Award-Winning Service</h3>
                        <p>Recognized globally for our exceptional customer service and travel expertise.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🌍 Global Network</h3>
                        <p>Exclusive partnerships with luxury hotels, airlines, and local guides worldwide.</p>
                    </div>
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

    <script>
        // Simple fade-in animation for elements
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                    }
                });
            });
            
            fadeElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>