<?php

use Flarum\Event\ConfigureWebApp;
use Flarum\Api\Controller\ListPostsController;
use Flarum\Api\Controller\ListUsersController;
use Flarum\Api\Controller\ShowDiscussionController;
use Flarum\Api\Controller\UpdateDiscussionController;
use Flarum\Api\Serializer;
use Flarum\Discussion\Discussion;
use Flarum\Discussion\Event\Saving as DiscussionSaving;
use Flarum\Discussion\Filter\DiscussionFilterer;
use Flarum\Discussion\Search\DiscussionSearcher;
use Flarum\Extend;
use Flarum\Post\Post;
use Flarum\Settings\Event\Saving as SettingsSaving;
use Flarum\Tags\Api\Serializer\TagSerializer;
use Flarum\Tags\Tag;
use Flarum\User\User;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/forum/main.js')
        ->css(__DIR__.'/less/forum/main.less'),
];