<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Apply the parallax-mountains background to all sections */
        .parallax-bg-section {
            position: relative;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
            background: linear-gradient(135deg, rgba(44, 62, 80, 0.7) 0%, rgba(52, 152, 219, 0.7) 100%), url(https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80);
            background-position: center center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 2rem 0;
            padding: 3rem 2rem;
            border-radius: 20px;
            color: white;
        }
        
        /* Make all text elements white in parallax sections */
        .parallax-bg-section h1,
        .parallax-bg-section h2,
        .parallax-bg-section h3,
        .parallax-bg-section h4,
        .parallax-bg-section h5,
        .parallax-bg-section h6,
        .parallax-bg-section p,
        .parallax-bg-section div,
        .parallax-bg-section span,
        .parallax-bg-section strong {
            color: white !important;
        }
        
        /* Style service cards with white text */
        .parallax-bg-section .service-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        .parallax-bg-section .service-card h3,
        .parallax-bg-section .service-card p {
            color: white !important;
        }
        
        /* Style CTA buttons for better visibility */
        .parallax-bg-section .cta-button {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid white;
            color: white !important;
        }
        
        .parallax-bg-section .cta-button:hover {
            background: white;
            color: #2c3e50 !important;
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
    <div class="travel-decoration">🌟</div>
    <div class="travel-decoration">🗺️</div>
    <div class="travel-decoration">🧳</div>
    <div class="travel-decoration">📸</div>
    
    <header>
        <div class="container">
            <div class="header-content">
                <a href="home.php" class="logo">TravelPeak</a>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php" class="active">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="hero" style="background: linear-gradient(135deg, rgba(44, 62, 80, 0.7) 0%, rgba(52, 152, 219, 0.7) 100%), url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container">
            <div class="hero-content fade-in">
                <h1>About TravelPeak</h1>
                <p>Passionate about creating extraordinary travel experiences that inspire, educate, and transform. Discover the story behind our commitment to exceptional journeys.</p>
                <a href="contacts.php" class="cta-button">Join Our Journey</a>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <section class="parallax-bg-section fade-in">
                <div class="section-decoration">🌍</div>
                <h2>Our Story</h2>
                <p>Founded with a passion for exploration and a commitment to excellence, TravelPeak has been crafting unforgettable journeys for over 15 years. What started as a small travel consultancy has grown into a global network of travel experts, each dedicated to creating personalized experiences that exceed expectations.</p>
                
                <p>Our founder, driven by a love for adventure and cultural immersion, envisioned a travel company that would go beyond typical tourist experiences. Today, TravelPeak represents the pinnacle of luxury travel, offering curated experiences that combine comfort, authenticity, and discovery.</p>
            </section>

            <!-- Parallax Section: Our Mission -->
            <section class="parallax-bg-section fade-in">
                <h2>Our Mission</h2>
                <p>To inspire and enable transformative travel experiences that broaden perspectives, create lasting memories, and foster global understanding through exceptional service and authentic connections.</p>
            </section>

            <section class="parallax-bg-section fade-in">
                <h2>Our Values</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <h3>🌟 Excellence</h3>
                        <p>We pursue perfection in every detail, from initial planning to the final farewell, ensuring each journey exceeds expectations.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🤝 Authenticity</h3>
                        <p>We believe in genuine cultural experiences that respect local traditions while providing meaningful connections.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🔒 Trust</h3>
                        <p>Your safety, security, and satisfaction are our top priorities. We build lasting relationships based on trust and reliability.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🌍 Sustainability</h3>
                        <p>We're committed to responsible tourism that preserves destinations for future generations while supporting local communities.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🎯 Personalization</h3>
                        <p>Every traveler is unique. We craft bespoke experiences tailored to individual preferences, interests, and dreams.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>💡 Innovation</h3>
                        <p>We continuously evolve our services, embracing new technologies and trends to enhance your travel experience.</p>
                    </div>
                </div>
            </section>

            <!-- Parallax Section: Global Reach -->
            <section class="parallax-bg-section fade-in">
                <h2>Global Presence, Local Expertise</h2>
                <p>With partnerships across 6 continents and local experts in over 150 destinations, we bring you insider access to the world's most extraordinary places.</p>
            </section>

            <section class="parallax-bg-section fade-in">
                <h2>Why Travelers Choose Us</h2>
                <p>Our commitment to excellence has earned us recognition from industry leaders and, more importantly, the trust of thousands of satisfied travelers. Here's what sets us apart:</p>
                
                <div class="services-grid">
                    <div class="service-card">
                        <h3>📚 15+ Years Experience</h3>
                        <p>Extensive industry knowledge and proven track record of successful trips.</p>
                        <p><strong>50,000+ Happy Travelers</strong></p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🏆 Award-Winning Service</h3>
                        <p>Recognized by leading travel organizations for exceptional customer service.</p>
                        <p><strong>98% Customer Satisfaction</strong></p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🌐 Global Network</h3>
                        <p>Exclusive partnerships with luxury hotels, airlines, and local guides worldwide.</p>
                        <p><strong>150+ Destinations</strong></p>
                    </div>
                </div>
            </section>

            <section class="parallax-bg-section fade-in">
                <h2>Our Team</h2>
                <p>Meet the passionate professionals who make your travel dreams come true. Our diverse team of travel experts, cultural specialists, and adventure guides brings together decades of combined experience and genuine enthusiasm for exploration.</p>
                
                <div class="services-grid">
                    <div class="service-card">
                        <h3>👨‍💼 Travel Consultants</h3>
                        <p>Expert advisors with firsthand knowledge of destinations worldwide, ready to craft your perfect itinerary.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🗺️ Local Guides</h3>
                        <p>Native experts who share insider knowledge, hidden gems, and authentic cultural experiences.</p>
                    </div>
                    
                    <div class="service-card">
                        <h3>🛡️ Support Team</h3>
                        <p>24/7 assistance team ensuring your safety, comfort, and peace of mind throughout your journey.</p>
                    </div>
                </div>
            </section>

            <section class="parallax-bg-section fade-in">
                <h2>Our Commitment to You</h2>
                <p>At TravelPeak, we understand that travel is more than just visiting new places—it's about personal growth, cultural understanding, and creating memories that last a lifetime. We're committed to making every journey meaningful, safe, and extraordinary.</p>
                
                <p>Whether you're seeking adventure in remote wilderness, luxury relaxation in world-class resorts, or cultural immersion in historic destinations, we have the expertise, connections, and passion to make it happen.</p>
                
                <div class="text-center mt-4">
                    <a href="services.php" class="cta-button">Explore Our Services</a>
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