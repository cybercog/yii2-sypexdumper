<?php

/**
 * Автор: Beaten_Sect0r
 * http://fault.ws
 */

namespace bs\sypexdumper;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__."/sxd";
        parent::init();
    }
}
