# Date/Time Calculation Add-on for Statamic
By Rudy Affandi (2014)
Version 1.0.0

## Installation
Copy the 'date_calc' folder to the '_add-ons' folder in your Statamic website.

## How to use

```
 {{ date_calc method="subYears" value="5" }}
```

### Available methods
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

And value is the offset number

## Modifiers
You can modify the output using the Statamic standard [variable modifiers](http://statamic.com/learn/documentation/variable-modifiers).