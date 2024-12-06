<?php
function RadToDeg($rad) {
    return $rad * (180 / pi());
}
echo(RadToDeg(3));
?>