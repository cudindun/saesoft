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
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'fonts/font-awesome/font-awesome.min.css',
        'css/style.css',
        'css/responsive.css',
        'css/normalize.css',
        'extras/animate.css',
        'extras/lightbox.css',
        'extras/owl/owl.carousel.css',
        'extras/owl/owl.theme.css',
        'extras/owl/owl.transitions.css'
    ];
    public $js = [
    	'js/jquery-min.js',
    	'js/bootstrap.min.js',
    	'js/jquery.nav.js',
    	'js/owl.carousel.js',
    	'js/wow.js',
    	'js/jquery.mixitup.js',
        'js/lightbox.min.js',
        'js/scroll-top.js',
        'js/smooth-scroll.js',
        'js/style.changer.js',
        'js/modernizr-2.8.0.main.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
