<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use App\mobile;
use View;
class Helper
{

    /**
     * @return int
     */
    public static function totalMobile()
    {
    	$mobiles=mobile::count();
    	return $mobiles;
    }
}
