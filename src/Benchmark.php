<?php

namespace Benchmarks;

class Benchmark
{
    private $numberOfTests;

    // @var int
    private $benchmarkSize;

    public function __construct(int $numberOfTests, int $benchmarkSize)
    {
        $this->numberOfTests = $numberOfTests > 0 ? $numberOfTests : 1;
        $this->benchmarkSize = $benchmarkSize;
    }

    public function test($title, callable $test)
    {
        $this->log("Benchmarking '{$title}' with {$this->benchmarkSize} iterations");

        $totalTime = 0;
        for ($testNumber = 1; $testNumber <= $this->numberOfTests; $testNumber++) {
            print "\n";
            $this->log(sprintf("Test #%s of %s", str_pad($testNumber, intdiv($this->numberOfTests, 10), '0', STR_PAD_LEFT), $this->numberOfTests));
            $start = microtime(true);

            for ($i = 0; $i < $this->benchmarkSize; $i++) {
                call_user_func($test);
            }

            $duration = microtime(true) - $start;
            $this->log(sprintf("Test #%s Duration: %.2f ms", $testNumber, $duration * 10000));
            $totalTime += $duration;
        }

        print "\n";
        $this->log(sprintf("Avg. '%s' test duration: %.2f ms", $title, 10000 * $totalTime / $this->numberOfTests));
        print "\n";
    }

    private function log($message)
    {
        $date = new \DateTime();
        print sprintf("[%s] %s\n", $date->format('Y-m-d H:i:s.u'), $message);
    }
}