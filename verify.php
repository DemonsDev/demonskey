<?php
// ========== LAWISSCORE LICENSE VERIFIER ==========
// Heberge sur Railway.app - pas d'anti-bot, reponse directe

header('Content-Type: text/plain');
header('Access-Control-Allow-Origin: *');

// ======= TES CLES VALIDES =======
$validKeys = [
    "Demons-dev-key-noleak" => "active",
    "Eway-skittle-base-invek" => "active",
    // Ajoute d'autres cles ici si besoin :
    // "XXXX-XXXX-XX-XXXXX" => "active",
];

// Recupere la cle depuis la requete
$key = isset($_GET['key']) ? trim($_GET['key']) : '';

if ($key === '') {
    echo "INVALID";
    exit;
}

if (!isset($validKeys[$key])) {
    echo "INVALID";
    exit;
}

if ($validKeys[$key] === "revoked") {
    echo "REVOKED";
    exit;
}

if ($validKeys[$key] === "active") {
    echo "VALID";
    exit;
}

echo "INVALID";
