<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TravelPeak</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Make contact details bold and black */
        .contact-info h3,
        .contact-info p,
        .contact-info strong,
        .contact-card h3,
        .contact-card p {
            color: #000 !important;
            font-weight: bold !important;
        }
        
        /* Style contact links */
        .contact-info a,
        .contact-card a {
            color: #333 !important;
            font-weight: bold !important;
            text-decoration: underline;
        }
        
        /* Apply responsive background styling to content section */
        .content-section {
            background: #ffffff;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            margin: 2rem 0;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 20px 60px;
        }
        
        /* Responsive design for contact cards */
        .contact-card {
            background: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 1rem 0;
            border: 2px solid #3498db;
        }
        
        .contact-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #0d0d0dff !important;
        }
        
        .contact-card p {
            margin: 0.5rem 0;
            font-size: 1.1rem;
            line-height: 1.6;
        }
        
        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .content-section {
                padding: 2rem 1rem;
                margin: 1rem 0;
            }
            
            .contact-card {
                padding: 1.5rem;
                margin: 0.5rem 0;
            }
            
            .contact-card h3 {
                font-size: 1.3rem;
            }
            
            .contact-card p {
                font-size: 1rem;
            }
        }
        
        /* Extra small screens */
        @media (max-width: 480px) {
            .content-section {
                padding: 1rem;
                border-radius: 10px;
            }
            
            .contact-card {
                padding: 1rem;
                border-radius: 10px;
            }
            
            .contact-card h3 {
                font-size: 1.2rem;
            }
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
                        <li><a href="contacts.php" class="active">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <section class="content-section">
                <h2>Our Team</h2>
                
                <?php
                // Read contact information from the text file
                $contactFile = 'contacts.txt';
                
                if (file_exists($contactFile)) {
                    $contactData = file_get_contents($contactFile);
                    $contactInfo = explode('|', trim($contactData));
                    
                    if (count($contactInfo) >= 5) {
                        $name = htmlspecialchars($contactInfo[0]);
                        $email = htmlspecialchars($contactInfo[1]);
                        $phone = htmlspecialchars($contactInfo[2]);
                        $role = htmlspecialchars($contactInfo[3]);
                        $location = htmlspecialchars($contactInfo[4]);
                        
                        echo '<div class="contact-info">';
                        echo '<div class="contact-card">';
                        echo '<h3>👨‍💼 ' . $name . '</h3>';
                        echo '<p><strong>' . $role . '</strong></p>';
                        echo '<p>📧 <a href="mailto:' . $email . '" style="color: #000; font-weight: bold;">' . $email . '</a></p>';
                        echo '<p>📱 <a href="tel:' . $phone . '" style="color: #000; font-weight: bold;">' . $phone . '</a></p>';
                        echo '<p>📍 ' . $location . '</p>';
                        echo '<p style="margin-top: 1rem; font-style: italic;">"Travel is not just about the destination, it\'s about the journey and the memories we create along the way. Let me help you craft your perfect adventure."</p>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<p style="color: red;">Error: Contact information format is incorrect.</p>';
                    }
                } else {
                    echo '<p style="color: red;">Error: Contact information file not found.</p>';
                }
                ?>
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