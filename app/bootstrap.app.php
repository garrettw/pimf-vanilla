<?php
/*
|--------------------------------------------------------------------------
| PIMF bootstrap
|--------------------------------------------------------------------------
*/
namespace Pimf;

require_once BASE_PATH .'pimf-framework/utils.php';
setBasePath(__FILE__);

require_once BASE_PATH .'pimf-framework/autoload.core.php';
require_once BASE_PATH .'app/autoload.app.php';
require_once BASE_PATH .'app/config.app.php';

$app = new Application(
    new Config($config),
    new Environment(new Param($_SERVER))
);
