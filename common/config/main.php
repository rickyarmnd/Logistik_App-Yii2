<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
    'modules' => [
        'gridview' => ['class' => 'kartik\grid\Module'],
        'gii' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                'crud-custom'   => [
                    'class' => 'common\customgenerators\generator\Generator',
                ],
            ],
        ],
    ]
    
];
