<?php
namespace Skybluesofa\OnThisDay\Data\Region\En\Us\Month;

use Skybluesofa\OnThisDay\Data\Contract\Month;
use Carbon\Carbon;

class May extends Month {
    public static $recurringEvents = [];

    public static $specificDateEvents = [];

    public static $specificDateHolidays = [];

    public static $configurationEvents = [
    	"second Sundays of May %y" => ["Mother's Day"],
    ];

    public static $configurationHolidays = [];

    public static $recurringAdvancedConfigurationEvents = [];

    public static $recurringAdvancedConfigurationHolidays = [];
}
