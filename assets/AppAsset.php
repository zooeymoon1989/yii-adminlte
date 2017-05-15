<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@webroot/src';
//    public $basePath = '@webroot/src';
//    public $baseUrl = '@web';
    public $css = [
        'app/css/site.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
        'admin_lte/dist/css/AdminLTE.min.css',
        'admin_lte/dist/css/skins/_all-skins.min.css'
    ];
    public $js = [
        'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js',
        'admin_lte/bootstrap/js/bootstrap.min.js',
        'admin_lte/plugins/slimScroll/jquery.slimscroll.min.js',
        'admin_lte/plugins/fastclick/fastclick.js',
        'admin_lte/dist/js/app.min.js',
        'admin_lte/dist/js/demo.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
