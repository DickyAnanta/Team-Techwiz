<?php
if (!function_exists('user_ag')) {
    function user_ag()
    {
        $request =  \Config\Services::request();
        $agent = $request->getUserAgent();

        $ret = '';

        if ($agent->isMobile()) {
            $ret = 'mobile';
        } else {
            $ret = 'desktop';
        }

        return $ret;
    }
}

if (!function_exists('idr')) {
    function idr($value = "")
    {
        $format = "-";
        if (!empty($value)) {
            $format = "Rp " . number_format($value, 2, ',', '.');
        }
        return $format;
    }
}
