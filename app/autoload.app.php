<?php
/*
|--------------------------------------------------------------------------
| Your Application's PHP classes auto-loading
|
| All classes in PIMF are statically mapped. It's just a simple array of
| class to file path maps for ultra-fast file loading.
|--------------------------------------------------------------------------
*/
\Pimf\autoload(
  __DIR__,
  [
    // The mappings from class names to file paths.
    'Vanilla\\Controller\\Hello'  => '/Vanilla/Controller/Hello.php',
  ]
);
