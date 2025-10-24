<?php
// Cookie tracking helper functions for TravelPeak services

function trackServiceVisit($service_id, $service_name, $service_url) {
    // RECENTLY VISITED TRACKING
    $recent_services = isset($_COOKIE['recent_services']) ? json_decode($_COOKIE['recent_services'], true) : [];
    if (!is_array($recent_services)) {
        $recent_services = [];
    }

    // Remove if already exists to avoid duplicates
    $recent_services = array_filter($recent_services, function($service) use ($service_id) {
        return $service['id'] !== $service_id;
    });

    // Add current service to the beginning
    array_unshift($recent_services, [
        'id' => $service_id,
        'name' => $service_name,
        'url' => $service_url,
        'timestamp' => time()
    ]);

    // Keep only last 5 services
    $recent_services = array_slice($recent_services, 0, 5);

    // Set cookie for 30 days
    setcookie('recent_services', json_encode($recent_services), time() + (30 * 24 * 60 * 60), '/');

    // MOST VISITED TRACKING
    $most_visited = isset($_COOKIE['most_visited']) ? json_decode($_COOKIE['most_visited'], true) : [];
    if (!is_array($most_visited)) {
        $most_visited = [];
    }

    // Check if this service already exists in most visited
    $found = false;
    foreach ($most_visited as &$service) {
        if ($service['id'] === $service_id) {
            $service['count']++;
            $service['last_visited'] = time();
            $found = true;
            break;
        }
    }

    // If not found, add new service
    if (!$found) {
        $most_visited[] = [
            'id' => $service_id,
            'name' => $service_name,
            'url' => $service_url,
            'count' => 1,
            'last_visited' => time()
        ];
    }

    // Sort by visit count (descending) and keep only top 5
    usort($most_visited, function($a, $b) {
        return $b['count'] - $a['count'];
    });
    $most_visited = array_slice($most_visited, 0, 5);

    // Set cookie for 30 days
    setcookie('most_visited', json_encode($most_visited), time() + (30 * 24 * 60 * 60), '/');
}

function getRecentServices() {
    $recent_services = isset($_COOKIE['recent_services']) ? json_decode($_COOKIE['recent_services'], true) : [];
    return is_array($recent_services) ? $recent_services : [];
}

function getMostVisitedServices() {
    $most_visited = isset($_COOKIE['most_visited']) ? json_decode($_COOKIE['most_visited'], true) : [];
    return is_array($most_visited) ? $most_visited : [];
}

// Following professor's instructions: Use foreach loop to iterate through $_COOKIE array
function displayAllCookies() {
    echo "<h3>All Cookies (Following Professor's Instructions):</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Cookie Name (Key)</th><th>Cookie Value</th></tr>";
    
    // Use foreach loop to iterate through $_COOKIE array as instructed
    foreach ($_COOKIE as $key => $value) {
        echo "<tr>";
        echo "<td><strong>" . htmlspecialchars($key) . "</strong></td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Function to split cookie values into key and value pairs as instructed
function parseCookieData($cookie_name) {
    if (isset($_COOKIE[$cookie_name])) {
        $cookie_data = $_COOKIE[$cookie_name];
        echo "<h4>Cookie: $cookie_name</h4>";
        echo "<p><strong>Raw Value:</strong> " . htmlspecialchars($cookie_data) . "</p>";
        
        // Try to decode JSON data
        $decoded = json_decode($cookie_data, true);
        if (is_array($decoded)) {
            echo "<p><strong>Decoded Data:</strong></p>";
            echo "<ul>";
            foreach ($decoded as $index => $item) {
                if (is_array($item)) {
                    echo "<li>Item " . ($index + 1) . ":";
                    echo "<ul>";
                    foreach ($item as $key => $value) {
                        echo "<li><strong>$key:</strong> " . htmlspecialchars($value) . "</li>";
                    }
                    echo "</ul></li>";
                } else {
                    echo "<li><strong>$index:</strong> " . htmlspecialchars($item) . "</li>";
                }
            }
            echo "</ul>";
        }
    } else {
        echo "<p>Cookie '$cookie_name' not found.</p>";
    }
}
?>
