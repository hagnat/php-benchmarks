<?php

namespace Benchmarks;

require_once __DIR__ . '/../vendor/autoload.php';

use Benchmarks\Benchmark;

// compares if there is a difference between the usage of (int) and intval()

$benchmark = new Benchmark(5, 1000);

// tests executed on a
//
// MacBook Pro (Retina, 13-inch, Early 2015)
// Processor 2,7 GHz Intel Core i5
// Memory 8 GB 1867 MHz DDR3
//
// PHP 7.1.1 (cli) (built: Jan 21 2017 05:37:38) ( NTS )

$benchmark->test('$x = abs($x)', function() {
    $x = rand(-100, 100);
    $x = abs($x);
});

//     [2017-08-22 09:50:05.041820] Benchmarking '$x = abs($x)' with 1000 iterations
//     [2017-08-22 09:50:05.041868] Test #1 of 5
//     [2017-08-22 09:50:05.042201] Test #1 Duration: 3.10 ms
//     [2017-08-22 09:50:05.042222] Test #2 of 5
//     [2017-08-22 09:50:05.042480] Test #2 Duration: 2.27 ms
//     [2017-08-22 09:50:05.042497] Test #3 of 5
//     [2017-08-22 09:50:05.042729] Test #3 Duration: 2.23 ms
//     [2017-08-22 09:50:05.042739] Test #4 of 5
//     [2017-08-22 09:50:05.042968] Test #4 Duration: 2.22 ms
//     [2017-08-22 09:50:05.042977] Test #5 of 5
//     [2017-08-22 09:50:05.043206] Test #5 Duration: 2.21 ms
//     [2017-08-22 09:50:05.043221] Avg. '$x = abs($x)' test duration: 2.41 ms

$benchmark->test('if($x < 0) $x = $x * -1;', function() {
    $x = rand(-100, 100);
    if($x < 0) $x = $x * -1;
});

//     [2017-08-22 09:50:05.043233] Benchmarking 'if($x < 0) $x = $x * -1;' with 1000 iterations
//     [2017-08-22 09:50:05.043242] Test #1 of 5
//     [2017-08-22 09:50:05.043503] Test #1 Duration: 2.49 ms
//     [2017-08-22 09:50:05.043513] Test #2 of 5
//     [2017-08-22 09:50:05.043760] Test #2 Duration: 2.24 ms
//     [2017-08-22 09:50:05.043777] Test #3 of 5
//     [2017-08-22 09:50:05.044003] Test #3 Duration: 2.17 ms
//     [2017-08-22 09:50:05.044013] Test #4 of 5
//     [2017-08-22 09:50:05.044237] Test #4 Duration: 2.17 ms
//     [2017-08-22 09:50:05.044246] Test #5 of 5
//     [2017-08-22 09:50:05.044470] Test #5 Duration: 2.16 ms
//     [2017-08-22 09:50:05.044479] Avg. 'if($x < 0) $x = $x * -1;' test duration: 2.25 ms

$benchmark->test('$x *= $x < 0 ? -1 : 1;', function() {
    $x = rand(-100, 100);
    $x *= $x < 0 ? -1 : 1;
});

//     [2017-08-22 09:50:05.044489] Benchmarking '$x *= $x < 0 ? -1 : 1;' with 1000 iterations
//     [2017-08-22 09:50:05.044498] Test #1 of 5
//     [2017-08-22 09:50:05.044776] Test #1 Duration: 2.68 ms
//     [2017-08-22 09:50:05.044786] Test #2 of 5
//     [2017-08-22 09:50:05.045031] Test #2 Duration: 2.35 ms
//     [2017-08-22 09:50:05.045048] Test #3 of 5
//     [2017-08-22 09:50:05.045285] Test #3 Duration: 2.29 ms
//     [2017-08-22 09:50:05.045295] Test #4 of 5
//     [2017-08-22 09:50:05.045530] Test #4 Duration: 2.27 ms
//     [2017-08-22 09:50:05.045538] Test #5 of 5
//     [2017-08-22 09:50:05.045774] Test #5 Duration: 2.28 ms
//     [2017-08-22 09:50:05.045783] Avg. '$x *= $x < 0 ? -1 : 1;' test duration: 2.37 ms

$benchmark->test('$x = max($x, -$x);', function() {
    $x = rand(-100, 100);
    $x = max($x, -$x);
});

//     [2017-08-22 09:50:05.045793] Benchmarking '$x = max($x, -$x);' with 1000 iterations
//     [2017-08-22 09:50:05.045802] Test #1 of 5
//     [2017-08-22 09:50:05.046084] Test #1 Duration: 2.74 ms
//     [2017-08-22 09:50:05.046093] Test #2 of 5
//     [2017-08-22 09:50:05.046362] Test #2 Duration: 2.63 ms
//     [2017-08-22 09:50:05.046371] Test #3 of 5
//     [2017-08-22 09:50:05.046639] Test #3 Duration: 2.60 ms
//     [2017-08-22 09:50:05.046648] Test #4 of 5
//     [2017-08-22 09:50:05.046952] Test #4 Duration: 2.83 ms
//     [2017-08-22 09:50:05.046968] Test #5 of 5
//     [2017-08-22 09:50:05.047259] Test #5 Duration: 2.82 ms
//     [2017-08-22 09:50:05.047275] Avg. '$x = max($x, -$x);' test duration: 2.72 ms