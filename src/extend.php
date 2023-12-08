<?php

namespace Animavillis\GhostApiIntegration;

use Flarum\Extend;

return [
    // Inne extender-y...
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js'),
    // Możliwe inne extender-y...
];