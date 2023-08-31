<?php
$configPath = "../config.json";

function getConfig() {
    global $configPath;
    if (file_exists($configPath)) {
        $configContent = file_get_contents($configPath);
        return json_decode($configContent, true);
    }
    return [];
}

$environment = getConfig();

function get($tokenName) {
    global $environment;
    foreach ($environment["tokens"] ?? [] as $token) {
        if (trim($token["name"]) == trim($tokenName)) {
            return $token["value"];
        }
    }
    return getenv($tokenName);
}
?>
