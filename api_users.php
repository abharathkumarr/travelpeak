<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$host = 'sql107.infinityfree.com';
$db   = 'if0_40078369_travelpeak';
$user = 'if0_40078369';
$pass = 'Bahubali1236';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    $stmt = $pdo->query("SELECT id, username, email, created_at FROM users");
    $users = [];
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $row['company'] = 'TravelPeak';
        $row['company_id'] = 'company_a';
        $row['status'] = 'active';
        $users[] = $row;
    }
    echo json_encode([
        "success" => true,
        "company" => "TravelPeak",
        "company_id" => "company_a",
        "total_users" => count($users),
        "users" => $users,
        "timestamp" => date('Y-m-d H:i:s'),
        "source" => "database"
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "error" => $e->getMessage()
    ]);
}
?>

