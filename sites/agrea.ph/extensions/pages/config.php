<?php
return [
    'ext:pages.subscriber.minify' => ['enable' => getenv('SITE') ? true : false],
    'ext:pages.template.helper.image' => [
        'suffix'    => getenv('SITE') ? 'php': '',
        'exclude'   => ['gif'],
        'max_width' => 1280,
        'base_path' => $_SERVER['PAGES_IMAGES_ROOT'],
    ],
    'ext:pages.template.filter.image'   => [
         'enable'    => getenv('SITE') ? true : false,
   ],
   'ext:pages.template.filter.video'   => [
        'enable'    => true
  ],
];
