<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
      'cache' => [
          'class' => 'yii\caching\MemCache',
          'servers' => [
              [
                  'host' => 'memcached',
                  'port' => 11211
              ],
          ],
          'useMemcached' => true,
          'serializer' => false,
      ],
    ],
];
