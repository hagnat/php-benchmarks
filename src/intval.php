<?php

namespace Benchmarks;

require_once __DIR__ . '/../vendor/autoload.php';

use Benchmarks\Benchmark;

// compares if there is a difference between the usage of (int) and intval()

$benchmark = new Benchmark(5, 10e6);

// tests executed on a
//
// MacBook Pro (Retina, 13-inch, Early 2015)
// Processor 2,7 GHz Intel Core i5
// Memory 8 GB 1867 MHz DDR3
//
// PHP 7.1.1 (cli) (built: Jan 21 2017 05:37:38) ( NTS )

$benchmark->test('(int)', function() {
    $v = (int) 10;
});

// [2017-08-22 09:06:51.997279] Benchmarking '(int)' with 10000000 iterations
// [2017-08-22 09:06:51.997325] Test #1 of 5
// [2017-08-22 09:06:53.023332] Test #1 Duration: 1.03 sec
// [2017-08-22 09:06:53.023363] Test #2 of 5
// [2017-08-22 09:06:54.039776] Test #2 Duration: 1.02 sec
// [2017-08-22 09:06:54.039801] Test #3 of 5
// [2017-08-22 09:06:55.072749] Test #3 Duration: 1.03 sec
// [2017-08-22 09:06:55.072775] Test #4 of 5
// [2017-08-22 09:06:56.072512] Test #4 Duration: 1.00 sec
// [2017-08-22 09:06:56.072537] Test #5 of 5
// [2017-08-22 09:06:57.103015] Test #5 Duration: 1.03 sec
// [2017-08-22 09:06:57.103048] Avg. '(int)' test duration: 1.02 sec

$benchmark->test('intval()', function() {
    $v = intval(10);
});

// [2017-08-22 09:06:57.103058] Benchmarking 'intval()' with 10000000 iterations
// [2017-08-22 09:06:57.103065] Test #1 of 5
// [2017-08-22 09:06:58.294053] Test #1 Duration: 1.19 sec
// [2017-08-22 09:06:58.294080] Test #2 of 5
// [2017-08-22 09:06:59.480390] Test #2 Duration: 1.19 sec
// [2017-08-22 09:06:59.480416] Test #3 of 5
// [2017-08-22 09:07:00.663458] Test #3 Duration: 1.18 sec
// [2017-08-22 09:07:00.663484] Test #4 of 5
// [2017-08-22 09:07:01.892593] Test #4 Duration: 1.23 sec
// [2017-08-22 09:07:01.892620] Test #5 of 5
// [2017-08-22 09:07:03.090555] Test #5 Duration: 1.20 sec
// [2017-08-22 09:07:03.090578] Avg. 'intval()' test duration: 1.20 sec