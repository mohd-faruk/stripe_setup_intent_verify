<?php

header('Content-Type: application/json');

try {
    // Update clientSecret with your setupIntent's clientSecret.
    $output = [
        'clientSecret' => 'seti_1SUL0GSJ14RuVccOeGdMrpLc_secret_TRDR5LsxMstQNk2yCyIOcmeEtOe4wgU'
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
