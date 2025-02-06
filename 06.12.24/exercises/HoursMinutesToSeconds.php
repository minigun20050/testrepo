<?php
function hoursMinutesToSeconds($hours, $minutes) {
    if ($minutes < 60) {
        $seconds = ($hours * 3600 + $minutes * 60);
    } else {
        $newHours = $minutes / 60;
        $newMinutes = $minutes % 60;
        $totalHours = $newHours + $hours;
        $seconds = ($totalHours * 3600 + $newMinutes * 60);
    }
    return $seconds;
}
echo hoursMinutesToSeconds(20, 300);
?>