<?php
use Flarum\Extend;
use Flarum\Tags\Tag;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/admin/admin.js')
        ->css(__DIR__.'/resources/less/admin.less'),
];