<?php

namespace citysites\assets;

use yii\assets\AssetBundle;

class JsCookieAsset extends AssetBundle
{
    public $sourcePath = '@vendor/npm-asset/js-cookie/src';

    public $js = [
        'js.cookie.js',
    ];
}
