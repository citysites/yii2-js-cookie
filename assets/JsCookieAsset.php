<?php

namespace citysites\assets;

use yii\web\AssetBundle;

class JsCookieAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/js-cookie/src';

    public $js = [
        'js.cookie.js',
    ];
}
