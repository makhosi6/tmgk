<?php

namespace App\Utils;

use Illuminate\Support\Facades\DB;

class GeneralUtils
{


    /**
     * get the latest policy created, use `created_at` field
     *
     * @return string
     */
    public static function getLatestPolicy()
    {
        $policy = DB::table('lt_policy')
            ->latest()
            ->first();

        if (is_null($policy)) {
            return null;
        }
        return $policy->name;
    }

    /**
     * Return the number of case that belong to the increase cover `type`
     *
     * @return int
     */
    public static function increasedCoverCaseCount()
    {
        return self::caseCount('increase_cover');
    }

    /**
     * Return the number of case that belong to the decrease cover `type`
     *
     * @return int
     */
    public static function decreasedCoverCaseCount()
    {
        return self::caseCount('decrease_cover');
    }

    /**
     * Return the number of case that belong to the cancel cover `type`
     *
     * @return int
     */
    public static function cancelledCoverCaseCount()
    {
        return self::caseCount('cancel_cover');
    }
    /**
     * Return the number of case that belong to a certain cover `type`
     * @param  string  $type
     * @return int
     */
    private static function caseCount($type)
    {
        $cases = DB::table('lt_case')->where('type', $type)->count();

        return $cases;
    }
}
