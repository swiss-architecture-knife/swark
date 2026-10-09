<?php
return [
    'routing' => [
        'name' => 'swark.',
        'prefix' => '',
    ],
    'content' => [
        'path' => ENV('SWARK_CONTENT_PATH', 'storage/app/swark/_default'),
    ],
    'events' => [
        'hookable' => [
            'chapter:before' => 'before-chapter',
            'chapter-body:before' => 'before',
            'chapter-body:after' => 'after',
        ]
    ]
];
