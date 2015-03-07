# Date/Time Calculation Add-on for Statamic
By Rudy Affandi (2014)
Version 1.1.0

## Changelog
1.2.0 - Added date input sanitizer, per https://github.com/lesaff/statamic-date_calc/issues/1

1.1.0 - Added start date, added default value to some parameters. Updated documentation

1.0.0 - Initial release

## Installation
Copy the 'date_calc' folder to the '_add-ons' folder in your Statamic website.

## How to use

```
 Usage {{ date_calc start_date="2014-11-16 18:00:00" method="subYears" value="5" format="F d, Y" }}
```
 If no parameters are set, it will just return the current date and time.

 __Available parameters:__
 
 *start_date*

 Accepts standard PHP date/time format (http://php.net/manual/en/function.date.php).
 Defaults to current date/time in standard PHP format (Y-m-d H:i:s)

 *method*

 The following calculation type are available
   - addYears
   - addYear
   - subYears
   - subYear
   - addMonths
   - addMonth
   - subMonths
   - subMonth
   - addWeeks
   - addWeek
   - subWeeks
   - subWeek
   - addDays
   - addDay
   - subDays
   - subDay
   - addWeekdays
   - addWeekday
   - subWeekdays
   - subWeekday
   - addHours
   - addHour
   - subHours
   - subHour
   - addMinutes
   - addMinute
   - subMinutes
   - subMinute
   - addSeconds
   - addSecond
   - subSeconds
 
*value*

Arbitrary value based on the method. It could be 6 weeks, 6 days, 6 hours, 6 minutes etc.

*format*

Accepts standard PHP date/time format (http://php.net/manual/en/function.date.php).
Defaults to current date/time in standard PHP format (Y-m-d H:i:s)
 
## Modifiers
You can modify the output using the Statamic standard [variable modifiers](http://statamic.com/learn/documentation/variable-modifiers).
