<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(404);
    exit;
}

header('Content-Type: application/json');

$SECRET_KEY = '6LeVTOMrAAAAAAXj6arVF3ZIl35UtS-27X_BDrva';
$CSV_FILE = 'contacts.csv';

$email = trim($_POST['email'] ?? '');
$token = $_POST['token'] ?? '';

if (empty($email)) {
    echo json_encode([
        'success' => false,
        'message' => 'Email is required'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Please enter a valid email address'
    ]);
    exit;
}

// Verify reCAPTCHA
if (empty($token)) {
    echo json_encode([
        'success' => false,
        'message' => 'Verification failed. Please try again.'
    ]);
    exit;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['secret' => $SECRET_KEY, 'response' => $token]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$recaptcha = json_decode($response, true);

if (!$recaptcha['success'] || $recaptcha['score'] < 0.5) {
    echo json_encode([
        'success' => false,
        'message' => 'reCAPTCHA verification failed. Please try again.'
    ]);
    exit;
}

$timestamp = date('Y-m-d H:i:s');
$data = [$timestamp, $email];

$file = fopen($CSV_FILE, 'a');
if ($file) {
    fputcsv($file, $data);
    fclose($file);
    echo json_encode(['success' => true]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Failed to save. Please try again.'
    ]);
}
