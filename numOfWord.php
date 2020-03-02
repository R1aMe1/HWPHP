<?php
require 't.php';
$s = array_filter(mb_split ($r, mb_strtoupper($t))) ;
$a = array_count_values($s);
foreach ($a as $k => $v)
    echo "{$k} : {$v}\n";
echo count($s)," ",count($a);
