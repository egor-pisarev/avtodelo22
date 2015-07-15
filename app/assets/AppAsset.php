<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/simple-line-icons.css',
        'css/prettyPhoto',
        'css/style.css',
    ];
    public $js = [
        'js/modernizr.min.js',
        'js/jquery.prettyPhoto.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
