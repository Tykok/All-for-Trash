<?php
echo 'hello';
// test de récupération du get
if (isset($_GET['error'])) {
    $error = $_GET['error'];
} else {
    $error = '404';
}


switch ($error) {
    case '401':
        'Error ti mâle';
        break;

    case '403':
        'Error ti mâle';
        break;

    case '404':
        'Error ti mâle';
        break;
}
