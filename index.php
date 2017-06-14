<?php
/*
|--------------------------------------------------------------------------
| PIMF Application gateway/runner
|--------------------------------------------------------------------------
*/
include_once 'app/bootstrap.app.php';

$app->run($_GET, $_POST, $_COOKIE, $_FILES);

\Pimf\finish();
