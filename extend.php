<?php

use Flarum\Event\ConfigureWebApp;

return function ($events) {
    $events->listen(ConfigureWebApp::class, function (ConfigureWebApp $event) {
        // Tutaj dodajemy kod rozszerzenia
    });
};