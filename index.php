<?php
$domain = $_SERVER['HTTP_HOST'];
$dot_split = explode('.', $domain);
$subdomain = $dot_split[0];
foreach ($dot_split as $key => $value) {
    if ($key > 0) {
        $googleWorkspaceDomain .= '.' . $value;
    }
}
$googleWorkspaceDomain = ltrim($googleWorkspaceDomain, '.');
switch ($subdomain) {
    case 'docs':
    case 'drive':
        // Redirect to the google drive site.
        header('Location: https://drive.google.com/a/' . $googleWorkspaceDomain, true, 301);
        break;
    case 'calendar':
        // Redirect to the google calendar site.
        header('Location: https://www.google.com/calendar/hosted/' . $googleWorkspaceDomain, true, 301);
        break;
    case 'sites':
        // Redirect to the google sites site.
        header('Location: https://sites.google.com/a/' . $googleWorkspaceDomain, true, 301);
        break;
    case 'groups':
        // Redirect to the google groups site.
        header('Location: https://groups.google.com/a/' . $googleWorkspaceDomain, true, 301);
        break;
    default:
        // Redirect to the main gmail site.
        header('Location: https://mail.google.com/a/' . $googleWorkspaceDomain, true, 301);
        break;
}
