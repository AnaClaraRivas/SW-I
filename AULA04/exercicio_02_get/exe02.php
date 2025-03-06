<?php
    $num01 = $_GET['num01'];
    $num02 = $_GET['num02'];
    $num03 = $_GET['num03'];

    if ($num01 > $num02 and $num01 > $num03) {
        echo "$num01 é o maior numero!";
    }
    if ($num02 > $num01 and $num02 > $num03) {
        echo "$num02 é o maior numero!";
    }
    if ($num03 > $num01 and $num03 > $num02) {
        echo "$num03 é o maior numero!";
    }
?>