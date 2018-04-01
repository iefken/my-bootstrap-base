<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.03.18
 * Time: 02:29
 */

/*
 * Check if current uri equals certain tab: FN(str,str)
 */

function activeTab($uri,$thisTab){

    if ($uri==$thisTab)
        return 'active';

}