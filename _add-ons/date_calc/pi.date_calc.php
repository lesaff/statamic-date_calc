<?php
/**
 * Modifier_DateCalc
 * Date/Time Calculation Add-on for Statamic
 * Using PHP Carbon library
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2014
 * @link       https://github.com/lesaff/statamic-date_calc
 * @license    http://opensource.org/licenses/MIT
*/
use \Carbon\Carbon;

/*
 * Usage {{ date_calc method="subYears" value="5" }}
 * Where method is one of the following
 *     addYears
 *     addYear
 *     subYears
 *     subYear
 *     addMonths
 *     addMonth
 *     subMonths
 *     subMonth
 *     addWeeks
 *     addWeek
 *     subWeeks
 *     subWeek
 *     addDays
 *     addDay
 *     subDays
 *     subDay
 *     addWeekdays
 *     addWeekday
 *     subWeekdays
 *     subWeekday
 *     addHours
 *     addHour
 *     subHours
 *     subHour
 *     addMinutes
 *     addMinute
 *     subMinutes
 *     subMinute
 *     addSeconds
 *     addSecond
 *     subSeconds
 *
 * And value is the offset number
 *
 * This add-on also will take any standard Statamic modifiers
 *
 */     

class Plugin_date_calc extends Plugin
{
   var $meta = array(
      'name'       => 'Date Calculation',
      'version'    => '1.0.0',
      'author'     => 'Rudy Affandi',
      'author_url' => 'https://github.com/lesaff/'
   );

    public function index()
    {
        $calc_method  = $this->fetchParam("method");
        $calc_value   = $this->fetchParam("value");
        $format       = $this->fetchParam('format', 'Y-m-d', null, FALSE, FALSE);

        if (isset($calc_method) && isset($calc_value)){
            $current_date  = Carbon::now()->$calc_method($calc_value)->format($format);
        }

        return $current_date;
    }
}