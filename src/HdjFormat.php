<?php

namespace hdj\hdjformat;

use Carbon\Carbon;

class HdjFormat
{
    public static function formatar($date)
    {
        return Carbon::parse($date)->format("d-m-Y");
    }

    public static function hdjDay($date)
    {
        return Carbon::parse($date)->format("d");
    }

    public static function hdjDateExtend($date)
    {
        $data = Carbon::parse($date)->format("d") . ' de ' . Carbon::parse($date)->format("M") . ' de ' . Carbon::parse($date)->format("Y");
        return $data;
    }
}
