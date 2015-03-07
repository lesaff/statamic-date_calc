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
 * @version    1.2.0
*/

/*
 Usage {{ date_calc method="subYears" value="5" }}

 If no parameters are set, it will just return the current date and time.

 Available parameters:
 
 start_date
 Accepts standard PHP date/time format (http://php.net/manual/en/function.date.php).
 Defaults to current date/time in standard PHP format (Y-m-d H:i:s)

 method
 The following calculation type are available
     addYears
     addYear
     subYears
     subYear
     addMonths
     addMonth
     subMonths
     subMonth
     addWeeks
     addWeek
     subWeeks
     subWeek
     addDays
     addDay
     subDays
     subDay
     addWeekdays
     addWeekday
     subWeekdays
     subWeekday
     addHours
     addHour
     subHours
     subHour
     addMinutes
     addMinute
     subMinutes
     subMinute
     addSeconds
     addSecond
     subSeconds
 
 value
 Arbitrary value based on the method. It could be 6 weeks, 6 days, 6 hours, 6 minutes etc.

 format
 Accepts standard PHP date/time format (http://php.net/manual/en/function.date.php).
 Defaults to current date/time in standard PHP format (Y-m-d H:i:s)
 
 This add-on also will take any standard Statamic modifiers
 *
 */     

use \Carbon\Carbon;

class Plugin_date_calc extends Plugin
{
    var $meta = array(
        'name'       => 'Date Calculation',
        'version'    => '1.2.0',
        'author'     => 'Rudy Affandi',
        'author_url' => 'https://github.com/lesaff/'
    );

    public function index()
    {
        $start_date   = $this->fetchParam("start_date", Carbon::now(), NULL, FALSE, FALSE);
        $calc_method  = $this->fetchParam("method", "now", NULL, FALSE, FALSE);
        $calc_value   = $this->fetchParam("value", NULL, NULL, FALSE, FALSE);
        $format       = $this->fetchParam("format", "Y-m-d H:i:s", NULL, FALSE, FALSE);

        $sanitized_date = new Carbon($start_date);

        return $sanitized_date->$calc_method($calc_value)->format($format);
    }
}