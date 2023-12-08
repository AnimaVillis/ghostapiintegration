<?php
use Flarum\Extend;
use Flarum\Tags\Tag;
use Illuminate\Contracts\Events\Dispatcher;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/admin/admin.js')
        ->css(__DIR__.'/resources/less/admin.less')
        ->view('custom-settings', 'resources\views\admin\extensions\ghostapiintegration.blade.php'),

    (new Extend\Settings())
        ->serializeToForum('ghostApiUrl', 'animavillis-ghostapiintegration.api_url'),
    
    (new Extend\Settings())
        ->serializeToForum('ghostApiPath', 'animavillis-ghostapiintegration.api_path'),

    (new Extend\Locales(__DIR__.'/locale')),

];