<?php
$max = 500;
$mems = array();
$mems[] = memory_get_peak_usage();
$time_start = microtime(true);
$dll = new SplDoublyLinkedList();
$mems[] = memory_get_peak_usage();
foreach(range(0,$max - 1) as $n) {
    $mems[] = memory_get_peak_usage();
    $dll->push($n);
}
$mems[] = memory_get_peak_usage();
$time_end = microtime(true);
$el = $time_end - $time_start;
echo "AVG: " . (array_sum($mems)/count($mems)) . "\n";
echo "DEV: " . stats_absolute_deviation($mems) . "\n";
echo "MAX: " . max($mems) . "\n";
echo "TIME: $el\n";
