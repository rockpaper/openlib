<?php

/**
 * Utils class - Provides common utility functions
 * 
 * @copyright RockPaper Team
 * @license MIT http://www.opensource.org/licenses/mit-license.php
 * @package Openlib
 */
class Utils
{
    
	/**
     * Get time elapsed since a timestamp/date
     * @param timestamp | a valid date format $old_time
     * @param type $convert_to_timestamp optional default true If true, the passed value will be converted to timestamp
     * @return string Eg: 2 seconds
     */
	public static function get_time_since($old_time, $convert_to_timestamp = true)
    {
        if ($convert_to_timestamp)
        {
            $stamp = time() - strtotime($old_time);
        }
        else
        {
            $stamp = time() - $old_time;
        }
        
        $seconds = gmdate('s', $stamp);
        $minutes = gmdate('i', $stamp);
        $hours = gmdate('H', $stamp);
        $days = gmdate('d', $stamp);
        $months = gmdate('n', $stamp);
        $years = gmdate('Y', $stamp);
        
        if ($years < 1970)
        {
            $long_time = date('Y') - 1970;
            return "more than ".$long_time." years ";
        }
        
        $years = $years - 1970;
        
        if ($stamp < 60)
        {
            $time_string = (int)$seconds." seconds ";
        }
        elseif ($stamp < 60*60)
        {
            $time_string = (int)$minutes." minutes ";
        }
        elseif ($stamp < 60*60*24)
        {
            $time_string = (int)$hours." hours ";
        }
        elseif ($stamp < 60*60*24*30)
        {
            $time_string = (int)$days." days ";
        }
        elseif ($stamp < 60*60*24*30*365)
        {
            $time_string =  (int)$months." months ";
        }
        elseif ($stamp >= 60*60*24*365)
        {
            $time_string = (int)$years." years ";
        }

        return trim($time_string, " ");
    }
    
	
	
	/**
	 * Trim the given string at the specified length
	 * @param string $string String to be trimmed
	 * @param number $length Length at which the string to be trimmed
	 * @param string $tail An optional string to be appended after the trimmed string. Default: .. (two dots)
	 * 
	 */
	public static function trim_text($string, $length = null, $tail = "..")
	{
	    $tail = (strlen($string) > $length) ? $tail : null;
	    $trimmed_string = isset($length) ? substr($string, 0, $length).$tail : $string;
	    return $trimmed_string;
	}
    
    public static function create_seo_url()
    {
        // TODO
    }
    
    public function format_url()
    {
        // TODO
    }
    
}

?>