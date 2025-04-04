<?php

// Define redirection rules
$redirections = [
    'docs' => 'https://drive.google.com/a/',
    'drive' => 'https://drive.google.com/a/',
    'calendar' => 'https://www.google.com/calendar/hosted/',
    'sites' => 'https://sites.google.com/a/',
    'groups' => 'https://groups.google.com/a/',
    'default' => 'https://mail.google.com/a/' // Default redirection
];

$domain = $_SERVER['HTTP_HOST'];
$dot_split = explode('.', $domain);
$subdomain = $dot_split[0];

// Initialize the googleWorkspaceDomain variable
$googleWorkspaceDomain = '';

foreach ($dot_split as $key => $value) {
    if ($key > 0) {
        $googleWorkspaceDomain .= '.' . $value;
    }
}
$googleWorkspaceDomain = ltrim($googleWorkspaceDomain, '.');

// Redirect based on the subdomain
$redirectURL = $redirections[$subdomain] ?? $redirections['default'];
header('Location: ' . $redirectURL . $googleWorkspaceDomain, true, 301);

