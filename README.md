# TravelPeak 🌍✈️

A modern, responsive travel agency website built with PHP, featuring stunning parallax effects, interactive galleries, and advanced cookie tracking functionality. This project was developed as part of the **Enterprise Software Platforms Lab: Tracking with Web Cookies** assignment.

## 🌟 Features

### 🍪 **Cookie Tracking System**
- **Recently Visited Services**: Tracks the last 5 visited services with timestamps
- **Most Visited Services**: Tracks the top 5 most visited services with visit counts
- **Cookie Management**: Advanced cookie handling with JSON encoding/decoding
- **User Experience**: Seamless tracking without disrupting user navigation

### 🎨 **Modern Design & User Experience**
- **Responsive Design**: Fully responsive across all devices (desktop, tablet, mobile)
- **Parallax Effects**: Beautiful parallax scrolling with high-quality travel imagery
- **Interactive Galleries**: Dynamic image galleries with hover effects and overlays
- **Smooth Animations**: Fade-in animations and smooth transitions
- **Modern UI/UX**: Clean, professional design with travel-themed aesthetics

### 🏗️ **Technical Features**
- **PHP Backend**: Dynamic content generation and server-side processing
- **Cookie Technology**: Advanced web cookie implementation for user tracking
- **Modular Architecture**: Well-organized file structure with separate concerns
- **CSS3 Advanced Styling**: Modern CSS with gradients, shadows, and animations
- **Mobile-First Approach**: Optimized for mobile devices with responsive breakpoints

### 🔐 **User Authentication System**
- **Admin Panel**: Complete admin dashboard with user management
- **User Registration**: Secure user registration and login system
- **Password Security**: SHA256 password hashing for secure authentication
- **Role-Based Access**: Separate admin and user dashboards

## 📱 **Pages & Functionality**

### **Public Pages**
- **Home Page**: Hero section with travel showcase, customer reviews, and featured destinations
- **About Us**: Company story, mission, values, and team information
- **Services**: Comprehensive travel packages with 10 individual service pages
- **News**: Latest travel updates, industry news, and travel tips
- **Contact**: Dynamic contact information loaded from external file

### **Cookie Tracking Pages**
- **Recently Visited**: Displays last 5 visited services with timestamps
- **Most Visited**: Shows top 5 most visited services with visit counts and rankings

### **Individual Service Pages (10 Total)**
1. **Alpine Adventures** - Mountain climbing and winter sports
2. **Tropical Escapes** - Beach destinations and island getaways
3. **Cultural Immersions** - Historical sites and cultural experiences
4. **Safari Expeditions** - Wildlife safaris and nature tours
5. **Culinary Journeys** - Food tours and gastronomic experiences
6. **Luxury Cruises** - Premium cruise experiences
7. **Custom Itinerary** - Personalized travel planning
8. **VIP Concierge** - Premium concierge services
9. **Private Transportation** - Luxury private transport
10. **Group Travel** - Group travel coordination

### **Authentication Pages**
- **Admin Login**: Secure admin authentication
- **User Sign In**: User login system
- **User Registration**: New user registration
- **Admin Panel**: User management dashboard
- **User Dashboard**: Personal user dashboard

## 🍪 **Cookie Implementation Details**

### **Cookie Tracking Functions**
- `trackServiceVisit($serviceName, $serviceUrl)` - Tracks service visits
- `getRecentServices()` - Retrieves recently visited services
- `getMostVisitedServices()` - Retrieves most visited services with counts

### **Cookie Data Structure**
```php
// Recently Visited Cookie
{
  "services": [
    {"name": "Alpine Adventures", "url": "alpine_adventures.php", "timestamp": "2024-01-15 10:30:00"},
    {"name": "Tropical Escapes", "url": "tropical_escapes.php", "timestamp": "2024-01-15 10:25:00"}
  ]
}

// Most Visited Cookie
{
  "services": {
    "Alpine Adventures": {"count": 5, "url": "alpine_adventures.php"},
    "Tropical Escapes": {"count": 3, "url": "tropical_escapes.php"}
  }
}
```

### **Professor's Requirements Implementation**
- ✅ **setcookie()**: Used for setting cookie values
- ✅ **$_COOKIE**: Used for retrieving cookie data
- ✅ **foreach loops**: Implemented for cookie data processing
- ✅ **Key-value splitting**: Used for parsing cookie data structures

## 📁 **Project Structure**

```
travelpeak/
├── index.php                    # Homepage with hero section
├── about.php                    # About us page
├── services.php                 # Main services page with tracking links
├── news.php                     # News and updates page
├── contacts.php                 # Contact page with dynamic info
├── contacts.txt                 # Contact information data file
├── cookie_tracker.php           # Core cookie tracking functions
├── recently_visited.php         # Recently visited services page
├── most_visited.php             # Most visited services page
├── password.php                 # Authentication functions
├── admin_login.php              # Admin login page
├── user_signin.php              # User sign-in page
├── register.php                 # User registration page
├── admin_panel.php              # Admin dashboard
├── user_dashboard.php           # User dashboard
├── file_manager.php             # File management utility
├── password.txt                 # User credentials storage
├── password_backup.txt          # Backup of user data
├── update_services.php          # Service update utility
├── home.php                     # Home page alternative
├── login.php                    # Login page
├── user_signin.php              # User sign-in page
├── css/
│   └── style.css               # Main stylesheet with responsive design
├── Individual Service Pages (10):
│   ├── alpine_adventures.php
│   ├── tropical_escapes.php
│   ├── cultural_immersions.php
│   ├── safari_expeditions.php
│   ├── culinary_journeys.php
│   ├── luxury_cruises.php
│   ├── custom_itinerary.php
│   ├── vip_concierge.php
│   ├── private_transportation.php
│   └── group_travel.php
└── README.md                    # Project documentation
```

## 🛠️ **Technologies Used**

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 7.4+
- **Cookie Technology**: Advanced web cookie implementation
- **Styling**: Custom CSS with modern features (Grid, Flexbox, CSS Variables)
- **Images**: High-quality Unsplash travel photography
- **Responsive Design**: Mobile-first approach with CSS Grid and Flexbox
- **Animations**: CSS3 animations and transitions
- **Security**: SHA256 password hashing, secure authentication

## 🎯 **Assignment Requirements Met**

### **Main Requirements**
- ✅ **Modified Products/Services section** with 10 products/services
- ✅ **Individual pages** for each product/service with descriptions and pictures
- ✅ **Web cookies** to track the last 5 previously visited products
- ✅ **Link to show** the last 5 previously visited products

### **Extra Credit Requirements**
- ✅ **Web cookies** to keep track of the 5 most visited products
- ✅ **Link to show** five most visited products with visit counts

### **Professor's Technical Requirements**
- ✅ **setcookie()** function implementation
- ✅ **$_COOKIE** superglobal usage
- ✅ **foreach loops** for cookie data processing
- ✅ **Key-value pair splitting** for data parsing

## 🚀 **Getting Started**

### **Prerequisites**
- Web server with PHP support (Apache, Nginx, or similar)
- PHP 7.4 or higher
- Modern web browser

### **Installation**
1. Clone the repository:
   ```bash
   git clone https://github.com/abharathkumarr/travelpeak.git
   ```

2. Place the files in your web server directory

3. Ensure PHP is enabled and running

4. Open your browser and navigate to the project directory

### **Local Development**
```bash
# Start PHP development server
php -S localhost:8000

# Access the website
http://localhost:8000
```

## 🌍 **Live Website**

**Production URL**: https://travelpeak.kesug.com

The website is hosted on InfinityFree and includes all cookie tracking functionality.

## 🎨 **Design Features**

### **Color Scheme**
- **Primary**: Blue (#3498db) and Dark Blue (#2c3e50)
- **Accent**: Orange (#f39c12) and Red (#e74c3c)
- **Success**: Green (#2ecc71)
- **Background**: Gradient overlays with travel imagery

### **Typography**
- **Font Family**: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
- **Headings**: Bold, gradient text effects
- **Body Text**: Clean, readable typography

### **Visual Elements**
- **Parallax Backgrounds**: High-quality travel photography
- **Gradient Overlays**: Sophisticated color combinations
- **Box Shadows**: Modern depth and dimension
- **Border Radius**: Rounded corners for modern look

## 📊 **Performance Features**

- **Optimized Images**: Compressed and responsive images
- **CSS Optimization**: Minified and organized stylesheets
- **Mobile Performance**: Disabled parallax on mobile for better performance
- **Fast Loading**: Optimized code structure and minimal dependencies
- **Cookie Efficiency**: Lightweight cookie implementation

## 🔧 **Cookie Tracking Usage**

### **How It Works**
1. User visits any service page
2. Cookie automatically tracks the visit
3. Recently visited list updates (last 5)
4. Most visited count increments
5. Data persists across browser sessions

### **Accessing Tracking Data**
- **Recently Visited**: Visit `/recently_visited.php`
- **Most Visited**: Visit `/most_visited.php`
- **Service History**: Available from main services page

## 📈 **Future Enhancements**

- **Database Integration**: MySQL/PostgreSQL for dynamic content
- **Advanced Analytics**: Detailed user behavior tracking
- **Personalization**: AI-powered travel recommendations
- **Booking System**: Online reservation functionality
- **Payment Integration**: Secure payment processing
- **Multi-language Support**: Internationalization features

## 👨‍💻 **Developer Information**

**Developer**: BharathKumarA  
**Email**: pingmebharathkumar@gmail.com  
**Phone**: +1 669-288-4608  
**Location**: San Jose, California, US  
**Role**: Founder, CEO

## 📄 **Academic Information**

This project was developed as part of the **Enterprise Software Platforms Lab** requirement for the **"Lab: Tracking with Web Cookies - Individual Homework"** assignment.

### **Assignment Submission**
- **Professor Email**: coolprofsinn@gmail.com
- **Assignment**: Lab: Tracking with Web Cookies - Individual Homework
- **Requirements**: All main and extra credit requirements completed
- **Technical Implementation**: Full compliance with professor's cookie requirements

## 🤝 **Contributing**

This is an academic project, but suggestions and improvements are welcome. Please feel free to:

- Report bugs or issues
- Suggest new features
- Improve documentation
- Enhance user experience

## 📞 **Contact & Support**

For any questions or support regarding this project:

- **Email**: pingmebharathkumar@gmail.com
- **Location**: San Jose, California, US
- **GitHub**: https://github.com/abharathkumarr/travelpeak

---

**TravelPeak** - Your ultimate travel companion for unforgettable adventures around the world! 🌍✈️✨

*Built with ❤️ for the Enterprise Software Platforms Lab*
