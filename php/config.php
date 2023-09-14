<?php

$configPath = scanConfig("../");

function scanConfig($dir = '../', $file_name = 'config.json') {
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        
        $path = $dir . '/' . $file;
        
        if (is_dir($path)) {
            $configPath = scanConfig($path, $file_name);
            if ($configPath !== null) {
                return $configPath;
            }
        } elseif ($file == $file_name) {
            return $path;
        }
    }
    
    return null;
}

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
    foreach ($environment["details"] ?? [] as $token) {
        if (trim($token["name"]) == trim($tokenName)) {
            return $token["value"];
        }
    }
    return getenv($tokenName);
}
?>
