<?php
require_once('./TrainSet.php');
try {
    $train = new TrainSet('Pociag', 'P');
    // $train = new TrainSet('P', 'T');
} catch(Exception $e) {
    echo $e->getMessage();
}
?>