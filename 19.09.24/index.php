<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $temp = 123c;
    $skala = 'c'  // c|k
    switch ($skala) {
        case '123c':
            $temp + 273.15;
            break;
        
        default:
            echo 'Smth went wrong';
            break;
    }
        // $a = 1;
        // $b = 2;
        // $c = 3;
        // if (($a < $b) and ($a < $c) and ($b < $c)) {
        //     echo $a, ' < ', $b, ' < ', $c;
        // }
        //     $maxnum = 100;
        //     $minnum = 1;
        //     $oddnums = [];
        // for ($minnum < $maxnum; $minnum++) { 
        //     $minnum % 2
        // }
        // $monthnum = 1;
        // switch ($monthnum) {
        //     case '1':
        //         echo 'January';
        //         break;
        //     case '2':
        //         echo 'February';
        //         break;
        //     case '3':
        //         echo 'March';
        //         break;
        //     case '4':
        //         echo 'April';
        //         break;
        //     case '5':
        //         echo 'May';
        //         break;
        //     case '6':
        //         echo 'June';
        //         break;
        //     case '7':
        //         echo 'July';
        //         break;
        //     case '8':
        //         echo 'August';
        //         break;
        //     case '9':
        //         echo 'September';
        //         break;
        //     case '10':
        //         echo 'October';
        //         break;
        //     case '11':
        //         echo 'November';
        //         break;
        //     case '12':
        //         echo 'December';
        //         break;
        //     default:
        //         echo 'Month should be 1-12';
        //         break;
        // }

    ?>
</body>
</html>