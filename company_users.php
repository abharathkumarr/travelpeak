<?php
$host = 'sql107.infinityfree.com';
$db   = 'if0_40078369_travelpeak';
$user = 'if0_40078369';
$pass = 'Bahubali1236';

function getLocalUsers($host, $db, $user, $pass) {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $stmt = $pdo->query("SELECT id, username, email, created_at FROM users");
    $users = [];
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $row['company'] = 'TravelPeak';
        $row['company_id'] = 'company_a';
        $row['source'] = 'LOCAL';
        $users[] = $row;
    }
    return $users;
}

function getRemoteUsers($endpoint, $force_company_id = '', $force_company = '') {
    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $data = curl_exec($ch);
    curl_close($ch);
    $results = json_decode($data, true);
    $users = [];
    if ($results && isset($results['users'])) {
        foreach ($results['users'] as $user) {
            $user['source'] = 'REMOTE';
            if ($force_company_id !== '') {
                $user['company_id'] = $force_company_id;
            }
            if ($force_company !== '') {
                $user['company'] = $force_company;
            }
            $users[] = $user;
        }
    }
    return $users;
}

$all_users = getLocalUsers($host, $db, $user, $pass);
$remote_endpoints = [
    // Format: endpoint => [company_id, company_name]
    'https://ekant-fixpertplumbing.great-site.net//api_users.php' => ['company_b', 'FixpertPlumbing'],
    // Add more endpoints here if needed
];
foreach ($remote_endpoints as $url => [$comp_id, $comp_name]) {
    $all_users = array_merge($all_users, getRemoteUsers($url, $comp_id, $comp_name));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Company Users</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #263671; color: #fff; }
        tr:nth-child(even) { background: #f2f2f2; }
        .LOCAL { color: green; font-weight: bold; }
        .REMOTE { color: orange; font-weight: bold; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">All Company Users</h2>
    <table>
        <tr>
            <th>ID</th><th>Username</th><th>Email</th><th>Company</th><th>Source</th><th>Registered At</th>
        </tr>
        <?php $sn = 1; foreach($all_users as $user): ?>
        <tr>
            <td><?= $sn++ ?></td>
            <td><?= htmlentities($user['username']) ?></td>
            <td><?= htmlentities($user['email']) ?></td>
            <td><?= htmlentities($user['company']) ?> (<?= htmlentities($user['company_id']) ?>)</td>
            <td class="<?= htmlentities($user['source']) ?>"><?= htmlentities($user['source']) ?></td>
            <td><?= htmlentities($user['created_at']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
