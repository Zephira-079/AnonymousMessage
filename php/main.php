<?php
require_once "./Notion.php";
require_once "./Properties.php";
require_once "./config.php";

$properties = new Properties();
$notion = new Notion(get("secret"));
$database = $notion->database(get("database"));

session_start();
date_default_timezone_set('Asia/Manila');

$sessionExpiration = 3600;

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $sessionExpiration) {
    session_unset();
    session_destroy();
    header("Location: ../index.php?session_expired");
    exit;
}

$_SESSION['last_activity'] = time();

if (!isset($_SESSION['request_count'])) {
    $_SESSION['request_count'] = 0;
}

if ($_SESSION['request_count'] >= 10) {
    header("Location: ../index.php?limit_exceeded");
    exit;
}

$data = array(
    'currentDateTime' => str_replace(':', '-', date('m-d-Y H:i:s')),
    'publicIP' => str_replace(':', '-', $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']),
    'message' => $_POST['message']
);

$currentDateTime = $data['currentDateTime'];
$publicIP = $data['publicIP'];
$message = $data['message'];

// fix index.php?success 
if (isset($message) && trim($message) != '' && strlen($message) <= 1024) {
    header("Location: ../index.php?success");
    $status = $database->create_row(
        $properties->title("UniqueID", (string)time()),
        $properties->text("Message", $message), 
        $properties->select("Public IP", $publicIP), 
        $properties->text("CurrentDateTime", $currentDateTime)
    );
    
    $_SESSION['request_count']++;
    exit();
} else {
    header("Location: ../index.php?failed");
    exit();
}

header("Location: 404.php");
exit();

?>