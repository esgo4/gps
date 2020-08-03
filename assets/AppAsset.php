<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'tema/plugins/fontawesome-free/css/all.min.css',
        'tema/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'tema/dist/css/adminlte.min.css'
        
    ];
    public $js = [
        'tema/plugins/jquery/jquery.min.js',
        'tema/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'tema/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'tema/dist/js/adminlte.js',
        'tema/dist/js/demo.js',
        'tema/plugins/jquery-mousewheel/jquery.mousewheel.js',
        'tema/plugins/raphael/raphael.min.js',
        'tema/plugins/jquery-mapael/jquery.mapael.min.js',
        'tema/plugins/jquery-mapael/maps/usa_states.min.js',
        'tema/plugins/chart.js/Chart.min.js',
        'tema/dist/js/pages/dashboard2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
