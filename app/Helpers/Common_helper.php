<?php
/**
 * Maximum length of a file path.
 * Global - change here to reflect everywhere.
 */
const MaxFilePath = 1024;


function changeDateFormat($date, $format)
{
    try {
        return \Carbon\Carbon::parse($date)->format($format);
    } catch (Exception $e) {
        return false;
    }

    // DateTime::createFromFormat($from, $date)->format($to);
}

function changeTimeFormat($time, $format)
{
    try {
        return \Carbon\Carbon::parse($time)->format($format);
    } catch (Exception $e) {
        return false;
    }

}

function timeFormat24To12($time = '')
{
    try {
        return date("g:i a", strtotime($time));;
    } catch (Exception $e) {
        return false;
    }
}




function getAllUserList()
{
    try {
        $userList = App\User::all();
    } catch (Exception $e) {
        $userList = [];
    }
    return $userList;
}

function getAge($date1 = '', $date2 = '')
{
    // $date1 = "2007-03-24";
    // $date2 = "2009-06-26";
    try {
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
    } catch (Exception $e) {
        $years = 1;
    }

    return $years;
    // printf("%d years, %d months, %d days\n", $years, $months, $days);
}

function getSetting($type='')
{
    $details = App\Models\Setting::where('type',$type)->first();
    try {
        return json_decode($details->details);
    } catch (Exception $e) {
        return false;
    }

}
function get_child($id='')
{
    $details = App\Category::where('parent_id',$id)->get();
    try {
        return $details;
    } catch (Exception $e) {
        return false;
    }

}
function get_max_pos($id='')
{
    $details = App\Category::select("max('position') as max_pos")->get();
    try {
        return $details;
    } catch (Exception $e) {
        return false;
    }

}

function getLogo($value='')
{
    if(\Storage::exists('/logos/logo.png')) {
        $file_path = \Storage::url('/app/logos/logo.png');
        return url($file_path);
    }
    return false;
}




