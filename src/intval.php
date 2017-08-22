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

$benchmark->test('(int)', function() {
    $v = (int) 10;
});

//     [2017-08-22 09:52:03.686052] Benchmarking '(int)' with 1000 iterations
//     [2017-08-22 09:52:03.686098] Test #1 of 5
//     [2017-08-22 09:52:03.686262] Test #1 Duration: 1.32 ms
//     [2017-08-22 09:52:03.686286] Test #2 of 5
//     [2017-08-22 09:52:03.686429] Test #2 Duration: 1.33 ms
//     [2017-08-22 09:52:03.686439] Test #3 of 5
//     [2017-08-22 09:52:03.686565] Test #3 Duration: 1.19 ms
//     [2017-08-22 09:52:03.686574] Test #4 of 5
//     [2017-08-22 09:52:03.686700] Test #4 Duration: 1.18 ms
//     [2017-08-22 09:52:03.686708] Test #5 of 5
//     [2017-08-22 09:52:03.686834] Test #5 Duration: 1.18 ms
//     [2017-08-22 09:52:03.686846] Avg. '(int)' test duration: 1.24 ms

$benchmark->test('intval()', function() {
    $v = intval(10);
});

//     [2017-08-22 09:52:03.686857] Benchmarking 'intval()' with 1000 iterations
//     [2017-08-22 09:52:03.686866] Test #1 of 5
//     [2017-08-22 09:52:03.687076] Test #1 Duration: 1.97 ms
//     [2017-08-22 09:52:03.687095] Test #2 of 5
//     [2017-08-22 09:52:03.687249] Test #2 Duration: 1.45 ms
//     [2017-08-22 09:52:03.687259] Test #3 of 5
//     [2017-08-22 09:52:03.687417] Test #3 Duration: 1.49 ms
//     [2017-08-22 09:52:03.687427] Test #4 of 5
//     [2017-08-22 09:52:03.687590] Test #4 Duration: 1.14 ms
//     [2017-08-22 09:52:03.687601] Test #5 of 5
//     [2017-08-22 09:52:03.687718] Test #5 Duration: 1.12 ms
//     [2017-08-22 09:52:03.687723] Avg. 'intval()' test duration: 1.43 ms