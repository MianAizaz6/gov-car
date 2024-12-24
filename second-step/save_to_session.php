<?php
// Start the session
session_start();

// Read incoming JSON data
$data = json_decode(file_get_contents('php://input'), true);

// Store the make and model in the session
if (isset($data['make']) && isset($data['model'])) {
    $_SESSION['v_make'] = $data['make'];
    $_SESSION['v_model'] = $data['model'];

    // Respond with success
    echo json_encode(['status' => 'success']);
} else {
    // Respond with error if data is missing
    echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
}
?>
