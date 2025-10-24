<?php
// Script to update all service pages with cookie tracking

$services = [
    'cultural_immersions' => 'Cultural Immersions',
    'safari_expeditions' => 'Safari Expeditions', 
    'culinary_journeys' => 'Culinary Journeys',
    'luxury_cruises' => 'Luxury Cruises',
    'custom_itinerary' => 'Custom Itinerary Planning',
    'vip_concierge' => 'VIP Concierge Services',
    'private_transportation' => 'Private Transportation',
    'group_travel' => 'Group Travel Coordination'
];

foreach ($services as $service_id => $service_name) {
    $filename = $service_id . '.php';
    
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        
        // Replace the old cookie tracking code with the new helper function
        $old_pattern = '/<\?php\s*\/\/\s*Cookie tracking.*?\?>/s';
        $new_code = "<?php\nrequire_once 'cookie_tracker.php';\n\n// Track this service visit\n\$service_name = \"$service_name\";\n\$service_id = \"$service_id\";\ntrackServiceVisit(\$service_id, \$service_name, \$_SERVER['REQUEST_URI']);\n?>";
        
        $new_content = preg_replace($old_pattern, $new_code, $content);
        
        if ($new_content !== $content) {
            file_put_contents($filename, $new_content);
            echo "Updated $filename\n";
        } else {
            echo "No changes needed for $filename\n";
        }
    } else {
        echo "File $filename not found\n";
    }
}

echo "All service pages updated!\n";
?>

