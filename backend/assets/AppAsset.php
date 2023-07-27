<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/app.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css',
        'lib/remixicon/fonts/remixicon.css',
        '/css/core.css',
        '/css/theme-default.css',
        'assets/css/demo.css',
        '/fonts/boxicons.css'
    ];
    public $js = [
        '/js/app.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset',

    ];
}
