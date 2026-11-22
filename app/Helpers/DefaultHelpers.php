<?php

use Carbon\Carbon;

if (!function_exists('formatDateOnScreen')) {
    function formatDateOnScreen($date, $format = 'd/m/Y \à\s H:i'): string|null
    {
        if (!isset($date)) {
            return null;
        }

        return Carbon::parse($date)->format($format);
    }
}
