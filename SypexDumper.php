<?php

/**
 * Автор: Beaten_Sect0r
 * http://fault.ws
 */

namespace bs\sypexdumper;

/**
 * This is just an example.
 */
class SypexDumper extends \yii\base\Widget
{
    public function run()
    {
        {
            // выводим iframe
            echo "<iframe src=\"$this->assets\" width=\"586\" height=\"462\" frameborder=\"0\" style=\"margin: 0;\"></iframe>";
        } else {
            echo 'Error connect to MySQL.';
        }
    }
}
