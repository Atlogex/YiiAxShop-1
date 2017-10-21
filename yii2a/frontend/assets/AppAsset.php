<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public $sourcePath = '@app/themes/axy2shop/assets/';
//    public $sourcePath = '@webroot/css';
//    public $basePath = '@webroot/css';
//    public $baseUrl = '@web';
	public $css = [
		'site.less',
	];
	public $js = [
		'js/main.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
