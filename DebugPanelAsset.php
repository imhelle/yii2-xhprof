<?php

namespace imhelle\xhprof;

use yii\web\AssetBundle;

/**
 * Class DebugPanelAsset
 * Debug panel asset
 *
 * @author Vadym Stepanov <vadim.stepanov.ua@gmail.com>
 * @date 16.11.2017
 */
class DebugPanelAsset extends AssetBundle
{
    public $sourcePath = '@vendor/imhelle/yii2-xhprof-lib';

    public $css = [
        'assets/xhprof.css'
    ];

    public $js = [
        'assets/xhprof.js'
    ];
}
