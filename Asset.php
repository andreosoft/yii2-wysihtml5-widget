<?php

namespace andreosoft\wysihtml5;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap3-wysihtml5-bower/dist';

    public $js = [
        'bootstrap3-wysihtml5.all.min.js',
    ];
    
    public $css = [
        'bootstrap3-wysihtml5.min.css',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}