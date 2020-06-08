<?php

namespace drmonkeyninja;

class Average2
{
    /**
     * Calculate the mean average
     * @param array $numbers Array of numbers
     * @return float Mean average
     */
    public function mean2(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }

    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function median2(array $numbers)
    {
        sort($numbers);
        $size = count($numbers);
        if ($size % 2) {
            return $numbers[$size / 2];
        } else {
            return $this->mean2(
                array_slice($numbers, ($size / 2) - 1, 2)
            );
        }
    }
}
