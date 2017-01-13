<?php
/**
 * Yii2 Asset for jQuery colResizable plugin
 *
 * @link      https://github.com/hiqdev/yii2-asset-col-resizable
 * @package   yii2-asset-col-resizable
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\assets\colResizable;

/**
 * Asset bundle for colResizable jQuery plugin.
 */
class ColResizableAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/col-resizable';

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();

        $this->js = [YII_DEBUG ? 'colResizable-1.6.js' : 'colResizable-1.6.min.js'];
    }
}
